<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php

$x = 10;

if ($x == 10) {
	echo 'Deu certo!';
}else{
	echo 'Não deu certo!';
}
echo '<br>';
echo ($x == 11) ? 'Deu certo!' : 'Não deu certo!';
echo '<br>';
echo ($x) ? ($x == 10) ? 'OK' : 'NOPE' : (10 == 10) ? 'SIM' : 'NAO'; // não recomendado

?>
	
</body>
</html>

