<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Subject extends CI_Model
    {
        function get_subject($subject_id)
        {
            $query = 'SELECT subject_name FROM subjects WHERE id = ?';
            return $this->db->query($query, $subject_id)->row_array();
        }
    }