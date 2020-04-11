package online.xybh.dlx.interceptor;

import lombok.extern.slf4j.Slf4j;
import net.minidev.json.JSONObject;
import online.xybh.dlx.utils.AuthToken;
import online.xybh.dlx.utils.CookiesUtil;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Value;
import org.springframework.data.relational.core.sql.In;
import org.springframework.stereotype.Component;
import org.springframework.web.method.HandlerMethod;
import org.springframework.web.servlet.HandlerInterceptor;
import org.springframework.web.servlet.ModelAndView;
import redis.clients.jedis.Jedis;

import javax.annotation.Resource;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.io.IOException;
import java.io.PrintWriter;
import java.lang.reflect.Method;
import java.util.HashMap;
import java.util.Objects;

/**
 * @Author: XYBH
 * @Description:
 * @Date: Created in 2020/4/9 0009 2:38
 * @Modified:
 */
@Slf4j
@Component
public class AuthorizationInterceptor implements HandlerInterceptor {

    private static final int TOKEN_EXPIRE_TIME = 50000;
    private static final int TOKEN_RESET_TIME = 30000;

    @Value("${redis.server}")
    private String redisServer;

    @Value("${redis.port}")
    private Integer redisPort;

    /**
     * 存放鉴权信息的Header名称，默认是token
     */
    private String httpHeaderName = "token";

    /**
     * 鉴权失败后返回的错误信息，默认为401 unauthorized
     */
    private String unauthorizedErrorMessage = "401 unauthorized";

    /**
     * 鉴权失败后返回的HTTP错误码，默认为401
     */
    private int unauthorizedErrorCode = HttpServletResponse.SC_UNAUTHORIZED;

    /**
     * 存放登录用户模型Key的Request Key
     */
    public static final String REQUEST_CURRENT_KEY = "REQUEST_CURRENT_KEY";

    @Override
    public boolean preHandle(HttpServletRequest request, HttpServletResponse response, Object handler) throws ServletException, IOException {
        if (!(handler instanceof HandlerMethod)) {
            return true;
        }
        HandlerMethod handlerMethod = (HandlerMethod) handler;
        Method method = handlerMethod.getMethod();

        // 如果打上了AuthToken注解则需要验证token
        if (method.getAnnotation(AuthToken.class) != null || handlerMethod.getBeanType().getAnnotation(AuthToken.class) != null) {
            String token = null;
            if (CookiesUtil.getCookieByName(request, "token") != null) {
                token = Objects.requireNonNull(CookiesUtil.getCookieByName(request, "token")).getValue();
            }
            log.info("Get token from request is {} ", token);
            String email = "";
            Jedis jedis = new Jedis(redisServer, redisPort);
            if (token != null && token.length() != 0) {
                email = jedis.get(token);
                log.info("Get email from Redis is {}", email);
            }
            if (email != null && !"".equals(email.trim())) {
                String username = jedis.get(email + token);
                long tokeBirthTime = Long.parseLong(jedis.get(token + email));
                log.info("token Birth time is: {}", tokeBirthTime);
                long diff = System.currentTimeMillis() - tokeBirthTime;
                log.info("token is exist : {} ms", diff);
                if (diff > TOKEN_RESET_TIME) {
                    jedis.expire(email, TOKEN_EXPIRE_TIME);
                    jedis.expire(token, TOKEN_EXPIRE_TIME);
                    jedis.expire(email + token, TOKEN_EXPIRE_TIME);
                    log.info("Reset expire time success!");
                    long newBirthTime = System.currentTimeMillis();
                    jedis.set(token + email, Long.toString(newBirthTime));
                }
                //用完关闭
                jedis.close();
                CookiesUtil.setCookie(response, "username", username);
                return true;
            } else {
                CookiesUtil.setCookie(response, "token", "", 0);
                CookiesUtil.setCookie(response, "username", "",0);
            }
        }
        return true;
    }

    @Override
    public void postHandle(HttpServletRequest request, HttpServletResponse response, Object handler, ModelAndView modelAndView) throws Exception {

    }

    @Override
    public void afterCompletion(HttpServletRequest request, HttpServletResponse response, Object handler, Exception ex) throws Exception {

    }
}
