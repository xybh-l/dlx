<?php
session_start();
header("Content-Type: text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/28 0028
 * Time: 22:46
 */

$action = $_REQUEST['action'];
$username = trim($_REQUEST['user']);
$password = trim($_REQUEST['pwd']);
$email = trim($_REQUEST['email']);
$method = $_REQUEST['method'];
$regtime = time();

require 'new_conn.php';
if ($method == null) {
    $json['status_code'] = '200';
    $json['message'] = '非正常访问';
    echo $json_encode($json, JSON_UNESCAPED_UNICODE);
} else if ($method == "注册") {
    $usernameSql = "select * from user where username = '$username'";
    $result = $conn->query($usernameSql);
    if ($result->num_rows != 0) {
        $json['status_code'] = 200;
        $json['message'] = '用户名已存在';
        echo json_encode($json, JSON_UNESCAPED_UNICODE);
        return;
    }
    $sql = "INSERT INTO user(username,password,email,regdate) VALUES ('$username', '$password', '$email', $regtime)";
    if ($conn->query($sql) === TRUE) {
        $json['status_code'] = 200;
        $json['message'] = '注册成功';
        echo json_encode($json, JSON_UNESCAPED_UNICODE);
    }
    $conn->close();
} else if ($method == "登录") {
    $userSql = "select * from user where username = '$username' and password = '$password'";
    $res = $conn->query($userSql);
    $user = mysqli_fetch_assoc($res);
    if ($res->num_rows) {
        $json['status_code'] = 200;
        $json['message'] = '登录成功';
        $_SESSION['username'] = $username;
        $_SESSION['auth'] = $user['auth'];
        $_SESSION['sid'] = session_id();
        setcookie('username',$_SESSION['username']);
        echo json_encode($json, JSON_UNESCAPED_UNICODE);
        return;
    } else {
        $json['status_code'] = 200;
        $json['message'] = '用户或密码错误';
        echo json_encode($json, JSON_UNESCAPED_UNICODE);
    }
} else if ($method == '注销') {
    unset($_SESSION['username']);
    unset($_SESSION['auth']);
    $json['status_code'] = 200;
    $json['message'] = '注销成功';
    setcookie('username','');
    echo $json_encode($json, JSON_UNESCAPED_UNICODE);
} else {
    $json['message'] = 'error';
    echo json_encode($json, JSON_UNESCAPED_UNICODE);
}

?>