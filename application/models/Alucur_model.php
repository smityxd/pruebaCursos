<?php

class Alucur_model extends CI_Model{
    function listar($alumnoid,$id=NULL){
        $sql = "
            select
              a.id,
              b.nombre,
              a.cursoid,
              a.nota
            from
              alucur a
              INNER JOIN cursos b on a.cursoid = b.id
            WHERE
              a.alumnoid=" . $alumnoid;
        if(!is_null($id)){
            $sql .= " and a.id=" . $id;
        }
        return $this->db->query($sql);
    }
    function insert($alumnoid,$cursoid,$nota){
        $datos = array(
            'alumnoid' => $alumnoid,
            'cursoid' => $cursoid,
            'nota' => $nota
        );
        return $this->db->insert('alucur',$datos);
    }
    function update($id,$cursoid,$nota){
        $datos = array(
            'cursoid' => $cursoid,
            'nota' => $nota
        );
        $this->db->where('id',$id);
        return $this->db->update('alucur',$datos);
    }
    function delete($id){
        $sql = "delete from alucur where id=".$id;
        $this->db->query($sql);
    }
}