<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Örnek 4</title>
</head>
<body>
<?php
$degisken="BİLGİ <br>";

if($degisken=="TAMAM")
{
echo "Çalıştı";
}
else if($degisken=="BİLGİ")
{
echo "BİLGİ";
}
else
{
echo $degisken;
}
?>


<?php
$degisken="TAMAM";
for($i=0;$i<10;$i++)
{
echo $i."<br>";
if($i==5)
{
echo "Burası doğrulandı.<br>";
}
}
?>

</body>
</html>