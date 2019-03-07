<?php

class Cursos_model extends CI_Model{
    function listar($id=NULL){
        $sql = "select * from cursos";
        if(!is_null($id)){
            $sql .= " where id=" . $id;
        }
        return $this->db->query($sql);
    }
    function insert($nombre){
        $datos = array(
            'nombre' => $nombre
        );
        return $this->db->insert('cursos',$datos);
    }
    function update($id,$nombre){
        $datos = array(
            'nombre' => $nombre
        );
        $this->db->where('id',$id);
        return $this->db->update('cursos',$datos);
    }
    function delete($id){
        $sql = "delete from alucur where cursoid=".$id;
        $this->db->query($sql);
        $sql = "delete from cursos where id=".$id;
        $this->db->query($sql);
    }
    //reportes
    function rptCursosxAlumno($alumnoid){
        $sql = "
            select
              b.nombre,
              avg(a.nota) as promedio
            from
              alucur a
            INNER JOIN cursos b on a.cursoid = b.id
            where a.alumnoid=" . $alumnoid . "
            GROUP BY b.nombre";
        return $this->db->query($sql);
    }
}