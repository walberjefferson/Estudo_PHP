<?php

#MODO ERRADO
function teste($x)
{
	if($x){
		return true;
	}else{
		return false;
	}

}

#MODO CERTO
function teste2($x){
	if($x){
		return true;
	}
	return false;
}


#SWITCH

function switch($x){
	switch ($x) {
		case 1:
			break;
		case 2 :
			$x
			break
		case 3 :
			return true; 
	}
}