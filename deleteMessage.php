<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/1 0001
 * Time: 16:22
 */

$messgaeID = $_REQUEST['messageID'];


require 'new_conn.php';


$deleteSql = 'Delete from guestbook where id = "'.$messgaeID.'";';

if ($conn->query($deleteSql)){
    $json['status_code'] = 200;
    $json['message'] = '删除成功!';
    echo json_encode($json,JSON_UNESCAPED_UNICODE);
}
else die($conn->error);

