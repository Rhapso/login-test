<?php 
    header("Content-Type: text/html; charset=utf8");

    if(!isset($_POST['submit'])){
        exit("错误执行");
    }//判断是否有submit操作

    $name=$_POST['name'];//post获取表单里的name
    $password=$_POST['password'];//post获取表单里的password

    include('connect.php');//链接数据库
    
    $q="insert into user(id,username,password) values (null,'$name','$password')";//向数据库插入表单传来的值的sql
    echo $q;
    if ($conn->query($q) === TRUE) {
        echo "注册成功";//成功输出注册成功
    } else {
        echo "创建数据表错误: " . $conn->error;
    }

    $conn->close();//关闭数据库
?>