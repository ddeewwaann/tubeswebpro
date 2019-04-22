<?php

class admin extends CI_Model{
    function login_admin($id,$password){
        $this->db->where('id',$id);
        $this->db->where('password',$password);
        $result = $this->db->get('admin_account');
        if($result->num_rows()==1){
            return $result->row(0);
        }else{
            return false;
        }
    }
    function add_berita($table,$data){
        $add= $this->db->insert($table,$data);
        if($add){
            return true;
        }
        else{
            return false;
        }
    }
    public function getberita($table)
	{
        $data = $this->db->get($table);
		return $data->result_array();
	}
    public function hapusberita($id,$table)
	{
		//use query builder to delete data based on id 
        $this->db->where('id',$id);
		return $this->db->delete($table);
	}
    

}

?>