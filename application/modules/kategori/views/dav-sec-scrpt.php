  <script>
			//ilk açýlýþta ekleme sayfalarýný gizler.
			$("#sec-kat-add").hide();
			$("#sec-dav-add").hide();
			$("#sec-ser-add").hide();
		//	$('.multiselect1').multiselect();
		
			
			
			//KAtegori Edit sayfasýna yönlendirir.
			$(".btn1").click(function () {
				var id = $(this).attr('id');
				//alert(id);
				var tt="lk";
				var dataURL= "<?php echo base_url("kategori/katSor"); ?>";
				$("#sec-kat-add").show();
				$("#sec-kat").hide();
				$.post(
					dataURL,
					{id:id},
					function (data) {
						if(data){
							//.attr('checked',true);}
							//tt=JSON_parse(data);
							tt=$.parseJSON(data);
							if(tt['okullar'].includes('AO')){$("#sec-kat-add :input[value='AO']").click();}
							if(tt['okullar'].includes('OO')){$("#sec-kat-add :input[value='OO']").click();}
							if(tt['okullar'].includes('IO')){$("#sec-kat-add :input[value='IO']").click();}
							//$.each(data,function(i,val){ val['id']});okullar=$("select").multiselect().val();
							//alert(tt['okullar']);
							$("#tab-1kaydet").val(tt['id']);
							$("#kat-ad").val(tt['ad']);
							//$("#sec-ser-add").hide();'loadOption', [{name   : 'AO',value  : 'AO',checked: true}]
							//location.reload();
							//refresh(); 
							}//$("#davranis").append(data);
							})
				
			});
			
			//Davranýþlarda düzenleme fonksiyonudur
			$(".btn2").click(function () {
				var id = $(this).attr('id');
				var tt="";
				var dataURL= "<?php echo base_url("kategori/davSor"); ?>";
				$("#sec-dav-add").show();
				$("#sec-dav").hide();
				$.post(
					dataURL,
					{id:id},
					function (data) {
						if(data){
							tt=$.parseJSON(data);
							$("#secKat").val(tt['kategoriId']);
							$("#puan").val(tt['puan']);
							if(tt['pdr']==1){$("#sec-dav-add :input[id='checkbox1']").click();}
							if(tt['bildiri']==1){$("#sec-dav-add :input[id='checkbox2']").attr('checked',true);}
							$("#tab-2kaydet").val(tt['id']);
							$("#dav-ad").val(tt['ad']);
							$("#pdr-aciklama").val(tt['aciklama']);
							}
							})
				
			});
			
			//sertifikalarda düzenleme fonksiyonudur
			$(".btn3").click(function () {
				var id = $(this).attr('id');
				var tt="";
				var dataURL= "<?php echo base_url("kategori/serSor"); ?>";
				$("#sec-ser-add").show();
				$("#sec-ser").hide();
				$.post(
					dataURL,
					{id:id},
					function (data) {
						if(data){
							tt=$.parseJSON(data);
							//alert(tt['ad']);
							if(tt['okullar'].includes('AO')){$("#sec-ser-add :input[value='AO']").click();}
							if(tt['okullar'].includes('OO')){$("#sec-ser-add :input[value='OO']").click();}
							if(tt['okullar'].includes('IO')){$("#sec-ser-add :input[value='IO']").click();}
							$("#serAd").val(tt['ad']);
							$("#basPuan").val(tt['puan']);
							$("#yildiz").val(tt['yildiz']);
							if(tt['bildirim']==1){$("#sec-ser-add :input[id='checkbox9']").click();}
							//if(tt['bildiri']==1){$("#sec-dav-add :input[id='checkbox2']").attr('checked',true);}
							$("#tab-3kaydet").val(tt['id']);
							$("#message").val(tt['message']);
							//$("#pdr-aciklama").val(tt['aciklama']);
							}
							})
				
			});
			
			
			//Tablarýn hangisi aktiv ise onun listeleme sayfasýný kontrol eder.
			$("#sec-list").click(function () {
                          if ($("#tab-1").hasClass('active')) {
                           $("#sec-kat").show();
						   $("#sec-kat-add").hide();
                          } 
						  if ($("#tab-2").hasClass('active')) {
                           $("#sec-dav").show();
						   $("#sec-dav-add").hide();
                          }
						if ($("#tab-3").hasClass('active')) {
                           $("#sec-ser").show();
						   $("#sec-ser-add").hide();
                          }
            });
			//Tablarýn hangisi aktiv ise onun ekleme sayfasýný kontrol eder.
			$("#sec-add").click(function () {
                          if ($("#tab-1").hasClass('active')) {
                           $("#sec-kat-add").show();
						   $("#sec-kat").hide();
                          } 
						  if ($("#tab-2").hasClass('active')) {
                           $("#sec-dav-add").show();
						   $("#sec-dav").hide();
                          }
						if ($("#tab-3").hasClass('active')) {
                           $("#sec-ser-add").show();
						   $("#sec-ser").hide();
                          }
            });
			
			
			//kategori ekleme ve düzenleme fonksiyonudur
			$("#tab-1kaydet").click(function () {
				
				okullar=$("select").multiselect().val();
				var ad = $("#kat-ad").val();
				if($(this).val()!='kaydet'){
					var dataURL= "<?php echo base_url("kategori/kategoriEdit"); ?>";
					var id=$(this).val();
					 $.post(
					dataURL,
					{id:id,ad:ad,okullar:okullar},
					function (data) {
						if(data){
							$("#sec-kat").show();
							$("#sec-kat-add").hide();
							location.reload();000
							}
							})
					
					
				}else{
				//alert(okullar+ad);
				var dataURL= "<?php echo base_url("kategori/kategoriEkle"); ?>";
				 $.post(
					dataURL,
					{ad:ad,okullar:okullar},
					function (data) {
						if(data){
							$("#sec-kat").show();
							$("#sec-kat-add").hide();
							location.reload();000
							}
							})
							}
			});
			
			//davranýþlar ekleme ve düzenleme fonksiyonudur
			$("#tab-2kaydet").click(function () {
				//okullar=$("select").multiselect().val();
				
				puan=$("#puan option:selected").attr("value");
				secKat = $("#secKat option:selected").attr("value");
				var ad = $("#dav-ad").val();
				var pdr = $("#pdr-aciklama").val();
				if( $("#checkbox1").is(":checked")){checkbox1=1;}else{checkbox1=0;};
				if( $("#checkbox2").is(':checked')){checkbox2=1;}else{checkbox2=0;};
				//alert(puan+secKat+ad+pdr+checkbox1+checkbox2);
				if($(this).val()!='kaydet'){
					var id=$(this).val();
					var dataURL= "<?php echo base_url("kategori/davranisEdit"); ?>";
					$.post(
					dataURL,
					{id:id,ad:ad,puan:puan,secKat:secKat,pdr:pdr,pdrgor:checkbox1,bildrigon:checkbox2},
					function (data) {
						if(data){
							$("#sec-dav").show();
							$("#sec-dav-add").hide();
							location.reload();
							}
				})
					
					
				}else{
				var dataURL= "<?php echo base_url("kategori/davranisEkle"); ?>";
				 $.post(
					dataURL,
					{ad:ad,puan:puan,secKat:secKat,pdr:pdr,pdrgor:checkbox1,bildrigon:checkbox2},
					function (data) {
						if(data){
							$("#sec-dav").show();
							$("#sec-dav-add").hide();
							location.reload();
							}
				})}
			});
			
			//sertifika ekleme ve düzenleme fonksiyonudur
			$("#tab-3kaydet").click(function () {
				okullar=$("#mslk3").multiselect().val();
				//puan=$("#puan option:selected").attr("value");
				//secKat = $("#secKat option:selected").attr("value");
				var serAd = $("#serAd").val();
				var basPuan = $("#basPuan").val();
				var yildiz = $("#yildiz").val();
				var message = $("#message").val();
				if($(this).val()!='kaydet'){
					var id=$(this).val();
					var dataURL= "<?php echo base_url("kategori/sertifikaEdit"); ?>";
				//alert(okullar+serAd);
					$.post(
					dataURL,
					{id:id,okullar:okullar,serAd:serAd,basPuan:basPuan,yildiz:yildiz,message:message},
					function (data) {
						if(data){
							$("#sec-ser").show();
							$("#sec-ser-add").hide();
							location.reload();
							}
				})
				}else{
				var dataURL= "<?php echo base_url("kategori/sertifikaEkle"); ?>";
				//alert(okullar+serAd);
				 $.post(
					dataURL,
					{okullar:okullar,serAd:serAd,basPuan:basPuan,yildiz:yildiz,message:message},
					function (data) {
						if(data){
							$("#sec-ser").show();
							$("#sec-ser-add").hide();
							location.reload();
							//refresh(); 
							}//$("#davranis").append(data);
				})}
			});
			//Temizle Fonksiyonu için.
				$(".btn").val('temizle').click(function () {
					//$(":input").val('');
					$(":input").prop('checked',false)
				});
			
</script>
