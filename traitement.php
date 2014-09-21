
<?php
$msg_erreur = "Erreur. Les champs suivants doivent être obligatoirement remplis :<br/><br/>";
$msg_ok = "Votre demande a bien été prise en compte.";
$message = $msg_erreur;
$from  = "postmaster@cadicea.com";  // adresse MAIL OVH liée à ton hébergement.
define('MAIL_DESTINATAIRE','sahin.kevin@gmail.com');
define('MAIL_SUJET','Contact utilisateur');
 
// vérification des champs
if (empty($_POST['nom']))
$message .= "Votre nom<br/>";
if (empty($_POST['email']))
$message .= "Votre e-Mail<br/>";
if (empty($_POST['message']))
$message .= "Votre message<br/>";
 
// si un champ est vide, on affiche le message d'erreur et on stoppe le script
if (strlen($message) > strlen($msg_erreur)) {
  echo $message; die();
}
 
// sinon c'est ok => on continue
foreach($_POST as $index => $valeur) {
$$index = stripslashes(trim($valeur));
}

//Préparation de l'entête du mail:
   $headers  = "MIME-Version: 1.0 \n";
   $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
   $headers .= "From: $from  \n";
   $headers .= "Disposition-Notification-To: $from  \n";

   // Message de Priorité haute
   // -------------------------
   $headers .= "X-Priority: 1  \n";
   $headers .= "X-MSMail-Priority: High \n";
 
// préparation du corps du mail
$mail_corps = "Message de : $nom\n";
$mail_corps .= "e-Mail : $email\n";
$mail_corps .= "Message : $message\n";
 
// envoi du mail
if (mail(MAIL_DESTINATAIRE,MAIL_SUJET,$mail_corps,$headers)) {
  //Le mail est bien expédié
  echo $msg_ok;
} else {
  //Le mail n'a pas été expédié
  echo "Une erreur est survenue lors de l'envoi du formulaire par email";
}
 
?>
 

