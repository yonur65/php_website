
        <div class="wrapper nopadding-wrapper">  
            <!--infobar-->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-9">
					
                    <h2>DAVRANIŞ TAKİBİ</h2>
                    <p>Öğrencilerin davranış takibini ve puanlamasını buradan yapabilirsiniz.</p>
                </div>
            	<!--info button-->
                <div class="col-sm-3 title-action">

                    <a href="<?php echo base_url('kategori/getir');?>"><button id="listele" class="btn btn-info btn-lg" type="button" title="Davranış Listesi"><i class="fa fa-th-list"></i> </button></a>
                    <a href="<?php echo base_url('kategori/davranis_ekle');?>"><button class="btn btn-success btn-lg" type="button" title="Yeni"><i class="fa fa-plus"></i> </button></a>
                    <a href="javascript:history.back(-1)"><button class="btn btn-default btn-outline btn-lg" type="button" title="Önceki"><i class="fa fa-reply"></i> </button></a>
					

                </div><!--#info button-->
			</div><!--#infobar-->
            <!--content-->
            <div class="wrapper wrapper-content animated fadeInRight back-change">
            <!--duyurular-->
                <div class="row">
                <!--sutun1-->                     
                <div class="col-lg-12">
                    <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1">Davranışlar</a></li>
                            </ul>
                        <div class="tab-content">
                            <!--yeni tab-->
                            <div id="tab-1" class="tab-pane active">
                                <div class="panel-body">
                                    <!--filtre-->
                                    <div class="row form-horizontal">

                                    <div class="col-lg-12">

                                        <div class="well nopadding-l nopadding-r nopadding-t">
                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 has-feedback">
                                                <label class="font-noraml control-label">Sınıf:</label>
                                                <select id="choice" class="form-control" name="sinif">
                                                    <option selected>Lütfen Seçiniz</option>
													<?php foreach ($veri as $ver ){ ?>
                                                    <option id="<?php echo $ver->id;?>"><?php echo $ver->ad; ?></option>
													<?php }?>
                                                    
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 has-feedback">
                                                <label class="font-noraml control-label">Hafta:</label>
                                                <select id="choice2" class="form-control" name="sinif">
                                                    <option  selected>Lütfen Seçiniz</option>
													<?php //date() if(date('d.m')<) //18 .07. 2017?>
                                                    <option id="28">28. Hafta</option>
                                                    <option id="27">27. Hafta</option>
                                                    <option id="0">... Hafta</option>
                                                </select>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

										
										<div id="listem" class="table-responsive">
											<h2>2C Şubesi 28. Hafta Davranış Tablosu</h2> <br>
                                            <table class="footable table-hover table-bordered table table-stripped toggle-arrow-tiny" data-page-size="8">
                                                <thead>
                                                <tr>
                                                    <th style="width:200px">Öğrenci</th>
                                                    <th class="text-center" data-sort-ignore="true" style="width:65px">Resim</th>
                                                    <th class="text-center" data-sort-ignore="true" style="width: 75px">Yıldız</th>
                                                    <th data-sort-initial="true" data-sort-initial="descending" style="width: 100px">Puan</th>
                                                    <th style="width: 200px">Sertifika</th>
                                                    <th class="text-right" data-sort-ignore="true">Durum</th>
                                                    <th data-hide="all">Son Hafta Kazanılan Yıldız</th>
                                                    <th data-hide="all">Son Ay Kazanılan Yıldız</th>
                                                    <th data-hide="all">Son Hafta Kazanılan Puan</th>
                                                    <th data-hide="all">Son Ay Kazanılan Puan</th>
                                                </tr>
                                                </thead>
                                                <tbody>
												<?php if(isset($veri2)){ foreach ($veri2 as $ver ){ ?>
                                                    <option id="<?php echo $ver->id;?>"><?php echo $ver->ad; ?></option>
													<tr>
														<td><?php echo $ver->ad; ?> </td>
														<td><?php echo $ver->resim; ?> </td>
														<td><?php echo $ver->ad; ?> </td>
														<td><?php echo $ver->puan; ?> </td>
														<td>Bronz Sertifika</td>
														<td class="text-right"><h2 class="text-navy"><i class="fa fa-play fa-rotate-270"></i></h2></td>
														<td>-</td>
														<td><i class="fa fa-star text-navy"></i><i class="fa fa-star text-navy"></i></td>
														<td>75 Puan<br>
                                                        <span class="text-muted"><span class="badge badge-info">+ 5 Puan</span> Derse katılımı çok iyi / Türkçe-Hüdaverdi KARTAL<br>
                                                        <span class="badge badge-info">+ 3 Puan</span> Kitap okudu / Rehberlik - Ali BAŞ</span><br>
                                                        <span class="badge badge-danger">- 4 Puan</span> Derste kouşuyor / İngilizce - Aysel TÜRK</span><br>
                                                    </td>
                                                    <td><h2>180 Puan</h2></td>
													</tr>
													<?php }}?>
                                                <tr>
                                                    <td> Süheyla ÇİFCİ</td>
                                                    <td class="text-center"><img src="img/suheyla.jpg" class="img-circle circle-border m-b-md pull-left" alt="" style="width:70px"/></td>
                                                    <td class="text-center"><i class="fa fa-star text-navy"></i><i class="fa fa-star text-navy"></i><i class="fa fa-star text-navy"></i></td>
                                                    <td>850 Puan</td>
                                                    <td>Bronz Sertifika</td>
                                                    <td class="text-right"><h2 class="text-navy"><i class="fa fa-play fa-rotate-270"></i></h2></td>
                                                    <td>-</td>
                                                    <td><i class="fa fa-star text-navy"></i><i class="fa fa-star text-navy"></i></td>
                                                    <td>75 Puan<br>
                                                        <span class="text-muted"><span class="badge badge-info">+ 5 Puan</span> Derse katılımı çok iyi / Türkçe-Hüdaverdi KARTAL<br>
                                                        <span class="badge badge-info">+ 3 Puan</span> Kitap okudu / Rehberlik - Ali BAŞ</span><br>
                                                        <span class="badge badge-danger">- 4 Puan</span> Derste kouşuyor / İngilizce - Aysel TÜRK</span><br>
                                                    </td>
                                                    <td><h2>180 Puan</h2></td>
                                                </tr>
                                                <tr>
                                                    <td>Ayla TAŞKIN</td>
                                                    <td class="text-center"><img src="img/a3.jpg" class="img-circle circle-border m-b-md pull-left" alt="" style="width:70px"/></td>
                                                    <td class="text-center"><i class="fa fa-star text-navy"></i><i class="fa fa-star text-navy"></i><i class="fa fa-star text-navy"></i></td>
                                                    <td>820 Puan</td>
                                                    <td>Bronz Sertifika</td>
                                                    <td class="text-right"><h2 class="text-muted"><i class="fa fa-play fa-rotate-0"></i></h2></td>
                                                    <td>-</td>
                                                    <td><i class="fa fa-star text-navy"></i></td>
                                                    <td>75 Puan<br>
                                                        <span class="text-muted"><span class="badge badge-info">+ 5 Puan</span> Derse katılımı çok iyi / Türkçe-Hüdaverdi KARTAL<br>
                                                    </td>
                                                    <td><h2>180 Puan</h2></td>
                                                </tr>
                                                <tr>
                                                    <td>Ali BORÇSUZ</td>
                                                    <td class="text-center"><img src="img/a4.jpg" class="img-circle circle-border m-b-md pull-left" alt="" style="width:70px"/></td>
                                                    <td class="text-center"><i class="fa fa-star text-navy"></i></td>
                                                    <td>650 Puan</td>
                                                    <td>Bronz Sertifika</td>
                                                    <td class="text-right"><h2 class="text-danger">
                                                        <i class="fa fa-play fa-rotate-90"></i>
                                                    </h2></td>
                                                    <td>-</td>
                                                    <td><i class="fa fa-star text-navy"></i><i class="fa fa-star text-navy"></i></td>
                                                    <td>75<br>
                                                        <span class="badge badge-info">+ 3 Puan</span> Kitap okudu / Rehberlik - Ali BAŞ</span><br>
                                                        <span class="badge badge-danger">- 4 Puan</span> Derste kouşuyor / İngilizce - Aysel TÜRK</span><br>
                                                    </td>
                                                    <td><h2>180 Puan</h2></td>
                                                </tr>


                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td colspan="6">
                                                        <ul class="pagination pull-right"></ul>
                                                    </td>
                                                </tr>
                                                </tfoot>
                                            </table>



                                        </div>

                                    </div>


                                    </div><!--#filtre-->
                                </div><!--ödev listesi-->
                            </div><!--#yeni tab-->

						</div>
                    </div>
					 </div>
            <!--#duyurular-->
            </div><!--#content-->
		</div>
            <!--footer-->
            <div class="footer">
                <div class="pull-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2015
                </div>
            </div><!--#footer-->
        </div>
	
