<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



if ( ! function_exists('site_url'))

{

	function site_url($uri = '',$lang='')

	{

		$CI =& get_instance();

		if($lang=='')
		$lang = get_current_lang();

		#$final_url = $CI->config->site_url($lang.'/'.$uri);
		$final_url = $CI->config->site_url($uri);

					//$CI->load->config('webhelios');
		
		// if($CI->config->item('use_ssl')=='yes')
		// $final_url = str_replace('http://','https://',$final_url); #uncomment this line if you want to force 

		return $final_url;

	}

}



if ( ! function_exists('base_url'))

{

	function base_url($uri = '')

	{

		$CI =& get_instance();

		$base_url = $CI->config->base_url($uri);

		//$CI->load->config('webhelios');
		
		// if($CI->config->item('use_ssl')=='yes')
			// $base_url = str_replace('http://','https://',$base_url);

		return $base_url;

	}

}

/*
if ( ! function_exists('post_detail_url'))

{

	function post_detail_url($post)

	{
		$post = (array)$post;

		$CI =& get_instance();
		$url = site_url('show/news/'.$post['id']); #never remove this line
		$url .= '/'.dbc_url_title(get_category_title_by_id($post['category']));
		if($post['sub_category']!=0)
		$url .= '/'.dbc_url_title(get_category_title_by_id($post['sub_category']));
		$date = str_replace(' ','-',translateable_date($post['publish_time']));
		$date = str_replace(',','',$date);

		$url .= '/'.$date;
		$url .= '/'.dbc_url_title($post['title']);

		return $url;

	}

}


if ( ! function_exists('category_news_url'))

{

	function category_news_url($id,$title)

	{
		$CI = get_instance();
		$url = site_url('show/categorynews/'.$id.'/0/'.dbc_url_title($title)); #never remove this line
		return $url;

	}

}

if ( ! function_exists('source_news_url'))

{

	function source_news_url($id,$title)

	{
		$CI = get_instance();
		$url = site_url('show/sourcenews/'.$id.'/0/'.dbc_url_title($title)); #never remove this line
		return $url;

	}

}

if ( ! function_exists('date_news_url'))

{

	function date_news_url($publish_time)

	{
		$date = str_replace(' ','-',translateable_date($publish_time));
		$date = str_replace(',','',$date);

		$CI = get_instance();
		$url = site_url('show/datenews/'.$publish_time.'/0/'.$date); #never remove this line
		return $url;

	}

}
*/

