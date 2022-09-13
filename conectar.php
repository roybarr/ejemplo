<?php
require_once "SERVER.php";
class conectar{
    public function conexion(){
        $conn = mysqli_connect(SERVER,USER,PASS);
        $bd = mysqli_select_db(BD,$conn);
        return $bd;
    }

}
/*
$conexion = mysqli_connect("localhost","root","","login");
*/

/*
$host = "localhost";
$user = "root";
$pass = "";

$bd = "loginn";

$conexion = mysqli_connect($host,$user,$pass,$bd);
*/
?>