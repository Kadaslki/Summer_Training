<?php	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class cv extends CI_Controller {

			public function __construct(){
					parent::__construct();
					$this->load->model('cv_model');
					$this->load->helper('url_helper');
			}
			
			public function index(){
				$data['cv'] = $this->cv_model->get_cv();
				$data['title'] = 'All Details';
  
				$this->load->view('templates/header', $data);
				$this->load->view('cv/index', $data);
				$this->load->view('templates/footer');
			}
			
			
			public function view($admnno){
					
					$data['cv_item'] = $this->cv_model->get_cv($admnno);
					
					if(empty($data['cv_item'])){
						show_404();
					}
					
					$data['title']= $data['cv_item']['name'];
					
					$this->load->view('templates/header',$data);
					$this->load->view('cv/view',$data);
					$this->load->view('templates/footer');
			}
			
			public function create()
			{
				$this->load->helper('form');
				$this->load->library('form_validation');

				$data['title'] = 'Create Curriculum Vitae';

				$this->form_validation->set_rules('name', 'Name', 'required');
				$this->form_validation->set_rules('admnno', 'Admn No:', 'required');

				if ($this->form_validation->run() === FALSE)
				{
					$this->load->view('templates/header', $data);
					$this->load->view('cv/create');
					$this->load->view('templates/footer');

				}
				else
				{
					$this->cv_model->set_cv();
					$this->load->view('cv/success');
				}
			}
	}
?>