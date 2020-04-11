package online.xybh.dlx.utils;

/**
 * @Author: XYBH
 * @Description:
 * @Date: Created in 2020/4/9 0009 2:12
 * @Modified:
 */
import org.springframework.stereotype.Component;

import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;
import java.util.UUID;

@Component
public class MD5Generator
{
    private static final char[] HEX_CODE = "0123456789abcdef".toCharArray();

    public String generateValue(){
        return generateValue(UUID.randomUUID().toString());
    }

    public static String toHexString(byte[] data)
    {
        if (data == null) {
            return null;
        }
        StringBuilder r = new StringBuilder(data.length * 2);
        byte[] arrayOfByte = data; int j = data.length; for (int i = 0; i < j; i++) { byte b = arrayOfByte[i];
        r.append(HEX_CODE[(b >> 4 & 0xF)]);
        r.append(HEX_CODE[(b & 0xF)]);
    }
        return r.toString();
    }

    public String generateValue(String param) {
        try {
            MessageDigest algorithm;
            algorithm = MessageDigest.getInstance("MD5");
            algorithm.reset();
            algorithm.update(param.getBytes());
            byte[] messageDigest = algorithm.digest();
            return toHexString(messageDigest);

        } catch (NoSuchAlgorithmException e) {
            throw new RuntimeException(e);
        }
    }
}