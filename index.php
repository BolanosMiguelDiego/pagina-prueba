<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Formulario para enviar correo</h1>

<form action="correo.php" method="POST">
        <div class="form">
            <h1>Contactanos</h1>
            <div class="grupo">
                <input type="text" name="nombre" id="" required><span class="barra"></span>
                <label>Nombre</label>
            </div>
            <div class="grupo">
                <input type="email" name="email" id="" required><span class="barra"></span>
                <label>Email</label>
            </div>
            <div class="grupo">
                <input type="text" name="asunto" id="" required><span class="barra"></span>
                <label>Asunto</label>
            </div>
            <div class="grupo">
                <textarea name="mensaje" id="" rows="3" required></textarea><span class="barra"></span>
                <label>Mensaje</label>
            </div>
            <button type="submit">Enviar</button>
        </div>
    </form>

</body>
</html>