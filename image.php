<?php
session_start();
require_once 'vendor/autoload.php'; // important
use Gregwar\Captcha\CaptchaBuilder;

$builder = new CaptchaBuilder;
$builder->build();
$_SESSION['phrase'] = $builder->getPhrase();
header('Content-type: image/jpeg');
$builder->output();

