 <!DOCTYPE html>
<html>
<body>

<h2>Lista de Pokemon</h2>
<table class="egt">
	<?php
		$url = $_GET['url'];
		$nombre= $_GET['nombre'];
		echo"
		<tr>
			<th>Tipos ({$nombre}):</th>
		</tr>";

		$data = json_decode( file_get_contents($url), true );
		
		foreach ($data['pokemon']  as $valor){
			echo"<tr><td>{$valor['pokemon']['name']}";			
		}
	?>
		</td>
	</tr>
</table>
</body>
</html> 


