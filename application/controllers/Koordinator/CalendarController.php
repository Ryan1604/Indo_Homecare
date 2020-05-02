<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalendarController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in' !== TRUE)) {
			redirect('/');	
		}
		$this->load->model('M_Calendar');
  	}

	public function index() {
		if ($this->session->userdata('role') === '3') {
			$data = array(
				'title' => "Calendar"
			);
			$this->load->view('pages/Koordinator/calendar/index.php', $data);
		} else {
			echo "
				<script>
					alert('Access Denied');
					history.go(-1);
				</script>
			";	
		}
	}
	
	public function load(){
		$event_data = $this->M_Calendar->get_data();
		foreach($event_data->result_array() as $row){
			$data[] = array(
				'id'				=> $row['id_employee'],
				'title'				=> $row['name'],
				'start'				=> $row['date'],
				'backgroundColor'	=> '#3ABAF4',
      			'borderColor'		=> '#fff',
      			'textColor'			=> '#fff'
			);
		}
		echo json_encode($data);
	}
}
