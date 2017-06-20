<?php
require_once ('db_abstract_class.php');
class Vacunas extends db_abstract_class
{
    private $idVacunas;
    private $Nombre;
    private $Laboratorio;

    /**
     * Vacunas constructor.
     * @param $idVacunas
     * @param $Nombre
     * @param $Laboratorio
     */
    public function __construct($Vacunas_data = array())
    {
        parent:: __construct();
        if (count ($Vacunas_data)>1 ){
            foreach ($Vacunas_data as $campo => $valor ){
                $this ->$campo = $valor;
            }
        }else{
            $this->idVacunas = "";
            $this->Nombre = "";
            $this->Laboratorio = "";
        }

    }


    public function getIdVacunas()
    {
        return $this->idVacunas;
    }

    /**
     * @param mixed $idVacunas
     */
    public function setIdVacunas($idVacunas)
    {
        $this->idVacunas = $idVacunas;
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
    public function getLaboratorio()
    {
        return $this->Laboratorio;
    }

    /**
     * @param mixed $Laboratorio
     */
    public function setLaboratorio($Laboratorio)
    {
        $this->Laboratorio = $Laboratorio;
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
        $this ->insertRow("INSERT INTO Vacunas VALUES(NULL, ?,?)",array(
                $this-Nombre,
                $this->Laboratorio,

            )
        );
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