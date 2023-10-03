<?php
require_once './core/Modelo.php';
class Persona extends Modelo{
    private $_id;
    private $_nombre;
    private $_apellido;
    private $_dni;
    private $_direccion;
    private $_fechanac;
    private $_telefono;
    private $_correo;
    private $_usuario; 
    private $_fechaalta;
    private $_estado;
    private $_clave;

    private $_tabla = 'personas';

    public function __construct($id=null, $nombre=null, $apellido=null,$dni=null,$direccion=null,$fechanac=null,$telefono=null,$correo=null,$usuario=null,$clave=null, $fechaalta=null, $estado=null,$sexo=null){
        $this->_id = $id;
        $this->_nombre = $nombre;
        $this->_apellido = $apellido;
        $this->_dni = $dni;
        $this->_direccion = $direccion;
        $this->_fechanac =$fechanac;
        $this->_telefono = $telefono;
        $this->_correo = $correo;
        $this->_usuario = $usuario;
        $this->_clave = $clave; 
        $this->_fechaalta = '';
        $this->_estado = '2';
        $this->_sexo = '1';

        parent::__construct($this->_tabla);

    }
    public function listar(){
        return $this->getAll();
    }
    public function eliminar(){
        return $this->deleteBy('idpersonas',$this->_id);
    }
    public function nuevo(){
        $datos = array(
            "nombre"=>"'$this->_nombre'",
            "apellido"=>"'$this->_apellido'",
            "dni"=>"'$this->_dni'",
            "direccion"=>"'$this->_direccion'",
            "fecha_nacimiento"=>"'$this->_fechanac'",
            "telefono"=>"'$this->_telefono'",
            "correo"=>"'$this->_correo'",
            "usuario"=>"'$this->_usuario'",
            "clave"=>"'$this->_clave'",
            "fecha_alta"=>"'$this->_fechaalta'",
            "estados_idestados"=>"'$this->_estado'",
            "idsexos"=>"'$this->_sexo'"
        );
        #var_dump($datos);
        #echo $this->_sql;
        return $this->insert($datos);
    }
    public function editar(){
        $datos = array(
            "nombre"=>"'$this->_nombre'",
            "apellido"=>"'$this->_apellido'",
            "dni"=>"'$this->_dni'",
            "direccion"=>"'$this->_direccion'",
            "fecha_nacimiento"=>"'$this->_fechanac'",
            "telefono"=>"'$this->_telefono'",
            "correo"=>"'$this->_correo'",
            "usuario"=>"'$this->_usuario'",
            "clave"=>"'$this->_clave'",
            "fecha_alta"=>"'$this->_fechaalta'",
            "estados_idestados"=>"'$this->_estado'",
            "idsexos"=>"'$this->_sexo'"
        );
        
        $wh = "idestados = $this->_id";

        return $this->update($wh, $datos);

    }
    public function validarLogin($usuario, $clave){
        $this->_sql->addWhere("`correo`='$usuario'");
        $this->_sql->addWhere("`clave`='$clave'");
        # echo $this->_sql;exit;
        return $this->_bd->ejecutar($this->_sql);
    }

}