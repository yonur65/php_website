<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Genelayarlar_core extends CI_Controller {

	var $per_page = 10;
	
	var $sol_menu_icerik='';
	
	var $kullanici_roller=array();
	
	
	
	
	
	

	public function __construct()
	{
		parent::__construct();

		  
		
		$this->load->model('genelayarlar_model');
		//$asd=$this->genelayarlar_model->kategoriler_liste_getir;
		
		$this->load->library('user_agent');
		
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		
		$this->aktif_yil='2016';
		$this->merkez_id='1';
		$this->aktor_tip = '5';
		$this->sol_menu_icerik='';//sol menuyü manuel olusturabilirsin.
		
		
		 
		
		
	}

	public function index()
	{
		$this->home();	
	}

	

	public function home($start=0,$sort_by='add_time')
	{
		
		 
 
		
		//$kullanici_roller=$this->session->userdata('kullanici_roller');
		
		
	
		
		
		
		//$data['okulsubesecenekleri_modul_idleri']=$this->okulsubesecenekleri_modul_idleri;

        $data['title'] 		= 'Ana Sayfa';
		
		$data['sol_menu_adi'] ='personel'; //aut core da atılıyor gelen değer admin,personel
		
		$data['sol_menu_icerik']=$this->sol_menu_icerik;
		
		
		$data['content'] 	= $this->load->view('dashboard_view',$data,TRUE);
		
		load_admin_view('template/template_view',$data);

	}





public function davranisislemleri()
{
	
	
$modul_idleri = array(99,100,101,102,103,104,105) ;

 

 

foreach($modul_idleri as $value)
{
	
	$data['tab_erisim_'.$value]=true;
	
	$data['tab_degisim_'.$value]=true;
	
	 
	
}
 
		$data['sol_menu_adi'] ='personel';
		
		$data['sol_menu_icerik']=$this->sol_menu_icerik;
		
		
		$data['merkez_id']=$this->merkez_id;
		
	//	$data['activetab']=$activetab;
		
		
		$data['info_bar'] ='OKUL İŞLEMLERİ LİSTESİ';
		
		$data['info_bar_aciklama'] ='Okul işlemleri listesini görüntüleyin';
		
		
		$data['content'] 	= $this->load->view('liste_davranisislemleri_view',$data,TRUE);
		
		load_admin_view('template/template_view',$data);
	
		
		
		
		
		
		


	
}	
	









public function davranisislemleriekle()
{
	
		


		$data['info_bar'] ='okul_islemleri_info_add';
		
		$data['info_bar_aciklama'] ='okul_okul_islemleri_info_add_aciklama';
		
		//$data['okulsubesecenekleri_modul_idleri']=$this->okulsubesecenekleri_modul_idleri;
		
		$data['sol_menu_adi'] ='personel';
		
		$data['sol_menu_icerik']=$this->sol_menu_icerik;
		
		$data['merkez_id'] = $this->merkez_id;
		
		$data['yil']=$this->aktif_yil;
		
		
		$data['okul_listesi'] =merkeze_ait_okul_listesi_getir($this->merkez_id);
		
		$data['merkez_listesi'] =merkez_listesi_getir($this->merkez_id);
		

		

		
		//$data['activetab']=$this->session->flashdata('activetab');
		$data['activetab']=$activetab;
		
		$data['content'] 	= $this->load->view('ekle_davranisislemleri_view',$data,TRUE);
		load_admin_view('template/template_view',$data);
		


	
}	
	




	
	
	
	
 

	
	
public function editkategoriler($d='')
	{
		
 
	
			$result = $this->genelayarlar_model->davranis_islemleri_kategori_edit($d);
	


				
			if ($result->num_rows () > 0) 
				
			{

				
				$data['info_bar'] ='okul_islemleri_okul_turleri_info_edit';
				
				$data['info_bar_aciklama'] ='okul_islemleri_okul_turleri_info_edit_aciklama';
				
				
				$data['sol_menu_adi'] ='personel';
				$data['sol_menu_icerik']=$this->sol_menu_icerik;
				$row=$result->row();
					

				
				
				//$data['okul_id']    				= $row->okul_id;  
				$data['okul_id']    				= 1;  
				$data['kategori_adi']    				= $row->kategori_adi;  //Disiplin
				
				
				$data['kategori_edit_id']= $d;
				
		
				$data['content'] 	= $this->load->view('edit_okultanimlari_view',$data,TRUE);
					
				load_admin_view('template/template_view',$data);
						
						
						
			} 
			else
			{
				//redirect(base_url());
				redirect(site_url('hata/sayfabulunamadi'));
				
			}

			/*******************/





	
}
	
	










	public function addkategoriler()
	{
		
		
		
		
				
		
		$this->form_validation->set_rules('okul_adi', lang_key('okul_adi'), 'required');
		$this->form_validation->set_rules('kategori_adi', lang_key('kategori_adi'), 'required');
		
							
		if ($this->form_validation->run() == FALSE)
		{
				//$this->session->set_flashdata('msg', '<div class="alert alert-danger">'.lang_key('islem_yapilamadi').'</div>');
			
				$this->session->set_flashdata('msg', lang_key('islem_yapilamadi')); 
				$this->session->set_flashdata('msg_tip', 'error');
				
				
				 
			redirect(site_url('genelayarlar/davranisislemleriekle'));		
			
		}
		else
		{
			
			$data 						= array();			
			//$data['merkez_id']        	= $this->input->post('merkez_id',TRUE);
			$data['okul_id']    				= $this->input->post('okul_adi',TRUE);  
			$data['kategori_adi']    				= $this->input->post('kategori_adi',TRUE);  
		
			 
			
			
			
				$this->genelayarlar_model->okul_tanimlari_add($data);
				
				$this->session->set_flashdata('msg', lang_key('data_inserted'));

				$this->session->set_flashdata('msg_tip', 'success');

			
			
			redirect(site_url('genelayarlar/davranisislemleri'));		
		}
	}	





	#update a okulturleri
	public function updatekategoriler()
	{
		
		
		
		$this->form_validation->set_rules('okul_adi', lang_key('okul_adi'), 'required');
		$this->form_validation->set_rules('kategori_adi', lang_key('kategori_adi'), 'required');
		 					
		if ($this->form_validation->run() == FALSE)
		{
			$id = $this->input->post('okul_tanimlari_edit_id');
			$this->editkategoriler($id);	
		}
		else
		{
			$id = $this->input->post('okul_tanimlari_edit_id');

			$data 					= array();	

			$data 						= array();			
			 
			
			$data['okul_id']    				= $this->input->post('okul_adi',TRUE);  
			$data['kategori_adi']    				= $this->input->post('kategori_adi',TRUE);  
			$data['okul_adi']    				= $this->input->post('okul_adi',TRUE);  
			 	
			
			
				$this->genelayarlar_model->okul_tanimlari_update($data,$id);
			 	
				$this->session->set_flashdata('msg', lang_key('data_updated'));
				$this->session->set_flashdata('msg_tip', 'success');				
			 
			
			redirect(site_url('genelayarlar/okulislemleri'));		
		}
	}	
	
	
	

}




