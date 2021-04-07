<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
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
            margin: 0 100px 0 0;
            text-align: right;

        }
        .adds-stu div>input{
            float: center;
            width: 260px;
        }
    </style>
</head>
<body>
    <div class="adds-stu-wrap">
    <h2 class="head" style="text-align:center">信息管理系统</h2>
        <div class="adds-stu">
            <form action="logindo.php" method="post">
            <div>
                <p>用户名:</p>
                <input type="text" name="name" id="" value="">
            </div>
            <div>
                <p>密码:</p>
                <input type="password" name="password" id="" value="">
            </div>
            <div>
            <div align='center'>
            <button>登录</button>
            </div>
            <div align='center'>
                还没有账号？<a href="register.php">立即注册</a>
            </div>
            </form>
        </div>
    </div>    
</body>
</html>