<?php

header('Content-Type:text/html; charset=utf-8');
$content = $_GET['title'];

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>回帖</title>
</head>
<body>
<h1>发帖</h1>
<form action="reply.php?title=<?php echo $content;  ?>" method="post">
    <p>主题帖标题：<input type="text" name="content"/></p>
    <p>内容：<input type="text" name="message"/></p>
    <p><input type="submit" value="send"/></p>
</form>
</body>
</html>
