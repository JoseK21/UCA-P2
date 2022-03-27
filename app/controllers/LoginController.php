<?php

class LoginController extends Controller {

    public function __construct()
    {
        // init
    }

    
    public function index()
    {
        // init
    }

    
    public function goToContactForm()
    {
       $this->view('contactForm');
    }

    public function goToLogin()
    {
       $this->view('login');
    }

}

session_start();

// require_once('models/login.php');


// require_once('views/login.php');

if (isset($_POST['login'])) {
    $_loginCredentials = new LoginCredentials();
    
    $_loginCredentials->cleanSeccionVariables();

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
