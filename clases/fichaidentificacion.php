<?php 
	
	class Fichaidentificacion 
	{
		//Base de datos
		public $db_conn;
		public $table_name = "fichaidentificacion";

		//Datos de la ficha
		public $fichaidentificacion;
		public $idusuario;
		public $anosexperiencia;
		public $svpr;
		public $fechaadiestramiento;
		public $cursorealizado;
		public $gradoescolar;
		public $numerocursosimpartidos;
		public $expiracionlicencia;

		//Bandera (No terminado bien)
		public $comprobacion;

			
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

		}

		/*
		function getficha()
		{
			$sql = "SELECT * FROM " . $this->table_name . " WHERE idusuario = :id";

        	$prep_state = $this->db_conn->prepare($sql);
	        $prep_state->bindParam(':id', $this->id);
	        $prep_state->execute();

	        $row = $prep_state->fetch(PDO::FETCH_ASSOC);

	        $this->nombre = $row['nombre'];
	        $this->apaterno = $row['apaterno'];
	        $this->amaterno = $row['amaterno'];
	        $this->matricula = $row['matricula'];
	        $this->rol = $row['rol'];
	        $this->correo = $row['correo'];


		}
		*/

		function create()
    	{
        
	        $sql = "INSERT INTO " . $this->table_name . " SET usuario_idusuario      = ?, 
	                                                          anosexperiencia        = ?, 
	                                                          svpr                   = ?, 
	                                                          fechaadiestramiento    = ?, 
	                                                          cursorealizado         = ?, 
	                                                          gradoescolar           = ?, 
	                                                          numerocursosimpartidos = ?, 
	                                                          expiracionlicencia     = ?";

	        $prep_state = $this->db_conn->prepare($sql);

	        $prep_state->bindParam(1, $this->idusuario);
	        $prep_state->bindParam(2, $this->anosexperiencia);
	        $prep_state->bindParam(3, $this->svpr);
	        $prep_state->bindParam(4, $this->fechaadiestramiento);
	        $prep_state->bindParam(5, $this->cursorealizado);
	        $prep_state->bindParam(6, $this->gradoescolar);
	        $prep_state->bindParam(7, $this->numerocursosimpartidos);
	        $prep_state->bindParam(8, $this->expiracionlicencia);


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