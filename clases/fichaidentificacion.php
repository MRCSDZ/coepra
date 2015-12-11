<?php 
	
	class Fichaidentificacion 
	{
		//Base de datos
		public $db_conn;
		public $table_name = "fichaidentificacion";

		//Datos de la ficha
		public $fichaidentificacion;
		public $idusuario;

		public $empresainstitucion;
		public $anosexperiencia;
		public $svpr;
		public $fechaadiestramiento;
		public $cursorealizado;
		public $gradoescolar;
		public $numerocursosimpartidos;
		public $expiracionlicencia;

		//Bandera (No terminado bien)
		public $comprobacion;
		public $idf;

			
		function __construct($db)
		{
			$this->db_conn = $db;

		}

		function exist()
		{
			$sql="SELECT idfichaidentificacion 
				  FROM fichaidentificacion
				  WHERE usuario_idusuario = :id";

			$prep_state = $this->db_conn->prepare($sql);
        	$prep_state->bindParam(':id', $this->id);
        	$prep_state->execute();

        	$row = $prep_state->fetch(PDO::FETCH_ASSOC);

        	$this->comprobacion = $row;
        	$this->idf = $row["idfichaidentificacion"];

		}

		
		function getficha()
		{
			$sql = "SELECT * FROM " . $this->table_name . " WHERE usuario_idusuario = :idusuario";

        	$prep_state = $this->db_conn->prepare($sql);
	        $prep_state->bindParam(':idusuario', $this->idusuario);
	        $prep_state->execute();

	        $row = $prep_state->fetch(PDO::FETCH_ASSOC);

	        $this->empresainstitucion = $row['empresainstitucion'];
	        $this->anosexperiencia = $row['anosexperiencia'];
	        $this->svpr = $row['svpr'];
	        $this->fechaadiestramiento = $row['fechaadiestramiento'];
	        $this->cursorealizado = $row['cursorealizado'];
	        $this->gradoescolar = $row['gradoescolar'];
	        $this->numerocursosimpartidos = $row['numerocursosimpartidos'];
	        $this->expiracionlicencia = $row['expiracionlicencia'];



		}
		

		function create()
    	{
        
	        $sql = "INSERT INTO " . $this->table_name . " SET usuario_idusuario      = ?,
	        												  empresainstitucion	 = ?,
	                                                          anosexperiencia        = ?, 
	                                                          svpr                   = ?, 
	                                                          fechaadiestramiento    = ?, 
	                                                          cursorealizado         = ?, 
	                                                          gradoescolar           = ?, 
	                                                          numerocursosimpartidos = ?, 
	                                                          expiracionlicencia     = ?";

	        
	        $prep_state = $this->db_conn->prepare($sql);

	        $prep_state->bindParam(1, $this->idusuario);
	        $prep_state->bindParam(2, $this->empresainstitucion);
	        $prep_state->bindParam(3, $this->anosexperiencia);
	        $prep_state->bindParam(4, $this->svpr);
	        $prep_state->bindParam(5, $this->fechaadiestramiento);
	        $prep_state->bindParam(6, $this->cursorealizado);
	        $prep_state->bindParam(7, $this->gradoescolar);
	        $prep_state->bindParam(8, $this->numerocursosimpartidos);
	        $prep_state->bindParam(9, $this->expiracionlicencia);

	        if ($prep_state->execute()) 
	        {
	            return true;
	        } 

	        else 
	        {
	        	return false;
	    	}

    	}


	    function update()
	    {
	        $sql = "UPDATE " . $this->table_name . " SET empresainstitucion = :empresainstitucion, 
	                                                     anosexperiencia        = :anosexperiencia, 
	                                                     svpr                   = :svpr, 
	                                                     fechaadiestramiento    = :fechaadiestramiento, 
	                                                     cursorealizado         = :cursorealizado,
	                                                     gradoescolar 		    = :gradoescolar,
	                                                     numerocursosimpartidos = :numerocursosimpartidos,
	                                                     expiracionlicencia     = :expiracionlicencia

	                                               WHERE usuario_idusuario = :idusuario";
	        // prepare query
	        $prep_state = $this->db_conn->prepare($sql);

	        $prep_state->bindParam(':idusuario', $this->idusuario);
	        $prep_state->bindParam(':empresainstitucion', $this->empresainstitucion);
	        $prep_state->bindParam(':anosexperiencia', $this->anosexperiencia);
	        $prep_state->bindParam(':svpr', $this->svpr);
	        $prep_state->bindParam(':fechaadiestramiento', $this->fechaadiestramiento);
	        $prep_state->bindParam(':cursorealizado', $this->cursorealizado);
	        $prep_state->bindParam(':gradoescolar', $this->gradoescolar);
	        $prep_state->bindParam(':numerocursosimpartidos', $this->numerocursosimpartidos);
	        $prep_state->bindParam(':expiracionlicencia', $this->expiracionlicencia);

	        // execute the query
	        if ($prep_state->execute()) {
	            return true;
	        } else {
	            return false;
	        }
	    }

	    function delete()
    	{
	        $sql = "DELETE FROM " . $this->table_name . " WHERE usuario_idusuario = :id ";

	        $prep_state = $this->db_conn->prepare($sql); 
	        $prep_state->bindParam(':id', $this->idusuario);

	        if ($prep_state->execute()) {
	            return true;
	        } else {
	            return false;
	        }
    	}

    	/*
    	 function getAllFichas()
    	{
	        $sql = "SELECT idusuario, nombre, apaterno, amaterno, matricula, rol, correo FROM " . $this->table_name;


	        $prep_state = $this->db_conn->prepare($sql);
	        $prep_state->execute();

	        return $prep_state;
	        $db_conn = NULL;
    	}

    	*/






	}



 ?>