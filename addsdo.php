<?php
include 'database.php';
$Sno = $_POST['Sno'];
$Sname = $_POST['Sname'];
$Ssex = $_POST['Ssex'];
$Sage = $_POST['Sage'];
$Sdept = $_POST['Sdept'];
$sql = "insert into student values ('$Sno','$Sname','$Ssex','$Sage','$Sdept');";
if($conn->query($sql))
{
    echo '插入成功';
}else{
    echo mysqli_error($conn);
}
header("refresh:2;url=data.php");
print('正在加载，请稍等...<br>1秒后自动跳转到首页');