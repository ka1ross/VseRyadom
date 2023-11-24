<?php

session_start();

$name = $_POST['Fio'];
$LiveArea = $_POST['LiveAreaInput'];
$NumberPhone = $_POST['NumberPhoneInput'];
$DateBirth = $_POST['DateBirth'];
$Login = $_POST['LoginInput'];
$Password = $_POST['PasswordInput'];
$AgainPassword = $_POST['AgainPasswordInput'];

$_SESSION['validation'] = [];
if(empty($name)){
    $_SESSION['validation']['name'] = 'Неверное имя';
}

if(!empty($_SESSION['validation'])){
    header(header: 'Location: C:\Users\akkta\OneDrive\Документы\php\VseRaydom\component13.html');
}