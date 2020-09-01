<?php
include 'database.php';
$id = $_GET['id'];

$sql = "delete from myguests where id = $id"; //根据id删除
if($conn->query($sql))
{
    echo '成功删除'.mysqli_affected_rows($conn).'条数据';
    header("refresh:1;url=index.php");
    print('正在加载，请稍等...<br>1秒后自动跳转到首页');
}else {
    echo '删除失败'.mysqli_affected_rows($conn).'条数据';
    header("refresh:1;url=index.php");
    print('正在加载，请稍等...<br>1秒后自动跳转到首页');
}
$sql = "alter table myguests drop id;";
$conn->query($sql);
$sql = "ALTER TABLE myguests ADD id INT NOT NULL PRIMARY KEY AUTO_INCREMENT FIRST;";
$conn->query($sql);