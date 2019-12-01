<?php
header("Content-Type: text/html;charset=utf-8");
// 禁止非 POST 方式访问
if (!isset($_POST['submit'])) {
    exit('非法访问!');
}
// 表单信息处理
if (get_magic_quotes_gpc()) {
    $nickname = htmlspecialchars(trim($_POST['nickname']));
    $email = htmlspecialchars(trim($_POST['email']));
    $content = htmlspecialchars(trim($_POST['content']));
} else {
    $nickname = addslashes(htmlspecialchars(trim($_POST['nickname'])));
    $email = addslashes(htmlspecialchars(trim($_POST['email'])));
    $content = addslashes(htmlspecialchars(trim($_POST['content'])));
}
if (strlen($nickname) > 16) {
    exit('错误：昵称不得超过16个字符串 [ <a href="javascript:history.back()">返 回</a> ]');
}
if (strlen($nickname) > 60) {
    exit('错误：邮箱不得超过60个字符串 [ <a href="javascript:history.back()">返 回</a> ]');
}

// 数据写入库表
require("./conn.php");
$createtime = time();
$insert_sql = "INSERT INTO guestbook(nickname,email,content,createtime)VALUES";
$insert_sql .= "('$nickname','$email','$content',$createtime)";
mysql_query("SET　NAMES utf8");

if (mysql_query($insert_sql)) {
    $json['status_code'] = 200;
    $json['message'] = '留言成功!';
    echo json_encode($json, JSON_UNESCAPED_UNICODE);
}
?>
<!--    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<!--    <html xmlns="http://www.w3.org/1999/xhtml">-->
<!--    <head>-->
<!--        <meta http-equiv="Content-Type" content="text/html; charset=gb2312">-->
<!--        <meta http-equiv="Refresh" content="2;url=notice.php">-->
<!--        <title>留言成功</title>-->
<!--    </head>-->
<!--    <body>-->
<!--    <div class="refresh">-->
<!--       <p>留言成功！非常感谢您的留言。<br />请稍后，页面正在返回...</p>-->-->
<!--    </div>-->
<!--    </body>-->
<!--    </html>-->
<!--    -->