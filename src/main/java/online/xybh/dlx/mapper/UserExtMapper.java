package online.xybh.dlx.mapper;

import online.xybh.dlx.model.User;
import online.xybh.dlx.model.UserExample;

/**
 * @Author: XYBH
 * @Description:
 * @Date: Created in 2020/4/10 0010 17:57
 * @Modified:
 */
public interface UserExtMapper {
    User selectByUserNameAndEmail(User record);
}
