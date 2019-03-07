<?php

class Cursos extends CI_Controller{
    function index(){
        $rs = $this->Cursos_model->listar();
        $this->load->view('cursos/listado',[
            'rs' => $rs
        ]);
    }
    function crear(){
        $this->load->view('cursos/tool');
    }
    function editar($cursoid){
        $rs = $this->Cursos_model->listar($cursoid);
        $this->load->view('cursos/tool',[
            'rs' => $rs
        ]);
    }
    function eliminar(){
        $id = $this->input->post('id');
        $this->Cursos_model->delete($id);
    }
    function procesar(){
        $id = $this->input->post('id');
        $opc = $this->input->post('opc');
        $nombre = $this->input->post('nombre');

        if($opc=="crear"){
            $this->Cursos_model->insert($nombre);
        }else if($opc=="editar"){
            $this->Cursos_model->update($id,$nombre);
        }
    }
}