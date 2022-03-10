<?php

    class Home extends Controller{

        public function index(){
            $this->views->getView($this, "index");//Traer el get_Views //views
        }
        
    }
?>
