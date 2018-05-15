<?php	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class cv extends CI_Controller {									//Controller class for CV Maintainer

			public function __construct(){								//Constructor
				
					parent::__construct();								//Default parent constructor
					$this->load->model('cv_model');						//Loading model class
					$this->load->helper('url_helper');					//Loading URL Helper class
			}
			
			public function index(){									//Function index displaying home page
				
					$data['title'] = 'Curriculum Vitae Maintainer';		//Creating title
	  
					$this->load->view('templates/header',$data);		//Loading Header
					$this->load->view('cv/index');						//Loading Home Page
					$this->load->view('templates/footer');				//Loading Footer
			}
			
			public function delete($admnno=FALSE){						//Function for record deletion
				
					$data['title'] = 'Delete Curriculum Vitae';
					
					if($admnno!==FALSE){
						$this->cv_model->delete_cv($admnno);
						
						$data['cv'] = $this->cv_model->get_cv();
						
						$this->load->view('templates/header',$data);
						$this->load->view('cv/delete');					//Loading Record Deletion page
						$this->load->view('templates/footer');
						
						echo "<div class='alert alert-success alert-dismissible fade in'>
								<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									<strong>Success!</strong> Curriculum Vitae deleted.
								</div>
							 </div>";
					}
					else{
						$data['cv'] = $this->cv_model->get_cv();
							
						$this->load->view('templates/header',$data);
						$this->load->view('cv/delete');					//Loading Record Deletion page
						$this->load->view('templates/footer');
					}
			}
			
			public function select(){									//Function for selecting a record
				
					$data['cv'] = $this->cv_model->get_cv();			//Fetching all records
					$data['title'] = 'Select Curriculum Vitae';
	  
					$this->load->view('templates/header',$data);
					$this->load->view('cv/select');						//Loading Selection page
					$this->load->view('templates/footer');
			}
			
			public function viewall(){									//Function presenting all records available
				
					$data['cv'] = $this->cv_model->get_cv();			//Fetching all records
					$data['title'] = 'View Curriculum Vitae';
	  
					$this->load->view('templates/header',$data);
					$this->load->view('cv/viewall');					//Loading Viewall page
					$this->load->view('templates/footer');
			}
			
			public function edit($admnno){								//Function offering editing feature
					
					$this->load->helper('form');						//Loading Form Helper class
					$this->load->library('form_validation');			//Loading Form Validation Library 
					
					$data['cv_item'] = $this->cv_model->get_cv($admnno);//Fetching record by admnno
					$data['title'] = 'Edit Curriculum Vitae';
																		//Rules declarations
					$this->form_validation->set_rules('name', 'Name', 'required');
					$this->form_validation->set_rules('admnno', 'Admnno', 'required');

					if ($this->form_validation->run() === FALSE){		//Form validation false condition action
						$this->load->view('templates/header', $data);
						$this->load->view('cv/edit',$data);				//Loading Edit page
						$this->load->view('templates/footer');			

					}
					else{
						$this->cv_model->edit_cv($admnno);				//Updating database
						$this->load->view('templates/header',$data);
						$this->load->view('cv/index');
						$this->load->view('templates/footer');
						echo "<div class='alert alert-success alert-dismissible fade in'>
								<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									<strong>Success!</strong> Curriculum Vitae edited.
								</div>
							 </div>";
					}
					
			}
			
			public function view($admnno=FALSE){						//Function for viewing records
					
					$data['cv_item'] = $this->cv_model->get_cv($admnno);//Fetching record by admnno
					
					if(empty($data['cv_item'])){						//Condition for data unavailability
						echo 'Seriously Not Found';
						show_404();										//Displaying 'Not Found' error message
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
						$this->load->view('cv/create');					//Loading record creation page				
						$this->load->view('templates/footer');

					}
					else{
						$this->cv_model->set_cv();						//Writing to database
						$this->load->view('templates/header',$data);
						$this->load->view('cv/index');
						$this->load->view('templates/footer');
						echo "<div class='alert alert-success alert-dismissible fade in'>
								<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									<strong>Success!</strong> Curriculum Vitae created.
								</div>
							 </div>";
					}
			}
	}
?>