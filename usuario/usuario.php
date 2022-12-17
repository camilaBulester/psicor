<?php

    include_once('../config/config.php');
    include('../config/Database.php');

    class usuario
    {
        public $conexion;

        function __construct(){

            $db = new Database();
            $this->conexion = $db->connectToDatabase();
        }
        function save($params){
            $dni =$params ["dni"];
            $nombres = $params['nombres'];
            $apellidos = $params['apellidos'];
            $email = $params['email'];
            $profesion = $params['profesion'];
          
            $insert = " INSERT INTO usuario VALUES (NULL, '$dni', '$nombres', '$apellidos', '$email', '$profesion')";
            return mysqli_query($this->conexion, $insert);

        }

        function getAll(){
            $sql = "SELECT * FROM usuario";
            return mysqli_query($this->conexion, $sql);
    }
    function getOne($id){
        $sql = "SELECT * FROM usuario WHERE id=$id";
        return mysqli_query($this->conexion, $sql);
    }

    function update($params){
        $dni = isset ( $params ['dni']);
        $nombres = isset ( $params['nombres']);
        $apellidos = isset ( $params['apellidos']);
        $email = isset ($params['email']);
        $profesion = isset ( $params['profesion']);
        $id = isset ($params['id']);


        $update = "UPDATE usuario SET dni='$dni',  nombres='$nombres', apellidos='$apellidos', email='$email', 
        profesion ='$profesion' WHERE id = $id ";
        return mysqli_query($this->conexion, $update);
    }

    function delete($id){
        $delete = " DELETE FROM usuario WHERE id= $id";
        return mysqli_query($this->conexion, $delete);
}

}

    ?>
