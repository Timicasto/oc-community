<?php
ini_set('log_errors', 'on');
ini_set('error_log', 'syslog');
error_reporting(-1);
$token = rand(10000, 99999);
echo $token;
$email = $_POST['email'];
mail("$email","测试","测试邮件");
