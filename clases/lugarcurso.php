<?php 

	
	class Lugarcurso
	{	public $db_conn;
		public $idcurso;

		public $idlugarcurso;
		public $nombrelugar;
		public $calle;
		public $numero;
		public $colonia;
		public $anexo;
		public $ciudad;

		public $ultimoparametro;

		
		function __construct($db)
		{
			$this->db_conn = $db;
			
		}

		function AgregarDireccion()
    	{
	    	$sql = "INSERT INTO lugarcurso SET nombrelugar = ?,
        									   calle       = ?, 
                                               numero      = ?, 
                                               colonia     = ?, 
                                               anexo       = ?, 
                                               ciudad      = ?";

	        $prep_state = $this->db_conn->prepare($sql);
	        $prep_state->bindParam(1, $this->nombrelugar);
	        $prep_state->bindParam(2, $this->calle);
	        $prep_state->bindParam(3, $this->numero);
	        $prep_state->bindParam(4, $this->colonia);
	        $prep_state->bindParam(5, $this->anexo);
	        $prep_state->bindParam(6, $this->ciudad);
	    	
	  

	        if ($prep_state->execute()) 
	        	{
	            	return true;
	            	$this->ultimoparametro = PDO::lastInsertId() ;


	        	} 
	        		else 
	        	{
	            	return false;
	        	}
            

    	}

	}


 ?>