<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoadView extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function team()
	{
		$this->load->view('team_message');
	}
	public function contact()
	{
		$this->load->view('contact_message');
	}

	public function streetmap()
	{
		$this->load->view('streetmap_message');
	}
	
	public function carstreetmap()
	{
		$this->load->view('carstreetmap_message');
	}
	public function charts()
	{
		$this->load->view('charts_message');
	}
	public function reportincident()
	{
		$this->load->view('reportincident_message');
	}

	public function safety()
	{
		$this->load->view('safety_message');
	}

	public function masterplan()
	{
		$this->load->view('mp_message');
	}

	public function overlays()
	{
		$this->load->view('overlay_message');
	}


	public function login()
	{
		$this->load->view('login_message');
	}
}
