<?php	
	/**
	* 
	*/
	class Alumnos 
	{	
		public $db_conn;
		
		public $idalumno;
		public $idcurso;
		public $nombre;
		public $apaterno;
		public $amaterno;
		public $lugartrabajo;
		public $fechanacimiento;
		public $edad;
		public $estadocivil;
		public $escolaridad;
		public $domicilio;
		public $telefono;
		public $correo;

		public $cantidadalumos;
		public $idusuario;
		public $cantidadtotalalumnos;

		public $sexo;
		public $fechaelaboracion;
		public $lugarnacimiento;



		
		function __construct($db)
		{
			$this->db_conn = $db;
		}

		function AgregarAlumno()
    	{
        
        //Obtener id de la ficha
        $sql = "INSERT INTO alumno SET curso_idcurso   = ?,
        							   nombre          = ?, 
                                       apaterno        = ?, 
                                       amaterno        = ?, 
                                       lugartrabajo    = ?, 
                                       fechanacimiento = ?, 
                                       edad            = ?,
                                       estadocivil     = ?,
                                       escolaridad     = ?,
                                       domicilio       = ?,
                                       telefono        = ?,
                                       correo          = ?";

        $prep_state = $this->db_conn->prepare($sql);

        $prep_state->bindParam(1, $this->idcurso);
        $prep_state->bindParam(2, $this->nombre);
        $prep_state->bindParam(3, $this->apaterno);
        $prep_state->bindParam(4, $this->amaterno);
        $prep_state->bindParam(5, $this->lugartrabajo);
        $prep_state->bindParam(6, $this->fechanacimiento);
        $prep_state->bindParam(7, $this->edad);
        $prep_state->bindParam(8, $this->estadocivil);
        $prep_state->bindParam(9, $this->escolaridad);
        $prep_state->bindParam(10, $this->domicilio);
        $prep_state->bindParam(11, $this->telefono);
        $prep_state->bindParam(12, $this->correo);
  

        if ($prep_state->execute()) 
        	{
            	return true;
        	} 
        		else 
        	{
            	return false;
        	}

    	}

    	function CantidadAlumnosCurso()
    	{
	      $sql="SELECT COUNT(alumno.idalumno) as cantidadalumnos
	      		  FROM alumno 
	      		 WHERE alumno.curso_idcurso = :idcurso";
 

	      $prep_state = $this->db_conn->prepare($sql);
	      $prep_state->bindParam(':idcurso', $this->idcurso);
	      $prep_state->execute();

	      $row = $prep_state->fetch(PDO::FETCH_ASSOC);

	      $this->cantidadalumos = $row['cantidadalumnos'];
            

    	}

    	function ConsultarAlumnosCurso()
        {
            $sql = "SELECT * 
                      FROM alumno 
                     WHERE curso_idcurso = :idcurso ";


            $prep_state = $this->db_conn->prepare($sql);
            $prep_state->bindParam(':idcurso', $this->idcurso);
            $prep_state->execute();

            return $prep_state;
            $db_conn = NULL;
        }

        function ConsultarAlumno()
        {
            $sql = "SELECT *
                      FROM alumno 
                     WHERE idalumno = :idalumno ";

            $prep_state = $this->db_conn->prepare($sql);
	        $prep_state->bindParam(':idalumno', $this->idalumno);
	        $prep_state->execute();

	        $row = $prep_state->fetch(PDO::FETCH_ASSOC);

	        $this->idalumno = $row['idalumno'];
	        $this->nombre = $row['nombre'];
	        $this->apaterno = $row['apaterno'];
	        $this->amaterno = $row['amaterno'];
	        $this->lugartrabajo = $row['lugartrabajo'];
	        $this->fechanacimiento = $row['fechanacimiento'];
	        $this->edad = $row['edad'];
	        $this->estadocivil = $row['estadocivil'];
	        $this->escolaridad = $row['escolaridad'];
	        $this->domicilio = $row['domicilio'];
	        $this->telefono = $row['telefono'];
	        $this->correo = $row['correo'];
	        $this->fechaelaboracion = $row['fechaelaboracion'];


            
        }

        function ActualizarAlumno()
	    {
	        $sql = "UPDATE alumno SET nombre          = :nombre, 
	        						  apaterno        = :apaterno, 
	                                  amaterno        = :amaterno, 
	                                  lugartrabajo    = :lugartrabajo, 
	                                  fechanacimiento = :fechanacimiento,
	                                  edad  		  = :edad,
	                                  estadocivil     = :estadocivil,
	                                  escolaridad     = :escolaridad,
	                                  domicilio       = :domicilio,
	                                  telefono        = :telefono,
	                                  correo     	  = :correo
	                           WHERE  idalumno        = :idalumno";
	        // prepare query
	        $prep_state = $this->db_conn->prepare($sql);

	        $prep_state->bindParam(':nombre', $this->nombre);
	        $prep_state->bindParam(':apaterno', $this->apaterno);
	        $prep_state->bindParam(':amaterno', $this->amaterno);
	        $prep_state->bindParam(':lugartrabajo', $this->lugartrabajo);
	        $prep_state->bindParam(':fechanacimiento', $this->fechanacimiento);
	        $prep_state->bindParam(':edad', $this->edad);
	        $prep_state->bindParam(':estadocivil', $this->estadocivil);
	        $prep_state->bindParam(':escolaridad', $this->escolaridad);
	        $prep_state->bindParam(':domicilio', $this->domicilio);
	        $prep_state->bindParam(':telefono', $this->telefono);
	        $prep_state->bindParam(':correo', $this->correo);
	        $prep_state->bindParam(':idalumno', $this->idalumno);

	        // execute the query
	        if ($prep_state->execute()) {
	            return true;
	        } else {
	            return false;
	        }
	    }

	    function EliminarAlumno()
    	{
	        $sql = "DELETE FROM  alumno WHERE idalumno = :idalumno ";

	        $prep_state = $this->db_conn->prepare($sql); 
	        $prep_state->bindParam(':idalumno', $this->idalumno);

	        if ($prep_state->execute()) {
	            return true;
	        } else {
	            return false;
	        }
    	}

    	function ConsultarAlumnosGeneralUsuario()
    	{

    		$sql = "SELECT alumno.idalumno, 
    					   alumno.curso_idcurso, 
    					   CONCAT(alumno.nombre, ' ', alumno.apaterno, ' ', alumno.amaterno) AS nombrecompleto, 
    					   alumno.telefono, 
    					   alumno.correo, 
    					   curso.idcurso, 
    					   curso.nombrecurso 
    				  FROM alumno 
    		    INNER JOIN curso 
    		            ON alumno.curso_idcurso = curso.idcurso 
    		    INNER JOIN fichaidentificacion 
    		            ON fichaidentificacion.idfichaidentificacion = curso.fechaidentificacion_idfechaidentificacion
					 WHERE fichaidentificacion.usuario_idusuario = :idusuario";


            $prep_state = $this->db_conn->prepare($sql);
            $prep_state->bindParam(':idusuario', $this->idusuario);
            $prep_state->execute();

            return $prep_state;
            $db_conn = NULL;



    	}

    	function CantidadTotalAlumnosMisCursos()
    	{
	      $sql = "SELECT COUNT(idalumno) as cantidadtotalalumnos
    				  FROM alumno 
    		    INNER JOIN curso 
    		            ON alumno.curso_idcurso = curso.idcurso 
    		    INNER JOIN fichaidentificacion 
    		            ON fichaidentificacion.idfichaidentificacion = curso.fechaidentificacion_idfechaidentificacion
					 WHERE fichaidentificacion.usuario_idusuario = :idusuario";
 

	      $prep_state = $this->db_conn->prepare($sql);
	      $prep_state->bindParam(':idusuario', $this->idusuario);
	      $prep_state->execute();

	      $row = $prep_state->fetch(PDO::FETCH_ASSOC);

	      $this->cantidadtotalalumnos = $row['cantidadtotalalumnos'];
            

    	}

    	



    	


	}
?>