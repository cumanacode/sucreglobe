<?php

class Login extends Controllers{

    public function login(){

        $data['page_tag'] = NOMBRE_EMPESA;
		$data['page_title'] = NOMBRE_EMPESA;
		$data['page_name'] = "Login";
		$this->views->getView($this,"login",$data);
    }

}