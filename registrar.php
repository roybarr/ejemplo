<?php
include("conectar.php");

    $conect = new conexion();
        if ($conect){
            echo "se conecto correctamente";
        }
            
     
    
        

/*
if($conexion)
    {
        echo "conectado correctamente";
    }
*/

/*if(isset($_POST['registrar'])){
    if(empty($_POST['nombre']) && empty($_POST['clave'])){
        echo "los campos estan vacios";
    }else{
        $nombre = $_POST['nombre'];
        $clave = $_POST['clave'];
        $tipo = $_POST['tipo'];
        $consulta = "INSERT INTO usuario(nomusuario, claveusuario, tipousuario) VALUES ('$nombre','$clave','$tipo')";
        $resultado=mysqli_query($conexion,$consulta);
        if ($resultado){
            echo "se registro correctamente";
        }else{
            echo "ocurrio un error";
        }
    }
}else{
    echo "no se presiono el boton registrar";
}
*/
?>