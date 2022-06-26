<div class="wrapper nopadding-wrapper">
            <!--infobar-->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-9">
                    <h2>DAVRANIŞ SEÇENEKLERİ</h2>
                    <p>Öğrencilerin davranış seçeneklerini ekleyebilir, düzenleyebilirsiniz..</p>
                </div>
                <!--info button-->
                <div class="col-sm-3 title-action">
                    <a href="#"><button id="sec-list" class="btn btn-info btn-lg" type="button" title="Liste"><i class="fa fa-th-list"></i> </button></a>
                    <a href="#"><button id="sec-add" class="btn btn-success btn-lg" type="button" title="Yeni"><i class="fa fa-plus"></i></button></a>
                    <a href="javascript:history.back(-1)"><button class="btn btn-default btn-outline btn-lg" type="button" title="Önceki"><i class="fa fa-reply"></i></button></a>
                </div><!--#info button-->
            </div><!--#infobar-->
            <div class="wrapper wrapper-content animated fadeInRight back-change">
                <!--duyurular-->
                <div class="row">
                    <!--sutun1-->
                    <div class="col-lg-12">
                        <div class="tabs-container">	
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1">Kategoriler</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-2">Davranışlar</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-3">Sertifikalar</a></li>
                            </ul>
                            <div class="tab-content">
                                <!--yeni tab-->
                                <div id="tab-1" class="tab-pane active">
                                    <div id="sec-kat-add"  class="panel-body">
                                        <!--filtre-->
                                        <div class="row form-horizontal">
                                            <div class="col-sm-12">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                                                    <label class="font-noraml control-label">Okul:</label>
                                                    <select id="mslk2" multiple class="multiselect1" required>
                                                        <option>Tümü</option>
                                                        <option  value="AO">Yeni okul adı AO</option>
                                                        <option value="IO">Yeni okul adı İO</option>
                                                        <option value="OO">Yeni okul adı OO</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group has-feedback">
                                                    <label class="font-noraml control-label">Davranış Kategori
                                                        Adı:</label>
                                                    <input id="kat-ad" type="text" placeholder="Örn. Ders" class="form-control"
                                                           required>
                                                </div>
                                            </div>
                                        </div>
                                        <!--#filtre-->

                                        <!--#işlem buttonları EKLEME İŞLEMİ BUTONLARI-->
                                        <div class="col-sm-12">
                                            <hr>
                                            <button value="temizle" class="btn btn-default btn-outline btn-lg pull-left margin-ayar"
                                                    type="reset" title="Formu Temizle"><i class="fa fa-eraser"></i>
                                            </button>
                                            <button class="btn btn-success btn-lg pull-right margin-ayar" type="submit"
                                                    value="kaydet" name="tab_degisim_144_kaydet"
                                                    id="tab-1kaydet" title="Kaydet"><i
                                                    class="fa fa-save"></i> Kaydet
                                            </button>
                                        </div>
                                        <!--#işlem buttonları-->
                                    </div>
                                    <!--ödev listesi-->
                                    <div id="sec-kat"class="row"><h2></h2>
                                        <div class="col-lg-12">
                                            <div class="ibox float-e-margins">
                                                <div class="ibox-content">
                                                    <h2>Davranış Kategorileri</h2> <br>
                                                    <div class="table-responsive">
                                                        <table class="footable table-hover table-bordered table table-stripped toggle-arrow-tiny" data-page-size="8">
                                                            <thead>
                                                            <tr>
                                                                <th data-sort-initial="descending" style="width: 300px">Davranış Kategorisi</th>
                                                                <th>Okul</th>
                                                                <th data-sort-ignore="true" style="width:75px"></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
															<?php foreach($kategori as $kato){;?>
                                                            <tr>
                                                                <td><?php echo $kato->ad;?></td>
                                                                <td>Merter <?php echo $kato->okullar;?></td>
                                                                <td>
                                                                    <button id="<?php echo $kato->id;?>" class="btn1 btn-info pull-right btn-lg"
                                                                            type="button" data-toggle="tooltip"
                                                                            title="Düzenle"><i class="fa fa-edit"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
															<?php };?>
                                                            
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <ul class="pagination pull-right"></ul>
                                                                </td>
                                                            </tr>
                                                            </tfoot>

                                                        </table>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--#ödev listesi-->
                                </div><!--#yeni tab-->
                                <!--yeni tab-->
                                <div id="tab-2" class="tab-pane">
                                    <div id="sec-dav-add" class="panel-body">
                                        <!--filtre-->
                                        <div class="row form-horizontal">
                                            <div class="col-sm-6 b-r">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                    <label class="font-noraml control-label">Davranış
                                                        Kategorisi:</label>
                                                    <select id="secKat"class="form-control" name="Hafta">
                                                        <option selected disabled>Lütfen Seçiniz</option>
														<?php foreach($kategori as $kato){;?>
                                                        <option value="<?php echo $kato->id;?>"><?php echo $kato->ad;?></option><?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                    <label class="font-noraml control-label">Davranış:</label>
                                                    <input id="dav-ad" type="text" placeholder="Örn. Derse katılımı çok iyi"
                                                           class="form-control">
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                    <label class="font-noraml control-label">Puanı:</label>
                                                    <select id="puan" class="form-control" name="sinif">
                                                        <option selected value="0" class="text-info">0 Puan</option>
                                                        <option value="1">1 Puan</option>
                                                        <option value="2">2 Puan</option>
                                                        <option value="3">3 Puan</option>
                                                        <option value="4">4 Puan</option>
                                                        <option value="5">5 Puan</option>
                                                        <option value="6">6 Puan</option>
                                                        <option value="7">7 Puan</option>
                                                        <option value="8">8 Puan</option>
                                                        <option value="9">9 Puan</option>
                                                        <option value="10">10 Puan</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="col-sm-6">

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                    <label class="font-noraml control-label">PDR Açıklama:</label>
                                                    <textarea id="pdr-aciklama" placeholder="Bu davranış için PDR tarafından yazılacak özel açıklama. Bilgilendirme ekranlarında kullanılacaktır." class="form-control" rows="4" maxlength="300"></textarea>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                    <div class="checkbox checkbox-info">
                                                        <input id="checkbox1" type="checkbox"><label for="checkbox1"><i class="fa fa-pagelines text-info pull-left margin-ayar"></i>Bu davranışı yapan öğrenciler PDR personeli ekranında gözüksün</label></div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                    <div class="checkbox checkbox-info">
                                                        <input id="checkbox2" type="checkbox"><label for="checkbox2"><i class="fa fa-bell text-info pull-left margin-ayar"></i>Bildiri olarak gönderilsin</label></div>
                                                </div>
                                            </div>
                                        </div><!--#filtre-->
                                        <!--#işlem buttonları EKLEME İŞLEMİ BUTONLARI-->
                                        <div class="col-sm-12">
                                            <hr>
                                            <button value="temizle"  class="btn btn-default btn-outline btn-lg pull-left margin-ayar"
                                                    type="reset" title="Formu Temizle"><i class="fa fa-eraser"></i>
                                            </button>
                                            <button class="btn btn-success btn-lg pull-right margin-ayar" type="submit"
                                                    value="kaydet" name="tab_degisim_144_kaydet"
                                                    id="tab-2kaydet" title="Kaydet"><i
                                                    class="fa fa-save"></i> Kaydet
                                            </button>
                                        </div>
                                        <!--#işlem buttonları-->
                                    </div>
                                    <!--ödev listesi-->
                                    <div id="sec-dav" class="row"><h2></h2>
                                        <div class="col-lg-12">
                                            <div class="ibox float-e-margins">
                                                <div class="ibox-content">
                                                    <h2>Davranışlar Listesi</h2> <br>
                                                    <div class="table-responsive">
                                                        <table class="footable table-hover table-bordered table table-stripped toggle-arrow-tiny" data-page-size="8">
                                                            <thead>
                                                            <tr>
                                                                <th style="width: 300px">Davranış Kategorisi</th>
                                                                <th>Açıklama</th>
                                                                <th style="width: 100px">Puan</th>
                                                                <th data-sort-ignore="true" style="width:75px"></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody><?php foreach($davranislar as $davo){?>
                                                            <tr>
                                                                <td> <?php foreach($kategori as $kato){;
																if($kato->id==$davo->kategoriId){echo $kato->ad; }} ?></td>
                                                                <td><?=$davo->ad;?>
																<?php if($davo->pdr){;?>
                                                                    <i class="fa fa-pagelines text-info pull-right margin-ayar"></i>
																<?php } if($davo->bildiri){;?>
																<i class="fa fa-pagelines text-info pull-right margin-ayar"></i><?php }?>
                                                                </td>
                                                                <td><?=$davo->puan; ?></td>
                                                                <td><button id="<?php echo $davo->id;?>" class="btn2 btn-info pull-right btn-lg" type="button" data-toggle="tooltip" title="Düzenle"><i class="fa fa-edit"></i></button></td>
                                                            </tr>
															<?php }?>
                                                   
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <td colspan="4">
                                                                    <ul class="pagination pull-right"></ul>
                                                                </td>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--#ödev listesi-->
                                </div><!--#yeni tab-->
                                <!--yeni tab-->
                                <div id="tab-3" class="tab-pane">
                                    <div class="panel-body">
                                        <!--filtre-->
                                        <div id="sec-ser-add" class="row form-horizontal">
                                            <div class="col-sm-6 b-r">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                    <label class="font-noraml control-label">Okul:</label>
                                                    <select id="mslk3" multiple class="multiselect1" required>
                                                        <option value="AO">Yeni okul adı AO</option>
                                                        <option value="IO">Yeni okul adı İO</option>
                                                        <option value="OO">Yeni okul adı OO</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                    <label class="font-noraml control-label">Sertifika Adı:</label>
                                                    <input id="serAd" type="text" placeholder="Örn. Altın Sertifika"
                                                           class="form-control">
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                    <label class="font-noraml control-label">Başlangıç Puanı:</label>
                                                    <input id="basPuan" type="text" placeholder="Örn. 100" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                    <label class="font-noraml control-label">Kaç yıldızdan sonra sertifikaya 1 yıldız eklensin:</label>
                                                    <input id="yildiz"type="text" placeholder="Örn. 15" class="form-control">
                                                    <small>Yukarıda belirlenen sayının katlarında (örn 15, 30, 45) sertifikaya 1 yıldız eklenecektir. Örn 15 yıldızdan sonra; 1 yıldızlı gümüş sertifika gibi.</small>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="checkbox checkbox-info">
                                                        <div class="checkbox checkbox-info">
                                                            <input id="checkbox9" type="checkbox">
                                                            <label for="checkbox9"><i
                                                                    class="fa fa-bell text-info pull-left margin-ayar"></i>Öğrenci sertifika almaya hak kazandığında veliye bildiri gitsin</label>
                                                        </div>

                                                    </div>
                                                    <!--gunler-->
                                                    <div id="bildirigunleri" style="display: none;margin-top:10px">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                            <label class="font-noraml control-label">Veliye Gidecek Mesaj İçeriği:</label>
                                                            <textarea id="message" placeholder="Örn. Sayın velimiz; öğrencimiz {X} Gümüş Sertifika almaya hak kazanmıştır. Kendisini tebrik ederiz." class="form-control" rows="2"></textarea>
                                                            <small>Not: Öğrencinin isminin çıkması için {X} yazabilirsiniz.</small>
                                                        </div>
                                                    </div>

                                                    <script type="text/javascript"
                                                            src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
                                                    <script type="text/javascript">
                                                        $(function () {
                                                            $("#checkbox9").click(function () {
                                                                if ($(this).is(":checked")) {
                                                                    $("#bildirigunleri").show();
                                                                } else {
                                                                    $("#bildirigunleri").hide();
                                                                }
                                                            });
                                                        });
                                                    </script>
                                                    <!--/gunler-->


                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                        <label class="font-noraml control-label"></label>
                                                        <img src="img/sertifika.png" alt="" style="max-width:100px">
                                                    </div>

                                                </div>
                                            </div><!--#filtre-->
                                            <!--#işlem buttonları EKLEME İŞLEMİ BUTONLARI-->
                                            <div class="col-sm-12">
                                                <hr>
                                                <button value="temizle" class="btn btn-default btn-outline btn-lg pull-left margin-ayar"
                                                        type="reset" title="Formu Temizle"><i class="fa fa-eraser"></i>
                                                </button>
                                                <button class="btn btn-success btn-lg pull-right margin-ayar"
                                                        type="submit" value="kaydet" name="tab_degisim_144_kaydet"
                                                        id="tab-3kaydet" title="Kaydet"><i
                                                        class="fa fa-save"></i> Kaydet
                                                </button>
                                            </div>
                                            <!--#işlem buttonları-->
                                        </div>
                                        <!--ödev listesi-->
                                        <div id="sec-ser"class="row"><h2></h2>
                                            <div class="col-lg-12">
                                                <div class="ibox float-e-margins">
                                                    <div class="ibox-content">
                                                        <h2>Sertifikalar Listesi</h2> <br>
                                                        <div class="table-responsive">
                                                            <table class="footable table-hover table-bordered table table-stripped toggle-arrow-tiny" data-page-size="8">
                                                                <thead>
                                                                <tr>
                                                                    <th>Sertifika Adı</th>
                                                                    <th class="text-center" data-sort-ignore="true" style="width: 100px">İcon</th>
                                                                    <th>Başlangıç Puanı</th>
                                                                    <th data-sort-ignore="true">Bildiri</th>
                                                                    <th data-sort-ignore="true" style="width: 200px">Okul</th>
                                                                    <th data-sort-ignore="true" style="width:75px"></th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
																<?php foreach($sertifika as $serto){?>
                                                                <tr>
                                                                    <td><?=$serto->ad;?></td>
                                                                    <td class="text-center"><img src="img/sertifika<?=$serto->id;?>.png" alt=""
                                                                             style="width:40px"></td>
                                                                    <td><?=$serto->puan;?></td>
                                                                    <td><?=$serto->message;?>
                                                                       
                                                                        <i class="fa fa-bell text-info pull-right margin-ayar"></i>
                                                                    </td>
                                                                    <td><?=$serto->okullar;?></td>
                                                                    <td>
                                                                        
                                                                            <button id="<?php echo $serto->id;?>" class="btn3 btn-info pull-right btn-lg"
                                                                                    type="button" data-toggle="tooltip"
                                                                                    title="Düzenle"><i
                                                                                    class="fa fa-edit"></i></button>
                                                                        

                                                                    </td>
                                                                </tr><?php }?>
                                                            
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
                                                </div>
                                            </div>
                                        </div>
                                        <!--#ödev listesi-->
                                    </div><!--#yeni tab-->

                                </div>
                            </div>
                        </div>
                        <!--#sutun1-->

                    </div>
                    <!--#duyurular-->
                </div><!--#content-->
            </div>
            
			
			
			
			
        </div>
    </div>
<script src="<?php echo base_url();?>assets/admin2/js/plugins/footable/footable.all.min.js"></script>