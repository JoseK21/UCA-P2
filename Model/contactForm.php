<?php

class ContactForm
{
    protected $numero_de_identificacion;
    protected $nombre;
    protected $apellidos;
    protected $genero;
    protected $telefono;
    protected $correo_electronico;
    protected $fecha_de_nacimiento;
    protected $documento_adjunto;

    // GET METHODS
    public function getNumero_De_Identificacion()
    {
        return $this->numero_de_identificacion;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function getCorreo_Electronico()
    {
        return $this->correo_electronico;
    }

    public function getFecha_De_Nacimiento()
    {
        return $this->fecha_de_nacimiento;
    }

    public function getDocumento_Adjunto()
    {
        return $this->documento_adjunto;
    }

    // SET METHODS
    public function setNumero_De_Identificacion(string $numero_de_identificacion)
    {
        $this->numero_de_identificacion = $numero_de_identificacion;
    }

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellidos(string $apellidos)
    {
        $this->apellidos = $apellidos;
    }

    public function setGenero(string $genero)
    {
        $this->genero = $genero;
    }

    public function setTelefono(string $telefono)
    {
        $this->telefono = $telefono;
    }

    public function setCorreo_Electronico(string $correo_electronico)
    {
        $this->correo_electronico = $correo_electronico;
    }

    public function setFecha_De_Nacimiento(string $fecha_de_nacimiento)
    {
        $this->fecha_de_nacimiento = $fecha_de_nacimiento;
    }

    public function setDocumento_Adjunto(string $documento_adjunto)
    {
        $this->documento_adjunto = $documento_adjunto;
    }


    public function write_to_console($data)
    {
        $console = $data;
        if (is_array($console))
            $console = implode(',', $console);

        echo "<script>console.log('Console: " . $console . "' );</script>";
    }

    // CRUD OPERATIONS
    public function addContact()
    {
        // extract($_REQUEST);
        $folderId = $_SESSION["id_"];

        $myfile = $_SERVER['DOCUMENT_ROOT'] . '\partial2\BaseDeDatos\ContactsByUser\\' . $folderId . '\\' . $this->getNumero_De_Identificacion() . 'txt';

        if (file_exists($myfile)) {
            return false;
        } else {
            $file = fopen($myfile, "w");

            fwrite($file, "Numero_de_Identificacion :");
            fwrite($file,  $this->getNumero_De_Identificacion() . "\n");

            fwrite($file, "Nombre :");
            fwrite($file,  $this->getNombre() . "\n");

            fwrite($file, "Apellidos :");
            fwrite($file,  $this->getApellidos() . "\n");

            fwrite($file, "Genero :");
            fwrite($file,  $this->getGenero() . "\n");

            fwrite($file, "Telefono :");
            fwrite($file,  $this->getTelefono() . "\n");

            fwrite($file, "Correo_Electronico :");
            fwrite($file,  $this->getCorreo_Electronico() . "\n");

            fwrite($file, "Fecha_de_nacimiento :");
            fwrite($file,  $this->getFecha_De_Nacimiento() . "\n");

            fwrite($file, "Documento_Adjunto :");
            fwrite($file,  $this->getDocumento_Adjunto() . "\n");

            fclose($file);

            // header("location: index.php");

            return true;
        }
    }
}
