<?php

$db = new SQLite3("../base.db");
$nom=$_POST['nombre'];

$especies=$_POST['especies'];




$db-> exec("INSERT INTO leopardo (Nombre , Especie  ) VALUES('$nom', '$especies')");
if($db) {
	echo "leopardo " . $nom . " fue creado satisfatoriamente";
} else {
	echo " No se puedo crear a " . $nom; 
}


?>
	<br /> <br />
<a href="../leopardo.php"> Atras</a>
 	<br /> <br />
<a href="../index.php"> Volver Pagina Principal </a>
 	<br /> <br />
