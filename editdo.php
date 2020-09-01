<?php
include 'database.php';
//获取数据
$id = $_POST['id'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$city = $_POST['city'];
//执行sql语句
$sql = "update myguests set sex='$sex',name='$name',age='$age',city='$city' where id=$id";

if($conn->query($sql))
{
    echo '更新成功';
    header("refresh:2;url=index.php");
    print('正在加载，请稍等...<br>2秒后自动跳转到首页');
}else{
    echo '没有数据';
    header("refresh:2;url=index.php");
    print('正在加载，请稍等...<br>2秒后自动跳转到首页');
}