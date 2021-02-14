<?php

class M_chat extends CI_Model {

    public function tampil_pesan(){
        $gas = $this->db->get('chat');
        return $gas->result();
    }
    
    public function input_pesan($data){
        $gas = $this->db->insert('chat', $data);
        return $gas;
    }

    public function tampil_user(){
        $gas = $this->db->query("SELECT * FROM users WHERE akses != 'admin'");
        return $gas->result();
    }

    public function aktif_user($id_user, $data){
        $this->db->where('id_user', $id_user);
        $this->db->update('users', $data);
        return true;
    }

    public function nonaktif_user($id_user, $data){
        $this->db->where('id_user', $id_user);
        $this->db->update('users', $data);
        return true;
    }

    public function hapus_user($id_user){
        $gas = $this->db->query("DELETE FROM users WHERE id_user='$id_user'");
        return $gas;
    }

}