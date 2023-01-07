<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Records extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$subject_code = "APPSDEV1";
		$result['records'] = $this->record->get_attendance_of_the_day($subject_code);

		$subject_name = $this->subject->get_subject($subject_code);
		$result['subject'] = implode("", $subject_name);

		date_default_timezone_set('Asia/Manila');
		$result['date'] = date('M d y h:i:s');

		$this->load->view('records', $result);
	}

	public function add()
	{
		$attendance = $this->input->post();
		var_dump($attendance);
	}


}
