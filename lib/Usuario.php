<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Class Usuario{
    
    var $nombre;
    var $apellido;
    var $idSede;
    var $domicilio;
    var $telefono;
    var $correo;
    var $rut;
    var $password;
    var $idPerfil;
    
    public function __construct($nombreUsuario="",$apellidoUsuario="",
            $idSedeUsuario="",$domiUsuario="",$tel="",$email="",$rutUsuario="",$pass="") {
        $this->nombre=$nombreUsuario;
        $this->apellido=$apellidoUsuario;
        $this->idSede=$idSedeUsuario;
        $this->domicilio=$domiUsuario;
        $this->telefono=$tel;
        $this->correo=$email;
        $this->rut=$rutUsuario;
        $this->password=$pass;
        $this->idPerfil=1;
    }
    
    public function VerificaAcceso(){
        $oConn=new Conexion();
        
        if($oConn->Conectar())
            $db=$oConn->objconn;            
        else
            return false;

        
        
        $sql="SELECT * FROM usuario"
             ." WHERE nomusuario='$this->rut' and pwdusuario='$this->password'";
        
        $resultado=$db->query($sql);
        
       
        if($resultado->num_rows>=1){
            $this->idusuario=0;
            $this->nombre="";
            return true;
        }
        else{
            return false;
        }
            
    }
}
