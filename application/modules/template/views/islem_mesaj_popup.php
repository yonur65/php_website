<?php 

$islem_msg=$this->session->flashdata("msg");

$islem_msg_tip=$this->session->flashdata("msg_tip");

//echo "imdat".$islem_msg_tip;


if($this->session->flashdata("msg"))
{
	echo '
	<script>
        $(document).ready(function(){
		
		 uyari_goster("","'.$islem_msg.'","'.$islem_msg_tip.'");
		});
	</script>';
	
	
} 			



?>