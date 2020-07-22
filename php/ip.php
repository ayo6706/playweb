<?php
$ip = $_SERVER['REMOTE_ADDR']?:
($_SERVER['HTTP_X_FORWARDED_FOR']?: $_SERVER['HTTP_CLIENT_IP']);
echo "$ip";