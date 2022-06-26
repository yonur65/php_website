<?php

include "info_davranisislemleri.php";

 
$active='active';

$activetab = $this->session->flashdata('activetab');

 

if($activetab)
{
	$active='';

}

?>

<?php 

 //$this->load->view('template/islem_mesaj_popup.php'); 

$tarih=date('d.m.Y');

?>

<div class="wrapper wrapper-content animated fadeInRight back-change">
                <div class="row">
                    <div class="col-lg-12">
                        <!--tablar-->
                        <div class="tabs-container">
                            <ul class="nav nav-tabs">
							
 							
                            	<li class="<?php  echo ($activetab=='144')? 'active':'';?>"><a class="tablar" data-toggle="tab" href="#tab-8" aria-expanded="false" data-id=144>Kategoriler</a></li>
                           
								<li class="<?php  echo ($activetab=='119')? 'active':'';?>"><a class="tablar" data-toggle="tab" href="#tab-1" aria-expanded="false" data-id=119>Davranışlar</a></li>
                                 
 							
								<li class="<?php  echo ($activetab=='120')? 'active':'';?>"><a class="tablar" data-toggle="tab" href="#tab-2" aria-expanded="false" data-id=120>Sertifikalar</a></li>
                                 
 
                                
								
								
                            </ul>
                        <div class="tab-content">
 						
                            <!--yeni tab-->
                            <div id="tab-8" class="tab-pane <?php  echo ($activetab=='144')? 'active':$active;?>">
							
	<?php
	
	

		echo form_open(base_url() . 'genelayarlar/addokultanimlari/', array(
			
			'method' => 'post',
			'id' => 'addkategoriler',
			'data-toggle' => 'validator',
			'novalidate' => true
		));
		
	?>								
						
						
			şablondaki form buraya gelecek.
        
		
		
		</form>                               
        </div><!--#yeni tab-->

 
<?php

}
else
{
	
		
echo "<div id='tab-8' class='tab-pane ".(($activetab=="144")? "active":$active)."'>";

echo '
<div class="panel-body">
	<div class="row form-horizontal">
		<div class="col-sm-6 b-r">
		Erişim İzniniz yok

</div>	
</div>	
</div>	
</div>	
';	
	
} 
?> 

 						
 
 




                       
						</div>
                     </div>
                    <!--tablar-->
                    </div>
                </div>
            </div>
			
			

<script type="text/javascript">
	
    jQuery('document').ready(function () 
	
	{

	var tabs = $('.tablar');
	tabs.click(function(e) {
		//e.prevetDefault();
		//alert($(this).attr('data-id'));
		
		//var tabdan_gelen_id=$(this).attr('data-id');
		
		
		$.ajax({
			type: 'POST',
			url: '<?php echo base_url();?>genelfonksiyonlar/session_tab_degistir',
			data: 'tabadi='+$(this).attr('data-id'),
			success: function(cevap) {
			   // var response = $.evalJSON(r);
				
				/*if(response.message) {
				   //do some animation
				}*/
				
				//alert(cevap);
				
			}
		});
		
		
		
		
	});	








   
	  
});
	  
	  


</script>		



