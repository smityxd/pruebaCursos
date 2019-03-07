<?php

class Alumnos_model extends CI_Model{
    function listar($id=NULL){
        $sql = "select * from alumnos";
        if(!is_null($id)){
            $sql .= " where id=" . $id;
        }
        return $this->db->query($sql);
    }
    function insert($nombre,$apellido){
        $datos = array(
            'nombre' => $nombre,
            'apellido' => $apellido
        );
        return $this->db->insert('alumnos',$datos);
    }
    function update($id,$nombre,$apellido){
        $datos = array(
            'nombre' => $nombre,
            'apellido' => $apellido
        );
        $this->db->where('id',$id);
        return $this->db->update('alumnos',$datos);
    }
    function delete($id){
        $sql = "delete from alucur where alumnoid=".$id;
        $this->db->query($sql);
        $sql = "delete from alumnos where id=".$id;
        $this->db->query($sql);
    }
}