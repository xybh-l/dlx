package online.xybh.dlx.service.impl;

import online.xybh.dlx.mapper.UserExtMapper;
import online.xybh.dlx.model.User;
import online.xybh.dlx.mapper.UserMapper;
import online.xybh.dlx.model.UserExample;
import online.xybh.dlx.service.IUserService;
import org.springframework.beans.factory.annotation.Value;
import org.springframework.stereotype.Service;

import javax.annotation.Resource;
import java.util.HashMap;
import java.util.Map;

/**
 * @Author: XYBH
 * @Description:
 * @Date: Created in 2020/2/11 0011 8:01
 * @Modified:
 */
@Service
public class UserServiceImpl implements IUserService {
    @Resource
    private UserMapper userMapper;
    @Resource
    private UserExtMapper userExtMapper;

    @Value("${user.defaultImageUrl}")
    private String userDefaultImageUrl;

    @Override
    public Map<String, Object> createUser(String username, String password, String email) {
        HashMap<String, Object> res = new HashMap<>();
        User user = new User();
        user.setUsername(username);
        user.setEmail(email);
        user.setPassword(password);
        User register = userExtMapper.selectByUserNameAndEmail(user);
        if (register != null) {
            if (register.getEmail().equals(email)) {
                res.put("statusCode",200);
                res.put("message","电子邮箱已被注册!");
            }
            if (register.getUsername().equals(username)){
                res.put("statusCode",200);
                res.put("message","昵称已被注册!");
            }
        }else {
            user.setGmtCreate(System.currentTimeMillis());
            user.setGmtModify(System.currentTimeMillis());
            user.setAvatarUrl(userDefaultImageUrl);
            userMapper.insert(user);
            res.put("statusCode",200);
            res.put("message","注册成功");
        }
        return res;
    }

    @Override
    public User checkUser(User loginUser) {
        UserExample userExample = new UserExample();
        userExample.createCriteria()
                .andEmailEqualTo(loginUser.getEmail())
                .andPasswordEqualTo(loginUser.getPassword());
        User user;
        try {
            user = userMapper.selectByExample(userExample).get(0);
        } catch (Exception e) {
            user = null;
        }
        return user;
    }

    @Override
    public User checkUser(String email) {
        UserExample userExample = new UserExample();
        userExample.createCriteria()
                .andEmailEqualTo(email);
        User user;
        try {
            user = userMapper.selectByExample(userExample).get(0);
        } catch (Exception e) {
            user = null;
        }
        return user;
    }
}
