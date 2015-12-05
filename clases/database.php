<?php

class Database
{

    // used to connect to the database
    private $host = "localhost";
    private $db_name = "coeprafinal";
    private $username = "root";
    private $password = "";
    public $db_conn;

    // get the database connection
    public function getConnection()
    {
        $this->db_conn = null;

        try {
            $this->db_conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo "<h1> Error en la conexion de la base de datos:</h1> Consulta al Administrador" . $exception->getMessage();
        }
        return $this->db_conn;
    }
}

