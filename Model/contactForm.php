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

    // CRUD OPERATIONS
    public function create(array $data)
    {
    }

    public function read(int $id)
    {
    }

    public function update(int $id, array $data)
    {
    }

    public function delete(int $id)
    {
    }
}
