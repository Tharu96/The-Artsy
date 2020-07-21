<?php 

class Artist_manage_M extends CI_Model{
//insert the data to the database
     public function insert($data){
         $this->db->insert('artist_details',$data);
      
         return true;
     }
//delete data form the data base
     public function delete($data){
         $this->db->delete('artist_details',array('id'=>$data));
         return true;
         
     }
//view the all data
     public function view (){
         $query = $this->db->get('artist_details');
         return $query->result();
     }
// update data using id no
     public function update ($data){

            $this->db->where('id',$data['id']);
            $this->db->update('artist_details',$data);
            
            return true;
            
     }

//view each person data when admin want to update the data 
     public function viewperson1($S){
         $query= $this->db->get_where('artist_details',array('id'=>$S));
         return $query->row();
     }

     
}

?>