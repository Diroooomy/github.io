<?php
include 'database.php';
//获取数据

$name = $_POST['name'];
$password = $_POST['password'];

$sql = "insert into user values ('$name','$password');";
if($conn->query($sql))
{
        echo '注册成功';
}
header("refresh:2;url=login.php");
print('正在加载，请稍等...<br>2秒后自动跳转到登录页面');
// }
// else{
//     echo '用户已存在，请重新输入';
//     header("refresh:2;url=register.php");
//     print('正在加载，请稍等...<br>2秒后自动跳转到登录页面');
        
// }