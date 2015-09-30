<?php

	Class Main_model extends CI_Model{


		public function __construct(){

			parent::__construct();
		}
	

		function insert_record(){

			$this->load->helper('form');
			
			$contact_fname = $this->input->post('firstname');
			$contact_lname = $this->input->post('lastname');
			$contact_no = $this->input->post('contact');
			$contact_email = $this->input->post('email');
		
			$data = array(

				'contact_fname'=>$contact_fname,
				'contact_lname'=>$contact_lname,
				'contact_no'=>$contact_no,
				'contact_email'=>$contact_email
				);
			
			$this->db->insert('cm',$data);


		}
		public function select(){

			//data retrive fro query
			$query = $this->db->get('cm');
			return $query;
		}



		

}



?>