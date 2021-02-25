<?php
if (!session_id()) session_start();

require_once '../app/init.php'; // teknik bootstraping : memanggil 1 file sehingga semua file bisa terpanggil

$app = new App;
