<?php
namespace PPR\Entity;

use PPR\Core\Model;


/*
*Usuario
*/

class Usuario extends Model
{
    private $id = "";
    private $nombre = "";
    private $pass = "";

    public function __construct()
    {

    }

    public function listAll()
    {
        $conexion = parent::getBdd();
        
        $consulta = "SELECT * FROM usuario";
        $resultado = $conexion->query($consulta);

        return $resultado;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getFoo()
    {
        return $this->foo;
    }

    public function setId($id)
    {
        $this->id = $id ;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre ;
    }

    public function setFoo($foo)
    {
        $this->foo = $foo ;
    }

}