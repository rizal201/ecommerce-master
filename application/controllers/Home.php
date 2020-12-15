<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->view('_header');
		$this->load->view('home');
		$this->load->view('_footer');
	}

	public function keranjang()
	{
		$this->load->view('_header');
		$this->load->view('keranjang');
		$this->load->view('_footer');
	}

	public function checkout()
	{
		$this->load->view('_header');
		$this->load->view('checkout');
		$this->load->view('_footer');
	}

	public function transaksi()
	{
		$this->load->view('_header');
		$this->load->view('transaksi');
		$this->load->view('_footer');
	}

	public function search()
	{
		$this->load->view('_header');
		$this->load->view('search');
		$this->load->view('_footer');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function detail()
	{
		$this->load->view('_header');
		$this->load->view('detail');
		$this->load->view('_footer');
	}

	public function fulldetail()
	{
		$this->load->view('_header');
		$this->load->view('fulldetail');
		$this->load->view('_footer');
	}

	public function banner()
	{
		$this->load->view('_header');
		$this->load->view('banner');
		$this->load->view('_footer');
	}
}
