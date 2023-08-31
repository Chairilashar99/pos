<?php

$mode = !empty($_GET['mode']) ? $_GET['mode'] : '';

if ($mode == 'view') {
    include_once 'views/laporan/v_laporan_detail.php';
} else {
    include_once 'views/laporan/v_laporan.php';
}
