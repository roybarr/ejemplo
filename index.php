<?php
include("conectar.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion db</title>
</head>
<body>
    <form action="registrar.php" method="post">
        <label for="">nombre</label>
        <input type="text" name="nombre" id="">
        <br>
        <label for="">contraseña</label>
        <input type="password" name="clave" id="">
        <br>
        <label for="">tipo</label>
        <input type="text" name="tipo">
        <br>
        <input type="submit" name="registrar" value="registrar">
    </form>
    <h1>
        hola a todos
    </h1>
    <table>

        <tr>
            <td>id</td>
            <td>nombre</td>
            <td>clave</td>
            <td>tipo</td>
        </tr>

        <?php
        /*$sql="SELECT * from usuario";
        $result=mysqli_query($conexion,$sql);
        while($mostrar = mysqli_fetch_array($result)){
        ?>

        <tr>
            <td><?php echo $mostrar['id_usuario']?></td>
            <td><?php echo $mostrar['nomusuario']?></td>
            <td><?php echo $mostrar['claveusuario']?></td>
            <td><?php echo $mostrar['tipousuario']?></td>
        </tr>

        <?php
        }*/
        ?>
    </table>
</body>

</html>