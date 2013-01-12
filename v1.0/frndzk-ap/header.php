<?php 
ob_start();
if(isset($_SESSION['bitto'])) {
require('../frndzk.php');
echo'
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>'; 

if (frndzk_breadc() == "bitto.php") { frndzk_header_title(); }
elseif (frndzk_breadc() == "add.php") { echo'Shorten Link'; }
elseif (frndzk_breadc() == "addvertises.php") { echo'Addvertisement Settings'; }
elseif (frndzk_breadc() == "settings.php") { echo'User Settings'; }
else { frndzk_header_title(); }


echo'</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
	<div id="header">
		<div class="shell">
			
			<div id="head"><h1><a href="bitto.php">';
				frndzk_header_title();
				echo'</a></h1><div class="right">
					<p>
						Welcome, <a href="settings.php"><strong>'; frndzk_user(); echo'</strong></a> | Total links generated: '.link_fzk_count().' | <a href="logout.php">Logout</a>
					</p>
				</div>
			</div>
			
			<!-- Navigation -->
			<div id="navigation">
				<ul>
				    <li><a href="bitto.php" '; if (frndzk_breadc() == "bitto.php") { echo'class="active"'; }
echo'><span>Control Panel Home</span></a></li>
<li><a href="add.php" '; if (frndzk_breadc() == "add.php") { echo'class="active"'; }
echo'><span>Shorten Link</span></a></li>

				    <li><a href="addvertises.php" ';
if (frndzk_breadc() == "addvertises.php") { echo'class="active"'; }
echo'><span>Addvertisement Settings</span></a></li>
<li><a href="settings.php" '; if (frndzk_breadc() == "settings.php") { echo'class="active"'; }
echo'><span>User Settings</span></a></li>

				</ul>
			</div>
			<!-- End Navigation -->
			
		</div>
	</div>';
} else { 
  header("Location: index.php"); 
}
ob_flush();
?>