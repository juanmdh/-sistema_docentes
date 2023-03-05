<?php 
    include '../model/conexion.php';
    include '../model/usuario.php';
    if($_POST){
        $user = new usuario($_POST['primerNombre'], $_POST['segundoNombre'], $_POST['primerApellido'], $_POST['segundoApellido'], $_POST['email'], $_POST['contrasena']);
       
        //CONSULTA A BD
        $sentencia = $con -> prepare("INSERT INTO usuario (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, email, contrasena) VALUES(?,?,?,?,?,?);");
        $resultado = $sentencia -> execute([$user->getPrimerNombre(), $user->getSegundoNombre(), $user->getPrimerApellido(), $user->getSegundoApellido(), $user->getEmail(), $user->getContrasena()]);
       
        if($resultado==true){
            header('Location: ../index.php');
        }else{
            echo "ERROR EN EL REGISTRO";
        }
    }
 
?>