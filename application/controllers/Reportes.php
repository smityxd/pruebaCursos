<?php

class Reportes extends CI_Controller{
    function index(){
        $rsalumnos = $this->Alumnos_model->listar();
        $this->load->view('reportes/listado',[
            'rsalumnos' => $rsalumnos
        ]);
    }
    function cursosxalumno(){
        $alumnoid = $this->input->post('alumnoid');
        $rs = $this->Cursos_model->rptCursosxAlumno($alumnoid);
        $this->load->view('reportes/auxListado',[
            'rs' => $rs
        ]);
    }
}