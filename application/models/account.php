<?php 

class account extends CI_Model{
    
    function daftar_akun($table,$data){
        $daftar= $this->db->insert($table,$data);
        if($daftar){
            return true;
        }
        else{
            return false;
        }
    }
    
    function login($id,$password){
        $this->db->where('id',$id);
        $this->db->where('password',$password);
        $result = $this->db->get('user_account');
        if($result->num_rows()==1){
            return $result->row(0);
        }else{
            return false;
        }
    }
    function cekid_daftar($id){
        $this->db->where('id',$id);
        $cek = $this->db->get('user_account')->result_array();
        if(isset($cek[0])){
            return true;
        }
        else{
            return false;
        }
    }
    function verif_ubahInformasi($id,$password,$hint,$hintanswer){
        $this->db->where('id',$id);
        $this->db->where('password',$password);
        $this->db->where('hint',$hint);
        $this->db->where('hint_answer',$hintanswer);
        $result = $this->db->get('user_account');
        if($result->num_rows()==1){
            return true;
        }else{
            return false;
        }
    }
    function ubah_informasi($table,$id,$data){
    $this->db->where('id', $id);
    $update = $this->db->update($table,$data);

    if ($update){
      return TRUE;
    }else{
      return FALSE;
    }
    }
    
    function ubah_password($table,$id,$data){
    $this->db->where('id', $id);
    $update = $this->db->update($table,$data);

    if ($update){
      return TRUE;
    }else{
      return FALSE;
    }
    }
    }




?>