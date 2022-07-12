<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="./styles/view.css">
    <title>Administrar contraseñas</title>
</head>
<body>
        <!-- <h1></h1> -->
        <div class="container">
            <table class="table">
                    <tr>
                        <th>Tipo de contraseña</th>
                        <th>Contraseña</th>
                    </tr>
                    <?php
                        // database 
                        include("../controller/conex.php");

                        // query
                        $query = "SELECT * FROM data";
                        $result = mysqli_query($conex, $query);

                        while($row = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['type'];?> </td>
                        <td><?php echo $row['password'];?> </td>
                        <td>
                            <form class="delete-form" action="../controller/delete.php" method="post"   id="form_eliminar<?php echo $row['id'];?>">
                                <input type="hidden" value="<?php echo $row['id']; ?>" name="eliminar">
                                <input type="submit" value="Eliminar" name="delete" id="delete-button">
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
            </table>
        </div>
        <a href="./index.php" class="return">Añadir otra contraseña</a>
    <!-- scripts -->
    <script src="../model/app.js"></script>
</body>
</html>