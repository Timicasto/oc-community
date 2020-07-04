<?php
include('./link.php');

//第一步：接收数据
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$email = $_POST['email'];

//第二步：验证数据有效性
if($password!=$password2){
    echo '两次输入的密码不一致！请重新输入！';exit;
}
if( mb_strlen($username,'utf-8')<2 || mb_strlen($username,'utf-8')>16 ){
    echo '请输入2~12字之间的用户名！';exit;
}
if( strlen($password)<6 ){
    echo '密码不能少于6位数！';exit;
}
$time = $showtime=date("Y-m-d H:i:s");
$password = md5($password);

//第三步：构造SQL语句，实现注册用户功能（向member数据表插入一条数据）
$sql = "INSERT INTO member(username, regtime, password, email) VALUES ('$username', '$time', '$password', '$email')";
$r = mysqli_query($link, $sql);

//第四步：结果处理
if($r){
    /* 使用SESSION */
    //SESSION-注册成功后自动登录
    $user_id = mysqli_insert_id($link); //获取最近一条插入进数据库的数据的ID
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['user_id'] = $user_id;
    $_SESSION['email'] = $email;

    echo '恭喜你，注册成功！<a href="./new.php">返回发帖</a>';
}else{
    echo '注册失败，请再来一次或联系管理员！<a href="./new.php">返回发帖</a>';
}