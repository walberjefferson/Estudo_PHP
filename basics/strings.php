<?php

$x = 'Olá mundo!';
$x.= '<br>';
$x.= 'Muito bom';

echo $x . '<br><br>';

$y = 'Olá mundo 2!'
   . '<br>'
   . 'Muito bom<br><br>';

echo $y;

$z = 'Você';

echo 'Olá mundo! Como vai '.$z.'s?<br>';

echo "<br>Olá mundo! Como vai {$z}s?<br>"; //CHAVES EM ASPAS DUPLAS

//NOWDOC

$var = <<<'EOD'
Olá mundo esse é um exemplo
Tudo que escrever aqui será
atribuido para a variavel.

A variavel <b>$z</b> não será parseada, pois estamos utilizando nowdoc syntax.
EOD;

echo $var.'<br>';


//HEREDOC SYNTAX
$var = <<<EOD
Olá mundo esse é um exemplo
Tudo que escrever aqui será
atribuido para a variavel.

A variavel <b>$z</b> não será parseada, pois estamos utilizando heredoc syntax.
EOD;

echo $var.'<br>';