package online.xybh.dlx.controller;

import com.github.pagehelper.PageInfo;
import online.xybh.dlx.dto.NoticeDTO;
import online.xybh.dlx.model.Notice;
import online.xybh.dlx.model.User;
import online.xybh.dlx.service.INoticeService;
import online.xybh.dlx.service.IUserService;
import online.xybh.dlx.utils.AipContextCensor;
import online.xybh.dlx.utils.AuthToken;
import online.xybh.dlx.utils.CookiesUtil;
import online.xybh.dlx.utils.JedisUtils;
import org.json.JSONObject;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.util.StringUtils;
import org.springframework.web.bind.annotation.CookieValue;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;

import javax.servlet.http.Cookie;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

/**
 * @Author: XYBH
 * @Description:
 * @Date: Created in 2020/2/11 0011 6:49
 * @Modified:
 */
@Controller
public class NoticeController {
    @Autowired
    private INoticeService noticeService;
    @Autowired
    private IUserService userService;
    @Autowired
    private JedisUtils jedisUtils;

    @RequestMapping("notice")
    @AuthToken
    public String index(Model model,
                        @RequestParam(value = "page", defaultValue = "0") Integer page,
                        @RequestParam(value = "size", defaultValue = "6") Integer size,
                        HttpServletRequest request) {
        model.addAttribute("nowPage", "notice");
        List<NoticeDTO> notice = noticeService.queryNoticeList(page, size);
        List<Notice> noticePage = noticeService.queryAllNotice(page, size);
        PageInfo<NoticeDTO> notices = new PageInfo<>(notice);
        PageInfo<Notice> pageInfo = new PageInfo<>(noticePage);
        model.addAttribute("pageInfo",pageInfo);
        model.addAttribute("notices", notices);

        Cookie token = CookiesUtil.getCookieByName(request, "token");
        if (token != null) {
            String email = jedisUtils.get(token.getValue());
            User user = new User();
            user.setEmail(email);
            if (email != null) {
                User loginUser = userService.checkUser(email);
                HttpSession session = request.getSession();
                session.setAttribute("user", loginUser);
            }
        }
        return "notice";
    }

    @AuthToken
    @ResponseBody
    @RequestMapping("notice/create")
    public Map<String, Object> create(@CookieValue("token") String token,
                                      @RequestParam("notice") String notice,
                                      @RequestParam("isPrivate") Integer isPrivate) {
        String email = jedisUtils.get(token);
        HashMap<String, Object> res = new HashMap<>();
        if (!StringUtils.isEmpty(email)){
            JSONObject textCensor = AipContextCensor.send(notice);
            String conclusion = (String) textCensor.get("conclusion");
            if ("合规".equals(conclusion)){
                noticeService.createNotice(email, notice, isPrivate);
                res.put("statusCode",200);
                res.put("message","发送成功!");
            }else {
                res.put("statusCode",200);
                res.put("message","含有敏感词汇!");
            }

        }else {
            res.put("statusCode",403);
            res.put("message","验证异常!");
        }
        return res;
    }
}
