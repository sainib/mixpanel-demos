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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function logEvent()
	{
		ini_set('display_errors', 1);

		//More elegant way would be to just create an array in PHP and then use json_encode to create a JSON String object.. but copying and pasting from Python example 
		$d='{"userId": "user1","event": "Product Viewed","properties": {"distinct_id": "user1","product_id": "pr_507f1f77bcf86cd799439011","sku": "G-32","category": "Games","name": "Monopoly: 3rd Edition","brand": "Hasbro","variant": "200 pieces","price": 18.99,"quantity": 1,"token": "83af3c32b1c73c25bf7d5d420444a582"}}';
		$ed = base64_encode($d);

		$url_send="http://api.mixpanel.com/track/";
	
	  $fields_string = "data=".$ed;
	  $ch = curl_init($url_send);
	  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	  curl_setopt($ch, CURLOPT_POSTFIELDS,$fields_string);
	  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
	  $result = curl_exec($ch);
	  curl_close($ch);  // Seems like good practice
	  echo $result;	

	}
	
	

}
