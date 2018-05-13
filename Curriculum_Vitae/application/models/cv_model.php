<?php	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class cv_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}
	
		public function get_cv($admnno = FALSE){
			if ($admnno === FALSE){
				$query = $this->db->get('personal');
				return $query->result_array();
			}

			//$this->db->select('p.*, a.*, x.*');
			//$this->db->from('personal p, academic a, xp x');
			//$this->db->where('p.admnno = a.admnno');
			//$this->db->where('a.admnno = x.admnno');
			//$query = $this->db->get();
			$query = $this->db->get_where('personal', array('admnno' => $admnno));
			return $query->row_array();
		}
		
		public function set_cv(){
			$this->load->helper('url');
			$data = array(
				'name' => $this->input->post('name'),
				'admnno' => $this->input->post('admnno'),
				'dob' => $this->input->post('dob'),
				'gender' => $this->input->post('gender'),
				'nationality' => $this->input->post('nationality'),
				'email' => $this->input->post('email'),
				'skypeid' => $this->input->post('skypeid'),
				'mobno' => $this->input->post('mobno'),
				'category' => $this->input->post('category'),
				'paddress' => $this->input->post('paddress'),
				'caddress' => $this->input->post('caddress'),
				'xyear' => $this->input->post('xyear'),
				'xboard' => $this->input->post('xboard'),
				'xpercgpa' => $this->input->post('xpercgpa'),
				'xiiyear' => $this->input->post('xiiyear'),
				'xiiboard' => $this->input->post('xiiboard'),
				'xiipercgpa' => $this->input->post('xiipercgpa'),
				'gyear' => $this->input->post('gyear'),
				'gboard' => $this->input->post('gboard'),
				'gpercgpa' => $this->input->post('gpercgpa'),
				'xp' => $this->input->post('xp'),
				'achievements' => $this->input->post('achievements'),
				'skills' => $this->input->post('skills'),
				'interests' => $this->input->post('interests'),
				'aoi' => $this->input->post('aoi')
			);
			return $this->db->insert('personal', $data);
		}
		
		public function edit_cv($admnno){
				$data = array(
					'name' => $this->input->post('name'),
				'admnno' => $this->input->post('admnno'),
				'dob' => $this->input->post('dob'),
				'gender' => $this->input->post('gender'),
				'nationality' => $this->input->post('nationality'),
				'email' => $this->input->post('email'),
				'skypeid' => $this->input->post('skypeid'),
				'mobno' => $this->input->post('mobno'),
				'category' => $this->input->post('category'),
				'paddress' => $this->input->post('paddress'),
				'caddress' => $this->input->post('caddress'),
				'xyear' => $this->input->post('xyear'),
				'xboard' => $this->input->post('xboard'),
				'xpercgpa' => $this->input->post('xpercgpa'),
				'xiiyear' => $this->input->post('xiiyear'),
				'xiiboard' => $this->input->post('xiiboard'),
				'xiipercgpa' => $this->input->post('xiipercgpa'),
				'gyear' => $this->input->post('gyear'),
				'gboard' => $this->input->post('gboard'),
				'gpercgpa' => $this->input->post('gpercgpa'),
				'xp' => $this->input->post('xp'),
				'achievements' => $this->input->post('achievements'),
				'skills' => $this->input->post('skills'),
				'interests' => $this->input->post('interests'),
				'aoi' => $this->input->post('aoi')			
				);
				$this->db->where('admnno',$admnno);
				$this->db->update('personal',$data);
		}
	}
	
?>	