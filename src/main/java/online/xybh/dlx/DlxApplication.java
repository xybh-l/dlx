package online.xybh.dlx;

import org.mybatis.spring.annotation.MapperScan;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

@SpringBootApplication
@MapperScan("online.xybh.dlx.mapper")
public class DlxApplication {

    public static void main(String[] args) {
        SpringApplication.run(DlxApplication.class, args);
    }

}
