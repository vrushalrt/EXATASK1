<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	function __Construct(){
  		parent::__Construct ();
   		$this->load->database(); // load database
   		//form validation
		$this->load->library('form_validation');
		
   		
	}



	public function index(){

		$this->load->helper('url');
		$this->load->view('welcome_cm_view');
		
	

	}

	public function cm_main(){
		$this->load->helper('url');
		$this->load->view('cm_main_page_view');
	}

	public function aud(){

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('aud_view');

		//$this->load->view('data_view');

		
		//$this->load->helper('form_validation');


		

	}

	public function save(){

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('main_model');
		


		if($this->input->post('submit')){
			$this->main_model->insert_record();
			$this->load->view('formsuccess');
			$this->load->view('aud_view');
		}

	}

	public function data_view(){

		$this->load->helper('url');
		//load the model
		$this->load->model('main_model');

		//load method of model
		$data['h']=$this->main_model->select();

		//return data in view
		$this->load->view('select_view',$data);
		}

	

}
