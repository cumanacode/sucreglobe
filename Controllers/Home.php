<?php

class Home extends Controllers{

    public function home(){

        $data['page_tag'] = NOMBRE_EMPESA;
		$data['page_title'] = NOMBRE_EMPESA;
		$data['page_name'] = "Home";
        $data['functions'] = "admin";
		$this->views->getView($this,"home",$data);
    }


    public function quienesSomos(){

        $data['page_tag'] = NOMBRE_EMPESA;
		$data['page_title'] = NOMBRE_EMPESA;
		$data['page_name'] = "Quienes Somos";
		$this->views->getView($this,"quienes_somos",$data);
    }

}