<?php

class ContactForm extends Controller {

    public function __construct()
    {
        $this->view('contactForm');
    }

    public function goToLogin()
    {
        header("Location: http://localhost/partial2/login");
    
        exit();
    }

}

if (isset($_POST['saveContact'])) {
    require_once '../app/models/contactFormModel.php';

    $_contactForm = new ContactFormModel();
    
    // $_contactForm->cleanSeccionVariables();

    $_contactForm->setNumero_De_Identificacion($_POST['id']);
    $_contactForm->setNombre($_POST['name']);
    $_contactForm->setApellidos($_POST['lastname']);
    $_contactForm->setGenero($_POST['gender']);
    $_contactForm->setTelefono($_POST['phone']);
    $_contactForm->setCorreo_Electronico($_POST['email']);
    $_contactForm->setFecha_De_Nacimiento($_POST['date_of_birth']);
    $_contactForm->setDocumento_Adjunto($_POST['attached_file'] ?: '-');

    $wasAddedTheContact = $_contactForm->addContact();
    
    if ($wasAddedTheContact) {
        echo '<script language="javascript">alert("Contacto agregado con exito!");</script>';
    } else {
        echo '<script language="javascript">alert("Ya existe un contacto con este numero de identificacion.!");</script>';
    }

    unset($_POST['saveContact']);
}

if (isset($_POST['logout'])) {
    $_contact = new ContactForm();
  
    // Cleaning Session variables
    unset($_SESSION['id_']);
    unset($_SESSION['pass_']);

    unset($_POST['logout']);
    
    $_contact->goToLogin();
}
?>