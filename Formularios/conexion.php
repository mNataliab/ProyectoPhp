<?php 



    try {
        $nbd = new PDO('mysql:host=localhost;dbname=ejemplo', "root", "");
    }catch(PDOException $e){
    	print "ERROR". $e->getMessage()."<br>";
		die();
	}

$stmt= $nbd->prepare("UPDATE persona SET nombre = 'camilo' WHERE idPersona = 1;");

$stmt->execute();


