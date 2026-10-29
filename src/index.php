<?php

$host = getenv('DB_HOST');
$db = getenv('DB_NAME');
$user = getenv('DB_USER');
$password = getenv('DB_PASSWORD');

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8mb4",
        $user,
        $password
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    echo "<h1>PHP y MySQL funcionan correctamente</h1>";

    $resultado = $pdo->query("SELECT VERSION() AS version");

    $fila = $resultado->fetch(PDO::FETCH_ASSOC);

    echo "<p>Versión de MySQL: "
        . htmlspecialchars($fila['version'])
        . "</p>";

} catch (PDOException $e) {
    http_response_code(500);
    echo "Error al conectar con la base de datos.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="main.js">
</head>
<body>
    <form name="mi formulario" action="URL" method="post">
        <input type="text" placeholder="Nombre:" maxlength="10" required name="Nombre:"/> <br/> <br/>
        <input  type="mail" placeholder="Email:" maxlength="10" required name="Email:"/> <br/> <br/>
        <input  type="password" placeholder="Contraseña:" maxlength="10" required name="Contraseña:"/> <br/> <br/>
        </select>
        <br/> <br/>
    </form>
</body>
</html>
