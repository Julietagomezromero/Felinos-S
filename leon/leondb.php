<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$db = new SQLite3("../base.db");
$usus = $db->query ("SELECT * FROM leon;");
?>

<h1>BIENVENIDO:: LEON</h1>
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
		<a href="leon/leoneditar.php?id=<?php echo $fila['id']; ?>"> Editar</a>
		 <a href="leon/leoneliminar.php?id=<?php echo $fila['id']; ?>">Eliminar</a> 
		 </td>

	</tr>
	<?php
}

?>
	

</table>
</body>
</html>