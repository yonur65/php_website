
    <!-- Mainly scripts -->
    <script src="<?php echo base_url();?>assets/admin2/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url();?>assets/admin2/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin2/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url();?>assets/admin2/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- FooTable -->
    <script src="<?php echo base_url();?>assets/admin2/js/plugins/footable/footable.all.min.js"></script>


    <!-- Custom and plugin javascript -->
    <script src="j<?php echo base_url();?>assets/admin2/js/inspinia.js"></script>
    <script src="<?php echo base_url();?>assets/admin2/js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();
			
            $('.footable2').footable();
			
        });

    </script>


    <!--multi select-->
    <script src="<?php echo base_url();?>assets/admin2/js/jquery.multiselect.js"></script>
    <script>
        $('.multiselect1').multiselect({
            columns: 1,
            placeholder: 'Lütfen Seçiniz',
            search: true,
            selectAll: true
        });

        $('.multiselect2').multiselect({
            columns: 2,
            placeholder: 'Lütfen Seçiniz',
            search: true,
            selectAll: true
        });
		
		
		
		
    </script><!--/multi select-->
	
	
	
	
	
	

    <!-- Custom and plugin javascript -->
	


  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/multiple-select.css" />
  
  <script src="<?php echo base_url();?>assets/admin/js/multiple-select.js"></script>
  	    
   

  
<!--	
	<link href="<?php echo base_url(); ?>" rel="stylesheet" type="text/css" />
	
	  <script src="<?php echo base_url();?>assets/admin/php/v1.php"></script>-->
	
	
    <script src="<?php echo base_url();?>assets/admin/js/inspinia.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/plugins/pace/pace.min.js"></script>

    <!-- Chosen -->
<!--    <script src="<?php echo base_url();?>assets/admin/js/plugins/chosen/chosen.jquery.js"></script>-->

   <!-- JSKnob -->
<!--   <script src="<?php echo base_url();?>assets/admin/js/plugins/jsKnob/jquery.knob.js"></script>-->

   <!-- Input Mask-->
<!--    <script src="<?php echo base_url();?>assets/admin/js/plugins/jasny/jasny-bootstrap.min.js"></script>-->

   <!-- Data picker -->
   <script src="<?php echo base_url();?>assets/admin/js/plugins/datapicker/bootstrap-datepicker.js"></script>

   <!-- NouSlider -->
<!--   <script src="<?php echo base_url();?>assets/admin/js/plugins/nouslider/jquery.nouislider.min.js"></script>-->

   <!-- Switchery -->
   <script src="<?php echo base_url();?>assets/admin/js/plugins/switchery/switchery.js"></script>

    <!-- IonRangeSlider -->
<!--    <script src="<?php echo base_url();?>assets/admin/js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>-->

    <!-- iCheck -->
    <script src="<?php echo base_url();?>assets/admin/js/plugins/iCheck/icheck.min.js"></script>

    <!-- MENU -->
<!--    <script src="<?php echo base_url();?>assets/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>-->

    <!-- Color picker çoklu seçim-->
    <script src="<?php echo base_url();?>assets/admin/js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

    <!-- Clock picker çoklu seçim-->
    <script src="<?php echo base_url();?>assets/admin/js/plugins/clockpicker/clockpicker.js"></script>

    <!-- Image cropper çoklu seçim -->
    <script src="<?php echo base_url();?>assets/admin/js/plugins/cropper/cropper.min.js"></script>

    <!-- Date range use moment.js same as full calendar plugin çoklu seçim -->
    <script src="<?php echo base_url();?>assets/admin/js/plugins/fullcalendar/moment.min.js"></script>

    <!-- Date range picker -->
    <script src="<?php echo base_url();?>assets/admin/js/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Select2 -->
    <script src="<?php echo base_url();?>assets/admin/js/plugins/select2/select2.full.min.js"></script>
	
	
   <!-- Sweet alert -->
    <script src="<?php echo base_url();?>assets/admin/js/plugins/sweetalert/sweetalert.min.js"></script>
	
	<script src="<?php echo base_url();?>assets/admin/js/plugins/toastr/toastr.min.js"></script>
	
	
	
	
	
<!--toasttr-->	


    <script src="<?php echo base_url();?>assets/admin/js/plugins/validate/validator.min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/js/plugins/validate/jquery.masked-input.min.js"></script>
















	
 <script type="text/javascript">


 function uyari_goster(field,data,tip)
 {
	 
 toastr.clear();

 
if(!tip)
{tip="success";}	

var shortCutFunction=tip;
 //alert("a");
if(field)
{
	var msg = $('#'+field).val();
}
else
{
	var msg = data;
}	
 
 
if(msg)
{
	//toastr.+tip+(msg);
toastr[shortCutFunction](msg);

}   


				
				
								
				
				
}

toastr.options = {
				  "closeButton": true,
				  "debug": false,
				  "progressBar": true,
				  "preventDuplicates": false,
				  "positionClass": "toast-top-center",
				  "onclick": null,
				  "showDuration": "400",
				  "hideDuration": "1000",
				  "timeOut": "2000",
				  "extendedTimeOut": "1000",
				  "showEasing": "swing",
				  "hideEasing": "linear",
				  "showMethod": "fadeIn",
				  "hideMethod": "fadeOut"
				}				


    </script>
<!--/toasttr-->	

	
	
    <script>
	

	
	
	
        $(document).ready(function(){

		
		
		
		
	//var uyari_goster = function(veri){

	
/* $('#veli_aciklama_9').click(function (){
					var msg = $('#toastr_message').val();
                // Display a success toast, with a title
                toastr.success(msg)
            });
*/			

	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
            var $image = $(".image-crop > img")
            $($image).cropper({
                aspectRatio: 1.618,
                preview: ".img-preview",
                done: function(data) {
                    // Output the result data for cropping image.
                }
            });

            var $inputImage = $("#inputImage");
            if (window.FileReader) {
                $inputImage.change(function() {
                    var fileReader = new FileReader(),
                            files = this.files,
                            file;

                    if (!files.length) {
                        return;
                    }

                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        fileReader.readAsDataURL(file);
                        fileReader.onload = function () {
                            $inputImage.val("");
                            $image.cropper("reset", true).cropper("replace", this.result);
                        };
                    } else {
                        showMessage("Please choose an image file.");
                    }
                });
            } else {
                $inputImage.addClass("hide");
            }

            $("#download").click(function() {
                window.open($image.cropper("getDataURL"));
            });

            $("#zoomIn").click(function() {
                $image.cropper("zoom", 0.1);
            });

            $("#zoomOut").click(function() {
                $image.cropper("zoom", -0.1);
            });

            $("#rotateLeft").click(function() {
                $image.cropper("rotate", 45);
            });

            $("#rotateRight").click(function() {
                $image.cropper("rotate", -45);
            });

            $("#setDrag").click(function() {
                $image.cropper("setDragMode", "crop");
            });

            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true,
				format: "dd.mm.yyyy"
            });

            $('#data_2 .input-group.date').datepicker({
                startView: 1,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd.mm.yyyy"
            });

            $('#data_3 .input-group.date').datepicker({
                startView: 2,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            $('#data_4 .input-group.date').datepicker({
                minViewMode: 1,
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                todayHighlight: true
            });

            $('#data_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
				format: "dd.mm.yyyy"
            });

            var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, { color: '#1AB394' });

            var elem_2 = document.querySelector('.js-switch_2');
            var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

            var elem_3 = document.querySelector('.js-switch_3');
            var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

            $('.demo1').colorpicker();

            var divStyle = $('.back-change')[0].style;
            $('#demo_apidemo').colorpicker({
                color: divStyle.backgroundColor
            }).on('changeColor', function(ev) {
                        divStyle.backgroundColor = ev.color.toHex();
                    });

            $('.clockpicker').clockpicker();

            $('input[name="daterange"]').daterangepicker();
/*
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

            $('#reportrange').daterangepicker({
                format: 'DD.MM.YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01.01.2012',
                maxDate: '31.12.2015',
                dateLimit: { days: 60 },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'right',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-primary',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });
*/
            $(".select2_demo_1").select2();
            $(".select2_demo_2").select2();
            $(".select2_demo_3").select2({
                placeholder: "Select a state",
                allowClear: true
            });


        });
		
		/*
        var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
                }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }
*/

/*
        $("#ionrange_1").ionRangeSlider({
            min: 0,
            max: 5000,
            type: 'double',
            prefix: "$",
            maxPostfix: "+",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_2").ionRangeSlider({
            min: 0,
            max: 10,
            type: 'single',
            step: 0.1,
            postfix: " carats",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_3").ionRangeSlider({
            min: -50,
            max: 50,
            from: 0,
            postfix: "°",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_4").ionRangeSlider({
            values: [
                "January", "February", "March",
                "April", "May", "June",
                "July", "August", "September",
                "October", "November", "December"
            ],
            type: 'single',
            hasGrid: true
        });

        $("#ionrange_5").ionRangeSlider({
            min: 10000,
            max: 100000,
            step: 100,
            postfix: " km",
            from: 55000,
            hideMinMax: true,
            hideFromTo: false
        });

        $(".dial").knob();

        $("#basic_slider").noUiSlider({
            start: 40,
            behaviour: 'tap',
            connect: 'upper',
            range: {
                'min':  20,
                'max':  80
            }
        });

        $("#range_slider").noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });

        $("#drag-fixed").noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag-fixed',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });*/
    </script>

    <!-- Data Tables -->
    <script src="<?php echo base_url();?>assets/admin/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <script>
        $(document).ready(function(){

            $(".sortable-list").sortable({
                connectWith: ".connectList"
            }).disableSelection();

        });
    </script> 


    
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
			
            $('.dataTables-example').DataTable({
                "dom": 'lTfigt',
                "tableTools": {
                    "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });

            /* Init DataTables */
            var oTable = $('#editable').DataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( 'http://webapplayers.com/example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });
		
        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );
        }
		
    </script>
 

	
	
	

	
	
	<!--multi select

<script>
$('.multiselect1').multiselect({
    columns: 1,
    placeholder: 'Lütfen Seçiniz',
    search: true,
    selectAll: true
});

$('.multiselect2').multiselect({
    columns: 2,
    placeholder: 'Lütfen Seçiniz',
    search: true,
    selectAll: true
});
</script>--><!--/multi select-->