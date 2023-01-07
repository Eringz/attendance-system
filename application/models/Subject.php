<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Subject extends CI_Model
    {
        function get_subject($subject_code)
        {
            $query = 'SELECT subject_name FROM subjects WHERE subject_code = ?';
            return $this->db->query($query, $subject_code)->row_array();
        }
    }