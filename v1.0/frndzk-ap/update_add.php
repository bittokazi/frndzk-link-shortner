<?php 
ob_start(); 
session_start(); 
if(isset($_SESSION['bitto'])) { 
require('../frndzk.php');
include('../frndzk_core_functions.php');

frndzk_add_update();







} else { 
  header("Location: index.php"); 
}
ob_flush();
?>
