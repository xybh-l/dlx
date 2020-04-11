package online.xybh.dlx.service.impl;

import com.github.pagehelper.PageHelper;
import online.xybh.dlx.mapper.NewMapper;
import online.xybh.dlx.model.New;
import online.xybh.dlx.model.NewExample;
import online.xybh.dlx.service.INewsService;
import org.springframework.stereotype.Service;

import javax.annotation.Resource;
import java.util.LinkedList;
import java.util.List;

/**
 * @Author: XYBH
 * @Description:
 * @Date: Created in 2020/3/18 0018 21:02
 * @Modified:
 */
@Service
public class NewsServiceImpl implements INewsService {
    @Resource
    public NewMapper newsMapper;
    @Override
    public List<List<New>> queryNewsList(Integer page, Integer size) {
        NewExample newExample1 = new NewExample();
        NewExample newExample2 = new NewExample();
        NewExample newExample3 = new NewExample();
        NewExample newExample4 = new NewExample();
        List<List<New>> NewList = new LinkedList<>();
        //校级新闻
        newExample1.createCriteria()
                .andTypeEqualTo(0);
        newExample1.setOrderByClause("id DESC");
        PageHelper.startPage(page,size);
        List<New> schoolNews = newsMapper.selectByExample(newExample1);
        NewList.add(schoolNews);
        //院级新闻
        newExample2.createCriteria()
                .andTypeEqualTo(1);
        newExample2.setOrderByClause("id DESC");
        PageHelper.startPage(page,size);
        List<New> collegeNews = newsMapper.selectByExample(newExample2);
        NewList.add(collegeNews);
        //学校通知
        newExample3.createCriteria()
                .andTypeEqualTo(2);
        newExample3.setOrderByClause("id DESC");
        PageHelper.startPage(page,size);
        List<New> schoolNotice = newsMapper.selectByExample(newExample3);
        NewList.add(schoolNotice);
        //校园影像
        newExample4.createCriteria()
                .andTypeEqualTo(3);
        newExample4.setOrderByClause("id DESC");
        PageHelper.startPage(page,size);
        List<New> schoolView = newsMapper.selectByExample(newExample4);
        NewList.add(schoolView);
        return NewList;
    }

    @Override
    public List<New> queryNewsListByType(String type, Integer page, Integer size) {
        int newsType;
        if ("SchoolNews".equals(type)) {
            newsType = 0;
        } else if ("CollegeNews".equals(type)) {
            newsType = 1;
        } else if ("SchoolNotice".equals(type)) {
            newsType = 2;
        } else if ("CampusScenery".equals(type)) {
            newsType = 3;
        } else {
            return null;
        }
        NewExample newExample = new NewExample();
        newExample.createCriteria()
                .andTypeEqualTo(newsType);
        newExample.setOrderByClause("id DESC");
        PageHelper.startPage(page,size);
        List<New> news = newsMapper.selectByExample(newExample);
        return news;
    }
}
