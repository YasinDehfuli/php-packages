<?php
session_start();
//print_r($_SESSION);
//print_r($_GET);
if (strtolower($_GET['code']) != strtolower($_SESSION['phrase'])){
    die('captcha error');
}

echo 'welcome';