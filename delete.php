<?php
include 'database.php';
$type = $_GET['type'];
$Sno = $_GET['Sno'];
$Cno = $_GET['Cno'];
switch ($type) {
    case 'student':
        $sql = "delete from student where Sno = '$Sno'"; //根据id删除
        break;
    case 'course':
        $sql = "delete from course where Cno = '$Cno'"; //根据id删除
        break;
    case 'sc':
        $sql = "delete from sc where Sno = '$Sno' and Cno = '$Cno'"; //根据id删除
        break;
}
if($conn->query($sql))
{
    echo '成功删除'.mysqli_affected_rows($conn).'条数据';
    header("refresh:1;url=data.php");
    print('正在加载，请稍等...<br>1秒后自动跳转到首页');
}else {
    echo mysqli_error($conn);
    header("refresh:3;url=data.php");
}
