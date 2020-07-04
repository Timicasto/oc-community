<?php
header('Content-Type:text/html; charset=utf-8');

$link = @mysqli_connect('database.idatac.com', 'oc', 'cf286b25a022976f6bd75a5be7b8a442ce0b078d','oc') or die('connect error!');
mysqli_query($link, 'set names utf8');