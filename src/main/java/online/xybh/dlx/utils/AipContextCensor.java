package online.xybh.dlx.utils;

import com.baidu.aip.contentcensor.AipContentCensor;
import org.json.JSONObject;

/**
 * @Author: XYBH
 * @Description:
 * @Date: Created in 2020/4/10 0010 10:32
 * @Modified:
 */
public class AipContextCensor {
    //设置APPID/AK/SK
    public static final String APP_ID = "19353282";
    public static final String API_KEY = "yHTSqjIKTt1OO2S2bBA8wH4l";
    public static final String SECRET_KEY = "gdhq1qgdOrlIRSul07hued0phXwGGlxv";

    public static JSONObject send(String text){
        AipContentCensor client = new AipContentCensor(APP_ID, API_KEY, SECRET_KEY);
        // 可选：设置网络连接参数
        client.setConnectionTimeoutInMillis(2000);
        client.setSocketTimeoutInMillis(60000);
        JSONObject response = client.textCensorUserDefined(text);
        return response;
    };
}
