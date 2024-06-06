<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $this->load->view('navbar.php');
		$this->load->view('homepage.php');
        $this->load->view('footer.php');
	}
	public function about()
	{
        $this->load->view('navbar.php');
		$this->load->view('about.php');
        $this->load->view('footer.php');

	}
    public function homepage()
	{
        $this->load->view('navbar.php');
		$this->load->view('homepage.php');
        $this->load->view('footer.php');
	}
    public function presensi()
	{
        $this->load->view('navbar.php');
		$this->load->view('presensi.php');
        $this->load->view('footer.php');
	}
    public function contact()
	{
        $this->load->view('navbar.php');
		$this->load->view('contact.php');
        $this->load->view('footer.php');
	}

}
