 <!DOCTYPE html>
 <html>
 <head>
 	<title>MODIFICAR LEON</title>
 	<meta charset="utf8"/>
 </head>
 <body>
 <h1>MODIFICAR LEON</h1>
<?php
$id = $_GET['id'];

$db = new SQLite3("../base.db");
$usu = $db->query ("SELECT * FROM leon WHERE id='$id';");

$row = $usu -> fetchArray();


?>
 <form  action="leonactualizar.php" method="POST">
 	<label>id:</label><label><?php echo $id ; ?></label>
 	<br><br/>
 	<input type="hidden" name="id" value="<?php echo $id ; ?>">
 	<label>Nombre</label>
 	<input type="text" name="nombre" value="<?php echo $row['Nombre']; ?>">
 	<br/><br/>
 	<label>Apellido</label>
 	<input type="text" name="especies" value="<?php echo $row['Especies']; ?>">
 	<input type="submit" value="actualizar">
 	<br /><br/>
	<a href="../leon.php"> Atras  </a>
 	<br /> <br />
 </form>
 </body>
 </html>  