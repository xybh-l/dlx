package online.xybh.dlx.service;

import online.xybh.dlx.dto.NoticeDTO;
import online.xybh.dlx.model.Notice;
import org.springframework.stereotype.Service;

import java.util.List;

/**
 * @Author: XYBH
 * @Description:
 * @Date: Created in 2020/4/9 0009 16:58
 * @Modified:
 */
public interface INoticeService {
    List<NoticeDTO> queryNoticeList(int page, int size);
    List<Notice> queryAllNotice(int page, int size);
    void createNotice(String email, String notice, Integer isPrivate);
}
