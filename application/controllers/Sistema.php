<?php

class Sistema extends CI_Controller{
    function index(){
        $this->load->view('sistema/listado');
    }
}