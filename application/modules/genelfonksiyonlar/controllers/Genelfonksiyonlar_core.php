<?php 
//header('Content-type: text/html; charset=ISO-8859-9');
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Classified admin Controller
 *
 * This class handles user account related functionality
 *
 * @package		Admin
 * @subpackage	Admin
 * @author		sc mondal
 * @link		http://webhelios.com
 *
 */





class Genelfonksiyonlar_core extends CI_Controller {


	

	public function __construct()
	{
		parent::__construct();

		
			
		
		 
	}

	public function index()
	{
		 

		$this->home();	
	}

	

public function home($start=0,$sort_by='add_time')
	{
		
		
					echo "Genelfonkiyonlar.";

	}


	

public function session_tab_degistir()
	{
		print_r($_POST['tabadi']);

		$this->session->set_flashdata('activetab', $_POST['tabadi']);
		
		//echo ($_POST['tabadi']);
		
	}


 
 
	

}



/* End of file admin_core.php */
/* Location: ./application/modules/admin/controllers/admin_aore.php */