<?php
var_dump($_POST);
$message = $_POST['message'];
$headers = 'FROM: site@local.dev';
mail('contact@empreintesdigitales.fr', 'Formulaire de contact', $message, $headers);