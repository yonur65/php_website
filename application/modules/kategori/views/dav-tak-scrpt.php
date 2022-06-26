  <script>
			// Davranýþ Takibi kýsmý içindir bundan sonrasý daha bitmemiþtir.
			$('#choice').click(function(){
				   $("#listem").hide(1000);
				   
			});
			//$("#listem").load('<?php echo base_url("kategori/getir");?>');
			$('#listele').click(function(){
				 var sinifid = $("#choice").attr("id");
				 var hafta = $("#choice2").attr("id");
				 var dataURL= "<?php echo base_url("kategori/getir"); ?>";
				 $.post(
					dataURL,
					{sinif:sinifid,hafta:hafta},
					function (data) {
						$("#listem").load('<?php echo base_url("kategori/getir");?>');
						/*$('#myText').val("");
						$('#myText2').val("1");
						$('#myText3').val("");*/
						//$("#listem").show(1000);
					}
				)
			});
			 $("#tablo").hide();
			 $("#kaydet").hide();
			 $('#kategori').change(function(){
				 
				 $('#davranis').empty();
				 var kategori = $("#kategori option:selected").attr("id");
				 var dataURL= "<?php echo base_url("kategori/davranis_getir"); ?>";
				 $.post(
					dataURL,
					{kategori:kategori},
					function (data) {
						//alert(data);
						$("#davranis").append(data);
						
					
					}
				)
				});
</script>