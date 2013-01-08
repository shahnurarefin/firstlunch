
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
 print_r($_GET);
 $id = $_GET["id"];
 $name = $_GET["name"];
 $fname = $_GET["fathername"];
 echo "<br/> <strong>Id: " . $id . "</strong>";
 echo "<br/> <strong>Name: " . $name . "</strong>";
 echo "<br/> <strong>Father's Name: " . $fname . "</strong>";
 $test ="Url Test";
 echo urlencode($test);
 echo "<br/>";
 echo rawurlencode($test);
?>
</body>
</html>
