<!DOCTYPE html>
<html>
<head>
	<title>Registro de Mascotas</title>
</head>
<body>
<h1>Registro de Mascotas</h1>

<label for="nombre">Nombre</label>
<input type="text" name="nombre" placeholder="Nombre" id="nombre" required="required" >
<br>
<label for="peso">Peso</label>
<input type="number" name="peso" placeholder="Peso" id="peso" required="required" >
<br>
<label for="talla">Talla</label>
<input type="number" name="numero" placeholder="Talla" id="talla" required="required" min="1">
<br>
<label for="especie">Especie</label>
<select name="especie" class="autocomplete">
  <option value="1">Canino</option>
  <option value="2">Felino</option>
  <option value="3">Ave</option>
  <option value="4">Reptil</option>
  <option value="5">Equus ferus</option>
  <option value="6">Bovino</option>
  <option value="7">Roedor</option>
</select>
<br>
<label for="raza">Raza</label>
<select name="Canino" class="autocomplete">
  <option value="1">Pastor Aleman</option>
  <option value="2">Pit Bull</option>
  <option value="3">Chow Chow</option>
  <option value="4">Akita</option>
  <option value="5">Golden Retriever</option>
  <option value="6">San Bernardo</option>
  <option value="7">Malamute</option>
</select>
 
<select name="Felino" class="autocomplete">
  <option value="1">Siames</option>
  <option value="2">Angora</option>
  <option value="3">Persa</option>
  <option value="4">Bengala</option>
  <option value="5">Bombay</option>
  <option value="6">Ragdoll</option>
  <option value="7">British</option>
</select>
 

 <select name="Aves" class="autocomplete">
  <option value="1">Siames</option>
  <option value="2">Angora</option>
  <option value="3">Persa</option>
  <option value="4">Bengala</option>
  <option value="5">Bombay</option>
  <option value="6">Ragdoll</option>
  <option value="7">British</option>
</select>
var cod = document.getElementById("producto").value;
</body>
</html>

<script type="text/javascript">
	$(document).ready(function() {
  	$('select.autocomplete').select_autocomplete();
  });
   
</script>