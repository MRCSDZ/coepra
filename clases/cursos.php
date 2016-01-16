<?php 
	/**
	* 
	*/
	class Curso 
	{
        //Variables 
		public $db_conn;
    public $table_name = "curso";
		
		public $idusuario;
    public $empresainstitucion;
    public $idcurso;

    public $idfichaidentificacion;
		public $nombrecurso;
		public $fechacurso;
		public $horariocurso;
		public $empresadirigida;
		public $giroasociacion;
		public $estadocurso;

    public $cantidadactivos;
    public $cantidadinactivos;
    public $diastranscurridos;
    public $cantidadcursos;
		

		function __construct($db)
		{
			$this->db_conn = $db;

		}

    function cantidadcursosactivos()
    {
      $sql="SELECT COUNT(curso.idcurso) AS cantidadactivos
              FROM curso
        INNER JOIN fichaidentificacion
                ON fichaidentificacion.idfichaidentificacion = curso.fechaidentificacion_idfechaidentificacion
             WHERE fichaidentificacion.usuario_idusuario = :idusuario
               AND curso.estadocurso = 'ACTIVO'"; 

      $prep_state = $this->db_conn->prepare($sql);
      $prep_state->bindParam(':idusuario', $this->idusuario);
      $prep_state->execute();

      $row = $prep_state->fetch(PDO::FETCH_ASSOC);

      $this->cantidadactivos = $row['cantidadactivos'];
            

    }

    function cantidadcursos()
    {
      $sql="SELECT COUNT(curso.idcurso) AS cantidadcursos
              FROM curso
        INNER JOIN fichaidentificacion
                ON fichaidentificacion.idfichaidentificacion = curso.fechaidentificacion_idfechaidentificacion
             WHERE fichaidentificacion.usuario_idusuario = :idusuario"; 

      $prep_state = $this->db_conn->prepare($sql);
      $prep_state->bindParam(':idusuario', $this->idusuario);
      $prep_state->execute();

      $row = $prep_state->fetch(PDO::FETCH_ASSOC);

      $this->cantidadcursos = $row['cantidadcursos'];
            

    }



    
    function MostrarMisCursosActivos()
    {
      $sql="    SELECT idcurso, 
                       nombrecurso, 
                       fechacurso, 
                       empresadirigida
                  FROM curso 
            INNER JOIN fichaidentificacion 
                    ON fichaidentificacion.idfichaidentificacion = curso.fechaidentificacion_idfechaidentificacion
         WHERE fichaidentificacion.usuario_idusuario = :idusuario
           AND curso.estadocurso = 'ACTIVO'"; 

      $prep_state = $this->db_conn->prepare($sql);
      $prep_state->bindParam(':idusuario', $this->idusuario);
      $prep_state->execute();

      return $prep_state;
      $db_conn = NULL;
            

    }



    function MostrarMisCursosInactivos()
    {
      $sql="    SELECT idcurso, 
                       nombrecurso, 
                       fechacurso, 
                       empresadirigida
                  FROM curso 
            INNER JOIN fichaidentificacion 
                    ON fichaidentificacion.idfichaidentificacion = curso.fechaidentificacion_idfechaidentificacion
         WHERE fichaidentificacion.usuario_idusuario = :idusuario
           AND curso.estadocurso = 'INACTIVO'"; 

      $prep_state = $this->db_conn->prepare($sql);
      $prep_state->bindParam(':idusuario', $this->idusuario);
      $prep_state->execute();

      return $prep_state;
      $db_conn = NULL;
            

    }

    function cantidadcursosinactivos()
    {
      $sql="SELECT COUNT(curso.idcurso) AS cantidadinactivos
              FROM curso
        INNER JOIN fichaidentificacion
                ON fichaidentificacion.idfichaidentificacion = curso.fechaidentificacion_idfechaidentificacion
             WHERE fichaidentificacion.usuario_idusuario = :idusuario
                   AND curso.estadocurso = 'INACTIVO'"; 

      $prep_state = $this->db_conn->prepare($sql);
      $prep_state->bindParam(':idusuario', $this->idusuario);
      $prep_state->execute();

      $row = $prep_state->fetch(PDO::FETCH_ASSOC);

      $this->cantidadinactivos = $row['cantidadinactivos'];
        

    }

        function cantidaddiastranscurridos()
        {
            $sql="    SELECT (day(now())-(day(curso.fechacurso))) as dias 
                        FROM curso 
                       WHERE idcurso = :idcurso"; 

            $prep_state = $this->db_conn->prepare($sql);
            $prep_state->bindParam(':idcurso', $this->idcurso);
            $prep_state->execute();

            $row = $prep_state->fetch(PDO::FETCH_ASSOC);

            $this->diastranscurridos = $row['dias'];
        }
            




		function create()
    	{
        
        //Obtener id de la ficha
        $sql = "INSERT INTO " . $this->table_name . " SET fechaidentificacion_idfechaidentificacion = ?,
        												  nombrecurso     = ?, 
                                                          lugarcurso_idlugarcurso = 0,
                                                          fechacurso   = ?, 
                                                          horariocurso   = ?, 
                                                          empresadirigida  = ?, 
                                                          giroasociacion = ?, 
                                                          estadocurso        = ?";

        $prep_state = $this->db_conn->prepare($sql);
        $prep_state->bindParam(1, $this->idfichaidentificacion);
        $prep_state->bindParam(2, $this->nombrecurso);
        $prep_state->bindParam(3, $this->fechacurso);
        $prep_state->bindParam(4, $this->horariocurso);
        $prep_state->bindParam(5, $this->empresadirigida);
        $prep_state->bindParam(6, $this->giroasociacion);
        $prep_state->bindParam(7, $this->estadocurso);
  

        if ($prep_state->execute()) 
        	{
            	return true;
        	} 
        		else 
        	{
            	return false;
        	}

    	}

        //TODOS LOS CURSOS ACTIVOS
        function cursosactivosgeneral()
        {
            $sql = "SELECT idcurso, 
                           nombrecurso, 
                           fechacurso, 
                           empresadirigida 
                      FROM curso 
                     WHERE estadocurso = 'ACTIVO' ";


            $prep_state = $this->db_conn->prepare($sql);
            $prep_state->execute();

            return $prep_state;
            $db_conn = NULL;
        }





        //Un curso en especifico
        function getcurso()
        {
            $sql = "SELECT curso.idcurso,
                           curso.fechaidentificacion_idfechaidentificacion, 
                           curso.nombrecurso, 
                           curso.fechacurso, 
                           curso.horariocurso, 
                           curso.empresadirigida, 
                           curso.giroasociacion,
                           curso.estadocurso, 
                           fichaidentificacion.empresainstitucion 
                      FROM curso 
                INNER JOIN fichaidentificacion 
                        ON curso.fechaidentificacion_idfechaidentificacion = fichaidentificacion.idfichaidentificacion
                     WHERE curso.idcurso = :idcurso";

            $prep_state = $this->db_conn->prepare($sql);
            $prep_state->bindParam(':idcurso', $this->idcurso);
            
            $prep_state->execute();

            $row = $prep_state->fetch(PDO::FETCH_ASSOC);

            $this->nombrecurso = $row['nombrecurso'];
            $this->fechacurso = $row['fechacurso'];
            $this->horariocurso = $row['horariocurso'];
            $this->empresadirigida = $row['empresadirigida'];
            $this->giroasociacion = $row['giroasociacion'];
            $this->empresainstitucion = $row['empresainstitucion'];
            $this->estadocurso = $row['estadocurso'];

            
        }

        function update()
        {
             $sql = "UPDATE curso 
                        SET nombrecurso     = :nombrecurso, 
                            fechacurso      = :fechacurso, 
                            horariocurso    = :horariocurso, 
                            empresadirigida = :empresadirigida, 
                            giroasociacion  = :giroasociacion  
                      WHERE idcurso       = :idcurso";
            
            $prep_state = $this->db_conn->prepare($sql);

            $prep_state->bindParam(':nombrecurso', $this->nombrecurso);
            $prep_state->bindParam(':fechacurso', $this->fechacurso);
            $prep_state->bindParam(':horariocurso', $this->horariocurso);
            $prep_state->bindParam(':empresadirigida', $this->empresadirigida);
            $prep_state->bindParam(':giroasociacion', $this->giroasociacion);
            $prep_state->bindParam(':idcurso', $this->idcurso);

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

        function TerminarCurso()
        {
             $sql = "UPDATE curso 
                        SET estadocurso     = 'INACTIVO' 
                      WHERE idcurso       = :idcurso";
            
            $prep_state = $this->db_conn->prepare($sql);
            $prep_state->bindParam(':idcurso', $this->idcurso);

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

        function ActivarCurso()
        {
             $sql = "UPDATE curso 
                        SET estadocurso     = 'ACTIVO' 
                      WHERE idcurso       = :idcurso";
            
            $prep_state = $this->db_conn->prepare($sql);
            $prep_state->bindParam(':idcurso', $this->idcurso);

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

        function EliminarCurso()
        {
          $sql = "DELETE FROM  curso WHERE idcurso = :idcurso ";

          $prep_state = $this->db_conn->prepare($sql); 
          $prep_state->bindParam(':idcurso', $this->idcurso);

          if ($prep_state->execute()) {
              return true;
          } else {
              return false;
          }
                
        }

        





	}



 ?>