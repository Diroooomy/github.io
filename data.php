<?php
include 'database.php';
$sql = "select * from student";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="jquery.min.js" ></script>
    <title>学生-课程管理中心</title>
</head>
<body>
    <h2 style="float:left;width:100%;margin-top:50px; text-align:center">学生信息管理中心</h2>
    <div style="text-align:center">
    <a href="adds.php?type=student" style="padding:3px;font-size:16px;background-color:greenyellow">添加学生信息</a>
    共有<?php echo mysqli_num_rows($result); ?>个学生信息
    </div>
    <table style="margin-top:40px" align="center" width="60%" border="" cellspacing="0" cellpadding="0">
        <tr><th>Sno</th><th>Sname</th><th>Ssex</th><th>Sage</th><th>Sdept</th><th>操作</th></tr>
        <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
        <tr>
            <td align="center"><?php echo  $row['Sno']; ?></td>
            <td align="center"><?php echo  $row['Sname']; ?></td>
            <td align="center"><?php echo  $row['Ssex']; ?></td>
            <td align="center"><?php echo  $row['Sage']; ?></td>
            <td align="center"><?php echo  $row['Sdept']; ?></td>
            <td align="center">
                <a href="edit.php?Sno=<?php echo  $row['Sno']; ?>&type=student" style="color:forestgreen">修改</a> | <a href="javascript:del_sure(<?php echo  $row['Sno']; ?>,1, 'student')" style="color:crimson">删除</a>
            </td>
        </tr>
        <?php
                }
            }
        ?>
    </table>

    <?php
    include 'database.php';
    $sql = "select * from course";
    $result = $conn->query($sql);
    ?>
    <h2 style="float:left;width:100%;margin-top:50px; text-align:center">课程管理中心</h2>
    <div style="text-align:center">
    <a href="adds.php?type=course" style="padding:3px;font-size:16px;background-color:greenyellow">添加课程信息</a>
    共有<?php echo mysqli_num_rows($result); ?>个课程信息
    </div>
    <table style="margin-top:40px" align="center" width="60%" border="" cellspacing="0" cellpadding="0">
        <tr><th>Cno</th><th>Cname</th><th>Cpno</th><th>Ccredit</th><th>操作</th></tr>
        <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
        <tr>
            <td align="center"><?php echo  $row['Cno']; ?></td>
            <td align="center"><?php echo  $row['Cname']; ?></td>
            <td align="center"><?php echo  $row['Cpno']; ?></td>
            <td align="center"><?php echo  $row['Ccredit']; ?></td>
            <td align="center">
                <a href="edit.php?Cno=<?php echo  $row['Cno']; ?>&type=course" style="color:forestgreen">修改</a> | <a href="javascript:del_sure(1,<?php echo  $row['Cno']; ?>, 'course')" style="color:crimson">删除</a>
            </td>
        </tr>
        <?php
                }
            }
        ?>
    </table>

    <?php
    include 'database.php';
    $sql = "select * from sc";
    $result = $conn->query($sql);
    ?>
    <h2 style="float:left;width:100%;margin-top:50px; text-align:center">学生选课表</h2>
    <div style="text-align:center">
    <a href="adds.php?type=sc" style="padding:3px;font-size:16px;background-color:greenyellow">添加选课信息</a>
    共有<?php echo mysqli_num_rows($result); ?>个选课信息
    </div>
    <table style="margin-top:40px; margin-bottom:100px;" align="center" width="60%" border="" cellspacing="0" cellpadding="0">
        <tr><th>Sno</th><th>Cno</th><th>Grade</th><th>操作</th></tr>
        <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
        <tr>
            <td align="center"><?php echo  $row['Sno']; ?></td>
            <td align="center"><?php echo  $row['Cno']; ?></td>
            <td align="center"><?php echo  $row['Grade']; ?></td>
            <td align="center">
                <a href="edit.php?Sno=<?php echo  $row['Sno']; ?>&Cno=<?php echo  $row['Cno']; ?>&type=sc" style="color:forestgreen">修改</a> | <a href="javascript:del_sure(<?php echo  $row['Sno']; ?>,<?php echo  $row['Cno']; ?>, 'sc')" style="color:crimson">删除</a>
            </td>
        </tr>
        <?php
                }
            }
        ?>
    </table>
    <script>
        function del_sure(Sno,Cno,type){//形参
        if(confirm("确认删除吗") ==true){
            window.location.href="delete.php?Sno="+Sno+"&Cno="+Cno+"&type="+type;
        }else{
            return ;
        }
      }
    </script>
</body>
</html>