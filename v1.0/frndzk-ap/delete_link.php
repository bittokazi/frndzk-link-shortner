<?php
ob_start(); 
session_start();
if(isset($_SESSION['bitto'])) {
require('../frndzk.php');
include('../frndzk_core_functions.php');
delete_bulk_link();

}
else
{
header("Location: index.php");
}
ob_flush();
?>