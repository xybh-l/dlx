package online.xybh.dlx.service;

import online.xybh.dlx.model.User;

import java.util.Map;

/**
 * @Author: XYBH
 * @Description:
 * @Date: Created in 2020/2/11 0011 7:58
 * @Modified:
 */

public interface IUserService {
    Map<String, Object> createUser(String username, String password, String email);

    User checkUser(User user);

    User checkUser(String email);
}
