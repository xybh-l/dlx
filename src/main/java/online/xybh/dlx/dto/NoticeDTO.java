package online.xybh.dlx.dto;

import lombok.Data;
import online.xybh.dlx.model.User;

/**
 * @Author: XYBH
 * @Description:
 * @Date: Created in 2020/4/9 0009 16:31
 * @Modified:
 */
@Data
public class NoticeDTO {
    private Long id;
    private String info;
    private Long gmtCreate;
    private Long gmtModified;
    private Long creator;
    private Integer commentCount;
    private Integer likeCount;
    private User user;
    private Integer isPrivate;
}