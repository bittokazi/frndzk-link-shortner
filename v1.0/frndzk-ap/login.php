<?php
ob_start(); 
session_start(); 
if(isset($_SESSION['bitto'])) {
header("Location: bitto.php");
exit;
}
else{
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Frndzk link shortner | Created by bitto kazi </title>
<meta name="Robots" content="noindex,nofollow" />
<link href="login-box.css" rel="stylesheet" type="text/css" />
</head>
<body>
<center>

<div>
<table>
<tr>
<td>
<left>
<img src="images/logo-4.png" height="400px" wideth="400px"></left><br>
<center>
<h2><font face="Bradley Hand ITC" color="#696969"></font></h2></center>
</td>
<td>
<div id="login-box">
<h3>Frndzk link shortner Administrator Panel</h3>
<?php 
include('../frndzk_core_functions.php');
frndzk_login_check();
?>
<form method="post" action=""> Username: <input name="un" input  
type="text"><br> Password: <input name="pw" input type="password"><br> <input  
type="submit" value="Login"> </form></br>
<h4>Reset Password</h4>
<?php
frndzk_reset_password();
?>
<form method="post" action=""> Email address: <input name="email" input type="text"><br><br> <input  
type="submit" value="Reset Password"> </form>
<br>
<br>
<br>

</div>
</td>
</tr>
</table>

</div>








<br><br><br><br>
<font face="Comic Sans MS" color="#696969">
<h4>Copyright &copy; <?php echo date('Y'); ?> <a href="http://www.bitto.us" title="bitto kazi" target="_blank">Bitto Kazi</a></h4><font>
</center>
</body>
</html>
<?php 
ob_flush(); 
?>