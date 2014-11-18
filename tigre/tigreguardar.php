<?php

$db = new SQLite3("../base.db");
$nom=$_POST['nombre'];

$raza=$_POST['raza'];

$ed=$_POST['edad'];


$db-> exec("INSERT INTO tigre (Nombre , Raza , Edad ) VALUES('$nom','$raza' , '$ed')");
if($db) {
	echo "tigre " . $nom . " fue creado satisfatoriamente";
} else {
	echo " No se puedo crear a " . $nom; 
}


?>
		<br /> <br />
<a href="../tigre.php"> Atras</a>
 	<br /> <br />
<a href="../index.php"> Volver Pagina Principal </a>
 	<br /> <br />
