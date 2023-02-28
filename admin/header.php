<?php
session_start();
require_once('baglan.php');

if(!$_SESSION['kadi']){
    die('Giriş Yetkiniz Yoktur');
}

?>