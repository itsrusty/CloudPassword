<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="./styles/index.css">
    <title>Cloud Password</title>
</head>
<body>
    <nav class="navigator">
        <h1>CloudPassword</h1>
    </nav>
    <div class="container">
        <form action="../controller/add.php" method="get">
            <input type="text" placeholder="Ingresa el tipo de contraseña" name="typePassword" autocomplete="off" required id="">
            <input type="password" placeholder="Ingresa tu contraseña" name="password" required>
            <input type="submit" value="Guardar" name="submit">
        </form>
    </div>
</body>
</html>