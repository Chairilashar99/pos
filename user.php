<?php

$mode = !empty($_GET['mode']) ? $_GET['mode'] : '';

if ($mode == 'create') {
    include_once 'views/user/v_user_create.php';
} else if ($mode == 'edit') {
    include_once 'views/user/v_user_edit.php';
} else {
    include_once 'views/user/v_user.php';
}
