<?php
    include '../model/conexion.php';

    if($_POST){
        $email=$_POST['email'];
        $contrasena=$_POST['contrasena'];
        
        $sentencia = $con->prepare("SELECT * FROM usuario WHERE email= ? AND contrasena = ?");
        $sentencia -> execute([$email,$contrasena]);

        $contador_usarios = $sentencia ->fetchAll(PDO::FETCH_OBJ); // cuenta si existen registros
        if(sizeof($contador_usarios)>0){
            echo"Si";
        }else{
            echo"No";
        }
    }
?>