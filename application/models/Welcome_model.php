<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Welcome_model extends CI_Model {

        public function is_receptionist($username,$password) {
            //Get the input from fields
            $this->db->where('username',$username);
            $this->db->where('password',$password);
           

            $result = $this->db->get_where('users',['user_type' => 'receptionist']);

            if($result->num_rows() == 1) {
                return $result->row(0)->id;
            } else { 
                return false;
            }
        }
}
?>