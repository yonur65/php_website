<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 




class Hata_core extends CI_Controller {

	 
	
	var $sol_menu_icerik='';
	
	//var $yenikayit_modul_idleri = array('16','17','18');
	
	
	var $kullanici_roller=array();

	
	
	
	
	

	public function __construct()
	{
		parent::__construct();


		 
				
		 
		
		
		$this->load->library('encrypt');
		
		
		
		
		
		
		
		
		$this->load->library('user_agent');
		
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		
		 
		
		
		
	}

	public function index()
	{
		 

		$this->home();	
	}

	

	public function home($start=0,$sort_by='add_time')
	{
		
		 
		
		
		//$data['yenikayit_modul_idleri']=$this->yenikayit_modul_idleri;

        $data['title'] 		= 'Ana Sayfa';
		
		$data['sol_menu_adi'] ='personel';
		
		$data['sol_menu_icerik']="";
		
		// var_dump($this->sol_menu_icerik);
		
		// die;
		
		$data['hata_kodu']=$this->session->flashdata('hata_kodu');
		
		 
		
		$data['content'] 	= $this->load->view('hata_dashboard_view',$data,TRUE);
		
		load_admin_view('template/template_view',$data);

	}

	






	

}


 