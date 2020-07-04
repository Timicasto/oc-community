<?php
include('./link.php');

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$email = $_POST['email'];

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

$sql = "INSERT INTO member(username, regtime, password, email) VALUES ('$username', '$time', '$password', '$email')";
$r = mysqli_query($link, $sql);

if($r){
    /* 使用SESSION */
    //SESSION-注册成功后自动登录
    $user_id = mysqli_insert_id($link); 
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['user_id'] = $user_id;
    $_SESSION['email'] = $email;

    echo '恭喜你，注册成功！<a href="ui/main.html">返回主页</a>';
}else{
    echo '注册失败，请再来一次或联系管理员！<a href="ui/main.html">返回发帖</a>';
}
