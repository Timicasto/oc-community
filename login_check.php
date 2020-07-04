<?php
include('./link.php');
$username = $_POST['username'];
$password = md5( $_POST['password'] );
$sql = "SELECT * FROM member WHERE username='$username' AND password='$password'";
$rs = mysqli_query($link, $sql);

if( mysqli_num_rows($rs)>0 ){
    $row = mysqli_fetch_assoc($rs);
    session_start();
    $_SESSION['username'] = $row['username'];

    echo '登录成功！<a href="./new.php">返回发帖</a>';
}
