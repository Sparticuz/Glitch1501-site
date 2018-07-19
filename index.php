<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Glitch1501 - <?php echo $_GET["page"]; ?></title>
<link href="glitch1501.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<img src="glitch1501.png" width="1024" height="768" usemap="#Map" alt="">
		<map name="Map" id="">
		  <area shape="rect" coords="10,160,147,192" href="?page=home" alt="Home">
		  <area shape="rect" coords="10,200,147,232" href="?page=anime" alt="Anime">
		  <area shape="rect" coords="10,240,147,272" href="?page=downloads" alt="Downloads">
		  <area shape="rect" coords="10,280,147,312" href="?page=links" alt="Links">
 		  <area shape="rect" coords="10,320,147,352" href="?page=guestbook" alt="Guestbook">
		  <area shape="rect" coords="10,360,147,392" href="?page=email" alt="Email">
		</map>
<div id="content">
<?php
	$ext = '.php';
	$idx = $_GET["page"];
	$idx = isset($idx) ? $idx.$ext : 'home'.$ext;
	if(file_exists($idx))
{
	include $idx;
}
    else
{
	echo 'Could not include '.$idx.'! Something is either wrong with my code or wrong with your browser version, please upgrade to the latest version of you browser.';
}
?>
</div>
</body>
</html>
