<?php

try{
    $conn = new PDO('mysql:host=localhost;dbname=apptodo','root','root');
}catch(PDOException $e){

    echo "Error";

}

if(isset($_POST['id'])){

    $id=$_POST['id'];
    $completado=(isset($_POST['completado']))?1:0;

    $sql = "UPDATE app SET completado=? WHERE id=?";
    $sentencia=$conn->prepare($sql);
    $sentencia->execute([$completado,$id]);
  

}

if(isset($_POST['agregar_tarea'])){

    $tarea =($_POST['tarea']);
    $sql= "INSERT INTO app (tarea) VALUE (?)";
    $sentencia = $conn->prepare($sql);
    $sentencia->execute([$tarea]);

}

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $sql = "DELETE FROM app WHERE id=?";
    $sentencia=$conn->prepare ($sql );  //preparar sentencias sql
    $sentencia->execute([$id]);



}

$sql= "SELECT * FROM app";
$registros=$conn->query($sql);



$nueva = "SELECT * FROM config";
$colores=$conn->query($nueva);

if(isset($_POST['cambiar_color'])){
    
    $color =($_POST['color']);
    $sql="UPDATE config SET color=?";
    $sentencia=$conn->prepare($sql);
    $sentencia->execute([$color]);

}



$conn = null;


?>


