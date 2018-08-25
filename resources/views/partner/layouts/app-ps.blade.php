<!DOCTYPE html>
<html class="no-js" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>kupesan.id - @yield('title')</title>

    <!-- Styles -->

   <!-- Bootstrap core CSS     -->
    <link href=" {{ URL::asset('partners/css/bootstrap.min.css ') }}" rel="stylesheet" />

     <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap.min.css" rel="stylesheet" />

    <!-- File Input -->
    <link href=" {{ URL::asset('partners/css/fileinput.min.css ') }}" rel="stylesheet" />
    <link href=" {{ URL::asset('partners/css/fileinput-rtl.min.css ') }}" rel="stylesheet" />


    <!-- Animation library for notifications   -->
    <link href=" {{ URL::asset('partners/css/animate.min.css ') }}" rel="stylesheet"/>

    <link href=" {{ URL::asset('partners/css/jquery-ui.css ') }}" rel="stylesheet"/>
    <link href=" {{ URL::asset('partners/css/jquery-ui.structure.css ') }}" rel="stylesheet"/>
    <link href=" {{ URL::asset('partners/css/jquery-ui.theme.css ') }}" rel="stylesheet"/>
    
    <!--  Light Bootstrap Table core CSS    -->
    <link href=" {{ URL::asset('partners/css/light-bootstrap-dashboard.css?v=1.4.0 ') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <!-- DataTables -->
  <link rel="stylesheet" href="{{URL::asset('partners/css/dataTables.bootstrap.min.css')}}">

  <link rel="stylesheet" href="{{URL::asset('partners/css/select2.css')}}">


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href=" {{ URL::asset('partners/css/demo.css" rel="stylesheet ') }}" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href=" {{ URL::asset('partners/css/pe-icon-7-stroke.css ') }}" rel="stylesheet" />
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    @include('sweetalert::alert')
<!-- date time picker -->  
  <link rel="stylesheet" href="{{ URL::asset ('dist/css/datepicker.css') }} ">

  <script type="text/javascript">
        $( document ).ready(function() {
            $("#date").datepicker({
               dateFormat: "yyyy-mm-dd"
            });
        });
  </script>
  <style type="text/css">
    .not-available {
        background-color: #ea410c;
      }
      .available {
        background-color: #acff7a;
      }
      .close-hour {
        background-color: #e6e6e6;
      }
  </style>
</head>
<body>

    @include('partner.layouts.sidebar')

    <div class="main-panel">

        @include('partner.layouts.nav')

        @yield('content')

    </div>
    <!-- Scripts -->
    <!--   Core JS Files   -->
    <script src=" {{ URL::asset('partners/js/jquery.3.2.1.min.js') }} " type="text/javascript"></script>

    <script src=" {{ URL::asset('partners/js/jquery-ui.js') }} " type="text/javascript"></script>
    
    <script src=" {{ URL::asset('partners/js/bootstrap.min.js') }} " type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src=" {{ URL::asset('partners/js/chartist.min.js') }} "></script>

    <!-- DataTables -->
    <script src="{{URL::asset('partners/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('partners/js/dataTables.bootstrap.min.js')}}"></script>

    <!--  File Input Plugin    -->
    <script src=" {{ URL::asset('partners/js/plugins/purify.min.js') }} "></script>
    <script src=" {{ URL::asset('partners/js/fileinput.min.js') }} "></script>
    <script src=" {{ URL::asset('partners/js/theme.min.js') }} "></script>

    <!--  Notifications Plugin    -->
    <script src=" {{ URL::asset('partners/js/bootstrap-notify.js') }} "></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src=" {{ URL::asset('partners/js/light-bootstrap-dashboard.js?v=1.4.0') }} "></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src=" {{ URL::asset('partners/js/demo.js') }} "></script>

    <!--  Notifications Plugin    -->
    <script src=" {{ URL::asset('partners/js/bootstrap-notify.js') }} "></script>

    <script>
      $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
      })
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#list-kebaya-product1').DataTable();
        } );
    </script>

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

        });
    </script>

    <script>
        $("#file-0a").fileinput({
                theme: 'fa',
                'allowedFileExtensions': ['jpg', 'png', 'jpeg'],
                'maxFileSize': 512,

        });
    </script>

    <script type="text/javascript">
      $( "#datepicker" ).datepicker({
      inline: true,
      altField: '#datepicker2',
      altFormat: "yy-mm-dd",
      minDate: 0,
      maxDate: "+3M"
    });
    </script>
    
    <script type="text/javascript">
      $('#datepicker2').change(function(){
          $('#datepicker').datepicker('setDate', $(this).val());
      });
    </script>

    <script type="text/javascript">
    
        $( document ).ready(function() {
            $("#datepicker").datepicker({
               dateFormat: "yyyy-mm-dd"
            });
        });
    </script>

    <script type="text/javascript">
        
        $(document).ready(function() {
            $('#example').DataTable();
        } );

    </script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example-getting-started').multiselect();
        });
    </script>
    
    <script src="{{ URL::asset('bower_components/moment/min/moment.min.js')}}"></script>
    <!-- <script src="{{ URL::asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script> -->
    <script src="{{ URL::asset('dist/js/bootstrap-datepicker.js') }} "></script>
    <script src="{{ URL::asset('dist/js/custom-date-picker.js') }} "></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js.map"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- <script src="{{ URL::asset('partners/js/select2.full.js') }} "></script> -->
    <script src="{{ URL::asset('partners/js/select2.js') }} "></script>


    <script type="text/javascript">
      $('#provinces').on('change', function(e){
        console.log(e);
        var province_id = e.target.value;
        $.get('/json-regencies?province_id=' + province_id,function(data) {
          console.log(data);
          $('#regencies').empty();
          $('#regencies').append('<option value="0" disable="true" selected="true">Pilih Kota/Kabupaten</option>');

          $('#districts').empty();
          $('#districts').append('<option value="0" disable="true" selected="true">Pilih Kecamatan</option>');

          $('#villages').empty();
          $('#villages').append('<option value="0" disable="true" selected="true">Pilih Kelurahan</option>');

          $.each(data, function(index, regenciesObj){
            $('#regencies').append('<option value="'+ regenciesObj.id +'">'+ regenciesObj.name +'</option>');
          })
        });
      });

      $('#regencies').on('change', function(e){
        console.log(e);
        var regencies_id = e.target.value;
        $.get('/json-districts?regencies_id=' + regencies_id,function(data) {
          console.log(data);
          $('#districts').empty();
          $('#districts').append('<option value="0" disable="true" selected="true">Pilih Kecamatan</option>');

          $.each(data, function(index, districtsObj){
            $('#districts').append('<option value="'+ districtsObj.id +'">'+ districtsObj.name +'</option>');
          })
        });
      });

      $('#districts').on('change', function(e){
        console.log(e);
        var districts_id = e.target.value;
        $.get('/json-village?districts_id=' + districts_id,function(data) {
          console.log(data);
          $('#villages').empty();
          $('#villages').append('<option value="0" disable="true" selected="true">Pilih Kelurahan</option>');

          $.each(data, function(index, villagesObj){
            $('#villages').append('<option value="'+ villagesObj.name +'">'+ villagesObj.name +'</option>');
          })
        });
      });

    </script>
    <script type="text/javascript">
      var tags = $('#tags');
        $(tags).select2({
          data:[
            {id:1,text:"House Studio"},
            {id:2,text:"Studio Komersil"},
            {id:3,text:"Thematic Studio"},
            {id:4,text:"Semi Outdoor"},
            {id:5,text:"Vintage"},
            {id:6,text:"Rustic"},
            {id:7,text:"Cafe"},
            {id:8,text:"Restaurant"},
            {id:9,text:"Etnic"},
            {id:10,text:"Garden"},
            {id:11,text:"Colorful"},
            {id:12,text:"Monochrome"},
            {id:13,text:"Modern"},
            {id:14,text:"Classic"},
            {id:15,text:"Cosplay"},
            {id:16,text:"Tradisional"},
            {id:17,text:"Horor"},
            {id:18,text:"Pantai"},
            {id:19,text:"Hutan"},
            {id:20,text:"Minimalis"},
            {id:21,text:"Shabby Chic"},
            {id:22,text:"Mediteranian"},
            {id:23,text:"Bohemian"},
            {id:24,text:"Caribbean"},
            {id:25,text:"Nature"},
            {id:26,text:"Outdoor"},
          ],
          multiple: true,
          placeholder: "Pilih Paket Tag",
          width: "100%"
        });
    </script>
    @yield('script')
</body>
</html>
