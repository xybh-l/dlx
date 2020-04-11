package online.xybh.dlx.service.impl;

import com.github.pagehelper.PageHelper;
import online.xybh.dlx.dto.NoticeDTO;
import online.xybh.dlx.mapper.NoticeMapper;
import online.xybh.dlx.mapper.UserMapper;
import online.xybh.dlx.model.Notice;
import online.xybh.dlx.model.NoticeExample;
import online.xybh.dlx.model.User;
import online.xybh.dlx.model.UserExample;
import online.xybh.dlx.service.INoticeService;
import org.springframework.beans.BeanUtils;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.ArrayList;
import java.util.List;

/**
 * @Author: XYBH
 * @Description:
 * @Date: Created in 2020/4/9 0009 16:58
 * @Modified:
 */
@Service
public class NoticeServiceImpl implements INoticeService {
    @Autowired
    private UserMapper userMapper;
    @Autowired
    private NoticeMapper noticeMapper;

    @Override
    public List<Notice> queryAllNotice(int page, int size){
        NoticeExample noticeExample = new NoticeExample();
        noticeExample.setOrderByClause("gmt_create desc");
        PageHelper.startPage(page, size);
        return noticeMapper.selectByExample(noticeExample);
    }
    @Override
    public List<NoticeDTO> queryNoticeList(int page, int size) {
        ArrayList<NoticeDTO> noticeDTOList = new ArrayList<>();
        List<Notice> notices = queryAllNotice(page, size);
        for (Notice notice : notices) {
            User user = userMapper.selectByPrimaryKey(notice.getCreator());
            NoticeDTO noticeDTO = new NoticeDTO();
            BeanUtils.copyProperties(notice, noticeDTO);
            noticeDTO.setUser(user);
            noticeDTOList.add(noticeDTO);
        }
        return noticeDTOList;
    }

    @Override
    public void createNotice(String email, String notice, Integer isPrivate) {
        UserExample userExample = new UserExample();
        userExample.createCriteria().andEmailEqualTo(email);
        List<User> user = userMapper.selectByExample(userExample);
        User loginUser = user.get(0);
        Notice newNotice = new Notice();
        newNotice.setGmtCreate(System.currentTimeMillis());
        newNotice.setGmtModify(newNotice.getGmtCreate());
        newNotice.setLikeCount(0);
        newNotice.setCommentCount(0);
        newNotice.setCreator(loginUser.getId());
        newNotice.setInfo(notice);
        newNotice.setIsPrivate(isPrivate);
        noticeMapper.insert(newNotice);
    }
}
