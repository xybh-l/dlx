<?php
// header("Content-Type: text/html;charset=utf-8");
//     $user = $_POST["username"];
//     $psw = $_POST["password"];
//     if($user == "" || $psw == "")
//     {
//         echo "<script>alert('用户名或密码不能为空'); history.go(-1);</script>";
//     }
//     else
//     {
//         // $link = mysqli_connect('localhost:3306','root','root','world');
//         $link = mysqli_connect('uf6p7e0s.2379lan.dnstoo.com', 'atjzglj_f', 'u760ohzz', 'atjzglj');
//         $b = mysqli_query($link,"SET NAMES utf8");  
//         //$link = mysqli_connect('uf6p7e0s.2379lan.dnstoo.com', 'atjzglj_f', 'u760ohzz', 'atjzglj');
//         $sql = "select username,password from user where username = '$user' and password = '$psw'";
//         $result = mysqli_query($link,$sql);
//         $num = mysqli_num_rows($result);
//         if($num)
//         {
//             // $row = mysql_fetch_array($result);	
//             // echo $row[0];
//             header("location:http://study.lanwang.online/index.html");
//         }
//         else
//         {
//             echo "<script>alert('用户名或密码不正确');history.go(-1);</script>";
//         }
//     }

?>

<?php
header("Content-Type: text/html;charset=utf-8");
session_start();

//注销登录
if ($_GET['action'] == "logout") {
    unset($_SESSION['userid']);
    unset($_SESSION['username']);
    echo '注销登录成功！点击此处 <a href="login.html">登录</a>';
    exit;
}

//登录
if (!isset($_POST['submit'])) {
    exit('非法访问!');
}
$username = htmlspecialchars($_POST['username']);
$password = MD5($_POST['password']);

//包含数据库连接文件
include('conn.php');
//检测用户名及密码是否正确
$sql = "select id from user where username='$username' and password='$password' limit 1;";
$check_query = mysql_query($sql) or die(mysql_error());
if ($result = mysql_fetch_array($check_query)) {
    //登录成功
    $_SESSION['username'] = $username;
    $_SESSION['userid'] = $result['id'];
    echo $username, ' 欢迎你！进入 <a href="admin.php">管理页面</a><br />';
    echo '点击此处 <a href="login.php?action=logout">注销</a> 登录！<br />';
    exit;
} else {
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}
?>