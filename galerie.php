<?php
if(!empty($_FILES)){
	require("imgClass.php");
	$img=$_FILES['img'];
	$ext= strtolower(substr($img['name'],-3));
	$allow_ext= array("jpg","png","gif");
	if(in_array($ext,$allow_ext)){
		move_uploaded_file($img['tmp_name'],"image/".$img['name']);
		Img::creerMin("image/".$img['name'],"image/min",$img['name'],215,112);
		Img::convertirJPG("image/".$img['name']);
	}
	else{
		$erreur="Votre fichier n'est pas une image";
	}
}
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Mon Album Photos</title>
  <link rel="stylesheet" href='style_galerie.css' type="text/css"/>
 </head>
 
<body background= "imanevoyage.png">
<?php

 $id=$_GET["id"];

if(isset($erreur)){
	echo $erreur;
}
?>
<form method="post" action="galerie.php" enctype="multipart/form-data">
<input type="file" name="img"/>
<input type="submit" name="Envoyer"/>
</form>
<?php

$dos= "image/min";
$dir= opendir($dos);
while($file= readdir($dir)){
	$allow_ext= array("jpg","png","gif");
	$ext= strtolower(substr($file,-3));
	if(in_array($ext,$allow_ext)){
		?>
		<div class="min">
		<a href="image/<?php echo $file; ?>">
		<img src="image/min/<?php echo $file; ?>"/>
		<h3><?php echo $file; ?></h3>
		</a>
		</div>
		<?php
	}
}

?>

<br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>

 <ul>
 <?php
echo "<ul><li><a href='espacemembre.php?id=$id'>Retour Accueil</a></li></ul>";
 ?>

</ul>
</body>
</html>