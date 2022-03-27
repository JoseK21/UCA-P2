<?php

session_start();

require_once('Model/contactForm.php');

$_contactForm = new ContactForm();

require_once('View/contactForm.php');

if (isset($_POST['saveContact'])) {
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
    echo '<script language="javascript">alert("logout!");</script>';

    header("Location: http://localhost/partial2");

    // Cleaning Session variables
    unset($_SESSION['id_']);
    unset($_SESSION['pass_']);

    unset($_POST['logout']);
    exit();
}
?>