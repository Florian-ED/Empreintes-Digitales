<?php
$errors = [];

if(!array_key_exists('name', $_POST) || $_POST['name'] == ''){
    $errors['name'] = "Vous n'avez pas rentré votre nom";
}

if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Vous n'avez pas rentré un email valide";
}

if(!array_key_exists('tel', $_POST) || $_POST['tel'] == ''){
    $errors['tel'] = "Vous n'avez pas rentré votre numéro de téléphone";
}

/*if(!array_key_exists('service', $_POST) || $_POST['service'] != "1" || $_POST['service'] != "2" || $_POST['service'] != "0"){
    $errors['service'] = "Vous n'avez pas choisi de service";
}*/

if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
    $errors['message'] = "Vous n'avez pas rentré votre message";
}
session_start();

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST; //Enregistre les données entrées
    header('Location: ../contact.php');
}
else{
    $_SESSION['success'] = 1;
    $service = $_POST['service'];
    $nameService = "";
    switch($service){
        case 0:
            $nameService = "Site Vitrine";
            break;
        case 1:
            $nameService = "Site Ecommerce";
            break;
        case 2:
            $nameService = "Autres";
            break;
    }
    $message = "Service choisi :" . $nameService . "\r\n\r\n" . $_POST['message'] . "\r\n\r\n" . "Numéro de téléphone: " . $_POST['tel'] . "\r\n\r\n" . "Adresse Mail: " . $_POST['email'];
    $headers = "FROM: " . $_POST['email'];
    mail('empreintesdigitales56@gmail.com', 'Formulaire de contact', $message, $headers);
    header('Location: ../contact.php');
}

var_dump($errors);
die();

//$message = $_POST['message'];
//$service = $_POST['service'];
//$headers = 'FROM: site@local.dev';
//mail('leguyader.florian@gmail.com', 'Formulaire de contact', $message, $headers);
