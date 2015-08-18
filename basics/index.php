<?php

$p = '<br>';

$x = 10;

var_dump($x == 10);
echo $p;
var_dump($x == '10');
echo $p;
var_dump($x === '10');
echo $p;
var_dump($x === 10);
echo $p;


#######################

if(strpos('testing', 'test')){
	echo 'Encontrou';
}

if (strpos('testing', 'test') !== false) {
	echo 'Encontrou';
}