<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Encuestador extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->helper('url');
		//$this->load->model('adminSistema_model');
		$this->load->library('session');
		$this->load->view('encuestas/encuestador/headerEncuestador');
		if (!$this->session->userdata("login")){
			redirect(site_url('login',NULL));
		}
		else if($this->session->userdata('rol')!='Encuestador'){
			redirect(site_url('login/logout',NULL));
		}
	}
	public function index(){
		$this->load->view('encuestas/encuestador/inicioEncuestador');
	}
}