package online.xybh.dlx.controller;

import com.github.pagehelper.PageInfo;
import online.xybh.dlx.model.New;
import online.xybh.dlx.service.INewsService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;

import java.util.List;

/**
 * @Author: XYBH
 * @Description:
 * @Date: Created in 2020/3/18 0018 20:24
 * @Modified:
 */
@Controller
public class NewsController {
    @Autowired
    private INewsService newsService;
    @RequestMapping("/news")
    public String index(Model model){
        List<List<New>> lists = newsService.queryNewsList(1, 3);
        model.addAttribute("newslist",lists);
        return "news";
    }

    @GetMapping("/news/{type}")
    public String forward(@PathVariable("type")String type,
                          @RequestParam(value = "page",defaultValue = "0")Integer page,
                          @RequestParam(value = "size",defaultValue = "10")Integer size,
                          Model model){
        List<New> newsList = newsService.queryNewsListByType(type,page,size);
        if (newsList == null){
            return "redirect:/news";
        }
        PageInfo<New> pageInfo = new PageInfo<>(newsList);
        model.addAttribute(pageInfo);
        return "news/newslist";
    }
}
