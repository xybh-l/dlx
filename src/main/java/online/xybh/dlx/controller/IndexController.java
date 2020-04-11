package online.xybh.dlx.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;

/**
 * @Author: XYBH
 * @Description:
 * @Date: Created in 2020/2/11 0011 6:27
 * @Modified:
 */
@Controller
public class IndexController {
    @RequestMapping("/index")
    public String index(Model model){
        model.addAttribute("nowPage","index");
        return "index";
    }
}
