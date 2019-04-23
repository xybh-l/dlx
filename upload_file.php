<?php
header("Content-Type: text/html;charset=utf-8");
// if ((($_FILES["file"]["type"] == "image/gif")
// || ($_FILES["file"]["type"] == "image/jpg")
// || ($_FILES["file"]["type"] == "image/pjpeg"))
// && ($_FILES["file"]["size"] < 20000))
//   {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
    $filename = $_FILES["file"]["name"];   
    if (file_exists("lostthingpic/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "lostthingpic/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "lostthingpic/" . $_FILES["file"]["name"];
      }
    }
//   }
// else
//   {
//   echo "Invalid file";
//   }
  $name = $_POST["name"];
  $contact = $_POST["contact"];
  $situation = $_POST["situation"];
if ($name == "" || $contact == "") {
      echo "<script>alert('请检查数据完整性!'); history.go(-1);</script>";
  } else {
    $link = mysqli_connect('uf6p7e0s.2379lan.dnstoo.com', 'atjzglj_f', 'u760ohzz', 'atjzglj');
    $a = $mysqli_query($link,"SET NAMES utf8");
    if($link)
    $res_insert = mysqli_query($link,"insert into lost(name,contact,situation,lostthingpic) values('$name','$contact','$situation','$filename')");
    //  $res_insert = mysqli_query($link,"insert into lost(name,contact,situation) values('$_POST[name]','$_POST[contact]','$_POST[situation]')");
           //$num_insert = mysql_num_rows($res_insert);
           if ($res_insert) {
               echo "<script>alert('提交成功!'); history.go(-1);</script>";
           } else {
               echo "<script>alert('服务器繁忙!');</script>"; //history.go(-1);</script>";
           }
          }
?>
