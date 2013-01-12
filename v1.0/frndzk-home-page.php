<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Frndzk Link Shortner</title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
</head>
<body>
<div id="wrap">
<div id="header">
	<h1>Frndzk</h1>
	<h2>Link Shortner</h2>
</div>

<div id="nav">
	<ul>
		<li><a href="#">Home</a></li>
	</ul>
</div>

<div id="content">
<h2>Make any url Short</h2>

<p>
<?php
frndzk_link_shortner();
echo fzk_url_form();
?>

</p>


</div>
</div>
<div id="footer">
Copyright &copy; <?php echo date('Y'); ?> <a href="http://www.bitto.us" title="bitto kazi" target="_blank">Bitto Kazi</a>
</div>
</body>
</html>