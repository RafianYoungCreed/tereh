<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Laratoko</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('/light/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{asset('/light/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{asset('/light/css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('/light/css/demo.css')}}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="{{asset('/light/img/sidebar-5.jpg')}}">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{ url('/home') }}" class="simple-text">
                    Laratoko
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="{{ url('/home') }}">
                        <i class=""></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('jenbar.index') }}">
                        <i class="pe-7s-user"></i>
                        <p>Jenis Barang</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pemasok.index') }}">
                        <i class="pe-7s-news-paper"></i>
                        <p>Pemasok</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('barang.index') }}">
                        <i class="pe-7s-news-paper"></i>
                        <p>Barang</p>
                    </a>
                </li>
                <li class="">
                        <i class="pe-7s-note2"></i>
                        <p>Transaksi</p>
                </li>
                
                <li>
                    <a href="{{ route('penjualan.index') }}">
                        <i class="pe-7s-science"></i>
                        <p>Penjualan</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pembelian.index') }}">
                        <i class="pe-7s-science"></i>
                        <p>Pembelian</p>
                    </a>
                </li>
                <li class="">
                        <i class="pe-7s-note2"></i>
                        <p>Pengguna</p>
                </li>
                @role('admin')
                <li>
                    <a href="{{ route('user.index') }}">
                        <i class="pe-7s-map-marker"></i>
                        <p>User</p>
                    </a>
                </li>
                <li class="">
                        <i class="pe-7s-note2"></i>
                        <p>laporan</p>
                </li>
                <li>
                    <a href="{{ url('/jual') }}">
                        <i class="pe-7s-science"></i>
                        <p>Penjualan</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/beli') }}">
                        <i class="pe-7s-science"></i>
                        <p>Pembelian</p>
                    </a>
                </li
                @endrole
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                                <p class="">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
        @yield('content')
            
        </div>

        <footer class="footer">
            <div class="container-fluid">
              
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> Rafian Firdaus
                </p>
            </div>
        </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{asset('/light/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/light/js/bootstrap.min.js')}}" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="{{asset('/light/js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{asset('/light/js/bootstrap-notify.js')}}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="{{asset('/light/js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="{{asset('/light/js/demo.js')}}"></script>


</html>
