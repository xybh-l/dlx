<?php
//header("Content-type: text/html; charset=utf-8");

ini_set('date.timezone', 'Asia/Shanghai');
error_reporting(E_ALL ^ E_DEPRECATED);
$conn = mysql_connect("uf6p7e0s.2379lan.dnstoo.com", 'atjzglj_f', 'u760ohzz');
if (!$conn) {
    die("连接数据库失败: " . mysql_error($conn));
}

mysql_select_db("atjzglj", $conn);
//读库
mysql_query("set character set 'utf-8'");
//写库
mysql_query("set names 'utf-8'");
