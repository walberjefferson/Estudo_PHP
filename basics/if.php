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
			# code...
			break;
		case 2 :

		case 3 :
			return true; 
	}
}