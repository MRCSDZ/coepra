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
	            	


	        	} 
	        		else 
	        	{
	            	return false;
	        	}
            

    	}

    	function RelacionarCurso()
    	{
	        $sql = "UPDATE curso 
	        		   SET lugarcurso_idlugarcurso = :idlugarcurso            
	                 WHERE idcurso = :idcurso";
	        // prepare query
	        $prep_state = $this->db_conn->prepare($sql);


	        $prep_state->bindParam(':idlugarcurso', $this->idlugarcurso);
	        $prep_state->bindParam(':idcurso', $this->idcurso);
	        

	        // execute the query
	        if ($prep_state->execute()) {
	            return true;
	        } else {
	            return false;
	        }
    	}

    	function VerLugar()
    	{
    		$sql="SELECT nombrelugar,
    					 calle,
    					 numero,
    					 colonia,
    					 anexo,
    					 ciudad 
    			    FROM lugarcurso
			  INNER JOIN curso
					  ON lugarcurso.idlugarcurso = curso.lugarcurso_idlugarcurso
				   WHERE curso.idcurso = :idcurso";

			$prep_state = $this->db_conn->prepare($sql);
	        $prep_state->bindParam(':idcurso', $this->idcurso);
	        $prep_state->execute();

	        $row = $prep_state->fetch(PDO::FETCH_ASSOC);

	        $this->nombrelugar = $row['nombrelugar'];
	        $this->calle = $row['calle'];
	        $this->numero = $row['numero'];
	        $this->colonia = $row['colonia'];
	        $this->anexo = $row['anexo'];
	        $this->ciudad = $row['ciudad'];

    	}

    	



	}


 ?>