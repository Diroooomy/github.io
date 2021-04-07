<?php
include 'database.php';
//获取数据
$Sno = $_POST['Sno'];
$Sname = $_POST['Sname'];
$Ssex = $_POST['Ssex'];
$Sage = $_POST['Sage'];
$Sdept = $_POST['Sdept'];
//执行sql语句
$sql = "update student set Ssex='$Ssex',Sname='$Sname',Sage='$Sage',Sdept='$Sdept' where Sno='$Sno'";

if($conn->query($sql))
{
    echo '更新成功';
    header("refresh:2;url=data.php");
    print('正在加载，请稍等...<br>2秒后自动跳转到首页');
}else{
    echo mysqli_error($conn);
    header("refresh:2;url=data.php");
    print('正在加载，请稍等...<br>2秒后自动跳转到首页');
}