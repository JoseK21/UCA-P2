<?php
session_start();

require_once('app/models/login.php');

$_loginCredentials = new LoginCredentials();

$_loginCredentials->cleanSeccionVariables();

require_once('app/views/login.php');

if (isset($_POST['login'])) {
    $_loginCredentials->setPassword($_POST['password']);
    $_loginCredentials->setId($_POST['id']);

    $userWithPerissions = $_loginCredentials->isValidUser();
    
    if ($userWithPerissions) {
        $_loginCredentials->saveSeccionVariables();
        $_loginCredentials->goToContactForm();
    } else {
        echo '<script language="javascript">alert("El número de identificación o contraseña es incorrecto!");</script>';
    }

    unset($_POST['login']);
}

?>