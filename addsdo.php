<?php
include 'database.php';
$type = $_POST['type'];
$Cno = $_POST['Cno'];
$Cpno = $_POST['Cpno'];
$Ccredit = $_POST['Ccredit'];
$Cname = $_POST['Cname'];
$Grade = $_POST['Grade'];
$Sno = $_POST['Sno'];
$Sname = $_POST['Sname'];
$Ssex = $_POST['Ssex'];
$Sage = $_POST['Sage'];
$Sdept = $_POST['Sdept'];
switch ($type) {
    case 'student':
        $sql = "insert into student values ('$Sno','$Sname','$Ssex','$Sage','$Sdept')";
        break;
    case 'course':
        if (strlen($Cpno) != 0)
            $sql = "insert into course values ('$Cno','$Cname','$Cpno','$Ccredit')";
        else
            $sql = "insert into course(Cno, Cname, Ccredit) values ('$Cno','$Cname','$Ccredit')";
        break;
    case 'sc':
        $sql = "insert into sc values ('$Sno','$Cno','$Grade')";
}
if ($conn->query($sql)) {
    echo '插入成功';
    header("refresh:2;url=data.php");
    print('正在加载，请稍等...<br>1秒后自动跳转到首页');
} else {
    echo mysqli_error($conn);
    header("refresh:30;url=data.php");
}

