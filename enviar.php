<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ecovic-Pro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google Font | Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!-- Maaterialize | Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <!-- Iconmoon -->
    <link rel="stylesheet" href="fonts/style.css">

    <!-- swiper slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">

    <!-- Mis Estilos -->
    <link rel="stylesheet" href="css/main.css">
    
</head>


<body>
    

<?php 
$myemail = 'marko.barraza@gmail.com';
$name = $_POST['name'];
$telefono = $_POST['Telefono'];
$mail = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $mensaje";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>
<section class="contacto">   
        <div class="row">
            <div class="col s12 l6 title-section">
                <h2>contacto</h2>
                <div class="line"></div>
                <div class="formulario">
                    <form method="post" action="enviar.php">
                        <div class="input-field col s6">
                            <input placeholder="Tu Nombre" id="name" type="text" class="validate">
                            <label for="name">Nombre</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="+56 9 12345678" id="Telefono" type="text" class="validate">
                            <label for="Telefono">Telefono</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="mensaje" class="materialize-textarea mensaje_contact"></textarea>
                            <label for="mensaje">Mensaje</label>
                        </div>
                        <input type="submit" value="enviar" class="enviar_contact">
                    </form>
                </div>
            </div>
               

                <!-- GoogleMaps -->
                <div class="col s12 l6 container_map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57281.699104969455!2d-71.59090396223004!3d-33.02528423134494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689de946afe6ce3%3A0xc053d6a455794762!2sVi%C3%B1a+Del+Mar!5e0!3m2!1ses!2scl!4v1558498471383!5m2!1ses!2scl"
                        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
    </section>
</body>