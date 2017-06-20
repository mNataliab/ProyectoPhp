<?php

require_once ('db_abstract_class.php');
class Citas_Medicas extends db_abstract_class
{
private $idCitas_Medicas;
private $Fecha;
private $Tipo;
private $Duracion;
private $Observacion;
private $Valor;
private $Persona;
private $Consultorio;
private $Estado;

    /**
     * Citas_Medicas constructor.
     * @param $idCitas_Medicas
     * @param $Fecha
     * @param $Tipo
     * @param $Duracion
     * @param $Observacion
     * @param $Valor
     * @param $Persona
     * @param $Consultorio
     * @param $Estado
     */
    public function __construct($Citas_Medicas_data = array())
    {

        parent::__construct();
        if (count ($Citas_Medicas_data)>1 ){
            foreach ($Citas_Medicas_data as  $campo => $valor){
                $this->$campo = $valor;
            }
        }else{
            $this->idCitas_Medicas = "";
            $this->Fecha = "";
            $this->Tipo = "";
            $this->Duracion = "";
            $this->Observacion = "";
            $this->Valor = "";
            $this->Persona = "";
            $this->Consultorio = "";
            $this->Estado = "";
        }


    }

    function __destruct() {
        $this->Disconnect();
        unset($this);
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
        $this ->insertRow("INSERT INTO mypet.Citas_Medicas VALUES(NULL,?,?,?,?,?,?,?,?)",array(
            $this->Fecha,
            $this->Tipo,
            $this->Duracion,
            $this->Observacion,
            $this->Valor,
            $this->Persona,
            $this->Consultorio,
            $this->Estado,

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




    /**
     * @return mixed
     */
    public function getIdCitasMedicas()
    {
        return $this->idCitas_Medicas;
    }

    /**
     * @param mixed $idCitas_Medicas
     */
    public function setIdCitasMedicas($idCitas_Medicas)
    {
        $this->idCitas_Medicas = $idCitas_Medicas;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->Fecha;
    }

    /**
     * @param mixed $Fecha
     */
    public function setFecha($Fecha)
    {
        $this->Fecha = $Fecha;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->Tipo;
    }

    /**
     * @param mixed $Tipo
     */
    public function setTipo($Tipo)
    {
        $this->Tipo = $Tipo;
    }

    /**
     * @return mixed
     */
    public function getDuracion()
    {
        return $this->Duracion;
    }

    /**
     * @param mixed $Duracion
     */
    public function setDuracion($Duracion)
    {
        $this->Duracion = $Duracion;
    }

    /**
     * @return mixed
     */
    public function getObservacion()
    {
        return $this->Observacion;
    }

    /**
     * @param mixed $Observacion
     */
    public function setObservacion($Observacion)
    {
        $this->Observacion = $Observacion;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->Valor;
    }

    /**
     * @param mixed $Valor
     */
    public function setValor($Valor)
    {
        $this->Valor = $Valor;
    }

    /**
     * @return mixed
     */
    public function getPersona()
    {
        return $this->Persona;
    }

    /**
     * @param mixed $Persona
     */
    public function setPersona($Persona)
    {
        $this->Persona = $Persona;
    }

    /**
     * @return mixed
     */
    public function getConsultorio()
    {
        return $this->Consultorio;
    }

    /**
     * @param mixed $Consultorio
     */
    public function setConsultorio($Consultorio)
    {
        $this->Consultorio = $Consultorio;
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

}