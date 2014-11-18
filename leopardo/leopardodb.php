<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$db = new SQLite3("../base.db");
$usus = $db->query ("SELECT * FROM leopardo;");
?>

<h1>BIENVENIDO:: LEOPARDO</h1>
<table border= "1px">
	<tr>
		<td>id</td>
		<td>nombre</td>
		<td>especies</td>
	
		

	</tr>
<?php
while ($fila = $usus-> fetchArray() ) {
	
	?>
	<tr>
		<td><?php echo $fila['Id']; ?></td>
		<td><?php echo $fila['Nombre']; ?></td>
		<td><?php echo $fila['Especies']; ?></td>
		<a href="leopardo/leopardoeditar.php?id=<?php echo $fila['id']; ?>"> Editar</a>
		 <a href="leopardo/leopardoeliminar.php?id=<?php echo $fila['id']; ?>">Eliminar</a> 
		 </td>

	</tr>
	<?php
}

?>
	

</table>
</body>
</html>