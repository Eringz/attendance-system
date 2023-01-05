<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class User extends CI_Model
    {
        function get_all_users()
        {
            return $this->db->query('SELECT * FROM users')->result_array();
        }
        
    }