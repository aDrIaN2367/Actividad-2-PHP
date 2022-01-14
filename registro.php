<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario a rellenar</h1>
    <form action="datos.php" method="post">
        <label for="">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="">Correo electronico:</label>
        <input type="mail" name="correo" id="correo">
        <br>
        <label for="">Ciudad:</label>
        <input type="text" name="ciudad" id="ciudad">
        <br>
        <input type="submit" value="Enviar datos">
    </form>
</body>
</html>
