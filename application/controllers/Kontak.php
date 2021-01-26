<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function index()
	{
		$data = array(
						'content'  	=> 'kontak',
					);

		$this->load->view('template_view', $data);
	}

	function getDataKontak(){
		$json = json_decode($this->executeAPI(), TRUE);
		
		$data = array(
						'arrData' => $json['results'], 
					 );

		$this->load->view('modal_list_kontak', $data);
	}

	function getDetailKontak($email = NULL){
		$data = array();
		$json = json_decode($this->executeAPI(), TRUE);
		$email= $this->input->post('email');

		foreach($json['results'] as $row){
			if($row['email'] == $email){
				$data = $row;

				break;
			}
		}

		print_r($data);
	}

	private function executeAPI(){
		$url = 'https://randomuser.me/api?results=5&exc=login,registered,id,nat&nat=us&noinfo';

	  	$ch = curl_init($url);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	  	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	  	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	  	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	  	$data = curl_exec($ch);
	  	curl_close($ch);
	
	  	return $data;
	}
}
