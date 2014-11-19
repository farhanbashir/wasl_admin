<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	function __construct()
	 {
	   parent::__construct();
	   $this->load->model('user','',TRUE);
	   $this->load->model('event','',TRUE);
	   if(!$this->session->userdata('logged_in'))
		{
			redirect(base_url());	
		}
	 } 
	 
	public function index()
    {
		$content = $this->load->view('content.php', null ,true);
        $this->load->view('welcome_message', array('content' => $content));	
	}
    
    public function user()
    {
        $content = $this->load->view('user.php', null ,true);
        $this->load->view('welcome_message', array('content' => $content));
    }
    
    public function event()
    {
        $events = $this->event->get_events();
        $data = array();
        $data['events'] = $events;
        $content = $this->load->view('event.php', $data ,true);
        $this->load->view('welcome_message', array('content' => $content));
    }

	public function login()
	{
		$this->load->view("login");
	}
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());	
    }    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */