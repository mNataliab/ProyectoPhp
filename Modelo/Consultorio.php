<?php

require_once('db_abstract_class.php');
class Consultorio extends db_abstract_class
{
private $idConsultorio;
private $Nombre;
private $Especialiadad;
private $Jornada;
private $Estado;

    /**
     * Consultorio constructor.
     * @param $idConsultorio
     * @param $Nombre
     * @param $Especialiadad
     * @param $Jornada
     * @param $Estado
     */
    public function __construct($Consultori_data = array())

    {

        parent::__construct();
        if (count ($Consultori_data)>1){
            foreach ($Consultori_data as $campo => $valor){
                $this->$campo = $valor;
            }
        }else{
            $this->idConsultorio = "";
            $this->Nombre = "";
            $this->Especialiadad = "";
            $this->Jornada = "";
            $this->Estado = "";
        }

    }

    function __destruct() {
        $this->Disconnect();
        unset($this);
    }
    /**
     * @return mixed
     */
    public function getIdConsultorio()
    {
        return $this->idConsultorio;
    }

    /**
     * @param mixed $idConsultorio
     */
    public function setIdConsultorio($idConsultorio)
    {
        $this->idConsultorio = $idConsultorio;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * @param mixed $Nombre
     */
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }

    /**
     * @return mixed
     */
    public function getEspecialiadad()
    {
        return $this->Especialiadad;
    }

    /**
     * @param mixed $Especialiadad
     */
    public function setEspecialiadad($Especialiadad)
    {
        $this->Especialiadad = $Especialiadad;
    }

    /**
     * @return mixed
     */
    public function getJornada()
    {
        return $this->Jornada;
    }

    /**
     * @param mixed $Jornada
     */
    public function setJornada($Jornada)
    {
        $this->Jornada = $Jornada;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * @param mixed $Estado
     */
    public function setEstado($Estado)
    {
        $this->Estado = $Estado;
    }

    protected static function buscarForId($id)
    {
        // TODO: Implement buscarForId() method.
    }

    protected static function buscar($query)
    {
        // TODO: Implement buscar() method.
    }

    protected static function getAll()
    {
        // TODO: Implement getAll() method.
    }

    protected function insertar()
    {
       $this->insertRow("INSERT INTO mypet.Consultorio VALUES (NULL, ?,?,?,?)",array(

           $this->Nombre,
           $this->Especialidad,
           $this ->Jornada,
           $this ->Estado,

       ));

        $this->Disconnect();

    }

    protected function editar()
    {
        // TODO: Implement editar() method.
    }

    protected function eliminar($id)
    {
        // TODO: Implement eliminar() method.
    }


}