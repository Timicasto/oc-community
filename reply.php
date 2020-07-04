<?php
session_start();
include('./link.php');
$check = $_SESSION['username'];
$repcontent = $_GET['title'];
if( mb_strlen($check,'utf-8')<2){
    echo '你可能还未登录，请登陆后再前往回帖';
    echo '<br>';
    echo "<a href='reg.php'>前往注册</a>";
    echo "<br>";
    echo "<a href='login.php'>前往登录</a>";
}


$message = $_POST['message'];
$usernamere = $_SESSION['username'];
$posttime = $showtime=date("Y-m-d H:i:s");

$sql = "INSERT INTO reply(username, posttime, message, content) VALUES ('$usernamere', '$posttime', '$message', '$repcontent')";
$r = mysqli_query($link, $sql);
if ($r) {
    echo '恭喜你，发送成功！<a href="ui/main.html">回到首页 </a>';
} else {
    echo "发送失败 请再来一次或联系管理员 " . $conn->error;
}
?>
