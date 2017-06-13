<!DOCTYPE html>
<html>
<head>
	<title>Registro de Mascotas</title>
</head>
<body>
<h1>Registro de Mascotas</h1>

<form>
<label for="nombre">Nombre</label>
<input type="text" name="nombre" placeholder="Nombre" id="nombre" required="required" >
<br>
<label for="nacimiento">Fecha de Nacimiento</label>
<input type="text" name="fecha" placeholder="mm/dd/yyyy" id="fecha" required="required" > <button id="boton"></button>
<br>
<label for="peso">Peso</label>
<input type="number" name="peso" placeholder="Peso" id="peso" required="required" ><label>Kg</label>
<br>
<label for="talla">Talla</label>
<input type="number" name="numero" placeholder="Talla" id="talla" required="required" min="1"> 
<br>
<label for="especie">Especie</label>
<select class="autocomplete" id="especie" required="required">
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
<select id="Canino" required="required" >
<option value=""></option>
  <option value="1">Pastor Aleman</option>
  <option value="2">Pit Bull</option>
  <option value="3">Chow Chow</option>
  <option value="4">Akita</option>
  <option value="5">Golden Retriever</option>
  <option value="6">San Bernardo</option>
  <option value="7">Malamute</option>
</select>
 
<select id="Felino" required="required">
   <option value=""></option>
  <option value="1">Siames</option>
  <option value="2">Angora</option>
  <option value="3">Persa</option>
  <option value="4">Bengala</option>
  <option value="5">Bombay</option>
  <option value="6">Ragdoll</option>
  <option value="7">British</option>
</select>
 

 <select id="Aves"  required="required">
 <option value=""></option>
  <option value="1">Siames</option>
  <option value="2">Angora</option>
  <option value="3">Persa</option>
  <option value="4">Bengala</option>
  <option value="5">Bombay</option>
  <option value="6">Ragdoll</option>
  <option value="7">British</option>
</select>

 <select id="Reptil"  required="required">
 <option value=""></option>
  <option value="1">Serptiente</option>
  <option value="2">Cocodrilo</option>
  <option value="3">Lagarto</option>
  <option value="4">Iguana</option>
  <option value="5">Tortuga</option>
</select>

<select id="caballo" required="required">
<option value=""></option>
  <option value="1">Mustang</option>
  <option value="2">Parcheron</option>
  <option value="3">Frison</option>
  <option value="4">Marwari</option>
  <option value="5">Poni</option>
</select>

<select id="Bovino" required="required">
<option value=""></option>
  <option value="1">Normando</option>
  <option value="2">Montbeliarde</option>
  <option value="3">Jersey</option>
  <option value="4">Holstein</option>
  <option value="5">Braunvieh</option>
</select>

<select id="Roedor" required="required">
<option value=""></option>
  <option value="1">Hamster</option>
  <option value="2">Ardilla</option>
  <option value="3">Cobaya</option>
</select>


</form>


</body>
</html>

<script type="text/javascript">

$("#boton").clik(function() {
    $( "#fecha" ).datepicker({
      showOn: "button",
      buttonImage: "Imgenes/calendar.gif",
      buttonImageOnly: true,
      buttonText: "Select date"
    });
  });
   
</script>