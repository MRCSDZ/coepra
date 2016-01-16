<?php 

	
	class Evidencia
	{	public $db_conn;
		
		public $idevidencia;
		public $idcurso;
		public $evidencia;
		public $enlace;
		

		

		
		function __construct($db)
		{
			$this->db_conn = $db;
			
		}

		function AgregarEvidencia()
    	{
	    	$sql = "INSERT INTO evidencias SET curso_idcurso = ?,
        									  evidencia     = ?, 
                                              enlace        = ?
                                               ";

	        $prep_state = $this->db_conn->prepare($sql);
	        $prep_state->bindParam(1, $this->idcurso);
	        $prep_state->bindParam(2, $this->evidencia);
	        $prep_state->bindParam(3, $this->enlace);
	        
	    	
	  

	        if ($prep_state->execute()) 
	        	{
	            	return true;
	            	


	        	} 
	        		else 
	        	{
	            	return false;
	        	}
            

    	}


    	function ConsultarMisEvidencias()
    	{
    		$sql="SELECT idevidencia,
    					 evidencia,
    					 enlace 
    			    FROM evidencias
				   WHERE curso_idcurso = :idcurso";

			 $prep_state = $this->db_conn->prepare($sql);
             $prep_state->bindParam(':idcurso', $this->idcurso);
             $prep_state->execute();

             return $prep_state;
             $db_conn = NULL;

    	}

    	function ConsultarEvidencia()
        {
            $sql="SELECT curso_idcurso,
    					 evidencia,
    					 enlace 
    			    FROM evidencias
				   WHERE idevidencia = :idevidencia";

			$prep_state = $this->db_conn->prepare($sql);
            $prep_state->bindParam(':idevidencia', $this->idevidencia);
            $prep_state->execute();


	        $row = $prep_state->fetch(PDO::FETCH_ASSOC);

	        $this->curso_idcurso = $row['curso_idcurso'];
	        $this->evidencia = $row['evidencia'];
	        $this->enlace = $row['enlace'];
	        

            
        }

        function ActualizarEvidencia()
	    {
	        $sql = "UPDATE evidencias
	        		   SET evidencia = :evidencia, 
	        			   enlace    = :enlace      
	                 WHERE idevidencia = :idevidencia";
	        // prepare query
	        $prep_state = $this->db_conn->prepare($sql);

	        $prep_state->bindParam(':evidencia', $this->evidencia);
	        $prep_state->bindParam(':enlace', $this->enlace);
	        $prep_state->bindParam(':idevidencia', $this->idevidencia);
	        

	        // execute the query
	        if ($prep_state->execute()) {
	            return true;
	        } else {
	            return false;
	        }
	    }

	    function EliminarEvidencia()
    	{
	        $sql = "DELETE FROM  evidencias WHERE idevidencia = :idevidencia ";

	        $prep_state = $this->db_conn->prepare($sql); 
	        $prep_state->bindParam(':idevidencia', $this->idevidencia);

	        if ($prep_state->execute()) {
	            return true;
	        } else {
	            return false;
	        }
    	}

    	



	}


 ?>