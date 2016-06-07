<?php
class person{
	    protected $documentsid;
    	protected $namefirst;		
		protected $namelast;
		protected $sexo;
		protected $edad;
		protected $fechanac;
	    
	  function __construct($documentsid="",$namefirst="",$namelast="",$sexo="",$edad ="" ,$fechanac="")
		{
			$this->docuemtsid = $documentsid;
			$this->namefirst = $namefirst;
			$this->namelast = $namelast;
			$this->sexo = $sexo;
			$this->edad =$edad;	
		    $this->fechanac =$fechanac;			
			parent::__construct($docuemtsid,$namefirst,$namelast,$sexo,$edad,$fechanac);
		}
       
		
		
}