 <!DOCTYPE html>
 <html>
 <head>
 	<title>MODIFICAR TIGRE</title>
 	<meta charset="utf8"/>
 </head>
 <body>
 <h1>MODIFICAR TIGRE</h1>
<?php
$id = $_GET['id'];

$db = new SQLite3("../base.db");
$usu = $db->query ("SELECT * FROM tigre WHERE id='$id';");

$row = $usu -> fetchArray();


?>
 <form  action=" tigreactualizar.php" method="POST">
 	<label>id:</label><label><?php echo $id ; ?></label>
 	<br><br/>
 	<input type="hidden" name="id" value="<?php echo $id ; ?>">
 	<label>Nombre</label>
 	<input type="text" name="nombre" value="<?php echo $row['Nombre']; ?>">
 	<br/><br/>
 	<label>Apellido</label>
 	<input type="text" name="raza" value="<?php echo $row['Raza']; ?>">
 	<br/><br/>
 	<label>Mascota</label>
 	<input type="text" name="edad" value="<?php echo $row['Edad']; ?>">
 	<input type="submit" value="actualizar">
 	<br /><br/>
 	<a href="../tigre.php"> Atras</a>
 	<br /><br/>
 </form>
 </body>
 </html>  