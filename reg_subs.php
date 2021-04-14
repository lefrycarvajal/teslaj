<?php
include("conexiondb.php");

if(isset($_POST['send'])){

	if(
	   
 	strlen($_POST['email']) >= 1) {
		 

		$email = trim($_POST['email']);
	
		$fechareg = date("d/m/y");
		$consulta = "INSERT INTO news(correo, fecha) VALUES ('$email','$fechareg')";
		$resultado = mysqli_query($conex,$consulta);
		if($resultado) {
			
			?>
<h3 class="ok">NOW YOU WILL RECEIVE ALL THE NOTIFICATIONS</h3>
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
