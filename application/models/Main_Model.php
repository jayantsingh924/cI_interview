<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Model extends CI_Model {

	function insert_data($data)
	 {
      
       $this->db->insert("user", $data);

	 }

	public function check_login($email,$password)
	 {

      $sql = $this->db->get_where('user',array('user_email'=>$email,'user_password'=>$password));
      return $sql->row_array();
     }

     function insert_blog($data)
	 {
      
       $this->db->insert("user_blog", $data);

	 }
     
     public function fetch_all($user)
      {
        $this->db->where('user_id', $user);
        return $this->db->get('user_blog')->result_array();
         
      }

      public function fetch_all_1()
      {
        
        return $this->db->get('user_blog')->result_array();
         
      }


    

      public function delete_data($id)
        {
          $this->db->where('id', $id);
          $this->db->delete('user_blog');
          //echo $this->db->last_query(); die();
        }

    

      public function fetch_data($id)
        {
          $this->db->where('id', $id);
          $sql = $this->db->get('user_blog');
          return $sql;
        } 

        public function update($id,$data)
       {

          $this->db->where('id',$id);
          $this->db->update('user_blog', $data);
         // echo $this->db->last_query(); die();
        } 
 }	 