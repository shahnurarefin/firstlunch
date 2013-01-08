
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$urluse = "<click>Go To second page";
?>
<a href="secondpage.php?id=100&name=<?php echo urlencode("arefin arefin");?>&fathername=mustaq"><?php echo htmlspecialchars($urluse);?></a>
</body>
</html>
