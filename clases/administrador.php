<?php 
class Administrador
	{	public $db_conn;
		
		//Cantidades 
		public $cantidadtotalcursos;
		public $cantidadtotalcursosactivos;
		public $cantidadtotalcursosterminados;
		public $cantidadtotaltamp;
		public $cantidadtotalusuarios;
		public $cantidadtotalambulancias;
		public $idfichaidentificacion;
		public $idusuario;

		

		

		
		function __construct($db)
		{
			$this->db_conn = $db;
			
		}

		function TotalCursosImpartidos()
    	{
	    	$sql = "SELECT COUNT(idcurso) as CantidadTotal
	    			FROM curso";

	        $prep_state = $this->db_conn->prepare($sql);
	        $prep_state->bindParam(':idcurso', $this->idcurso);
	        $prep_state->execute();

	        $row = $prep_state->fetch(PDO::FETCH_ASSOC);

	        $this->cantidadtotalcursos = $row['CantidadTotal'];


    	}

    	function TotalCursosActivos()
    	{
	    	$sql = "SELECT COUNT(idcurso) as CantidadTotal
	    			FROM curso
	    			WHERE estadocurso = 'ACTIVO'";

	        $prep_state = $this->db_conn->prepare($sql);
	        $prep_state->bindParam(':idcurso', $this->idcurso);
	        $prep_state->execute();

	        $row = $prep_state->fetch(PDO::FETCH_ASSOC);

	        $this->cantidadtotalcursosactivos = $row['CantidadTotal'];


    	}

    	function TotalCursosTerminados()
    	{
	    	$sql = "SELECT COUNT(idcurso) as CantidadTotal
	    			FROM curso
	    			WHERE estadocurso = 'INACTIVO'";

	        $prep_state = $this->db_conn->prepare($sql);
	        $prep_state->bindParam(':idcurso', $this->idcurso);
	        $prep_state->execute();

	        $row = $prep_state->fetch(PDO::FETCH_ASSOC);

	        $this->cantidadtotalcursosterminados = $row['CantidadTotal'];


    	}

    	function TotalUsuariosRegistrados()
    	{
	    	$sql = "SELECT COUNT(idusuario) as CantidadTotalUsuarios
	    			FROM usuario";

	        $prep_state = $this->db_conn->prepare($sql);
	        $prep_state->bindParam(':idcurso', $this->idcurso);
	        $prep_state->execute();

	        $row = $prep_state->fetch(PDO::FETCH_ASSOC);

	        $this->cantidadtotalusuarios = $row['CantidadTotalUsuarios'];


    	}

    	function TotalTAMPSRegistrados()
    	{
	    	$sql = "SELECT COUNT(idtamp) as CantidadTotalTAMPS
	    			FROM tamp";

	        $prep_state = $this->db_conn->prepare($sql);
	        $prep_state->bindParam(':idcurso', $this->idcurso);
	        $prep_state->execute();

	        $row = $prep_state->fetch(PDO::FETCH_ASSOC);

	        $this->cantidadtotaltamp = $row['CantidadTotalTAMPS'];


    	}

    	function ConsultarCursos()
    	{

    		$sql = "SELECT curso.idcurso,
	   					   curso.nombrecurso,
	                       curso.fechaidentificacion_idfechaidentificacion,
	                       fichaidentificacion.usuario_idusuario,
	                       CONCAT(usuario.nombre,' ', usuario.apaterno, ' ', usuario.amaterno) AS nombrecompleto,
	                       curso.lugarcurso_idlugarcurso,
                           lugarcurso.nombrelugar,
	                       curso.giroasociacion,
                           curso.estadocurso,
                           curso.empresadirigida
				      FROM curso
                INNER JOIN fichaidentificacion
                        ON fichaidentificacion.idfichaidentificacion = curso.fechaidentificacion_idfechaidentificacion
                     INNER JOIN usuario
                        ON usuario.idusuario = fichaidentificacion.usuario_idusuario
                INNER JOIN lugarcurso
                        ON lugarcurso.idlugarcurso = curso.lugarcurso_idlugarcurso;";


            $prep_state = $this->db_conn->prepare($sql);
            $prep_state->bindParam(':idusuario', $this->idusuario);
            $prep_state->execute();

            return $prep_state;
            $db_conn = NULL;
        }

        function ConsultarFichasIdentificacion()
    	{

    		$sql = "SELECT  fichaidentificacion.idfichaidentificacion, 
							fichaidentificacion.usuario_idusuario, 
							fichaidentificacion.empresainstitucion, 
							fichaidentificacion.anosexperiencia, 
							fichaidentificacion.svpr, 
							fichaidentificacion.fechaadiestramiento, 
							fichaidentificacion.cursorealizado, 
							fichaidentificacion.gradoescolar, 
							fichaidentificacion.numerocursosimpartidos, 
							fichaidentificacion.expiracionlicencia, 
							CONCAT(usuario.nombre, ' ', usuario.apaterno, ' ', usuario.amaterno) AS nombreinstructor
					 FROM 	fichaidentificacion
               INNER JOIN 	usuario
                       ON   fichaidentificacion.usuario_idusuario = usuario.idusuario";


            $prep_state = $this->db_conn->prepare($sql);
            $prep_state->bindParam(':idusuario', $this->idusuario);
            $prep_state->execute();

            return $prep_state;
            $db_conn = NULL;
        }

         function ConsultarInstructores()
    	{

    		$sql = "SELECT  CONCAT(usuario.nombre, ' ', usuario.apaterno, ' ', usuario.amaterno) AS nombreinstructor, 
    						usuario.matricula,
    						usuario.correo,
    						usuario.idusuario,
    						usuario.telefono
					 FROM 	usuario
               		WHERE rol = 'INSTRUCTOR'";


            $prep_state = $this->db_conn->prepare($sql);
            $prep_state->execute();

            return $prep_state;
            $db_conn = NULL;
        }
        
        function MostrarCursoEspecifico()
    	{
	      $sql="    SELECT curso.idcurso, 
	                       curso.nombrecurso, 
	                       curso.fechacurso,
	                       curso.horariocurso,
	                       curso.giroasociacion,
	                       curso.estadocurso, 
	                       curso.empresadirigida,
						   curso.estadocurso,
						   IF(curso.estadocurso = 'ACTIVO', 'success', 'danger') As color
	                  FROM curso 
	            INNER JOIN fichaidentificacion 
	                    ON fichaidentificacion.idfichaidentificacion = curso.fechaidentificacion_idfechaidentificacion
	         WHERE fichaidentificacion.usuario_idusuario = :idusuario
	           "; 

	      $prep_state = $this->db_conn->prepare($sql);
	      $prep_state->bindParam(':idusuario', $this->idusuario);
	      $prep_state->execute();

	      return $prep_state;
	      $db_conn = NULL;
            

    	}

    	function ConsultarInstructoresAuxiliares()
    	{

    		$sql = "SELECT instructorauxiliar.idinstructorauxiliar, 
						   instructorauxiliar.curso_idcurso,
						   CONCAT(instructorauxiliar.nombre, ' ', instructorauxiliar.apaterno, ' ', instructorauxiliar.amaterno) AS ncia,
						   instructorauxiliar.telefono,
		 				   instructorauxiliar.direccion,
						   curso.idcurso,
		 				   curso.nombrecurso,
						   curso.fechaidentificacion_idfechaidentificacion,
		  				   fichaidentificacion.idfichaidentificacion,
		 				   usuario.idusuario,
		 				   CONCAT(usuario.nombre, ' ', usuario.apaterno, ' ', usuario.amaterno) AS ncip
					  FROM instructorauxiliar
				INNER JOIN curso
						ON curso.idcurso = instructorauxiliar.curso_idcurso
				INNER JOIN fichaidentificacion
						ON fichaidentificacion.idfichaidentificacion = curso.fechaidentificacion_idfechaidentificacion
				INNER JOIN usuario
						ON usuario.idusuario = fichaidentificacion.usuario_idusuario

";


            $prep_state = $this->db_conn->prepare($sql);
            $prep_state->execute();

            return $prep_state;
            $db_conn = NULL;
        }

        function ConsultarEvidencias()
    	{

    		$sql = "SELECT  evidencias.idevidencia,
						    evidencias.curso_idcurso,
							evidencias.evidencia,
							evidencias.enlace,
							curso.idcurso,
							curso.nombrecurso,
							fichaidentificacion.usuario_idusuario,
							usuario.idusuario,
							CONCAT(usuario.nombre, ' ', usuario.apaterno, ' ', usuario.amaterno) AS nc
					FROM	evidencias
			  INNER JOIN    curso
   					  ON    curso.idcurso = evidencias.curso_idcurso
			  INNER JOIN 	fichaidentificacion
					  ON    curso.fechaidentificacion_idfechaidentificacion = fichaidentificacion.idfichaidentificacion
			  INNER JOIN    usuario 
					  ON    fichaidentificacion.usuario_idusuario = usuario.idusuario";


            $prep_state = $this->db_conn->prepare($sql);
            $prep_state->execute();

            return $prep_state;
            $db_conn = NULL;
        }

        function ConsultarAlumnos()
    	{

    		$sql = "SELECT alumno.idalumno,
							alumno.curso_idcurso,
							CONCAT(alumno.nombre, ' ', alumno.apaterno, ' ', alumno.amaterno) AS nombrealumno,
							alumno.lugartrabajo,
							alumno.fechanacimiento,
							alumno.edad,
							alumno.estadocivil,
							alumno.escolaridad,
							alumno.domicilio,
							alumno.telefono,
							alumno.correo,
							curso.nombrecurso,
							usuario.idusuario,
							CONCAT(usuario.nombre, ' ', usuario.apaterno, ' ', usuario.amaterno) AS nombreinstructor
					   FROM alumno
				 INNER JOIN curso
						 ON curso.idcurso = alumno.curso_idcurso
				 INNER JOIN fichaidentificacion
						 ON curso.fechaidentificacion_idfechaidentificacion = fichaidentificacion.idfichaidentificacion
				 INNER JOIN usuario
						 ON fichaidentificacion.usuario_idusuario = usuario.idusuario";


            $prep_state = $this->db_conn->prepare($sql);
            $prep_state->execute();

            return $prep_state;
            $db_conn = NULL;
        }

        function ConsultarTAMPS()
    	{

    		$sql = "SELECT * FROM tamp";


            $prep_state = $this->db_conn->prepare($sql);
            $prep_state->execute();

            return $prep_state;
            $db_conn = NULL;
        }

        function ConsultarCapacitaciones()
    	{

    		$sql = "SELECT capacitaciones.tamp_idtamp,
    						capacitaciones.rcp,
    						capacitaciones.acls,
    						capacitaciones.prntraumaetm,
    						capacitaciones.phtls,
    						capacitaciones.peep,
    						capacitaciones.pals,
    						capacitaciones.nals,
    						capacitaciones.empact,
    						capacitaciones.amls,
    						capacitaciones.fsc,
    						capacitaciones.otros,
    						CONCAT(tamp.nombre, ' ', tamp.apaterno, ' ', tamp.amaterno) AS nombretamp
    				FROM capacitaciones
    				INNER JOIN tamp
    				ON tamp.idtamp = capacitaciones.tamp_idtamp";


            $prep_state = $this->db_conn->prepare($sql);
            $prep_state->execute();

            return $prep_state;
            $db_conn = NULL;
        }





    	

    	



	}


 ?>