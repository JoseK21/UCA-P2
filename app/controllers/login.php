<?php

class Login extends Controller {

    public function __construct()
    {
        // $this->model('loginModel');
        $this->view('login');
    }
    
    public function goToContactForm()
    {
        header("Location: http://localhost/partial2/contactForm");
    
        exit();
    }
}

if (isset($_POST['login'])) {
    require_once '../app/models/LoginModel.php';
    $_loginCredentials = new LoginModel();
    $_Login = new Login();

    
    $_loginCredentials->cleanSeccionVariables();

    $_loginCredentials->setPassword($_POST['password']);
    $_loginCredentials->setId($_POST['id']);

    $userWithPerissions = $_loginCredentials->isValidUser();
    
    if ($userWithPerissions) {
        $_loginCredentials->saveSeccionVariables();
        $_Login->goToContactForm();
    } else {
        echo '<script language="javascript">alert("El número de identificación o contraseña es incorrecto!");</script>';
    }

    unset($_POST['login']);
}
