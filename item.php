<?php

$mode = !empty($_GET['mode']) ? $_GET['mode'] : '';

if ($mode == 'create') {
    include_once 'views/item/v_item_create.php';
} else if ($mode == 'edit') {
    include_once 'views/item/v_item_edit.php';
} else {
    include_once 'views/item/v_item.php';
}
