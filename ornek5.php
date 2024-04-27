<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Örnek 4</title>
</head>
<body>
<?php
$dizi=array("ali","mehmet","micco","ahmet");
for ($i=0;$i<4;$i++) 
{ 
	
	//echo $dizi[$i]."<br>";
}

?>

<select>
	<?php
	for ($x=2024; $x>=1978; $x--) { 
		echo '<option>'.$x.'<option>';
	}
	?>
</select>
</body>
</html>