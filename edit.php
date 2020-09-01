<?php
include 'database.php';
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql = "select * from myguests where id=$id";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改学生信息</title>
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
</head>
<body>
    <div class="adds-stu-wrap">
    <h2 class="head" style="text-align:center">修改学生信息</h2>
        <div class="adds-stu">
            <form action="editdo.php" method="post">
                <?php 
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                ?>
            <div>
                <p>姓名:</p>
                <input type="text" name="name" id="" value="<?php echo  $row['name'];  ?>">
            </div>
            <div>
                <p>性别:</p>
                <span>
                男:<input type="radio" 
                <?php
                    if($row['sex'] == "男"){ //sex=1 就加check
                        echo 'checked';
                    }else{
                        echo '';
                    }      
                ?>  name="sex" value="男" id="">&nbsp;&nbsp;&nbsp;
                女:<input
                <input type="radio" 
                <?php
                    if($row['sex'] == "女"){ //sex=0 就加check
                        echo 'checked';
                    }else{
                        echo '';
                    }          
                ?>
                type="radio" name="sex" value="女" id="" >
                </span>
            </div>
            <div>
                <p>年龄:</p>
                <input type="text" name="age" id="" value="<?php echo  $row['age'];  ?>">
                <input type="hidden" name="id" id="" value="<?php echo  $row['id'];  ?>">
            </div>
            <div>
                <p>居住城市:</p>
                <input type="text" name="city" id="" value="<?php echo  $row['city'];  ?>">
            </div>
            <div>
            <div>
            <button>提交</button>
            </div>
            <?php 
            }
                }else
                {
                    echo '暂无数据';
                }
            }
                ?>
            </form>
        </div>
    </div>    
</body>
</html>