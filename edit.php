<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .adds-stu-wrap{
            width: 700px;
            height: auto;
            margin: 0 auto;
            margin-top: 100px;
           
        }
        .adds-stu{
            float: left;
            width: 100%;
            height: auto;
            background-color: #eee;
            padding: 15px 10px;
        }
        .adds-stu div{
            float: left;
            width: 100%;
            margin-bottom: 20px;
        }
        .adds-stu div>p{
            float: left;
            width: 100px;
            margin: 0 10px 0 0;
            text-align: right;

        }
        .adds-stu div>input{
            float: left;
            width: 260px;
        }
    </style>
<?php
include 'database.php';
$type = $_GET['type'];
switch ($type) {
    case 'student': 
        $Sno = $_GET['Sno'];
        $sql = "select * from student where Sno=$Sno";
        $result = $conn->query($sql);
        ?>
        <title>修改学生信息</title>
</head>
<body>
    <div class="adds-stu-wrap">
    <h2 class="head" style="text-align:center">修改学生信息</h2>
        <div class="adds-stu">
            <form action="editdo.php" method="post">
                <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
            <div>
                <p>Sno:</p>
                <input type="text" name="Sno" id="" value="<?php echo  $row['Sno']; ?>">
            </div>
            <div>
                <p>Sname:</p>
                <input type="text" name="Sname" id="" value="<?php echo  $row['Sname'];  ?>">
            </div>
            <div>
                <p>Ssex:</p>
                <span>
                男:<input type="radio" 
                <?php
                    if ($row['Ssex'] == "男") { //sex=1 就加check
                        echo 'checked';
                    } else {
                        echo '';
                    } ?>  name="Ssex" value="男" id="">&nbsp;&nbsp;&nbsp;
                女:<input
                <input type="radio" 
                <?php
                    if ($row['Ssex'] == "女") { //sex=0 就加check
                        echo 'checked';
                    } else {
                        echo '';
                    } ?>
                type="radio" name="Ssex" value="女" id="" >
                </span>
            </div>
            <div>
                <p>Sage:</p>
                <input type="text" name="Sage" id="" value="<?php echo  $row['Sage']; ?>">
            </div>
            <div>
                <p>Sdept:</p>
                <input type="text" name="Sdept" id="" value="<?php echo  $row['Sdept']; ?>">
                <input type="hidden" name="type" id="" value="student">
            </div>
            <div>
            <div style="margin-left:30%;">
            <button>提交</button>
            </div>
            <?php
                        }
                    } else {
                        echo '暂无数据';
                    }
                ?>
            </form>
        </div>
    </div>    
</body>
<?php
        break;
    case 'course': 
        $Cno = $_GET['Cno'];
        $sql = "select * from course where Cno=$Cno";
        $result = $conn->query($sql);?>
        <title>修改课程信息</title>
</head>
<body>
    <div class="adds-stu-wrap">
    <h2 class="head" style="text-align:center">修改课程信息</h2>
        <div class="adds-stu">
            <form action="editdo.php" method="post">
                <?php 
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                ?>
            <div>
                <p>课程编号:</p>
                <input type="text" name="Cno" id="" value="<?php echo  $row['Cno'];  ?>">
            </div>
            <div>
                <p>课程名:</p>
                <input type="text" name="Cname" id="" value="<?php echo  $row['Cname'];  ?>">
            </div> 
            <div>
                <p>先修课程:</p>
                <input type="text" name="Cpno" id="" value="<?php echo  $row['Cpno'];  ?>">
            </div>
            <div>
                <p>学分:</p>
                <input type="text" name="Ccredit" id="" value="<?php echo  $row['Ccredit'];  ?>">
                <input type="hidden" name="type" id="" value="course">
            </div>
            <div>
            <div style="margin-left:30%;">
            <button>提交</button>
            </div>
            <?php 
            }
                }else
                    echo '暂无数据';
                ?>
            </form>
        </div>
    </div>    
</body>
<?php
        break;
    case 'sc': 
        $Sno = $_GET['Sno'];
        $Cno = $_GET['Cno'];
        $sql = "select * from sc where Sno=$Sno and Cno=$Cno";
        $result = $conn->query($sql);?>
        <title>修改选课信息</title>
</head>
<body>
    <div class="adds-stu-wrap">
    <h2 class="head" style="text-align:center">修改选课信息</h2>
        <div class="adds-stu">
            <form action="editdo.php" method="post">
                <?php 
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                ?>
            <div>
                <p>Sno:</p>
                <input type="text" name="Sno" id="" value="<?php echo  $row['Sno'];  ?>">
            </div>
            <div>
                <p>Cno:</p>
                <input type="text" name="Cno" id="" value="<?php echo  $row['Cno'];  ?>">
            </div>
            <div>
                <p>Grade:</p>
                <input type="text" name="Grade" id="" value="<?php echo  $row['Grade'];  ?>">
                <input type="hidden" name="type" id="" value="sc">
            </div>
            <div>
            <div style="margin-left:30%;">
            <button>提交</button>
            </div>
            <?php 
            }
                }else
                {
                    echo '暂无数据';
                }
                ?>
            </form>
        </div>
    </div>    
</body>
<?php
        break;
    default:break;
}

?>
</html>