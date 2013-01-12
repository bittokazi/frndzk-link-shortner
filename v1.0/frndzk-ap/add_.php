<?php 
ob_start();
session_start();  
if(isset($_SESSION['bitto'])) {
require('../frndzk.php');
include('../frndzk_core_functions.php');
add_set_update_fzk();

} else { 
  header("Location: index.php"); 
}
ob_flush();
?>
