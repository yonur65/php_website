
<?php 

$activetab = $this->session->flashdata('activetab');

include "info_davranissislemleri.php";	

 
//$this->load->view('template/islem_mesaj_popup.php');

?>
			



			
<div class="wrapper wrapper-content animated fadeInRight back-change">
                <div class="row">
                    <div class="col-lg-12">
                        <!--tablar-->
                        <div class="tabs-container">
                            <ul class="nav nav-tabs">
                            	
 
								<li class="<?php  echo ($activetab=='100')? 'active':'';?>"><a class="tablar" data-toggle="tab" href="#tab-1" aria-expanded="false" data-id=100>Şubeler</a></li>
                                 
 						

 							 
								 
								 <li class="<?php  echo ($activetab=='101')? 'active':'';?>"><a class="tablar" data-toggle="tab" href="#tab-2" aria-expanded="false" data-id=101>Ders Programı</a></li>
                            
 						
							</ul>
							
							
                        <div class="tab-content">
 
 <!--yeni tab-->
                            <div id="tab-1" class="tab-pane <?php  echo ($activetab=='100')? 'active':'';?>">
                                <div class="panel-body"> 
                                    
                                <!--ödev listesi-->                                					
                                           <div class="table-responsive" >
											
											<?php 
											
											echo "liste için sorgu";
											  
											
		
	
												echo '
												<table class="table table-striped table-bordered table-hover dataTables-example" >
													<thead>
													<tr>
														<th>Kategori</th>
														<th>Okul</th>
														 
													';	
														
													if($tab_degisim_100) 
													{														
														echo '<th></th>';
													}
												
													echo '
													
													</tr>
													</thead>
													<tbody >
												  ';
												 
														 
															echo '
															<tr class="gradeX">
														<td> $row->kategori_adi</td>
														<td> $row->okul_adi</td>
													 
														';
														
															
													
												if($tab_degisim_100)  
													{
														
														echo '
															<td class="text-right">
																  <a href="'. site_url('genelayarlar/editkategori/').'">  <button class="btn btn-info btn-lg" type="button" data-toggle="tooltip" title="Düzenle" value="$row->kategori_id"><i class="fa fa-edit"></i></button></a>
																</td>
															';
													
													
													}	
												
													
													echo '
													</tr>
															';
														 
														
												  echo '
													</tbody>
													</table>';
												
											
											
																						
											?>
											
											
											
                                              
												
                                            </div>
											
											
											<!--#ödev listesi-->
                                </div>

                            </div><!--#yeni tab-->
                            
							
							
							
 						

 
							<!--yeni tab-->
                            <div id="tab-2" class="tab-pane <?php  echo ($activetab=='101')? 'active':'';?>">
                                <div class="panel-body"><h2>Ders Programı</h2>
									<div class="table-responsive">
									
									
									
									
									<?php 
											
											
											echo "davranışlar listesi için sorgu";
		
	
												echo '
												<table class="table table-striped table-bordered table-hover dataTables-example" >
													<thead>
													<tr>
														<th>Davranış Kategorisi</th>
														<th>Açıklama</th>
														<th>Puan</th>
														';	
														
													if($tab_degisim_101) //yoksa
													{														
														echo '<th></th>';
													}
												
													echo '
													</tr>
													</thead>
													<tbody >
												  ';
												 
														  
															echo '
															<tr class="gradeX">
														<td>$row->kategori_adi</td>
														<td>$row->aciklama</td>
														<td>$row->puan</td>
													';
													if($tab_degisim_101) //yoksa
													{
													echo '
														<td class="text-right">
														  <a href="'. site_url('genelayarlar/editsubedersprogrami/$row->sube_id').'">  <button class="btn btn-info btn-lg" type="button" data-toggle="tooltip" title="Düzenle" value="$row->sube_id"><i class="fa fa-edit"></i></button></a>
														</td>
													';	
													}	
														
													echo '	
														
													</tr>
															';
														 
														
												  echo '
													</tbody>
													</table>';
												
											
											
																						
											?>
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
																		
                                  </div>

                                </div>
								
                            </div><!--#yeni tab-->
                            
							
 							
							
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
			
			


		