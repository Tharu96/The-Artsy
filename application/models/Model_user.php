<?php

class Model_user extends CI_Model{
    function insertuserdata($data)
    {
        return $this->db->insert('users', $data);    
    }

    function Loginuser()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $respond=$this->db->get('users');

        if($respond->num_rows()==1)
        {
            return $respond->row(0);
        }
        else
        {
            return FALSE;
        }
    }
    function Insertimg($name)
    {
        $query="insert into bidding_list (name) values('$name')";
        $result=$this->db->query($query);
        if($result)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    function delete()
    {
        $id = $this->input->post('img_id');
        $this->db->where('id', $id);
		$result=$this->db->delete('bidding_list');
        if($result)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    function fetch_data_from_bidding_list()
    {
        $query = $this->db->get("bidding_list");
        return $query;
    }

}
?>
