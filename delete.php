<?php
include 'database.php';
$Sno = $_GET['Sno'];
$sql = "delete from student where Sno = '$Sno'"; //根据id删除
if($conn->query($sql))
{
    echo '成功删除'.mysqli_affected_rows($conn).'条数据';
    header("refresh:1;url=data.php");
    print('正在加载，请稍等...<br>1秒后自动跳转到首页');
}else {
    echo mysqli_error($conn);
    header("refresh:3;url=data.php");
    print('正在加载，请稍等...<br>1秒后自动跳转到首页');
}
