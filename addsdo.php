<?php
include 'database.php';
$name = $_POST['name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$city = $_POST['city'];
$sql = "alter table myguests auto_increment=1;";
$conn->query($sql);
$sql = "insert into myguests values (null,'$sex','$name','$age','$city');";
if($conn->query($sql))
{
    echo '插入成功';
}else{
    echo '没有数据';
}
    header("refresh:1;url=index.php");
    print('正在加载，请稍等...<br>1秒后自动跳转到首页');