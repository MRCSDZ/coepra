 <?php

class Usuario
{
    
    public $db_conn;
    public $table_name = "usuario";

    
    public $idusuario;
    public $nombre;
    public $apaterno;
    public $amaterno;
    public $matricula;
    public $contrasena;
    public $imagen;
    public $rol;
    public $correo;
    public $telefono;
    public $estado;

    public $idc;

    




    public function __construct($db)
    {
        $this->db_conn = $db;
    }


    function create()
    {
        
        $sql = "INSERT INTO " . $this->table_name . " SET nombre     = ?, 
                                                          apaterno   = ?, 
                                                          amaterno   = ?, 
                                                          matricula  = ?, 
                                                          contrasena = ?, 
                                                          rol        = ?, 
                                                          correo     = ?,
                                                          telefono   = ?";

        $prep_state = $this->db_conn->prepare($sql);

        $prep_state->bindParam(1, $this->nombre);
        $prep_state->bindParam(2, $this->apaterno);
        $prep_state->bindParam(3, $this->amaterno);
        $prep_state->bindParam(4, $this->matricula);
        $prep_state->bindParam(5, $this->contrasena);
        $prep_state->bindParam(6, $this->rol);
        $prep_state->bindParam(7, $this->correo);
        $prep_state->bindParam(8, $this->telefono);

        if ($prep_state->execute()) {
            return true;
        } else {
            return false;
        }

    }

    function update()
    {
        $sql = "UPDATE " . $this->table_name . " SET nombre    = :nombre, 
                                                     apaterno  = :apaterno, 
                                                     amaterno  = :amaterno, 
                                                     matricula = :matricula, 
                                                     rol       = :rol,
                                                     correo    = :correo,
                                                     telefono  = :telefono
                                               WHERE idusuario = :id";
        // prepare query
        $prep_state = $this->db_conn->prepare($sql);


        $prep_state->bindParam(':nombre', $this->nombre);
        $prep_state->bindParam(':apaterno', $this->apaterno);
        $prep_state->bindParam(':amaterno', $this->amaterno);
        $prep_state->bindParam(':matricula', $this->matricula);
        $prep_state->bindParam(':rol', $this->rol);
        $prep_state->bindParam(':correo', $this->correo);
        $prep_state->bindParam(':telefono', $this->telefono);
        $prep_state->bindParam(':id', $this->id);

        // execute the query
        if ($prep_state->execute()) {
            return true;
        } else {
            return false;
        }
    }


    function delete($id)
    {
        $sql = "DELETE FROM " . $this->table_name . " WHERE idusuario = :id ";

        $prep_state = $this->db_conn->prepare($sql);
        $prep_state->bindParam(':id', $this->id);

        if ($prep_state->execute(array(":id" => $_GET['id']))) {
            return true;
        } else {
            return false;
        }
    }


    


    function getAllUsers()
    {
        $sql = "SELECT idusuario, nombre, apaterno, amaterno, matricula, rol, correo, telefono FROM " . $this->table_name;


        $prep_state = $this->db_conn->prepare($sql);
        $prep_state->execute();

        return $prep_state;
        $db_conn = NULL;
    }

    
    
    function getUser()
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
        $this->telefono = $row['telefono'];
        $this->contrasena = $row['contrasena'];
        $this->estado = $row['estado'];
        $this->idc = $row['idusuario'];
    }

    function CambioContrasena()
    {
        $sql = "UPDATE " . $this->table_name . " SET contrasena    = :contrasena
                                                     
                                               WHERE idusuario = :id";
        // prepare query
        $prep_state = $this->db_conn->prepare($sql);


        $prep_state->bindParam(':contrasena', $this->contrasena);
        $prep_state->bindParam(':id', $this->id);

        // execute the query
        if ($prep_state->execute()) {
            return true;
        } else {
            return false;
        }
    }
    


}







