<?php

include_once 'models/Database.php';
include_once 'utils.php';

$db = new Database();

if (!empty($_POST['action'])) {
    $action = $_POST['action'];
} else if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}
$status = !empty($_GET['status']) ? $_GET['status'] : '';
$msg = !empty($_GET['msg']) ? $_GET['msg'] : '';

if ($action == 'doLogin') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email = '" . $email . "' ";
    $result = $db->fetchOne($sql);

    //pengecekan email
    if (!isset($result['email'])) {
        redirect('login.php?status=error&msg=Email yang dimasukkan salah ');
    }

    //pengecekan password
    if (isset($result['password'])) {
        if (!password_verify($password, $result['password'])) {
            redirect('login.php?status=error&msg=Password yang dimasukkan salah ');
        }
    }

    //simpan data user login ke dalam session
    $_SESSION['user_login'] = array(
        'user_id' => $result['user_id'],
        'user_name' => $result['user_name'],
        'email' => $result['email'],
    );

    redirect('dashboard.php');
}

if ($action == 'doLogout') {
    unset($_SESSION['user_login']);
    redirect('login.php?status=error&msg=Anda berhasil logout');
}

include_once 'views/auth/v_login.php';
