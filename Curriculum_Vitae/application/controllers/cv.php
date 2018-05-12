<?php	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class cv extends CI_Controller {

			public function __construct(){
				
					parent::__construct();
					$this->load->model('cv_model');
					$this->load->helper('url_helper');
			}
			
			public function index(){
				
					$data['title'] = 'Curriculum Vitae Maintainer';
	  
					$this->load->view('templates/header',$data);
					$this->load->view('cv/index');
					$this->load->view('templates/footer');
			}
			
			public function select(){
				
					$data['cv'] = $this->cv_model->get_cv();
					$data['title'] = 'Select Curriculum Vitae';
	  
					$this->load->view('templates/header',$data);
					$this->load->view('cv/select');
					$this->load->view('templates/footer');
			}
			
			public function viewall(){
				
					$data['cv'] = $this->cv_model->get_cv();
					$data['title'] = 'View Curriculum Vitae';
	  
					$this->load->view('templates/header',$data);
					$this->load->view('cv/viewall');
					$this->load->view('templates/footer');
			}
			
			public function edit($admnno){
					
					$this->load->helper('form');
					$this->load->library('form_validation');
					
					$data['cv_item'] = $this->cv_model->get_cv($admnno);
					$data['title'] = 'Edit Curriculum Vitae';
					
					$this->form_validation->set_rules('name', 'Name', 'required');
					$this->form_validation->set_rules('admnno', 'Admnno', 'required');

					if ($this->form_validation->run() === FALSE){
						$this->load->view('templates/header', $data);
						$this->load->view('cv/edit',$data);
						$this->load->view('templates/footer');

					}
					else{
						$this->cv_model->edit_cv($admnno);
						$this->load->view('cv/index');
					}
					
			}
			
			public function view($admnno=FALSE){
					
					$data['cv_item'] = $this->cv_model->get_cv($admnno);
					
					if(empty($data['cv_item'])){
						echo 'Seriously Not Found';
						show_404();
					}
					
					$data['title']= 'Curriculum Vitae';
					
					$this->load->view('templates/header',$data);
					$this->load->view('cv/view',$data);
					$this->load->view('templates/footer');
			}
			
			public function create(){
				
					$this->load->helper('form');
					$this->load->library('form_validation');

					$data['title'] = 'Create Curriculum Vitae';

					$this->form_validation->set_rules('name', 'Name', 'required');
					$this->form_validation->set_rules('admnno', 'Admnno', 'required');

					if ($this->form_validation->run() === FALSE){
						$this->load->view('templates/header', $data);
						$this->load->view('cv/create');
						$this->load->view('templates/footer');

					}
					else{
						$this->cv_model->set_cv();
						$this->load->view('cv/index');
					}
			}
	}
?>