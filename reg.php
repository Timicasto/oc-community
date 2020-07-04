<?php
header('Content-Type:text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./regis-style.css"
    <meta charset="utf-8"/>
    <title>注册新用户 - OC</title>
</head>
<body style="background: #F9F9F9; ">
<div class="regis"></div>
<div class="bannerimg"><img src="ui/icons/export/img.png" class="banner"></div>
<form action="reg_save.php" method="post">
    <p style="position: relative; top: 240px; left: 670px; ">用户名<br><input type="text" name="username"/></p>
    <p style="position: relative; top: 240px; left: 670px; ">登录密码<br><input type="password" name="password"/></p>
    <p style="position: relative; top: 240px; left: 670px; ">确认密码<br><input type="password" name="password2"/></p>
    <b style="font-weight: normal; position: relative; top: 240px; left: 670px;">邮箱：<input type="text" name="email"/></b>
    <b style="font-weight: normal; position: relative; top: 240px; left: 670px;">@qq.com</b>
    <p style="position: relative; top: 240px; left: 670px; "><input type="submit" value="注册"/></p>
</form>
</body>
</html>
