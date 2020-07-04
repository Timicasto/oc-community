<?php

header('Content-Type:text/html; charset=utf-8');
/*
发帖页面
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>发帖</title>
</head>
<body>
<h1>发帖</h1>
<form action="save.php" method="post">
    <p>标题：<input type="text" name="title"/></p>
    <p>内容：<input type="text" name="message"/></p>
    <p><input type="submit" value="send"/></p>
</form>
</body>
</html>