<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Estudo PHP</title>
</head>
<body>
	<?php

	require_once 'Classe/Carro.php';

	use Classe\Carro;

	$carro = new Carro('Branco', 1994, 'Voyage', 'Volksvagen');
	echo $carro->constroiCarro();

	?>
</body>
</html>