<?php 

function conexion()
{
    $usu = "root";
    $pass = "";
    try {
        $nbd = new PDO('mysql:host=localhost;dbname=ejemplo', $usu, $pass);
    }catch(PDOException $e){
    	print "ERROR". $e->getMessage()."<br>";
		die();
	}
}

 ?>
