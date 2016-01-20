<?php	
	/**
	* 
	*/
	class Reporte 
	{	
		public $db_conn;
		
		public $idalumno;
    public $idcurso;
    public $nombrecurso;
    public $fechacurso;
    public $horariocurso;
    public $empresadirigida;
    public $giroasociacion;
    public $estadocurso;
    public $nombrelugar;
    public $direccion;
    public $dependenciacurso;
    public $anosexperiencia;
    public $svpr;
    public $fechaadiestramiento;
    public $cursorealizado;
    public $gradoescolar;
    public $numerocursosimpartidos;
    public $expiracionlicencia;
    public $nombreinstructor;
    public $matricula;
    public $telefono;
    public $correo;
    public $consultacurso;
    public $fechareporte;
    

		



		
		function __construct($db)
		{
			$this->db_conn = $db;
		}

		function GenerarReporte()
    	{
        
        //Obtener id de la ficha
        $sql = "SELECT curso.idcurso,
                       curso.nombrecurso,
                       curso.fechacurso,
                       curso.horariocurso,
                       curso.empresadirigida,
                       curso.giroasociacion,
                       curso.estadocurso,
                       lugarcurso.nombrelugar,
                       CONCAT(lugarcurso.calle, ' ', lugarcurso.numero, ' ', lugarcurso.colonia, ' ', lugarcurso.ciudad ) AS direccion,
                       fichaidentificacion.empresainstitucion AS dependenciacurso,
                       fichaidentificacion.anosexperiencia,
                       fichaidentificacion.svpr,
                       fichaidentificacion.fechaadiestramiento,
                       fichaidentificacion.cursorealizado,
                       fichaidentificacion.gradoescolar,
                       fichaidentificacion.numerocursosimpartidos,
                       fichaidentificacion.expiracionlicencia,
                       CONCAT (usuario.nombre, ' ', usuario.apaterno, ' ', usuario.amaterno) AS nombreinstructor,
                       usuario.matricula,
                       usuario.telefono,
                       usuario.correo,
                       NOW() AS fechareporte
                 FROM  curso
            INNER JOIN lugarcurso
                    ON lugarcurso.idlugarcurso = curso.lugarcurso_idlugarcurso
            INNER JOIN fichaidentificacion
                    ON fichaidentificacion.idfichaidentificacion = curso.fechaidentificacion_idfechaidentificacion
            INNER JOIN usuario
                    ON fichaidentificacion.usuario_idusuario = usuario.idusuario
                 WHERE curso.idcurso = :idcurso";

          $prep_state = $this->db_conn->prepare($sql);
          $prep_state->bindParam(':idcurso', $this->idcurso);
          $prep_state->execute();

          $row = $prep_state->fetch(PDO::FETCH_ASSOC);

          $this->idcurso = $row['idcurso'];
          $this->nombrecurso = $row['nombrecurso'];
          $this->fechacurso = $row['fechacurso'];
          $this->horariocurso = $row['horariocurso'];
          $this->empresadirigida = $row['empresadirigida'];
          $this->giroasociacion = $row['giroasociacion'];
          $this->estadocurso = $row['estadocurso'];
          $this->nombrelugar = $row['nombrelugar'];
          $this->direccion = $row['direccion'];
          $this->dependenciacurso = $row['dependenciacurso'];
          $this->anosexperiencia = $row['anosexperiencia'];
          $this->svpr = $row['svpr'];
          $this->fechaadiestramiento = $row['fechaadiestramiento'];
          $this->cursorealizado = $row['cursorealizado'];
          $this->gradoescolar = $row['gradoescolar'];
          $this->numerocursosimpartidos = $row['numerocursosimpartidos'];
          $this->expiracionlicencia = $row['expiracionlicencia'];
          $this->nombreinstructor = $row['nombreinstructor'];
          $this->matricula = $row['matricula'];
          $this->telefono = $row['telefono'];
          $this->correo = $row['correo'];
          $this->fechareporte = $row['fechareporte'];


  

        if ($prep_state->execute()) 
        	{
            	return true;
        	} 
        		else 
        	{
            	return false;
        	}

    	}

      function FichaIdentificacionUsuario()
      {
      $sql = "SELECT fichaidentificacion.empresainstitucion,
                       fichaidentificacion.anosexperiencia,
                       fichaidentificacion.svpr,
                       fichaidentificacion.fechaadiestramiento,
                       fichaidentificacion.cursorealizado,
                       fichaidentificacion.gradoescolar,
                       fichaidentificacion.numerocursosimpartidos,
                       fichaidentificacion.expiracionlicencia,
                       CONCAT (usuario.nombre, ' ', usuario.apaterno, ' ', usuario.amaterno) AS nombreinstructor,
                       usuario.matricula,
                       usuario.telefono,
                       usuario.correo,
                       NOW() AS fechareporte
                FROM fichaidentificacion
                INNER JOIN usuario
                ON fichaidentificacion.usuario_idusuario = usuario.idusuario
                WHERE idusuario = :idusuario";

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
          $this->nombreinstructor = $row['nombreinstructor'];
          $this->matricula = $row['matricula'];
          $this->telefono = $row['telefono'];
          $this->correo = $row['correo'];
          $this->fechareporte = $row['fechareporte'];



    }

    	

    	



    	


	}
?>