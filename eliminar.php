<?php
    if (!isset($_GET['id'])) {
        exit();
    }

    $codigo = $_GET['id'];
    include 'model/conexion.php';
    $sentencia = $bd->prepare("DELETE FROM tareas WHERE idtareas = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: index.php');
    }else{
        echo "Error";
    }   

?>