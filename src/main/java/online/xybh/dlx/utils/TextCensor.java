package online.xybh.dlx.utils;

import com.alibaba.fastjson.JSON;
import okhttp3.*;
import org.springframework.context.annotation.Bean;
import org.springframework.stereotype.Component;

import java.io.IOException;
import java.io.UnsupportedEncodingException;
import java.net.URLEncoder;

/**
 * @Author: XYBH
 * @Description:
 * @Date: Created in 2020/4/10 0010 10:10
 * @Modified:
 */
@Component
public class TextCensor {
    public static String send(String context) {
        MediaType mediaType = MediaType.get("application/x-www-form-urlencoded;");
        OkHttpClient client = new OkHttpClient();
        RequestBody body = null;
        try {
            body = RequestBody.create(mediaType, URLEncoder.encode(context,"utf8"));
        } catch (UnsupportedEncodingException e) {
            e.printStackTrace();
        }
        Request request = new Request.Builder()
                .url("https://aip.baidubce.com/rest/2.0/solution/v1/text_censor/v2/user_defined")
                .post(body)
                .build();
        try (Response response = client.newCall(request).execute()) {
            String string = response.body().string();
            System.out.println(string);
            return string;
        } catch (Exception e) {
            e.printStackTrace();
        }
        return null;
    }

}
