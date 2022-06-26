 <?php
 //echo "b";
//$sayfa_kullanici_haklari = $this->session->userdata('kullanici_roller');
//  echo "a";
//$session_data = $this->session->all_userdata();

//echo '<pre>';
//print_r($sayfa_kullanici_haklari['erisim_haklari']);

 //die;
 
 
 
 
 ?>
	 <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-9">
                <h2><?php echo "aa".$hata_kodu; ?></h2>
                <p>Seçtiğiniz kriterlerdeki öğrencilerimizi inceleyebilirsiniz.</p>
            </div>
            
            <!--info button-->
            <div class="col-sm-3 title-action">
                <button class="btn btn-info" type="button" data-toggle="modal" data-target="#myModal5" title="Bilgi"><i class="fa fa-info"></i></button>
                <a href="personel-ekle.html"><button class="btn btn-success" type="button" title="Yeni Kayıt"><i class="fa fa-plus"></i> </button></a>
                <a href="javascript:history.back(-1)"><button class="btn btn-default btn-outline" title="Önceki Ekran" type="button"><i class="fa fa-reply"></i> </button></a>
            </div>
            <!--#info button-->
			
			
            <!--info modal-->
            <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Kapat</span></button>
                            <h4 class="modal-title">Ekran Açıklama Başlık</h4>
                        </div>
                        <div class="modal-body">
                            <p>Ekran açıklaması</p>
                             <p>Ayrıca Bu ekranda şunları bunları yapabilirsiniz. şunları bunları yapamazsınız..</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Kapat</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--#info modal-->
    </div>
	 





	<h1>İmdat ÖZtürk çöişğiüİŞıüÇÖçöiü</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p >Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
