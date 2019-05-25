<?php 

class contacto {

    static function guardar($persona){
        $CI =& get_instance();
        if(isset($persona['id']) && $persona['id'] > 0){
            $CI->db->where('id',$persona['id']);
            $CI->db->update('contactos',$persona);
        }else{
        $CI->db->insert('contactos',$persona);
        }
    }

    static function borrar($id){
        $CI =& get_instance();
        $sql = "delete from contactos where id=?";
        $CI->db->query($sql,[$id]);
    }

    static function mostrar(){
        $CI =& get_instance();
        $rs = $CI->db->get('contactos')->result();
        return $rs;
    }

    static function editar($id){
        $CI =& get_instance();
        $CI->db->where('id',$id);
        $rs = $CI->db->get('contactos')->result();
        return $rs;
    }
}