<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Record extends CI_Model
    {
        function get_attendance_of_the_class($subject_id)
        {
            $query = "SELECT users.id, first_name, last_name, 
            roles.id AS role_id, role, 
            subject_code, subject_name, subject_sched,
            seats.id AS seat_no  
            FROM attendances
            INNER JOIN users ON users.id = attendances.user_id
            INNER JOIN subjects ON subjects.id = attendances.subject_id
            INNER JOIN seats ON seats.id = attendances.seat_id
            LEFT JOIN roles ON roles.id = users.role_id
            WHERE subjects.id = ?";
            $values = array($subject_id);
            return $this->db->query($query, $values)->result_array();
        }

        function add_attendance($attendee)
        {
            return $attendee;
        }

        
    }