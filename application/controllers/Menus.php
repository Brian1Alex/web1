<?php 
    class Menus extends CI_Controller
    {
        //Constructor
        function __construct()
        {
           parent::__construct(); 
        }
        //renderizacion de la vista que 
        //muestra los desayunos 
        public function desayunos(){
            $this->load->view('header');
            $this->load->view('menus/desayunos');
            $this->load->view('footer');

        }
        public function almuerzos(){
            $this->load->view('header');
            $this->load->view('menus/almuerzos');
            $this->load->view('footer');

        }
        public function postres(){
            $this->load->view('header');
            $this->load->view('menus/postres');
            $this->load->view('footer');

        }

        public function carta(){
            $this->load->view('header');
            $this->load->view('menus/carta');
            $this->load->view('footer');

        }
        
    }//no borrar cierre de la clase
?>
    