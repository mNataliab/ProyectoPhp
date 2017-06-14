<?php
conexion();

class persona
{
    private $id;
    private $nombre;
    private $apellido;
    private $edad;

    const tabla = 'persona';

    public function __construct($id = null, $nombre, $apellido, $edad)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;

    }

    public function guardar()
    {
        $conexion = new Conexion();

            $consulta = $conexion->prepare('INSERT INTO ' . self::tabla . ' (nombre, apellido,edad) VALUES(:nombre, :apellido,:edad)');
            $consulta->bindParam(':nombre', $this->nombre);
            $consulta->bindParam(':apellido', $this->descripcion);
            $consulta->bindParam(':edad',$this->edad );
            $consulta->execute();
            $this->id = $conexion->lastInsertId();

        $conexion = null;
    }
}

 $persona = new Persona('Batman', 'rosas', 23);
 $persona->guardar();
 echo $persona->getNombre() . ' se ha guardado correctamente con el id: ' . $persona->getId();
