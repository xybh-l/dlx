<?php
header("Content-Type: text/html;charset=utf-8");
    $user = $_POST["username"];
    $psw = $_POST["password"];
    if($user == "" || $psw == "")
    {
        echo "<script>alert('用户名或密码不能为空'); history.go(-1);</script>";
    }
    else
    {
        // $link = mysqli_connect('localhost:3306','root','root','world');
        $link = mysqli_connect('uf6p7e0s.2379lan.dnstoo.com', 'atjzglj_f', 'u760ohzz', 'atjzglj');
        $b = mysqli_query($link,"SET NAMES utf8");  
        //$link = mysqli_connect('uf6p7e0s.2379lan.dnstoo.com', 'atjzglj_f', 'u760ohzz', 'atjzglj');
        $sql = "select username,password from user where username = '$user' and password = '$psw'";
        $result = mysqli_query($link,$sql);
        $num = mysqli_num_rows($result);
        if($num)
        {
            // $row = mysql_fetch_array($result);	
            // echo $row[0];
            header("location:http://study.lanwang.online/index.html");
        }
        else
        {
            echo "<script>alert('用户名或密码不正确');history.go(-1);</script>";
        }
    }

?>
