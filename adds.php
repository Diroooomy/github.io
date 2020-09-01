<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加学生信息</title>
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
    <h2 class="head" style="text-align:center">添加学生信息</h2>
        <div class="adds-stu">
            <form action="addsdo.php" method="post">
                <div>
                    <p>姓名:</p>
                    <input type="text" name="name" id="">
                </div>
                <div>
                    <p>性别:</p>
                    <span>
                    男:<input type="radio" checked='checked' name="sex" value="男" id="">&nbsp;&nbsp;&nbsp;
                    女:<input type="radio" name="sex" value="女" id="" >
                    </span>
                </div>
                <div>
                    <p>年龄:</p>
                    <input type="text" name="age" id="">
                </div>
                <div>
                    <p>居住城市:</p>
                    <input type="text" name="city" id="">
                </div>
                <div align="center" >
                    <button>提交</button>
                </div>
            </form>
            <a href="index.php">返回</a>
        </div>
    </div>    
</body>
</html>