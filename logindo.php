<?php
include 'database.php';
//获取数据

$name = $_POST['name'];
$password = $_POST['password'];

//执行sql语句
$sql = "select * from user where name='$name';";
$result = mysqli_query($conn,$sql);
if(is_null($result))
{
    echo '不存在该用户 ';
    header("refresh:1;url=login.php");
    print('正在加载，请稍等...<br>1秒后自动跳转到登录页面');
}
else{
    while($row = mysqli_fetch_array($result))
    {
        if ($row['password']==$password) {
            echo  "欢迎你 " . $row['name'];
            header("refresh:1;url=index.php");
            print('正在加载，请稍等...<br>1秒后自动跳转到首页');
        }
        else{
            echo '密码不正确，请重新输入';
            header("refresh:1;url=login.php");
            print('正在加载，请稍等...<br>1秒后自动跳转到登录页面');
        }
    }
    // echo '密码不正确，请重新输入';
    // header("refresh:2;url=login.php");
    // print('正在加载，请稍等...<br>2秒后自动跳转到登录页面');
}
