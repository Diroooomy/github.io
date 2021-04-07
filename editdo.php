<?php
include 'database.php';
//获取数据
$type = $_POST['type'];
$Sno = $_POST['Sno'];
$Cno = $_POST['Cno'];
$Cname = $_POST['Cname'];
$Cpno = $_POST['Cpno'];
$Ccredit = $_POST['Ccredit'];
$Sname = $_POST['Sname'];
$Ssex = $_POST['Ssex'];
$Sage = $_POST['Sage'];
$Sdept = $_POST['Sdept'];
$Grade = $_POST['Grade'];

//执行sql语句
switch ($type) {
    case 'student':
        $sql = "update student set Ssex='$Ssex',Sname='$Sname',Sage='$Sage',Sdept='$Sdept' where Sno='$Sno'";
        break;
    case 'course':
        $sql = "update course set Cname='$Cname',Cpno='$Cpno',Ccredit='$Ccredit' where Cno='$Cno'";
        break;
    case 'sc':
        $sql = "update sc set Grade=$Grade where Sno='$Sno' and Cno='$Cno'";
}

if($conn->query($sql))
{
    echo '更新成功';
    header("refresh:2;url=data.php");
    print('正在加载，请稍等...<br>2秒后自动跳转到首页');
}else{
    echo mysqli_error($conn);
    header("refresh:50;url=data.php");
    print('正在加载，请稍等...<br>2秒后自动跳转到首页');
}