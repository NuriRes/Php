<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Örnek 12</title>
</head>
<body>
<a href="ornek12.php?ac=ornek11.php">örnek 11</a>
<?php
if($_GET)
{
    include_once($_GET["ac"]);
}

?>

</body>
</html>