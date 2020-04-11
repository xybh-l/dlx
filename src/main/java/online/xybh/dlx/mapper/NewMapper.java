package online.xybh.dlx.mapper;

import java.util.List;
import online.xybh.dlx.model.New;
import online.xybh.dlx.model.NewExample;
import org.apache.ibatis.annotations.Param;

public interface NewMapper {
    long countByExample(NewExample example);

    int deleteByExample(NewExample example);

    int deleteByPrimaryKey(Long id);

    int insert(New record);

    int insertSelective(New record);

    List<New> selectByExample(NewExample example);

    New selectByPrimaryKey(Long id);

    int updateByExampleSelective(@Param("record") New record, @Param("example") NewExample example);

    int updateByExample(@Param("record") New record, @Param("example") NewExample example);

    int updateByPrimaryKeySelective(New record);

    int updateByPrimaryKey(New record);
}