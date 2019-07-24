<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
      $data = array();
		$this->load->view('Home', $data);
   }
   
   public function about()
	{
      $data = array();
		$this->load->view('About', $data);
   }
   
   public function news()
	{
      $data = array();
		$this->load->view('News', $data);
   }

   public function blog()
	{
      $data = array();
		$this->load->view('Blog', $data);
   }

   public function contact()
	{
      $data = array();
		$this->load->view('Contact', $data);
   }
   
   public function gallery()
	{
      $data = array();
		$this->load->view('Gallery', $data);
   }
   
   public function role_MD()
	{
      $data = array();
		$this->load->view('RoleMD', $data);
   }
   
   public function role_Advisor()
	{
      $data = array();
		$this->load->view('RoleAdvisor', $data);
	}
}
