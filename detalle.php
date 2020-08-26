 <!DOCTYPE html>
<html>
<body>

<h2>Lista de Pokemon</h2>
<table class="egt">
	<?php
		$detalle = $_GET['detalle'];
		$nombre= $_GET['nombre'];
	
	echo"
	<tr>
		<th>Detalles ({$nombre}):</th>
	</tr>";

	$data = json_decode( file_get_contents($detalle), true );

	echo"
	<tr>
		<th>Habilidad</th>";
	
		foreach ($data['abilities']  as $valor){
			echo"<TD>{$valor['ability']['name']}</TD>";
		}
	echo 
	"</tr>";

	echo"
	<tr>
		<th>Movimientos</th>";
	foreach ($data['moves']  as $valor){
		echo "<TD>{$valor['move']['name']}</TD>";

	}
	echo 
	"</tr>";

	echo"
	<tr>
		<th>Tipos</th>";
	foreach ($data['types']  as $valor){
	echo "
	 <TD><a href='tipos.php?nombre={$valor['type']['name']}&url={$valor['type']['url']}'>{$valor['type']['name']}</a></TD>";
	}

	?>
</table>
</body>
</html> 


