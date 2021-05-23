<?php

class conexion{
   
    const user='sql5414250';
    const pass='UtkrUj8PYY';
    const db='sql5414250';
    const servidor='sql5.freemysqlhosting.net';

    public function conectardb(){
        $conectar = new mysqli(self::servidor, self::user,self::pass,self::db);
        if($conectar->connect_errno){
            die("Error en la coneccion".$conectar->connect_error);
        }
        return $conectar;
    }   
}

?>