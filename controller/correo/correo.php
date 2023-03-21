<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require './PHPMailer/src/Exception.php';
    require './PHPMailer/src/PHPMailer.php';
    require './PHPMailer/src/SMTP.php';

    if($_POST){
        $asunto =  $_POST['asunto'];
        $correo = $_POST['correo'];
        $destinatario = $_POST['destinatario'];
        $mensaje = $_POST['mensaje'];

        $mail = new PHPMailer(true);

        try{

            $mail -> SMTPDebug = 2;
            $mail -> isSMTP();
            $mail -> Host = 'smtp.gmail.com';
            $mail -> SMTPAuth = true;
            $mail -> Username = 'luispumaherrera@gmail.com';
            $mail -> Password = 'ooqifdxwdaybbrks';
            $mail -> Port = 465;
            $mail -> SMTPSecure = 'ssl';
            $mail -> isHTML(true);
            $mail -> setFrom($correo);//QUIEN ENVIA EL CORREO
            $mail -> addAddress($destinatario); //A QUIEN SE LE ENVIA EL CORREO
            $mail -> Subject = ("$asunto"); //ASUNTO
            $mail -> Body =
            "
            <h1>TITULO</h1>
            $mensaje
            ";
            $mail -> send();

            header("Location: ../../view/correo/correo.php ");

        }catch( Exception $e){
            echo $e->errorMessage();
        }

    }

?>