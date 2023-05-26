<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monos Escritores</title>
</head>
<body>
	<center><h1>Monos Escritores</h1></center>
<form action="./codigo.php" method="post">
<fieldset>
	<legend><strong>Búsqueda</strong></legend>
    
    <label for="palabras">Introduce aquí las palabras</label>
	<input type="text" id="palabras" name="palabras" placeholder="Habia una vez..." required><br>
	
    <label for="texto">¿Qué modo de texto buscar?</label>
	<select id="texto" name="texto" required>
		<option value="normal">Normal</option>
		<option value="revuelto">Desorden</option>
		<option value="al azar">Al azar</option>
	</select><br>
    
    <label for="hora">Zona Horaria de tu preferencia</label>
	<select id="hora" required>
		<option value="Nuew York">New York</option>
		<option value="México">México</option>
		<option value="Berlin">Berlín</option>
     </select><br>

	<button type="submit">Buscar</button>
	<button type="reset">Borrar</button>
</fieldset>
</form>
    
</body>
</html>