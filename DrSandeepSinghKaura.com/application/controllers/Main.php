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

   public function __construct() 
   {
      parent:: __construct();
      $this->load->model("MainModel");
   }

	public function index()
	{
      $data["message_from_mr_kaura"] = $this->MainModel->get_message_from_mr_kaura();
      $data["top_5_news"] = $this->MainModel->get_top_5_news();
		$this->load->view('Home', $data);
   }
   
   public function about()
	{
      $data = array();
		$this->load->view('About', $data);
   }
   
   public function news()
	{
      $config = array();
      $config["base_url"] = base_url() . "index.php/Main/news";
      $config["total_rows"] = $this->MainModel->get_total_news();
      $config["per_page"] = 5; 

      /* Design pagination */
      $config['full_tag_open'] = "<ul class='pagination'>";
      $config['full_tag_close'] = '</ul>';
      $config['num_tag_open'] = '<li>';
      $config['num_tag_close'] = '</li>';
      $config['cur_tag_open'] = '<li class="active"><a href="#">';
      $config['cur_tag_close'] = '</a></li>';
      $config['prev_tag_open'] = '<li>';
      $config['prev_tag_close'] = '</li>';
      $config['first_tag_open'] = '<li>';
      $config['first_tag_close'] = '</li>';
      $config['last_tag_open'] = '<li>';
      $config['last_tag_close'] = '</li>';

      $config['next_link'] = '<ion-icon name="fastforward"></ion-icon>';

      $config['prev_link'] = '<ion-icon name="rewind"></ion-icon>';

      $this->pagination->initialize($config);

      $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

      $data = array();
      $data["all_news_for_particular_page"] = $this->MainModel->get_news_for_particular_page($config["per_page"], $page);
      $data["links"] = $this->pagination->create_links();

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
   
   public function send_contact_message()
   {      
      $name = $this->input->post('name');
      $email = $this->input->post('email');
      $subject = $this->input->post('subject');
      $message = $this->input->post('message');

      $parameters = array(
         'name'             => $name,
         'email_address'    => $email,
         'subject'          => $subject,
         'message'          => $message
      );

      $add_contact_message = $this->MainModel->add_contact_message($parameters);

      if ($add_contact_message == true)
      {
         $data['message'] = 'Your message was sent successfully.';
         $this->load->view('Contact', $data);
      }
      else
      {
         $data['message'] = 'Database error while adding sending message, please try again.';
         $this->load->view('Contact', $data);
      }
   }
}
