<?php
ob_start();
$msg_erreur = "Erreur. Les champs suivants doivent être obligatoirement remplis :<br/><br/>";
$msg_ok = "Votre demande a bien été prise en compte.";
$message = $msg_erreur;
$from  = "postmaster@cadicea.com";  // adresse MAIL OVH liée à ton hébergement.
define('MAIL_DESTINATAIRE','test@cadicea.com');
define('MAIL_SUJET','Contact utilisateur');
 
/* Redirection vers une page différente du même dossier */
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'msg_formulaire.php';

// vérification des champs
if ( empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['message']) ) {
    header("Location: http://$host$uri/$extra?state=missing");
    die();
}

 
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
  header("Location: http://$host$uri/$extra?state=succes");
} else {
  //Le mail n'a pas été expédié
  header("Location: http://$host$uri/$extra?state=error");
}
ob_end_flush();
?>
 

