<?php
header('Content-Type:text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>用户登录</title>
</head>
<body>
    <h1>用户登录</h1>
    <form action="login_check.php" method="post">
        <p>用户名：<input type="text" name="username"/></p>
        <p>登录密码：<input type="password" name="password"/></p>
        <p><input type="submit" value="立即登录"/></p>
    </form>
</body>
</html>
