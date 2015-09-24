<?php

class Conexao {

	public function connect()
	{
		try{
			$conexao = new PDO('mysql:host=localhost;dbname=ss', 'root', 'root');
			return $conexao;
		}catch(PDOException $e){
			echo "Erro ao se conectar: " . $e->getMessage();
			die();
		}
	}
}

/*try{
	$db = new PDO('mysql:host=localhost;dbname=ao_vivo', 'root', '');
	foreach ($db->query('SELECT * FROM videos') as $val) {
		print_r('<p>' . $val['id'] . ' - ' .  $val['titulo'] . '</p>');
	}
	$db = null;
}
catch(PDOException $e){
	echo 'Erro: ' . $e->getMessage() . '<br>';
}*/