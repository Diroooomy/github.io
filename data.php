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
    <title>学生信息表</title>
</head>
<body>
    <h2 style="float:left;width:100%;margin-top:50px; text-align:center">学生信息管理中心</h2>
    <div style="text-align:center">
    <a href="adds.php" style="padding:3px;font-size:16px;background-color:greenyellow">添加学生信息</a>
    共有<?php echo mysqli_num_rows($result); ?>个学生信息
    </div>
    <table style="margin-top:60px" align="center" width="60%" border="" cellspacing="0" cellpadding="0">
        <tr><th>Sno</th><th>Sname</th><th>Ssex</th><th>Sage</th><th>Sdept</th><th>操作</th></tr>
        <?php 
            if(mysqli_num_rows($result) > 0){
                while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td align="center"><?php echo  $row['Sno'];  ?></td>
            <td align="center"><?php echo  $row['Sname'];  ?></td>
            <td align="center"><?php echo  $row['Ssex'];  ?></td>
            <td align="center"><?php echo  $row['Sage'];  ?></td>
            <td align="center"><?php echo  $row['Sdept'];  ?></td>
            <td align="center">
                <a href="edit.php?Sno=<?php echo  $row['Sno'];  ?>" style="color:forestgreen">修改</a> | <a href="javascript:del_sure(<?php echo  $row['Sno'];  ?>)" style="color:crimson">删除</a>
            </td>
        </tr>
        <?php   
             }
            }
        ?>
    </table>
    <script>
        function del_sure(Sno){//形参
        if(confirm("确认删除吗") ==true){
            window.location.href="delete.php?Sno="+Sno;
        }else{
            return ;
        }
      }
    </script>
</body>
</html>