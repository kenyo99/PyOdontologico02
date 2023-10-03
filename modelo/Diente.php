<?php
require_once './core/Modelo.php';
class Diente extends Modelo{
    private $_id;
    private $_ubicacion;
    private $_estado;

    private $_tabla = 'dientes';

    public function __construct($id=null, $ubicacion=null, $estado=null){
        $this->_id = $id;
        $this->_estado = $estado;
        $this->_ubicacion = $ubicacion;

        parent::__construct($this->_tabla);

    }
    public function listar(){
        return $this->getAll();
    }
    public function getOne(){
        return $this->getBy('iddientes',$this->_id);
    }
    public function eliminar(){
        return $this->deleteBy('iddientes',$this->_id);
    }

    public function nuevo(){
        $datos = array(
            "ubicacion"=>"'$this->_ubicacion'",
            "nombre"=>"'$this->_estado'"
        );
        return $this->insert($datos);
    }
    public function editar(){
        $datos = array(
            "nombre"=>"'$this->_estado'"
        );
        
        $wh = "idestados = $this->_id";

        return $this->update($wh, $datos);

    }

}