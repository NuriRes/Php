<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Örnek 3</title>
</head>
<body>
<?php
$bilgiler=array("meyveler"=>array("elma","armut","muz"),
	"sebzeler"=>array("biber"=>array("tatli biber","acı biber"),"patlican","soğan"),	
	"isimler"=>array("mehmet","ali","efe"));
?>
<ul>
 <li>
    meyveler 	
       <ul>
           <li><?php echo $bilgiler ["meyveler"][0]; ?></li>
           <li><?php echo $bilgiler ["meyveler"][1]; ?></li>
           <li><?php echo $bilgiler ["meyveler"][2]; ?></li>
       </ul>
    </li>

    <li>
    sebzeler
       <ul>

           
           	<li>
           		biberler 
           		<ul>
           			<li><?=$bilgiler["sebzeler"]["biber"][0]?></li>
           			<li><?=$bilgiler["sebzeler"]["biber"][1]?></li>
           		</ul>
           	</li>

           
           <li><?php echo $bilgiler ["sebzeler"][0]; ?></li>
           <li><?php echo $bilgiler ["sebzeler"][1]; ?></li>
       </ul>
    </li>

    <li>
    isimler
       <ul>
           <li><?php echo $bilgiler ["isimler"][0]; ?></li>
           <li><?php echo $bilgiler ["isimler"][1]; ?></li>
           <li><?php echo $bilgiler ["isimler"][2]; ?></li>
       </ul>
    </li>


</body>
</html>