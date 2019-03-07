<?php

class Alumnos extends CI_Controller{
    function index(){
        $rs = $this->Alumnos_model->listar();
        $this->load->view('alumnos/listado',[
            'rs' => $rs
        ]);
    }
    function crear(){
        $this->load->view('alumnos/tool');
    }
    function editar($alumnoid){
        $rs = $this->Alumnos_model->listar($alumnoid);
        $this->load->view('alumnos/tool',[
            'rs' => $rs
        ]);
    }
    function eliminar(){
        $id = $this->input->post('id');
        $this->Alumnos_model->delete($id);
    }
    function procesar(){
        $id = $this->input->post('id');
        $opc = $this->input->post('opc');
        $nombre = $this->input->post('nombre');
        $apellido = $this->input->post('apellido');

        if($opc=="crear"){
            $this->Alumnos_model->insert($nombre,$apellido);
        }else if($opc=="editar"){
            $this->Alumnos_model->update($id,$nombre,$apellido);
        }
    }
    function cursos($alumnoid){
        $rs = $this->Alucur_model->listar($alumnoid);
        $nom = $this->Alumnos_model->listar($alumnoid);
        $nom = $nom->row();
        $nom = $nom->nombre . ' ' . $nom->apellido;
        $this->load->view('alumnos/listacursos',[
            'rs' => $rs,
            'nom' => $nom,
            'alumnoid' => $alumnoid
        ]);
    }
    function addCurso($alumnoid){
        $rscursos = $this->Cursos_model->listar();
        $this->load->view('alumnos/toolcurso',[
            'rscursos' => $rscursos,
            'alumnoid' => $alumnoid
        ]);
    }
    function modCurso($alumnoid,$id){
        $rscursos = $this->Cursos_model->listar();
        $rs = $this->Alucur_model->listar($alumnoid,$id);
        $this->load->view('alumnos/toolcurso',[
            'rscursos' => $rscursos,
            'alumnoid' => $alumnoid,
            'rs' => $rs
        ]);
    }
    function eliminarCurso(){
        $id = $this->input->post('id');
        $this->Alucur_model->delete($id);
    }
    function procesarCurso(){
        $id = $this->input->post('id');
        $opc = $this->input->post('opc');
        $alumnoid = $this->input->post('alumnoid');
        $cursoid = $this->input->post('cursoid');
        $nota = $this->input->post('nota');

        if($opc=="crear"){
            $this->Alucur_model->insert($alumnoid,$cursoid,$nota);
        }else if($opc=="editar"){
            $this->Alucur_model->update($id,$cursoid,$nota);
        }
    }
}