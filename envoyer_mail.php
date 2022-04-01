<?php

if (count($_POST)==0) {

    header('Location: contact.php');    
}
if (!empty($_POST['prenom'])){ 
    $prenom=ucfirst(strtolower($_POST['prenom']));
    echo 'Le prenom  est : '.$prenom.'<br />'."\n";

} else {
    echo "Erreur : le prénom est vide !"."\n";
    exit(0);
};
if (!empty($_POST['nom'])){ 
    $prenom=ucfirst(strtolower($_POST['nom']));
    echo 'Le nom  est : '.$prenom.'<br />'."\n";

} else {
    echo "Erreur : le nom est vide !"."\n";
    exit(0);
};
if (!empty($_POST['email'])){ 
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL )){  
        $email=$_POST['email'];
        echo 'L\'email est : '.$email.'<br />'."\n";
    } else {
        echo "Erreur : l'email n'est pas valide !"."\n";
        exit(0);
    }
} else {
    echo "Erreur : l\'email est vide !"."\n";
    exit(0);
};
$destinataire = 'ouali.nassim104@gmail.com';
$sujet = 'Demande de renseignement --- '.date('d/m/Y');
$headers = 'From: mmi21a11@mmi-troyes.fr' . "\r\n" .
'Reply-To: mmi21a11@mmi-troyes.fr' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
if (mail($destinataire, $sujet, $message, $headers)) {
echo 'Message envoyé : OK !'."\n";
// on revient à la page d'accueil
header('Location: index.php');
} else {
echo 'Erreur : message non envoyé !'."\n";
}