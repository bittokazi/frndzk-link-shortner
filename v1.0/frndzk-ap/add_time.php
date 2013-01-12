<?php 
ob_start(); 
session_start(); 
if(isset($_SESSION['bitto'])) { 
require('../frndzk.php');
include('../frndzk_core_functions.php');

frndzk_re_time_up();







} else { 
  header("Location: index.php"); 
}
ob_flush();
?>
