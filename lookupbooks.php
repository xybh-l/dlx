<?php
if(isset($_POST["submit"]) && $_POST["submit"] == "查询书籍")
{
    $bookname = $_POST["bookname"];
    if($user == "")
    {
       history.go(-1);
    }
    else
    {
        $link = mysqli_connect('localhost', 'root', 'root', 'lostthing');
        mysqli_query($link,"set names 'utf-8'");
        $sql = "select bookname from books where bookname = '$_POST[bookname]'";
        $result = mysql_query($sql);
        $num = mysql_num_rows($result);
        if($num)
        {
            // $row = mysql_fetch_array($result);	
            // echo $row[0];
           // header("location:http://study.lanwang.online/index.html");
            echo "<script>alert('查询成功!');</script>";
           //header("location:")
           
        }
        else
        {
             echo "<script>alert('未查询到书籍');history.go(-1);</script>";
        }
    }
}
else
{
    echo "<script>alert('提交未成功'); history.go(-1);</script>";
}

?>
