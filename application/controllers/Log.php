<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('log_m');
    }

	public function index()
	{
		$data['row'] = $this->log_m->get();
		$this->template->load('template', 'user/log_data', $data);
	}
}