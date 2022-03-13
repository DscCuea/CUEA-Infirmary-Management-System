<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin_model extends CI_Model {

        public function is_admin($username,$password) {
            //Get the input from fields
            $this->db->where('username',$username);
            $this->db->where('password',$password);
           

            $result = $this->db->get_where('users',['user_type' => 'admin']);

            if($result->num_rows() == 1) {
                return $result->row(0)->id;
            } else { 
                return false;
            }
        }


    }
?>