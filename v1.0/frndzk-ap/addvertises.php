<?php
if (isset($_GET['page'])) { $page  = $_GET['page']; } else { $page="1"; }
$start_from =($page-1) * 50;
session_start(); 
if(isset($_SESSION['bitto'])) {
require('../frndzk.php');
include('../frndzk_core_functions.php');
frndzk_cms_core_header();

	
	echo'
	<!-- End Header -->
	
	
	
	<!-- Content -->
	<div id="content" class="shell"><center>
		
		
		';
		frndzk_addsettings();
		
		echo'<br />
		
	</div>
	
	<!-- End Content -->
</div>

<!-- Footer -->';

frndzk_cms_core_footer();
} else {
  header("Location: index.php");
}
?>