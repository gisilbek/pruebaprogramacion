<?php
class nota extends inscripcion{
	
	protected $nota;
	
function   calprome($nota){
		$sumanot=$sumanot+$nota;
        $calculo_promedio= sumanot/cantprueba;
        return calculo_promedio;
    }
    

    
}