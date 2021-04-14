<?php
include("conexiondb.php");

if(isset($_POST['enviar'])){

	if(strlen($_POST['form_name']) >= 1 &&
   	  
	   strlen($_POST['form_email']) >= 1 &&
		 
	   strlen($_POST['form_select']) >= 1) {
	
		
		$nombre = trim($_POST['form_name']);
		$correo = trim($_POST['form_email']);
		$seleccion = trim($_POST['form_select']);
		$consulta = "INSERT INTO modelos(nombre, correo, seleccion) VALUES ('$nombre','$correo','$seleccion')";
		$resultado = mysqli_query($conex,$consulta);
		if($resultado) {
			
			?>
<h3 class="ok">YOUR APPOINTMENT HAS BEEN SCHEDULED SUCCESSFULLY
</h3>
<?php
		} else {
			?>
	<h3 class="bad">
AN ERROR HAS OCCURRED</h3>
			
			<?php
			}
		} else {
		
              ?>
<h3 class="bad">PLEASE COMPLETE THE FIELDS
</h3>
			<?php
			
		}
		
}
	



?>


