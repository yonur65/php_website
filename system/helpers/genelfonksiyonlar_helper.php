<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');




if ( ! function_exists('is_installed'))
{
	function is_installed($type='redirect')
	{
		
		return 'yes';
		/*
		if(!defined('IS_INSTALLED'))
		{
			$CI = get_instance();
			$file 		= './dbc_config/config.xml';
		   	$xmlstr 	= file_get_contents($file);
			$xml 		= simplexml_load_string($xmlstr);
			$config		= $xml->xpath('//config');
			$is_installed = $config[0]->is_installed;
			
			if(!defined('IS_INSTALLED'))
				define('IS_INSTALLED',$is_installed);
		}

		if(constant('IS_INSTALLED')=='no')
		{			
			if($type=='redirect')
			redirect(site_url('install'),'refresh');
			else
			return 'no';
		}
		else
		{
			if($type!='redirect')
			return 'yes';

		}
		*/
	}
}



if ( ! function_exists('lang_key'))
{
	function lang_key($key='')
	{
		if(defined('LANG_ARRAY'))
		{
			$lang = (array)json_decode(constant('LANG_ARRAY'));
			return (isset($lang[$key]))?$lang[$key]:$key;				
		}
		else
		{
			$CI = get_instance();
			$curr_lang 	= get_current_lang();

			$default_lang = default_lang();
				
			if($curr_lang=='')
				$file_name = $default_lang.'.yml';
			else
			{
				if(!@file_exists(FCPATH."dbc_config/locals/".$curr_lang.'.yml'))
				{
					$file_name = $default_lang.'.yml';
				}
				else
				{					
					$file_name = $curr_lang.'.yml';
				}
			}

			$CI->load->library('yaml');
			$lang =  $CI->yaml->parse_file('./dbc_config/locals/'.$file_name);

			if(count($lang)>0)
			{
				if(!defined('LANG_ARRAY'))
					define('LANG_ARRAY',json_encode($lang));

				return (isset($lang[$key]))?$lang[$key]:$key;				
			}
			else
				return $key;
			
		}
	}
}


if ( ! function_exists('dbc_url_title'))
{
	function dbc_url_title($str, $separator = 'dash', $lowercase = FALSE)
	{

		if ($separator == 'dash')
		{
			$search		= '_';
			$replace	= '-';
		}
		else
		{
			$search		= '-';
			$replace	= '_';
		}

		$trans = array(
						'&\#\d+?;'				=> '',
						'&\S+?;'				=> '',
						'\s+'					=> $replace,
						$replace.'+'			=> $replace,
						$replace.'$'			=> $replace,
						'^'.$replace			=> $replace,
						'\.+$'					=> ''
					);

		$str = strip_tags($str);

		foreach ($trans as $key => $val)
		{
			$str = preg_replace("#".$key."#i", $val, $str);
		}

		if ($lowercase === TRUE)
		{
			$str = strtolower($str);
		}

        $str = str_replace('&','and',$str);
        $str = str_replace(' ','-',$str);
        $str = str_replace('/','-',$str);
        $str = str_replace('?','-',$str);

		return trim(stripslashes($str));
	}
}


if ( ! function_exists('default_lang'))
{
	function default_lang()
	{
		// if(is_installed('return')!='no')
		// {}else
			// return 'tr';
		
		
			if(defined('DEFAULT_LANG'))
			{
				return constant('DEFAULT_LANG');
			}
			else
			{	
				// if(is_installed('return')=='yes')
				// {}		
				// else
					// return 'tr';
					
					
					
					$CI = get_instance();
					$CI->load->database();
					//var_dump($CI->load->database());
					
					
				
					
					
					
					 
						$default_lang = 'tr';

					if(!defined('DEFAULT_LANG'))
						define('DEFAULT_LANG',$default_lang);
					return $default_lang;											
				
			}
		
		
	}
}



if ( ! function_exists('load_admin_view'))
{
	function load_admin_view($view='',$data=array(),$buffer=FALSE)
	{
		$CI 	= get_instance();
		
		
		
		
		//echo "imdat".$buffer;
		
		//die;
		
		
		if($buffer==FALSE)
		{
			if(@file_exists(APPPATH."modules/admin/views/custom/".$view.".php"))
			$CI->load->view('custom/'.$view,$data);
			else
			$CI->load->view('template/'.$view,$data);	
		}
		
		else
		{
			if(@file_exists(APPPATH."modules/admin/views/custom/".$view.".php"))
			$view_data = $CI->load->view('custom/'.$view,$data,TRUE);
			else
			$view_data = $CI->load->view('template/'.$view,$data,TRUE);	
			return $view_data;
		}
		
		
		
	}
}


if ( ! function_exists('load_view'))
{
	function load_view($view='',$data=array(),$buffer=FALSE,$theme='')
	{
		$CI 	= get_instance();
		if($theme=='')
		$theme 	= get_active_theme();
		if($buffer==FALSE)
		{
			if(@file_exists(APPPATH."modules/themes/views/".$theme."/".$view.".php"))
			$CI->load->view('themes/'.$theme.'/'.$view,$data);
			else
			$CI->load->view('themes/default/'.$view,$data);	
		}
		else
		{
			if(@file_exists(APPPATH."modules/themes/views/".$theme."/".$view.".php"))
			$view_data = $CI->load->view('themes/'.$theme.'/'.$view,$data,TRUE);
			else
			$view_data = $CI->load->view('themes/default/'.$view,$data,TRUE);	
			return $view_data;
		}
	}
}


if ( ! function_exists('get_current_lang'))
{
	function get_current_lang()
	{
		$CI 		= get_instance();
		$lang = ($CI->uri->segment(1)!='')?$CI->uri->segment(1):default_lang();
		if(!@file_exists(FCPATH."dbc_config/locals/".$lang.'.yml'))
			$lang = default_lang();
		return $lang;	
	}
}

