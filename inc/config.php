<?php

require_once 'mobile.class.php';
$title = "jojobet 1016 - Jojobet - Jojobet™ » Jojobet 1016 com giriş - jojobet1016 com - Jojobet 1016 Giriş - Jojobet Güncel";
ob_start();
session_start();
error_reporting(0);
date_default_timezone_set('Europe/Istanbul');

// Database Info
const DB_HOST = "localhost";
const DB_LOGIN = "admin_pae";
const DB_PASS = "4mc_z61S4";
const DB_NAME = "admin_pae";
$guncel = 'jojobet1016';
$guncel2 = 'jojobet1017';

// Connecting Database
$db = new Mysqli(DB_HOST, DB_LOGIN, DB_PASS, DB_NAME);
if ($db->connect_errno) {
  die('Mysql connection is incorrect');
}
$db->set_charset("utf8");

// Get main table from database
$main = $db->query("SELECT * from main where id=1")->fetch_assoc();

// Get user data
$user_id = intval($_SESSION['user_id']);
if (!empty($user_id)) {
  $us = $db->query("SELECT * from users where id='$user_id'")->fetch_assoc();
}

// Admin logged status
$kk = $_SESSION['admin_login'];
$main1 = $db->query("SELECT * FROM admin_users WHERE admin_login = '$kk'")->fetch_assoc();

// Admin logged status
$admin = false;
if (!(empty($_SESSION['admin_login']))){
  if ($_SESSION['admin_login'] == $main1['admin_login'] && $_SESSION['admin_password'] == $main1['admin_password']) {
    $admin = true;
  }
}

// Mobile device detection
$detect = new Mobile_Detect;
$mobile = $detect->isMobile();
