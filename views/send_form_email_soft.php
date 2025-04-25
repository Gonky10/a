<?php
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "ngoncalves@gpimagenes.com";
    $real_email_from = "info@gpimagenes.com";

    $name = $_POST['name']; // required


    $email_from = $_POST['email_from']; // not required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required

    $empresa = $_POST['empresa']; // not required
    $direccion = $_POST['direccion']; // not required
    $areaDeConsulta = $_POST['areaDeConsulta']; // not required
    $email_subject = $_POST['subject']; // not required
    $commentscomments = $_POST['comments']; // not required
    
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
 
    $string_exp = "/^[A-Za-z .'-]+$/";
  
    $email_message = '<html><body>';
    $email_message .= "<h1>Nuevo contacto desde el sitio web GP Imagenes Software.</h1>";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "<img src=\"http://www.gpimagenes.com.ar/img/logo.png\">";

    $email_message .= "<table>";
    $email_message .= "<tr><td>Nombre: </td><td>".clean_string($name)."</td></tr>";
    $email_message .= "<tr><td>Empresa: </td><td>".clean_string($empresa)."</td></tr>";
    $email_message .= "<tr><td>Dirección: </td><td>".clean_string($direccion)."</td></tr>";
    $email_message .= "<tr><td>Telefono: </td><td>".clean_string($telephone)."</td></tr>";
    $email_message .= "<tr><td>Email: </td><td>".clean_string($email_from)."</td></tr>";
    $email_message .= "<tr><td>Área de consulta: </td><td>".clean_string($areaDeConsulta)."</td></tr>";
    $email_message .= "<tr><td>Comentarios: </td><td>".clean_string($comments)."</td></tr>";
    $email_message .= "</table>";
    $email_message .= "<br></br>";
    $email_message .= "<br></br>";
    
    $email_message .= '</body></html>';
 
// create email headers
$headers = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html\n";
$headers .= 'From: '.$real_email_from."\n".
'Reply-To: '.$real_email_from."\n" .
'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
