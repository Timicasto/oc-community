<?php
header('Content-Type:text/html; charset=utf-8');

$link = @mysqli_connect('sql-address', 'username', 'passwd','database') or die('connect error!');
mysqli_query($link, 'set names utf8');
