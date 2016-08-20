<?php
	$variavel = "hello word!"; //variavel
	define("CONSTANTE", "hello word!"); //constante
	const CONSTANTE2 = "hello word!"; //não é global, nem mutavel
 ?>

<!DOCTYPE html>
<html>
	<?php
		require_once "head.php"; //não deixa repetir a saida
		include "body.php";// deixa repetir a saida
	?>
</html>
