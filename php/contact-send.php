<?php
require 'PHPMailer-master/PHPMailerAutoload.php';

$smtpHost = 'smtp.gmail.com';
$smtpUsername = 'ropapellier@gmail.com';
$smtpPassword = 'gatitos321';

$fromEmail = 'ropapellier@gmail.com';
$fromName = 'Pellier Ropa';
$sendToEmail = 'ropapellier@gmail.com';
$sendToName = 'Pellier Ropa';

$subject = 'Mensaje nuevo en contacto';

$fields = array('name' => 'Name', 'email' => 'Email', 'phone' => 'Phone', 'message' => 'Message');
?>

<html>
<head>
  <meta charset="utf-8" />
  <title>Contacto - Pellier</title>
  <link rel="shortcut icon" type="image/png" href="../favicon.png"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/main.css" />
  <link rel="stylesheet" type="text/css" href="../css/header.css" />
  <link rel="stylesheet" type="text/css" href="../css/footer.css" />
  <link rel="stylesheet" type="text/css" href="../css/menu.css" />
  <link rel="stylesheet" type="text/css" href="../css/contact.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
<?php
  try{
    if(count($_POST) == 0) throw new \Exception('El formulario está vacío.');

     $emailText = "Tiene un nuevo mensaje en el formulario de contacto de Pellier\n=============================\n";

     foreach ($_POST as $key => $value) {
         // If the field exists in the $fields array, include it in the email
         if (isset($fields[$key])) {
             $emailText .= "$fields[$key]: $value\n";
         }
     }

     $mail = new PHPMailer;
     $mail->isSMTP();
     $mail->SMTPDebug = 0;
     $mail->Host = $smtpHost;
     $mail->Port = 587;
     $mail->SMTPSecure = 'tls';
     $mail->SMTPAuth = true;
     $mail->Username = $smtpUsername;
     $mail->Password = $smtpPassword;
     $mail->setFrom($fromEmail, $fromName);
     $mail->addAddress($sendToEmail, $sendToName);
     $mail->addAddress($_POST["email"], $_POST["name"]);
     $mail->isHTML(false);
     $mail->Subject = $subject;
     $mail->Body = $emailText;

   if(!$mail->send()){
       throw new \Exception("Error procesando el correo. " . $mail->ErrorInfo);
     } else {
       ?>
        <div class="status">
          <p>
            Mensaje enviado exitosamente.
          </p>
          <p>
            <a href="../contacto.php">Volver</a>
          </p>
        </div>
       <?php
     }
  } catch(\Exception $ex){
    ?>
     <div class="status">
       <p>
         Ha ocurrido un error. Por favor intente de nuevo.
       </p>
       <p>
         <a href="../contacto.php">Volver</a>
       </p>
     </div>
    <?php } ?>
</body>
</html>
