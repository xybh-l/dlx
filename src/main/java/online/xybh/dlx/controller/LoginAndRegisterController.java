package online.xybh.dlx.controller;

import online.xybh.dlx.model.User;
import online.xybh.dlx.service.IUserService;
import online.xybh.dlx.service.impl.UserServiceImpl;
import online.xybh.dlx.utils.AuthToken;
import online.xybh.dlx.utils.MD5Generator;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Value;
import org.springframework.stereotype.Controller;
import org.springframework.util.StringUtils;
import org.springframework.web.bind.annotation.*;
import redis.clients.jedis.Jedis;

import javax.servlet.http.HttpServletRequest;
import java.util.HashMap;
import java.util.Map;

/**
 * @Author: XYBH
 * @Description:
 * @Date: Created in 2020/4/9 0009 0:07
 * @Modified:
 */
@Controller
public class LoginAndRegisterController {

    private Map<String, Object> res = new HashMap<>();

    private static final int TOKEN_EXPIRE_TIME = 50000;

    @Value("${redis.server}")
    private String redisServer;

    @Value("${redis.port}")
    private Integer redisPort;
    @Autowired
    private IUserService userService;


    @RequestMapping("login")
    public String login() {
        return "login";
    }

    @AuthToken
    @GetMapping("register")
    public String sign() {
        return "register";
    }

    @PostMapping("check")
    @ResponseBody
    public Map<String, Object> check(@RequestParam("password") String password,
                                     @RequestParam("email") String email,
                                     HttpServletRequest request) {
        User user = new User();
        user.setEmail(email);
        user.setPassword(password);
        User loginUser = userService.checkUser(user);
        if (loginUser != null) {
            Jedis jedis = new Jedis("127.0.0.1", 6379);
            String token = MD5Generator.toHexString(email.getBytes());
            jedis.set(email, token);
            //设置key生存时间，当key过期时，它会被自动删除，时间是秒
            jedis.expire(email, TOKEN_EXPIRE_TIME);
            jedis.set(token, email);
            jedis.expire(token, TOKEN_EXPIRE_TIME);
            jedis.set(email + token, loginUser.getUsername());
            jedis.expire(email + token, TOKEN_EXPIRE_TIME);
            long currentTime = System.currentTimeMillis();
            jedis.set(token + email, Long.toString(currentTime));

            //用完关闭
            jedis.close();
            res.put("statusCode", 200);
            res.put("message", "登录成功");
            res.put("token", token);
        } else {
            res.put("statusCode", 200);
            res.put("message", "登录失败");
        }
        return res;
    }

    @PostMapping("registerUser")
    @ResponseBody
    public Map<String, Object> registerUser(@RequestParam("username") String username,
                                        @RequestParam("email") String email,
                                        @RequestParam("password") String password) {
        Map<String,Object> res = new HashMap<>();
        if (StringUtils.isEmpty(username)||StringUtils.isEmpty(email)||StringUtils.isEmpty(password)){
            res.put("statusCode",500);
            res.put("message","非法访问");
            return res;
        }
        res = userService.createUser(username, password, email);
        return res;
    }
}
