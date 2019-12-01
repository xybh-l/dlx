<?php
header("Content-Type: text/html;charset=utf-8");
// $user = $_POST["username"];
// $psw = $_POST["password"];
// $psw_confirm = $_POST["confirm"];
// $phone = $_POST["phone"];
// if ($user == " " || $psw == " " || $psw_confirm == " "||$phone == " ") {
//     echo "<script>alert('请确认信息完整性!'); history.go(-1);</script>";
//     }
//    else if ($psw == $psw_confirm) {
//         //$link = mysqli_connect("localhost","root","root","world");
//         $link = mysqli_connect('uf6p7e0s.2379lan.dnstoo.com', 'atjzglj_f', 'u760ohzz', 'atjzglj');
//         $b = mysqli_query($link,"SET NAMES utf8");  
//         $sql = "select username from user where username = '$_POST[username]'";  
//         $sql2 = "select phone from user where phone = '$_POST[phone]'"; 
//         $result = mysqli_query($link,$sql);   
//         $result2 = mysqli_query($link,$sql2); 
//         $rows = mysqli_num_rows($link,$result);
//         $phonerows = mysql_num_rows($result2);
//         if ($rows)    
//         {
//             echo "<script>alert('用户已存在'); history.go(-1);</script>";
//         }
//         else if($phonerows)   
//         {
//             echo "<script>alert('手机号已被使用'); history.go(-1);</script>";
//         }
//         else
//         {
//             //设置时区(中国标准时间)
//             date_default_timezone_set('PRC');
//             //时间格式的时间
//             $date = date('Y-m-d H:i:s');
//             $sql_insert = "insert into user (username,password,phone,rtime) values('$_POST[username]','$_POST[password]','$_POST[phone]','$date')";
//             $res_insert = mysqli_query($link, $sql_insert);
//             //$num_insert = mysql_num_rows($res_insert);
//             if ($res_insert) {
//                 echo "<script>alert('注册成功'); history.go(-1);</script>";
//             } else {
//                 echo "<script>alert('系统繁忙,请稍候!');</sctipt>history.go(-1);</script>";
//             }
//         }
//     } else {
//         echo "<script>alert('密码不一致'); history.go(-1);</script>";
$username = $_POST['username'];
$password = $_POST['password'];
//注册信息判断
if (!preg_match('/^[\w\x80-\xff]{3,15}$/', $username)) {
    exit('错误：用户名不符合规定。<a href="javascript:history.back(-1);">返回</a>');
}
if (strlen($password) < 6) {
    exit('错误：密码长度不符合规定。<a href="javascript:history.back(-1);">返回</a>');
}
//包含数据库连接文件
include('conn.php');
//检测用户名是否已经存在
$check_query = mysql_query("select id from user where username='$username' limit 1");
if (mysql_fetch_array($check_query)) {
    echo '错误：用户名 ', $username, ' 已存在。<a href="javascript:history.back(-1);">返回</a>';
    exit;
}
//写入数据
$password = MD5($password);
$regdate = time();
$sql = "INSERT INTO user(username,password,regdate)VALUES('$username','$password',$regdate)";
if (mysql_query($sql, $conn)) {
    exit('用户注册成功！点击此处 <a href="login.html">登录</a>');
} else {
    echo '抱歉！添加数据失败：', mysql_error(), '<br />';
    echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
}
?>
}