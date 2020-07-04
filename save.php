<?php
try {
//你的代码
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
ini_set('log_errors', 'on');
ini_set('error_log', 'syslog');
error_reporting(-1);
session_start();
include('./link.php');
$check = $_SESSION['username'];
if( mb_strlen($check,'utf-8')<2){
    echo '你可能还未登录，请登陆后再前往发帖';
    echo '<br>';
    echo "<a href='reg.php'>前往注册</a>";
    echo "<br>";
    echo "<a href='login.php'>前往登录</a>";
    exit();
}

$title = $_POST['title'];
$message = $_POST['message'];
$username = $_SESSION['username'];
$time = $showtime=date("Y-m-d H:i:s");
$title = $_POST['title'];
function  uuid()
{
    $chars = md5(uniqid(mt_rand(), true));
    $uuid = substr ( $chars, 0, 8 ) . '-'
        . substr ( $chars, 8, 4 ) . '-'
        . substr ( $chars, 12, 4 ) . '-'
        . substr ( $chars, 16, 4 ) . '-'
        . substr ( $chars, 20, 12 );
    return $uuid ;
}
$uuid = uuid();
$sql = "INSERT INTO post(username, posttime, title, message, uuid) VALUES ('$username', '$time', '$title', '$message', '$uuid')";
$r = mysqli_query($link, $sql);
if ($r) {
    echo '恭喜你，发送成功！';
    echo '您的帖子uuid为: ';
    echo $uuid;
    echo '<a href="ui/main.html">回到首页</a>';
} else {
    echo "发送失败 请再来一次或联系管理员 <a href=\"ui/main.html\">回到首页</a>" . $conn->error;
}