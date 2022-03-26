<?php 

// session_start();

class Login
{
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

    public function saveSeccionVariables(int $id, string $password)
    {
        $_SESSION["id_"] = $id;
        $_SESSION["pass_"] = $password;
    }

    public function isValidUser()
    {
        $file_pointer = __DIR__.'\BaseDeDatos\\' . $this->id . '.txt';
        echo $file_pointer;
    
        if (file_exists($file_pointer)) {
            echo "The file $file_pointer exists";

            $file_handle = fopen($file_pointer, 'r');
            $contents = fread($file_handle, filesize($file_pointer));
            fclose($file_handle);

            $validUserAndpasswors = $contents == $this->password;

            echo $validUserAndpasswors;
            echo $contents;

            return true;

        } else {
            return false;
        }

    }

    public function goToContactForm(array $data)
    {
        header("Location: http://localhost/partial2/View/contactForm.php");
        exit();
    }
}