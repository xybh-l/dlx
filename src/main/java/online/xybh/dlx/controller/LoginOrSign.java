package online.xybh.dlx.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

/**
 * @Author: XYBH
 * @Description:
 * @Date: Created in 2020/2/11 0011 8:27
 * @Modified:
 */
@Controller
public class LoginOrSign {
    @RequestMapping("sign-login")
    public String index(){
        return "LoginAndSignup";
    }
}
