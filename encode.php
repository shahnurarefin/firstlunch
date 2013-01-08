
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$url_page="new/firstpage.php";
	$param1 = "name is arefin";
	$param2 = "$%^ arefin";
	$param3 = "nothing to be worried";
	
	$url ="http://localhost/test/";
	$url .= $url_page;
	$url .= "?param1=" . urlencode($param1);
	$url .="&param2=" . urlencode($param2);
	$url .="&param3=" . urlencode($param3);
?>

<a href="<?php echo $url ;?>">Hello There</a>
<?php 

?>
</body>
</html>
