<?php
session_start();

function redirect($controller)
{
    $baseUrl = "http://localhost/pos/";
    $url = $baseUrl . $controller;
    header("Location: $url");
    exit();
}

$isLogin = false;
if (!empty($_SESSION['user_login'])) {
    $isLogin = true;
}
