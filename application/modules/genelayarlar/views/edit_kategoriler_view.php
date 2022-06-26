	
<?php
include "info_davranisislemleri.php";

$activetab = $this->session->flashdata('activetab');

 
?>			

  <?php   
  //$this->load->view('template/islem_mesaj_popup.php');  ?>

<div class="wrapper wrapper-content animated fadeInRight back-change">
                <div class="row">
                    <div class="col-lg-12">
                     <div class="tabs-container"> 
					 <div class="tab-content">  

<?php 					   

//if($tab_degisim_120)
//{

?>						
                            <!--yeni tab-->
                            <div id="tab-1" class="tab-pane active">
	<?php

		echo form_open(base_url() . 'genelayarlar/updatekategoriler/', array(
			
			'method' => 'post',
			'id' => 'updatekategoriler',
			'data-toggle' => 'validator',
			'novalidate' => true
		));
		
	?>								
							
 

</form>  
								</div>
                            </div><!--#yeni tab-->

<?php

//}


	

?>												   
					</div>	   
                </div>
            </div>  
			
		</div>



    
$(document).ready(function() 
{});
		
			
function modal_islemyap($link)	

{


//alert($link);

var $formadi = $link.split("/");
	
//alert($table_adi);

//return false;	

swal(
{
	title: "Emin misiniz?",   
	text: "İşlemi Yapılacak!",   
	type: "warning",   
	showCancelButton: true,   
	confirmButtonColor: "#FF1B55",   
	confirmButtonText: "Evet, Onaylıyorum!",   
	closeOnConfirm: false 
}, 
	function()
	{   
	//alert($("#"+$formadi[1]).serialize());
	
	//return false;

	swal("İşlem Tamam!", "Başarılı bir şekilde işlem tamamlandı.", "success"); 
	
	});	

}		

</script>