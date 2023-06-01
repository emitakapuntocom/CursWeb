<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="subearchivo.php" method="post" enctype="multipart/form-data">
    <b>Nuevo nombre del archivo:</b> 
    <br>
    <input type="text" name="nuevonombre" size="20" maxlength="100">
    <br><br>
    <b>Seleccionar archivo que se desea renombrar: </b>
    <br><br>
    <input name="imagen" type="file">
    <br><br>
    <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>