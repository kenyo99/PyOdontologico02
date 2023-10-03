<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Trabajador.php';
# require_once './modelo/Persona.php';
class CtrlTrabajador extends Controlador{
    public function index(){
        echo "Hola trabajador";
    }
    public function validar(){
        # echo "Validando ingreso....";
        $this->verificarLogin();
        $obj= new Trabajador();
        $data = $obj->validar($_GET['id']);

        if ($data['data']==null){
            # echo "Trabajador no encontrado";
            # $obj= new Persona();

            $this->mostrarDashboardCliente();

        }else {
            $_SESSION['tipo']= $data['data'][0]['tipo'];
            $_SESSION['id']= $data['data'][0]['idpersonas'];
            $this->mostrarDashboard();
        }
        
    }
    public function mostrarDashboard(){
        # $contenido = $this->mostrar('plantilla/home.php','',true);
        $_SESSION['menu']=$this->getMenuTrabajador();

        $data = [
            
            'titulo'=>'Sistema Odontológico',
            'contenido'=>$this->mostrar('plantilla/home.php','',true)
        ];
        $this->mostrar('template.php',$data);
    }
    public function mostrarDashboardCliente(){
        # $contenido = $this->mostrar('plantilla/home.php','',true);
        $_SESSION['menu']=[
            
            'CtrlAgregarCita'=>'Nueva Cita',
            #'CtrlCita&accion=citasPorPaciente'=>'Nueva Cita',
            'CtrlCita'=>'Calendario',
            'CtrlServicios'=>'Otros Servicios',
        ];
        $data = [
            
            'titulo'=>'Sistema Odontológico',
            'contenido'=>$this->mostrar('plantilla/homePaciente.php','',true)
        ];
        $this->mostrar('template.php',$data);
    }
    private function getMenuTrabajador(){
        $tipo = isset($_SESSION['tipo'])?$_SESSION['tipo']:'';
        switch ($tipo) {
            case 'DOCTOR':
                $menu=[
                    
                    "CtrlPersona"=>"Personas",
                    "CtrlFormaPago"=>"Formas de Pago",
                    "CtrlDiente"=>"Dientes",
                    "CtrlEstado_dental"=>"Estado Dental",

                    ];
                break;
            
            default:    # Para el ADMINISTRADOR
                $menu=[
                    # "CtrlPrincipal"=>"Inicio",
                    "CtrlEstado"=>"Estados",
                    "CtrlPersona"=>"Personas",
                    "CtrlFormaPago"=>"Formas de Pago",
                    "CtrlSexo"=>"Sexo",
                    "CtrlDiente"=>"Dientes",
                    "CtrlEstado_dental"=>"Estado Dental",
                    "CtrlServicio"=>"Servicios Odontologicos",
                    "CtrlCita"=>"Agendar cita",

                    ];
                break;
                
        }
        return $menu;
    }
    private function verificarLogin(){
        if (!isset($_SESSION['usuario'])){
            header("Location: ?");
            exit();
        }
    }
}