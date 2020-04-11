package online.xybh.dlx.service;

import online.xybh.dlx.model.New;

import java.util.List;

/**
 * @Author: XYBH
 * @Description:
 * @Date: Created in 2020/3/18 0018 21:01
 * @Modified:
 */
public interface INewsService {
    List<List<New>> queryNewsList(Integer page, Integer size);

    List<New> queryNewsListByType(String type, Integer page, Integer size);
}
