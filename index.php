 <!DOCTYPE html>
<html>
<body>

<h2>Lista de Pokemon</h2>
<table class="egt">
	<tr>
		<th>Nombres:</th>
	</tr>
	
		<?php
			$data = json_decode( file_get_contents('https://pokeapi.co/api/v2/pokemon/'), true );
			foreach ($data['results']  as $valor){
				echo "
				<tr>
					<td>
						<a href='detalle.php?nombre={$valor['name']}&detalle={$valor['url']}'>{$valor['name']}</a>
					</td>
				</tr>";
		
			}
		?>
</table>
</body>
</html> 



