<?php

require_once ('db_abstract_class.php');
class Historia_Clinica extends db_abstract_class
{
private $idHistoria_Clinica;
private $Enfermedades;
private $Medicamentos;
private $Recomendaciones;
private $Cita_Medica;
private $Vacunas;
private $Estado;

    /**
     * Historia_Clinica constructor.
     * @param $idHistoria_Clinica
     * @param $Enfermedades
     * @param $Medicamentos
     * @param $Recomendaciones
     * @param $Cita_Medica
     * @param $Vacunas
     * @param $Estado
     */
    public function __construct($Historia_Clinica_Data = array())
    {
        parent::__construct();
        if (count($Historia_Clinica_Data)>1){
            foreach ($Historia_Clinica_Data as  $campo => $valor){
                $this->$campo = $valor;
            }
        }else{
            $this->idHistoria_Clinica = "";
            $this->Enfermedades = "";
            $this->Medicamentos = "";
            $this->Recomendaciones = "";
            $this->Cita_Medica = "";
            $this->Vacunas = "";
            $this->Estado = "";
        }

    }

    function __destruct() {
        $this->Disconnect();
        unset($this);
    }

    /**
     * @return string
     */
    public function getIdHistoriaClinica()
    {
        return $this->idHistoria_Clinica;
    }

    /**
     * @param string $idHistoria_Clinica
     */
    public function setIdHistoriaClinica($idHistoria_Clinica)
    {
        $this->idHistoria_Clinica = $idHistoria_Clinica;
    }

    /**
     * @return string
     */
    public function getEnfermedades()
    {
        return $this->Enfermedades;
    }

    /**
     * @param string $Enfermedades
     */
    public function setEnfermedades($Enfermedades)
    {
        $this->Enfermedades = $Enfermedades;
    }

    /**
     * @return string
     */
    public function getMedicamentos()
    {
        return $this->Medicamentos;
    }

    /**
     * @param string $Medicamentos
     */
    public function setMedicamentos($Medicamentos)
    {
        $this->Medicamentos = $Medicamentos;
    }

    /**
     * @return string
     */
    public function getRecomendaciones()
    {
        return $this->Recomendaciones;
    }

    /**
     * @param string $Recomendaciones
     */
    public function setRecomendaciones($Recomendaciones)
    {
        $this->Recomendaciones = $Recomendaciones;
    }

    /**
     * @return string
     */
    public function getCitaMedica()
    {
        return $this->Cita_Medica;
    }

    /**
     * @param string $Cita_Medica
     */
    public function setCitaMedica($Cita_Medica)
    {
        $this->Cita_Medica = $Cita_Medica;
    }

    /**
     * @return string
     */
    public function getVacunas()
    {
        return $this->Vacunas;
    }

    /**
     * @param string $Vacunas
     */
    public function setVacunas($Vacunas)
    {
        $this->Vacunas = $Vacunas;
    }

    /**
     * @return string
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * @param string $Estado
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
        $this ->insertRow("INSERT INTO mypet.Historia_Clinica VALUES(NULL,?,?,?,?,?,?)",array(
            $this->Enfermedades,
            $this->Medicamentos,
            $this->Recomendaciones,
            $this->Cita_Medica,
            $this->Vacunas,
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


}