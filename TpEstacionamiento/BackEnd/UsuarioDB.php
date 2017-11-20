<?php
include_once "./AccesoDatos.php";
class UsuarioDB{

    public $nombre;
    public $apellido;
    public $mail;
    public $clave;
    public $turno;
    public $perfil;

    public function altaUsuario()
	{
			   $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			   $consulta =$objetoAccesoDato->RetornarConsulta("INSERT into empleados (nombre,apellido,mail,clave,turno,perfil)values(:nombre,:apellido,:mail,:clave,:turno,:perfil)");
			   $consulta->bindValue(':nombre',$this->nombre, PDO::PARAM_STR);
			   $consulta->bindValue(':apellido', $this->apellido, PDO::PARAM_STR);
			   $consulta->bindValue(':mail', $this->mail, PDO::PARAM_STR);
			   $consulta->bindValue(':clave', $this->clave, PDO::PARAM_STR);
               $consulta->bindValue(':turno', $this->turno, PDO::PARAM_STR);
               $consulta->bindValue(':perfil', $this->perfil, PDO::PARAM_STR);
               
			   
			   
			   $consulta->execute();		
			   return $objetoAccesoDato->RetornarUltimoIdInsertado();
	}

}