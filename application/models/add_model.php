<?php
class add_model extends CI_Model{

	function test_main(){
		echo "This is model function";
	}

	function insert_art($data){
		$this->db->insert("arts",$data); 
	}

	function fetch_data(){
		// //$query = $this->db->get("arts_info");
		// //select * from arts_info
		// //$query = $this->db->query("SELECT * FROM arts_info ORDER BY Id DESC");
		// $this->db->select("*");
		// $this->db->from("arts");
		
		
		$query = $this->db->get_where('arts', array('Artist_Name'=>'sakun'));
		return $query; 
	}

	function delete_data($Art_Id){
		$this->db->where("Art_Id",$Art_Id);
        $this->db->delete("arts");
		//DELETE FROM arts_info WHERE Id = $Id
	}

	function fetch_single_data($Art_Id){
		$this->db->where("Art_Id",$Art_Id);
		$query = $this->db->get("arts");
		 return $query;
		 //select * FROM arts_info WHERE Id = '$Id'
	}

	function update_data($data,$Art_Id ){
		$this->db->where("Art_Id",$Art_Id);
		$this->db->update("arts",$data);
		//UPDATE arts_info SET Name='$Name', Art_Name='$Art_Name', Category='$Category', Date='$Date', Size='$Size', Directory='$Directory'
	}
}
