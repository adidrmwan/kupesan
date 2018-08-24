<!DOCTYPE html>
<html class="no-js" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>kupesan.id | @yield('title')</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- RS5.0 Main Stylesheet -->
    <link rel="icon" href="{{ URL::asset('dist/images/logo.png') }}" type="image/x-icon">
        
    <!-- Google Fonts -->   
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
    
    <!-- Bootstrap Stylesheet -->   
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/bootstrap.min.css') }} ">
    
    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/font-awesome.min.css') }} ">
        
    <!-- Custom Stylesheets --> 
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/style.css') }} ">
    <link rel="stylesheet" id="cpswitch" href="{{ URL::asset ('dist/css/orange.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/responsive.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/material-design-iconic-font.min.css') }} ">

    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/owl.carousel.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/owl.theme.css') }} ">
    
    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/flexslider.css') }} " type="text/css" />
    
    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/datepicker.css') }} ">
    <link href=" {{ URL::asset('partners/css/jquery-ui.css ') }}" rel="stylesheet"/>
    <link href=" {{ URL::asset('partners/css/jquery-ui.structure.css ') }}" rel="stylesheet"/>
    <link href=" {{ URL::asset('partners/css/jquery-ui.theme.css ') }}" rel="stylesheet"/>
    
    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/magnific-popup.css') }} ">
    
    <!-- Color Panel -->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/jquery.colorpanel.css') }} ">

    <!-- Slick Stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/slick-theme.css') }}">
    <script type="text/javascript">
        $( document ).ready(function() {
            $("#date").datepicker({
               dateFormat: "dd.mm.yy"
            });
        });
    </script>
    <!-- sweet alert -->
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <style type="text/css">

      .overlay {
        position: absolute;
        bottom: 100%;
        left: 0;
        right: 0;
        background-color: #008CBA;
        overflow: hidden;
        width: 100%;
        height:0;
        transition: .5s ease;
      }

      .img-hover:hover .overlay {
        bottom: 0;
        height: 100%;
      }

      .text {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
      }
      .center-fa { 
          background-color:none;
          text-align:center;
          vertical-align:middle;
          display:table-cell;
      }
      .fa-asterisk {
          vertical-align:middle;
      }

      .not-available {
        background-color: #ea410c;
      }
      .available {
        background-color: #acff7a;
      }
      .close-hour {
        background-color: #e6e6e6;
      }
      select {
        text-align-last: center;
        text-align: center;
      }
    </style>
</head>
<body id="main-homepage">

       <div class="loader"></div>   
        <div class="header-absolute">
            @include('layouts.nav')


        </div>   

        @include('layouts.sidebar')

        @yield('content')

    <!-- Scripts -->
    <!-- Scripts -->
    <script type="text/javascript" src="{{ URL::asset('dist/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('dist/js/jquery.colorpanel.js') }} "></script>
    <script src="{{ URL::asset('dist/js/jquery.magnific-popup.min.js') }} "></script>
    <script src="{{ URL::asset('dist/js/bootstrap.min.js') }} "></script>
    <script src="{{ URL::asset('dist/js/jquery.flexslider.js') }} "></script>
    <script src="{{ URL::asset('dist/js/slick.min.js') }} "></script>
    <script src="{{ URL::asset('dist/js/bootstrap-datepicker.js') }} "></script>
    <!-- <script src="{{ URL::asset('dist/js/multiselect.js') }} "></script> -->
    <script src="{{ URL::asset('dist/js/owl.carousel.min.js') }} "></script>
    <script src="{{ URL::asset('dist/js/custom-navigation.js') }} "></script>
    <script src="{{ URL::asset('dist/js/custom-flex.js') }} "></script>
    <script src="{{ URL::asset('dist/js/custom-owl.js') }} "></script>
    <script src="{{ URL::asset('dist/js/custom-slick.js') }} "></script>
    <!-- <script src="{{ URL::asset('dist/js/custom-date-picker.js') }} "></script> -->
    <!-- <script src="{{ URL::asset('dist/js/custom-video.js') }} "></script> -->
    <script src="{{ URL::asset('dist/js/popup-ad.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/custom-gallery.js') }} "></script>
    <!-- Scripts -->
    <script src="{{ URL::asset('js/app.js') }}"></script>

    <!-- pesan (jangan diubah) -->
    <!-- Scripts -->
    <script src="{{ URL::asset('js/app.js') }}"></script>

    <script src=" {{ URL::asset('partners/js/jquery-ui.js') }} " type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src=" {{ URL::asset('partners/js/chartist.min.js') }} "></script>

    <!-- DataTables -->
    <script src="{{URL::asset('partners/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('partners/js/dataTables.bootstrap.min.js')}}"></script>

    <script >
      
       
    </script>
  
    <script>
      $( "#datepicker" ).datepicker({
      // prevText: '<i class="fa fa-fw fa-angle-left"></i>',
      // nextText: '<i class="fa fa-fw fa-angle-right"></i>',
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

    <script src="{{ URL::asset('dist/js/custom-date-picker.js') }} "></script>
    <script src="{{ URL::asset('partners/js/select2.js') }} "></script>

    @yield('script')

    <script>
      $(function() {
        $( "#datepicker" ).datepicker();
      });
    </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript">
      $('#provinces').on('change', function(e){
        console.log(e);
        var text = e.target.value;
        var spl = text.split(',');
        var durasi = spl[0];
        var pack_id = spl[1];
        var date = spl[2];
        $.get('/json-regencies1?pack_id=' + pack_id + '&durasi=' + durasi + '&callback=?',function(data) {
          console.log(data);
          $('#regencies').empty();
          $('#regencies').append('<option value="" disable="true" selected="true">Pilih Jam Mulai</option>');

          $('#districts').empty();
          $('#districts').append('<option value="" disable="true" selected="true">Pilih Jam Selesai</option>');

          $('#villages').empty();
          $('#villages').append('<option value="0" disable="true" selected="true">Pilih Jam Tambahan</option><option value="0">Tidak ada</option>');

          $.each(data, function(index, regenciesObj){
            $('#regencies').append('<option value="'+ regenciesObj.num_hour +','+ durasi +','+ pack_id +','+ date +'">'+ regenciesObj.num_hour +':00</option>');
          })
        });
      });

      $('#regencies').on('change', function(e){
        console.log(e);
        var text = e.target.value;
        var spl = text.split(',');
        var jam_mulai = spl[0];
        var durasi2 = spl[1];
        var pack_id = spl[2];
        var date = spl[3];

        $.get('/json-districts1?jam_mulai=' + jam_mulai + '&durasi2=' + durasi2 + '&callback=?',function(data) {
          console.log(data);
          $('#districts').empty();
          $('#districts').append('<option class="text-center" value="" disable="true" selected="true">Pilih Jam Selesai</option>');

          $('#villages').empty();
          $('#villages').append('<option class="text-center" value="0" disable="true" selected="true">Pilih Jam Tambahan</option><option value="0">Tidak ada</option>');

          $.each(data, function(index, districtsObj){
            $('#districts').append('<option class="text-center" value="'+ districtsObj.num_hour +','+ durasi2 +','+ pack_id +','+ date +','+ jam_mulai +'">'+ districtsObj.num_hour +':00</option>');
          })
        });
      });

      $('#districts').on('change', function(e){
        console.log(e);
        var text = e.target.value;
        var spl = text.split(',');
        var jam_selesai = spl[0];
        var durasi2 = spl[1];
        var pack_id = spl[2];
        var date = spl[3];
        var jam_mulai = spl[4];
        $.get('/json-village1?jam_selesai=' + jam_selesai + '&durasi2=' + durasi2 + '&pack_id=' + pack_id + '&date=' + date + '&jam_mulai=' + jam_mulai + '&callback=?',function(data) {
          console.log(data);
          $('#villages').empty();
          $('#villages').append('<option class="text-center" value="0" disable="true" selected="true">Pilih Jam Tambahan</option><option value="0">Tidak ada</option>');
          $('#terpilih').append('<option class="text-center" value="0" disable="true" selected="true">'+ jam_mulai + ':00 - ' + jam_selesai + ':00' + '</option>');
          $.each(data, function(index, villagesObj){
            $('#villages').append('<option class="text-center" value="'+ villagesObj.num_hour +'">'+ villagesObj.num_hour +' Jam</option>');
          })
        });
      });
    </script>
    @yield('script')

    <link href=" {{ URL::asset('partners/css/jquery-ui.css ') }}" rel="stylesheet"/>
    <script src=" {{ URL::asset('partners/js/jquery-ui.min.js') }} " type="text/javascript"></script>

    <script type="text/javascript">
      $('#startDate').datepicker({
          minDate:0,
          maxDate: "+3M"
      });
    </script>

    <script type="text/javascript">
      $('#endDate').datepicker({
          minDate:0,
          maxDate: "+3M"
      });
    </script>
</body>
</html>