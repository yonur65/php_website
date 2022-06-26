<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Genelayarlar_model_core extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	
	
	function kategoriler_add($data)
	{
		$this->db->insert('okul_tur_tnm',$data);
		return $this->db->insert_id();
	}	
	 
	
	
	function kategoriler_liste_getir()
	{
		
		
		$query=$this->db->query("SELECT a.kategori_id,a.kategori_adi,b.okul_id,b.okul_adi from davraniskategori a inner join okul b on a.okul_id=b.okul_id and a.kategori_id=$d  ");
		
		return $query;

	}

 
	
		
	function kategoriler_edit($d)
	{
		
		
		$query=$this->db->query("SELECT * from tabloadi	where a.okul_id=$d");
		
		return $query;

	}	
	
	
	
	
	
	 
	
	public function kategoriler_update($data,$id)
	{
			
			//print_r($data);
			
			$this->db->update('davraniskategori',$data,array('kategori_id'=>$id));
		
	}


	 
 



	
	
	
}
