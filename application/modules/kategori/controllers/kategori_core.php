<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Classified admin Controller
 *
 * This class handles admin management related functionality
 *
 * @package		Admin
 * @subpackage	Admin
 * @author		webhelios
 * @link		http://webhelios.com
 */
//require_once 'Genelayarlar_core.php';
class kategori_core extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}
    public function index()
    {
		 $data['title'] 		= 'Ana Sayfa';
		 $veri=$this->db->get("siniflar")->result();
		$data['veri']=$veri;
		$data['sol_menu_adi'] ='personel'; //aut core da atılıyor gelen değer admin,personel
		
		$data['sol_menu_icerik']='';
		$data['content'] 	= $this->load->view('davranis-takibi',$data,TRUE);
		
		load_admin_view('template/template_view',$data);
		
    }
	public function getir()
	{
		 $data['title'] 		= 'Davranış Takibi';
		 $veri=$this->db->get("siniflar")->result();
		$sinifid =$this->input->post("sinifid");
		$hafta =$this->input->post("hafta");
		$veri2=$this->db->where("sinifid",$sinifid)->get("student")->result();
		$data['veri']=$veri;
		$data['veri2']=$veri2;
		$data['sol_menu_adi'] ='personel'; //aut core da atılıyor gelen değer admin,personel
		
		$data['sol_menu_icerik']='';
		$data['content'] 	= $this->load->view('davranis-takibi',$data,TRUE);
		$data['scrpt'] = $this->load->view('kategori/dav-tak-scrpt',$data,TRUE);

		
		load_admin_view('template/template_view',$data);
	}
	public function davranis_getir()
	{
		
	
		$kategori =$this->input->post("kategori");
		$datas=$this->db->where("kategoriId",$kategori)->get("davranislar")->result();
		foreach($datas as $s){
		echo "<option id='".$s->id."'>".$s->ad."</option>";}
		
		
		 
	}
	public function davranis_ekle()
	{
		$data['title'] 		= 'Ana Sayfa';
		$data['siniflar']=$this->db->get("siniflar")->result();
		$data['kategori']=$this->db->get("kategori")->result();
		//$data['davranislar']=$this->db->get("davranislar")->result();
		$sinifid =$this->input->post("sinifid");
		$kategori =$this->input->post("kategori");
		$data['davranislar']=$this->db->where("kategoriId",$kategori)->get("davranislar")->result();

		$data['sol_menu_adi'] ='personel'; //aut core da atılıyor gelen değer admin,personel
		
		$data['sol_menu_icerik']='';
		$data['content'] 	= $this->load->view('davranis-ekle',$data,TRUE);
		$data['scrpt'] = $this->load->view('kategori/dav-tak-scrpt',$data,TRUE);

		
		load_admin_view('template/template_view',$data);
	}
	public function secenekler()
	{
		$data['title'] 		= 'Davranış Seçenekleri';
		$data['sol_menu_adi'] ='personel'; //aut core da atılıyor gelen değer admin,personel
		$data['kategori']=$this->db->get("kategori")->result();
		$data['davranislar']=$this->db->get("davranislar")->result();
		$data['sertifika']=$this->db->get("sertifika")->result();
		$data['sol_menu_icerik']='';
		$data['content'] = $this->load->view('davranis-secenekleri',$data,TRUE);
		$data['scrpt'] = $this->load->view('kategori/dav-sec-scrpt',$data,TRUE);
		
		load_admin_view('template/template_view',$data);
	}
	public function kategoriEkle()
	{
		$kat=$this->input->post("ad");
		$okullar=$this->input->post("okullar");
		$okullar=implode(" ",$okullar);
		$snc=$this->db->insert("kategori",array("ad"=>$kat,"okullar"=>$okullar));
		print_r($snc);	
	}
	public function davranisEkle()
	{
		$ad=$this->input->post("ad");
		$puan=$this->input->post("puan");
		$secKat=$this->input->post("secKat");
		$pdr=$this->input->post("pdr");
		$pdrgor=$this->input->post("pdrgor");
		$bildrigon=$this->input->post("bildrigon");
		//$okullar=implode(" ",$okullar);
		$snc=$this->db->insert("davranislar",array("ad"=>$ad,"puan"=>$puan,"kategoriId"=>$secKat,"aciklama"=>$pdr,"pdr"=>$pdrgor,"bildiri"=>$bildrigon));
		print_r($snc);
	}
	public function sertifikaEkle()
	{
		$okullar=$this->input->post("okullar");
		$okullar=implode(" ",$okullar);
		$ad=$this->input->post("serAd");
		$basPuan=$this->input->post("basPuan");
		$yildiz=$this->input->post("yildiz");
		$message=$this->input->post("message");
		if($message==null){$bildirim=0;}else{$bildirim=1;}
		//$bildrigon=$this->input->post("bildrigon");
		//$okullar=implode(" ",$okullar);
		$snc=$this->db->insert("sertifika",array("ad"=>$ad,"puan"=>$basPuan,"okullar"=>$okullar,"yildiz"=>$yildiz,"message"=>$message,"bildirim"=>$bildirim));
		print_r($snc);
	}
	public function kategoriEdit(){
		
		$id=$this->input->post("id");
		$ad=$this->input->post("ad");
		$okullar=$this->input->post("okullar");
		$okullar=implode(" ",$okullar);
		$snc2=$this->db->where('id',$id)->update("kategori",array("ad"=>$ad,"okullar"=>$okullar));
		echo $snc2;
		
	}
	public function davranisEdit(){
		
		$id=$this->input->post("id");
		$ad=$this->input->post("ad");
		$puan=$this->input->post("puan");
		$secKat=$this->input->post("secKat");
		$pdr=$this->input->post("pdr");
		$pdrgor=$this->input->post("pdrgor");
		$bildrigon=$this->input->post("bildrigon");
		$snc2=$this->db->where('id',$id)->update("davranislar",array("ad"=>$ad,"puan"=>$puan,"kategoriId"=>$secKat,"aciklama"=>$pdr,"pdr"=>$pdrgor,"bildiri"=>$bildrigon));
		echo $snc2;
	}
	public function sertifikaEdit(){
		
		$id=$this->input->post("id");
		$okullar=$this->input->post("okullar");
		$okullar=implode(" ",$okullar);
		$ad=$this->input->post("serAd");
		$basPuan=$this->input->post("basPuan");
		$yildiz=$this->input->post("yildiz");
		$message=$this->input->post("message");
		if($message==null){$bildirim=0;}else{$bildirim=1;}
		$snc2=$this->db->where('id',$id)->update("sertifika",array("ad"=>$ad,"puan"=>$basPuan,"okullar"=>$okullar,"yildiz"=>$yildiz,"message"=>$message,"bildirim"=>$bildirim));
		echo $snc2;
	}
	
	public function katSor()
	{
		$id=$this->input->post("id");
		$snc=$this->db->where('id',$id)->get("kategori")->row();
		echo json_encode($snc);
	}
	public function davSor()
	{
		$id=$this->input->post("id");
		$snc=$this->db->where('id',$id)->get("davranislar")->row();
		echo json_encode($snc);
	}
	public function serSor()
	{
		$id=$this->input->post("id");
		$snc=$this->db->where('id',$id)->get("sertifika")->row();
		echo json_encode($snc);
	}
	
	
}
