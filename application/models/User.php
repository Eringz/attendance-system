<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class User extends CI_Model
    {
        function get_user_by_student_no($student_no)
        {
            $query = "SELECT * FROM users WHERE users.id = ?";
            $values = array($student_no);
            return $this->db->query($query, $values)->row_array();
        }
        
        function validate_timein($student_no)
        {
            $this->form_validation->set_error_delimiters('<div>', '</div>');
            $this->form_validation->set_rules('student_no', 'Student No', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
        
            if(!$this->form_validation->run()){
                return validation_errors();
            }
        }
        
        function validate_timein_match($attendee, $password)
        {
            $hash_password = md5($this->security->xss_clean($password));
            
            if($attendee && $attendee['password'] == $hash_password){
                return "success";
            }else{
                return "Incorrect Id number / Password";
            }
        }

    }