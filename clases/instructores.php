<?php 
	/**
	* 
	*/
	class Instructores
	{
		public $db_conn;

		public $idinstructorauxiliar;
		public $idcurso;
		public $nombre;
		public $apaterno;
		public $amaterno;
		public $telefono;
		public $direccion;



		function __construct($db)
		{
			$this->db_conn = $db;
		}

		function create()
    	{
        
	        $sql = "INSERT INTO instructorauxiliar SET curso_idcurso     = ?, 
	                                                   nombre     = ?, 
	                                                   apaterno   = ?, 
	                                                   amaterno  = ?, 
	                                                   telefono = ?, 
	                                                   direccion     = ?";

	        $prep_state = $this->db_conn->prepare($sql);

	        $prep_state->bindParam(1, $this->idcurso);
	        $prep_state->bindParam(2, $this->nombre);
	        $prep_state->bindParam(3, $this->apaterno);
	        $prep_state->bindParam(4, $this->amaterno);
	        $prep_state->bindParam(5, $this->telefono);
	        $prep_state->bindParam(6, $this->direccion);
	    

	        if ($prep_state->execute()) 
	        {
	            return true;
	        } 
	        else 
	        {
	            return false;
	        }

    	}
    	
    	//Solo 1 instructor
    	function getInstructor()
    	{
	        $sql = "SELECT * FROM instructorauxiliar WHERE idinstructorauxiliar = :idinstructorauxiliar";

	        $prep_state = $this->db_conn->prepare($sql);
	        $prep_state->bindParam(':idinstructorauxiliar', $this->idinstructorauxiliar);
	        $prep_state->execute();

	        $row = $prep_state->fetch(PDO::FETCH_ASSOC);

	        $this->idinstructorauxiliar = $row['idinstructorauxiliar'];
	        $this->nombre = $row['nombre'];
	        $this->apaterno = $row['apaterno'];
	        $this->amaterno = $row['amaterno'];
	        $this->telefono = $row['telefono'];
	        $this->direccion = $row['direccion'];
	        
    	}
    	
    	//Varios Instructores
    	function getAllInstructoresCurso()
    	{
	        $sql = "SELECT idinstructorauxiliar, 
	        			   nombre, 
	        			   apaterno, 
	        			   amaterno, 
	        			   telefono, 
	        			   direccion 
	        	      FROM instructorauxiliar
	        	     WHERE curso_idcurso = :idcurso";


	        $prep_state = $this->db_conn->prepare($sql);
	        $prep_state->bindParam(':idcurso', $this->idcurso);
	        $prep_state->execute();

	        return $prep_state;
	        $db_conn = NULL;
    	}

    	function update()
    	{
	        $sql = "UPDATE instructorauxiliar SET nombre    = :nombre, 
	                                              apaterno  = :apaterno, 
	                                              amaterno  = :amaterno, 
	                                              telefono  = :telefono, 
	                                              direccion = :direccion
	                                        WHERE idinstructorauxiliar = :idinstructorauxiliar";
	        // prepare query
	        $prep_state = $this->db_conn->prepare($sql);

	        $prep_state->bindParam(':idinstructorauxiliar', $this->idinstructorauxiliar);
	        $prep_state->bindParam(':nombre', $this->nombre);
	        $prep_state->bindParam(':apaterno', $this->apaterno);
	        $prep_state->bindParam(':amaterno', $this->amaterno);
	        $prep_state->bindParam(':telefono', $this->telefono);
	        $prep_state->bindParam(':direccion', $this->direccion);

	       

	        // execute the query
	        if ($prep_state->execute()) 
	        {
	            return true;
	        } 
	        
	        else 
	        {
	            return false;
	        }

	    }

	     function delete($id)
    	{
	        $sql = "DELETE FROM instructorauxiliar WHERE idinstructorauxiliar = :idinstructorauxiliar ";

	        $prep_state = $this->db_conn->prepare($sql);
	        $prep_state->bindParam(':idinstructorauxiliar', $this->idinstructorauxiliar);

	         if ($prep_state->execute()) 
	        {
	            return true;
	        } 
	        
	        else 
	        {
	            return false;
	        }
    	}



	}



 ?>