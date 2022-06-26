<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 26.11.2016
 * Time: 16:38
 */

    function get_category_title($id){
        $CI=&get_instance();

        $row =  $CI->db->
        where("id",$id)->
        get("category")->
        row();

        $title = "<span style='color:red'>Kategori Bulunamadı</span>";

        if(!empty($row->id))
        {
            $title=$row->title;
        }
        else{

        }
        return $title;

    }

function get_supplier_title($id){

    $CI=&get_instance();

    $row =  $CI->db->
    where("id",$id)->
    get("supplier")->
    row();

    $title = "<span style='color:red'>Tedarikçi Bulunamadı</span>";

    if(!empty($row->id))
    {
        $title=$row->title;
    }
    return $title;

}
function get_brand_title($id){

    $CI=&get_instance();

    $row =  $CI->db->
    where("id",$id)->
    get("brand")->
    row();

    $title = "<span style='color:red'>Marka Bulunamadı</span>";

    if(!empty($row->id))
    {
        $title=$row->title;
    }
    return $title;
}

function get_product_title($id){

    $CI=&get_instance();

    $row =  $CI->db->
    where("id",$id)->
    get("product")->
    row();

    $title = "<span style='color:red'>Ürün Bulunamadı</span>";

    if(!empty($row->id))
    {
        $title=$row->title;
    }
    return $title;
}




?>