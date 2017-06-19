<?php

require_once('db_abstract_class.php');

class Mascota extends db_abstract_class
{
private $idMascotas;
private $Nombre;
private $Foto;
private $Peso;
private $Talla;
private $Especie;
private $Raza;
private $FechaNacimiento;
private $HabitosAlimenticios;
private $Vacunas;
private $Dueno;
private $Observaciones;

    /**
     * Mascota constructor.
     * @param $idMascotas
     * @param $Nombre
     * @param $Foto
     * @param $Peso
     * @param $Talla
     * @param $Especie
     * @param $Raza
     * @param $FechaNacimiento
     * @param $HabitosAlimenticios
     * @param $Vacunas
     * @param $Dueno
     * @param $Observaciones
     */
    public function __construct($Mascota_data = array() )
    {

        parent::__construct();
        if (count($Mascota_data)>1){
            foreach ($Mascota_data as $campo => $valor){
                $this->$campo = $valor;
            }
        }else{
            $this->idMascotas = "";
            $this->Nombre = "";
            $this->Foto = "";
            $this->Peso = "";
            $this->Talla = "";
            $this->Especie = "";
            $this->Raza = "";
            $this->FechaNacimiento = "";
            $this->HabitosAlimenticios = "";
            $this->Vacunas = "";
            $this->Dueno = "";
            $this->Observaciones = "";
        }


    }

    function __destruct() {
        $this->Disconnect();
        unset($this);
    }

    /**
     * @return string
     */
    public function getIdMascotas()
    {
        return $this->idMascotas;
    }

    /**
     * @param string $idMascotas
     */
    public function setIdMascotas($idMascotas)
    {
        $this->idMascotas = $idMascotas;
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * @param string $Nombre
     */
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }

    /**
     * @return string
     */
    public function getFoto()
    {
        return $this->Foto;
    }

    /**
     * @param string $Foto
     */
    public function setFoto($Foto)
    {
        $this->Foto = $Foto;
    }

    /**
     * @return string
     */
    public function getPeso()
    {
        return $this->Peso;
    }

    /**
     * @param string $Peso
     */
    public function setPeso($Peso)
    {
        $this->Peso = $Peso;
    }

    /**
     * @return string
     */
    public function getTalla()
    {
        return $this->Talla;
    }

    /**
     * @param string $Talla
     */
    public function setTalla($Talla)
    {
        $this->Talla = $Talla;
    }

    /**
     * @return string
     */
    public function getEspecie()
    {
        return $this->Especie;
    }

    /**
     * @param string $Especie
     */
    public function setEspecie($Especie)
    {
        $this->Especie = $Especie;
    }

    /**
     * @return string
     */
    public function getRaza()
    {
        return $this->Raza;
    }

    /**
     * @param string $Raza
     */
    public function setRaza($Raza)
    {
        $this->Raza = $Raza;
    }

    /**
     * @return string
     */
    public function getFechaNacimiento()
    {
        return $this->FechaNacimiento;
    }

    /**
     * @param string $FechaNacimiento
     */
    public function setFechaNacimiento($FechaNacimiento)
    {
        $this->FechaNacimiento = $FechaNacimiento;
    }

    /**
     * @return string
     */
    public function getHabitosAlimenticios()
    {
        return $this->HabitosAlimenticios;
    }

    /**
     * @param string $HabitosAlimenticios
     */
    public function setHabitosAlimenticios($HabitosAlimenticios)
    {
        $this->HabitosAlimenticios = $HabitosAlimenticios;
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
    public function getDueno()
    {
        return $this->Dueno;
    }

    /**
     * @param string $Dueno
     */
    public function setDueno($Dueno)
    {
        $this->Dueno = $Dueno;
    }

    /**
     * @return string
     */
    public function getObservaciones()
    {
        return $this->Observaciones;
    }

    /**
     * @param string $Observaciones
     */
    public function setObservaciones($Observaciones)
    {
        $this->Observaciones = $Observaciones;
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
    $this->insertRow("INSERT INTO Mascotas VALUES (NULL, ?,?,?,?,?,?,?,?,?,?,?,?)",array(

            $this->Nombre,
            $this->Foto,
            $this->Peso,
            $this->Talla,
            $this->Especie,
            $this->Raza,
            $this->FechaNacimiento,
            $this->HabitosAlimenticios,
            $this->Vacunas,
            $this->HabitosAlimenticios,
            $this->Dueno,
            $this->Observaciones,


        )

    );
        $this->Disconect();
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