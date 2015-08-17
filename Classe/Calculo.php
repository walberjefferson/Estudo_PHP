<?php

namespace Classe;

class Calculo
{
	public function soma($x, $y)
	{
		if(!is_numeric($x) or !is_numeric($y))
		{
			throw new \Exception("Número invalido");
		}
		return $x + $y;
	}
}