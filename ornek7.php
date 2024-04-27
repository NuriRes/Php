<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Örnek 4</title>
</head>
<body>
<?php

$dizi=array("Elma", "Armut","Kiraz","Çilek");
$sayac=0;

while($sayac<count($dizi))
{
echo $dizi[$sayac]. "<br>";
$sayac++;
}

?>

<?php

$degisken=1;
while($degisken<=20)
{
echo $degisken."<br>";
$degisken++;
}
?>


</body>
</html>