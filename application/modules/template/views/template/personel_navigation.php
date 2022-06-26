
<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="thumbnail img-responsive img-circle" src="<?php echo $this->session->userdata('personel_bilgi_resim');?>" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata('personel_bilgi_adisoyadi');?></strong>
                             </span> <span class="text-muted text-xs block"><?php echo $this->session->userdata('personel_bilgi_gorevi');?><b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html"></a></li>
                            <li><a href="contacts.html">İletişim</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url('auth/logout')?>"><?php echo lang_key("logout") ?></a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        M+
                    </div>
                </li>
				


 <li>
<a href="#"><i class="fa fa-graduation-cap"></i> <span class="nav-label">Öğrenci İşlemleri</span>
	<span class="fa arrow"></span></a>
<ul class="nav nav-second-level collapse">

	 
	<li><a href="<?php echo base_url('kategori');?>">Davranış Takibi</a></li>
	 
</ul>
</li>				

 <li class="active">
	<a href="#"><i class="fa fa-cog"></i> <span class="nav-label">GENEL AYARLAR</span> <span
			class="fa arrow"></span></a>
	<ul class="nav nav-second-level">
		 
		<li class="active"><a href="<?php echo base_url('kategori/secenekler');//"genelayarlar/davranisislemleri";?>">Davranış Seçenekleri</a></li>
		 
	</ul>
</li>	

	
	
	
	
			 
				
            </ul>
        </div>
    	</nav>

       









       