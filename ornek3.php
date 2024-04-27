<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Örnek 3</title>
</head>
<body>
<?php
$deneme="MERHABA PHP";
$deneme2="MERHABTA HTML";
$deneme3="MERHABA CSS";
echo $deneme." ".$deneme2." ".$deneme3."<br><br>";

$dizi=array();	
$dizi2[]="";

$ornek=array("php"=>"merhaba php","merhaba html","merhaba css");
echo $ornek[0]."<br><br>";

$dizi[]="benim";
$dizi[]="adım";
$dizi[]="johny";
$dizi[]="sins";

echo $dizi[0]." ".$dizi[1]." ".ucfirst($dizi[2])." ".strtoupper($dizi[3]);
?>
</body>
</html>