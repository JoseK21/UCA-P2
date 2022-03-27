<?php

class LoginCredentials
{

    // Varible
    protected $id;
    protected $password;

    // GET METHODS
    public function getId()
    {
        return $this->id;
    }

    public function getPassword()
    {
        return $this->password;
    }

    // SET METHODS
    public function setId(string $id)
    {
        $this->id = $id;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    // Functions
    public function saveSeccionVariables()
    {
        $_SESSION["id_"] = $this->id;
        $_SESSION["pass_"] = $this->password;
    }

    public function cleanSeccionVariables()
    {
        unset($_SESSION['id_']);
        unset($_SESSION['pass_']);
    }



    public function isValidUser()
    {
        $myfile = $_SERVER['DOCUMENT_ROOT'] . '\partial2\BaseDeDatos\Users\\' . $this->id . '.txt';

        if (file_exists($myfile )) {
            $file_handle = fopen($myfile , 'r');
            $contents = fread($file_handle, filesize($myfile));
            fclose($file_handle);
            
            $validUserAndpasswors = $contents == $this->password;

            if ($validUserAndpasswors) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function goToContactForm()
    {
        // require_once('Controller/contactForm.php');
        // header("Location: http://localhost/partial2/View/contactForm.php");
        exit();
    }
}
