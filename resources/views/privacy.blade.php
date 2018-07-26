<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>kupesan.id | Privacy Policy</title>

        <link rel="icon" href="{{ URL::asset('dist/images/logo.png') }}" type="image/x-icon">
        
       <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
        
        <!-- Bootstrap Stylesheet -->   
        <link rel="stylesheet" href="{{URL::asset('dist/css/bootstrap.min.css') }}">
        
        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href="{{URL::asset('dist/css/font-awesome.min.css') }}">
            
        <!-- Custom Stylesheets --> 
        <link rel="stylesheet" href="{{URL::asset('dist/css/style.css') }}">
        <link rel="stylesheet" id="cpswitch" href="{{URL::asset('dist/css/orange.css') }}">
        <link rel="stylesheet" href="{{URL::asset('dist/css/responsive.css') }}">
        
        <!-- Color Panel -->
        <link rel="stylesheet" href="{{URL::asset('dist/css/jquery.colorpanel.css') }}">
    </head>
    
    
    <body>
    
        <div class="loader"></div>
       <!--======== SEARCH-OVERLAY =========-->       
        <div class="header-absolute">
            <nav class="navbar navbar-default main-navbar navbar-custom navbar-transparent landing-page-navbar" id="mynavbar">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" id="menu-button">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>                        
                        </button>

                        <a href="home" class="navbar-brand">
                            <img src=" {{ URL::asset('dist/images/logo-navbar.png') }} " >
                        </a>
                    </div><!-- end navbar-header -->
                    
                    <div class="collapse navbar-collapse" id="myNavbar1">
                        <ul class="nav navbar-nav navbar-right navbar-search-link">
                                <li><a href="home">Home</a></li>
                            @guest
                                <li><a href="{{ route('login') }}" >Log in</a></li>
                                <li><a href="{{ route('register') }}" >Daftar</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>

                            @endguest
                                <li>
                                      
                                    <button class="btn btn-orange" style=" padding: 10px 30px; margin-top: 6px;" >
                                        <a href="{{route('jadi.mitra')}}" style="color: white; text-decoration: none;">Jadi Mitra </a>
                                    </button>
                                </li>
                                <li></li>
                                
                            <!-- <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>                        -->
                        </ul>
                    </div>
                </div><!-- end container -->
            </nav><!-- end navbar -->
        </div>
        
        <div class="sidenav-content">
    <div id="mySidenav" class="sidenav" >
        <h2 id="web-name"><span ><img src=" {{ URL::asset('dist/images/logo-navbar.png') }} " style="width: 165px;" ></span></h2>

        <div id="main-menu">
            <div class="closebtn">
                <button class="btn btn-default" id="closebtn">&times;</button>
            </div><!-- end close-btn -->
            
            <div class="list-group panel">
            
                <a href="home" class="list-group-item"> <span><i class="fa fa-home link-icon"></i></span>Home</a>
                 
                @guest
                
                    <a href="{{ route('login') }}" class="list-group-item" ><span><i class="fa fa-sign-in link-icon"></i></span>Log In</a>
                    
                    <a href="{{ route('register') }}" class="list-group-item" ><span><i class="fa fa-user link-icon"></i></span>Daftar</a>
                @else

                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>

                @endguest
                
                <button class="btn btn-orange" style=" padding: 10px 30px; margin-top: 6px; width: 100%;" >
                    <a href="{{route('jadi.mitra')}}" style="color: white; text-decoration: none;">Jadi Mitra </a>
                </button>
                
                
            </div><!-- end list-group -->
        </div><!-- end main-menu -->
    </div><!-- end mySidenav -->
</div><!-- end sidenav-content -->
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="faq-page" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-sm-12 col-md-12 content-side">
                            <div class="faq-block" style="text-align: justify;">
                                <h3 class="faq-heading">Privacy Policy</h3>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" href="#collapse1" data-parent="#accordion"><h4 class="panel-title">Definisi</h4></a>
                                    </div><!-- end panel-heading -->
                                    
                                    <div id="collapse1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><p>Situs web merupakan situs portal yang dikembangkan dalam bentuk sarana elektronik dengan domain kupesan.id untuk memenuhi kebutuhan terkait,<br>
                                                (i) mencari dan menemukan layanan yang disediakan oleh Partner-Ku;<br>
                                                (ii)    mengelola penyediaan layanan; dan/atau<br>
                                                (iii)   fungsi lainnya yang diperlukan untuk mendukung ekosistem layanan.</p></li>
                                                <li><p>Informasi pribadi berarti informasi Pengguna yang dapat disertakan selama Penggunaan situs web atau berafiliasi dengan Kupesan.id, seperti nama, alamat, tempat dan tanggal lahir, pekerjaan (apabila terdaftar sebagai Partner-Ku), data perusahaan (apabila terdaftar sebagai pertner-Ku), nomor telepon, alamat surat elektronik (e-mail), perizinan dan/atau sejenisnya, dan informasi lain yang mungkin dapat mengidentifikasi Pengguna sebagai Pengguna situs web.</p></li>
                                                <li><p>Kupesan.id adalah sarana elektronik yang dikembangkan oleh PT Marlex Mandiri Jaya yaitu suatu perusahaan yang didirikan berdasarkan hukum Negara Republik Indonesia. Pihak Kupesan.id mewakili PT Marlex Mandiri Jaya dan dapat diposisikan sebagai administrator atau pengelola situs web.</p></li>
                                                <li><p>Pengguna adalah segala pihak yang terdaftar sebagai Konsumen ataupun Partner-Ku dalam situs web.</p></li>
                                                <li><p>Konsumen adalah pihak yang terdaftar sebagai Konsumen dan menggunakan layanan yang tersedia pada siitus web.</p></li>
                                                <li><p>Partner-Ku adalah pihak yang terdaftar sebagai penyedia layanan dan menyediakan layanan melalui situs web.</p></li>
                                               <li><p> Layanan berarti berbagai layanan yang tersedia dan ditawarkan Partner-Ku pada situs web.
                                                </p></li>
                                            </ul>
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel-default -->
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" href="#collapse2" data-parent="#accordion"><h4 class="panel-title"> Informasi yang Kupesan.id kumpulkan</h4></a>
                                    </div><!-- end panel-heading -->
                                    
                                    <div id="collapse2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><p>Kupesan.id mengumpulkan informasi pribadi tertentu dari Pengguna agar situs web dapat menjalankan fungsinya baik untuk penggunaan layanan (apabila Pengguna adalah Konsumen) atau pengelolaan penyediaan Layanan (apabila Pengguna adalah Partner-Ku) atau fungsi lainnya yang diperlukan untuk mendukung ekosistem Layanan. Informasi Pribadi dapat Pengguna berikan secara langsung (sebagai contoh, saat Pengguna mendaftar sebagai Pengguna situs web) maupun terkumpul secara otomatis ketika Pengguna menggunakan situs web.</p></li>
                                                <li><p>Ketika Pengguna mengunjungi situs web, administrator situs web akan memproses data teknis seperti alamat protokol internet (internet protocol address) Pengguna, halaman web yang pernah Pengguna kunjungi, browser internet yang Pengguna gunakan, laman situs web yang sebelumnya/selanjutnya Pengguna kunjungi dan durasi setiap kunjungan/sesi yang memungkinkan Kupesan.id untuk mengirimkan fungsi-fungsi situs web. Sebagai tambahan, dalam beberapa hal, browser dapat menyarankan Pengguna agar mengaktifkan fungsi geo-location Pengguna untuk memungkinkan Kupesan.id memberikan Pengguna suatu pengalaman yang lebih baik dalam menggunakan internet dan/atau situs web. Data teknis tersebut akan digunakan administrator situs web dapat mengelola situs web, misalnya dengan menyelesaikan kesulitan-kesulitan teknis atau memperbaiki kemampuan akses bagian-baigan tertentu dari situs web. Hal tersebut diberlakukan agar Kupesan.id dapat memastikan bahwa Pengguna dapat (terus) menemukan informasi pada situs web dengan cara yang cepat dan sederhana.
                                                </p></li>
                                            </ul>
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel-default -->
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" href="#collapse3" data-parent="#accordion"><h4 class="panel-title"> Penggunaan informasi yang Kupesan.id kumpulkan</h4></a>
                                    </div><!-- end panel-heading -->
                                    
                                    <div id="collapse3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                           <ul>
                                               <li><p>Kupesan.id menggunakan alamat surat elektronik (e-mail), nama, nomor telepon, dan/atau sandi akun Pengguna untuk tujuan verifikasi kepemilikan Pengguna atas suatu akun dalam situs web Kupesan.id, untuk berkomunikasi dengan Pengguna sehubungan dengan penggunaan atau pengelolaan Layanan dan untuk memberikan Pengguna informasi mengenai penawaran-penawaran khusus atau promosi-promosi.</p></li>
                                               <li><p>Kupesan.id dapat meminta Pengguna melengkapi survei yang akan Kupesan.id gunakan untuk tujuan penelitian atau lainnya, meskipun Pengguna tidak harus menanggapinya.</p></li>
                                               <li><p>Kupesan.id menggunakan geo-location dan informasi tujuan Konsumen untuk menemukan Partner-Ku yang berada di sekitar Konsumen.</p></li>
                                               <li><p>Kupesan.id menggunakan Informasi Pribadi secara keseluruhan untuk menganalisa pola penggunaan situs web. Pengguna dengan ini setuju bahwa data Pengguna akan digunakan oleh sistem pemrosesan data internal Kupesan.id untuk memastikan diberikannya layanan yang terbaik untuk Pengguna.</p></li>
                                           </ul>
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel-default -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" href="#collapse4" data-parent="#accordion"><h4 class="panel-title">  Pemberian informasi yang Kupesan.id kumpulkan</h4></a>
                                    </div><!-- end panel-heading -->
                                    
                                    <div id="collapse4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                           <ul>
                                               <li><p>Apabila Pengguna adalah Konsumen, setelah menerima pesanan Pengguna, Kupesan.id akan memberikan informasi seperti nama, nomor telepon, pesanan dan/atau biaya transaksi Pengguna kepada Partner-Ku yang menerima permintaan Pengguna atas Layanan. Informasi ini dibutuhkan oleh Partner-Ku untuk menemukan Pengguna dan/atau memenuhi pesanan Pengguna.</p></li>
                                               <li><p>Apabila Pengguna adalah Partner-Ku, maka setelah menerima instruksi pesanan dari Konsumen, Kupesan.id akan memberikan informasi seperti nama, nomor telepon, lokasi, geo-location kepada Konsumen yang memesan Layanan Pengguna. Informasi ini dibutuhkan oleh Konsumen untuk untuk menghubungi Pengguna.</p></li>
                                               <li><p>Pengguna dengan ini setuju dan memberikan wewenang pada Kupesan.id untuk memberikan Informasi Pribadi Pengguna kepada Partner-Ku (apabila Pengguna adalah Konsumen) atau Konsumen (apabila Pengguna adalah Partner-Ku) sebagai suatu bagian dari Ketentuan Penggunaan.</p></li>
                                               <li><p>Kupesan.id dapat mempekerjakan atau bekerja sama dengan perusahaan-perusahaan dan orang perorangan sebagai pihak ketiga untuk memfasilitasi atau memberikan bantuan pengembangan situs web dan layanan-layanan tertentu untuk dan/atau atas nama Kupesan.id, untuk, di antaranya, <br>
                                                (i) memberikan bantuan Konsumen;<br>
                                                (ii)    memberikan informasi geo-location;<br>
                                                (iii)   melaksanakan layanan-layanan terkait dengan situs web (termasuk namun tidak terbatas pada layanan pemeliharaan, pengelolaan database, analisis web dan penyempurnaan fitur-fitur Situs Web);<br>
                                                (iv)    membantu Kupesan.id dalam menganalisa bagaimana Layanan digunakan serta bagaimana pengembangannya; atau<br>
                                                (v) untuk membantu penasihat profesional dan auditor eksternal Kupesan.id, termasuk penasihat hukum, penasihat keuangan, dan konsultan-konsultan. Para pihak ketiga ini hanya memiliki akses atas Informasi Pribadi Pengguna untuk melakukan tugas-tugas tersebut untuk dan/atau atas nama Kupesan.id.
                                                </p></li>
                                           </ul>
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel-default -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" href="#collapse5" data-parent="#accordion"><h4 class="panel-title">   Pengakuan dan Persetujuan</h4></a>
                                    </div><!-- end panel-heading -->
                                    
                                    <div id="collapse5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                           <ul>
                                               <li><p>Pengguna mengakui bahwa Pengguna telah membaca dan memahami kebijakan privasi ini dan syarat dan ketentuan penggunaan dan setuju dan sepakat terhadap penggunaan, praktik, pemrosesan dan pengalihan informasi pribadi Pengguna oleh Kupesan.id sebagaimana dinyatakan di dalam kebijakan privasi ini.</p></li>
                                               <li><p> Pengguna juga menyatakan bahwa Pengguna memiliki hak untuk membagikan seluruh informasi yang telah Pengguna berikan kepada Kupesan.id dan untuk memberikan hak kepada Kupesan.id untuk menggunakan dan membagikan informasi tersebut kepada Partner-Ku (apabila Pengguna adalah Konsumen) atau Konsumen (apabila Pengguna adalah Partner-Ku) guna mendukung layanan.</p></li>
                                           </ul>
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel-default -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" href="#collapse6" data-parent="#accordion"><h4 class="panel-title">   Perubahan isi kebijakan privasi</h4></a>
                                    </div><!-- end panel-heading -->
                                    
                                    <div id="collapse6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Informasi yang merupakan isi dari kebijakan privasi dapat diubah dan/atau diperbaharaui dari waktu ke waktu tanpa adanya pemberitahuan sebelumnya kepada Pengguna. Oleh karena itu, Pengguna diharapkan untuk membaca dan memahami serta memeriksa isi dari kebijkaan privasi dari waktu ke waktu untuk mengetahui jika terjadi perubahan dan/atau pembaharuan.</p>
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel-default -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" href="#collapse7" data-parent="#accordion"><h4 class="panel-title"> Cara untuk menghubungi Kupesan.id</h4></a>
                                    </div><!-- end panel-heading -->
                                    
                                    <div id="collapse7" class="panel-collapse collapse">
                                        <div class="panel-body">
                                                <p>Jika Pengguna memiliki pertanyaan lebih lanjut tentang privasi dan keamanan informasi Pengguna dan ingin memperbarui atau menghapus data Pengguna maka silakan hubungi Kupesan.id di: kupesan.id@gmail.com</p>
                                           </ul>
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel-default -->
                            </div><!-- end faq-block -->
                        </div><!-- end columns -->
                        
                    </div><!-- end row -->
                </div><!-- end container -->   
            </div><!-- end faq-page -->
        </section><!-- end innerpage-wrapper -->

        <!--======================= FOOTER =======================-->
        <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">
        
    <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
        <div class="container">
            <div class="row">
                
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                    <div id="abt-cnt-2-img">
                        <img src="{{ URL::asset('dist/images/logo-navbar.png') }}" class="img-responsive" alt="about-img" />
                    </div>
                </div><!-- end columns -->
                
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                    <h3 class="footer-heading">Social Media</h3>
                    <ul class="social-links list-unstyled list-unstyled">
                        <li><a href="#"><span><i class="fa fa-facebook"></i></span> &nbsp;&nbsp;&nbsp;&nbsp; Kupesan </a></li>
                        <li><a href="#"><span><i class="fa fa-twitter"></i></span>&nbsp;&nbsp;&nbsp;&nbsp; Kupesan</a></li>
                        <li><a href="#"><span><i class="fa fa-instagram"></i></span>&nbsp;&nbsp;&nbsp;&nbsp; Kupesan</a></li>
                    </ul>
                </div><!-- end columns -->
                
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                    <h3 class="footer-heading">Resources</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        <li><a href="{{route('jadi.mitra')}}">Daftar Mitra</a></li>
                    </ul>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-about">
                    <h3 class="footer-heading">About US</h3>
                    <p style="text-align: justify;">Kupesan.id adalah sebuah marketplace online yang ingin membawa perubahan dalam bentuk memudahkan masyarakat untuk mencari persewaan spot foto (dalam atau luar ruangan), persewaan gaun dan kebaya, penyedia jasa fotografer, serta penyedia jasa tata rias (make-up artist).</p>
                    
                </div><!-- end columns -->
                
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end footer-top -->

    <div id="footer-bottom" class="ftr-bot-black" >
        <div class="container" style="color: white;">
            <div class="row" >
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright" >
                    <p>© 2018 <a href="#">Kupesan.id</a> | All rights reserved.</p>
                </div><!-- end columns -->
                
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                    <ul class="list-unstyled list-inline">
                        <li><a href="">Terms & Condition</a></li>
                        <li><a href="privacy">Privacy Policy</a></li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end footer-bottom -->
    
</section><!-- end footer -->
        
        
        <!-- Page Scripts Starts -->
        <script src="{{URL::asset('dist/js/jquery.min.js') }}"></script>
        <script src="{{URL::asset('dist/js/jquery.colorpanel.js') }}"></script>
        <script src="{{URL::asset('dist/js/bootstrap.min.js') }}"></script>
        <script src="{{URL::asset('dist/js/custom-navigation.js') }}"></script>
        <!-- Page Scripts Ends -->
    </body>
</html>
