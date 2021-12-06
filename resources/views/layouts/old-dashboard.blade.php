<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - Escuta Aqui</title>

    <link href="{{ asset('dashboard/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="{{ asset('dashboard/css/sb-admin-2.css')}}" rel="stylesheet">

    <link href="{{ asset('dashboard/css/custom.css')}}" rel="stylesheet">
    <link href="{{ asset('dashboard/icons/icons_custom.css')}}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('dashboard/js/bootstrap-datepicker/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css')}}">
    @yield('styles')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper" class="menu-dashboard">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-white sidebar sidebar-dark accordion py-4" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center px-4" href="{{ url('painel.home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="escuta aqui logo" class="img-fluid">
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item mt-5 {{ (request()->is('painel')) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('painel.home')}}">
                    <i class="icon-home "></i>
                    <span>Home</span></a>
            </li>

            <li class="nav-item {{ (request()->is('painel/clientes')) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('painel.customers')}}">
                    <i class="icon-customers"></i>
                    <span>Clientes</span></a>
            </li>
            <li class="nav-item {{ (request()->is('painel/agenda')) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('painel.agenda')}}">
                    <i class="far fa-calendar"></i>
                    <span>Agenda</span></a>
            </li>
            <li class="nav-item {{ (request()->is('painel/financeiro')) ? 'active' : '' }}">
                <a class="nav-link" href="index.html">
                    <i class="far fa-money-bill-alt"></i>
                    <span>Financeiro</span></a>
            </li>
            <li class="nav-item {{ (request()->is('painel/voluntarios')) ? 'active' : '' }}">
                <a class="nav-link" href="index.html">
                    <i class="icon-heart"></i>
                    <span>Voluntário</span></a>
            </li>

            <div class="sidebar-heading">
                Addons
            </div>

            <li class="nav-item {{ (request()->is('painel/configuracoes')) ? 'active' : '' }}">
                <a class="nav-link" href="index.html">
                    <i class="icon-configuration"></i>
                    <span>Configurações</span></a>
            </li>
            <li class="nav-item {{ (request()->is('painel/resources')) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('painel.resources')}}">
                    <i class="icon-certificate"></i>
                    <span>Recursos</span></a>
            </li>

            <li class="mt-5">
                <div class="row justify-content-center">
                    <button class="btn btn-custom-dashboard py-2 px-3">
                        Receber Clientes
                    </button>
                </div>
            </li>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column py-4 px-5 menu-right">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <h5 class="mb-0 text-gray-800 title-menu-dashboard"> <strong> {{$title}} </strong></h5>


                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="mr-4">
                            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-5 my-2 my-md-0 mw-100 navbar-search">
                                <div class="input-group bg-white">
                                    <input type="text" class="form-control bg-white" placeholder="Pesquisar" aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-white" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </li>

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-comment fa-fw" style="font-size: 22px;"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-custom badge-counter">1+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Comentários
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div>
                                        <div class="small text-gray-500">17 de Novembro, 2021</div>
                                        <span class="font-weight-bold">Marcar Reunião com os Especialistas!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Ver todos</a>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-video fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-custom badge-counter">2+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Vídeo Chamada
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">20 de Novembro, 2021</div>
                                        <span class="font-weight-bold">Chamada do Cliente Noberto!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">16 de Novembro, 2021</div>
                                        <span class="font-weight-bold">Chamada perdida do Cliente Souza!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Ver todas</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-bell fa-fw" style="font-size: 22px;"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-custom badge-counter">2</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Notificações
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Consulta marcada para hoje.</div>
                                        <div class="small text-gray-500">Consultório Online · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Última Consulta.</div>
                                        <div class="small text-gray-500">Consultório Online · 5h</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Ver todas</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ (Auth::user()) ? Auth::user()->name : 'Usuário' }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ (Auth::user()) ? Auth::user()->getImage() : asset('images/profile.png') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configurações
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sair
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield("content")
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logout"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logout">Finalizar sessão.</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Deseja mesmo sair?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-primary" >Sair</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('dashboard/js/jquery/jquery-2.2.4.min.js')}}"></script>
{{--    <script src="{{asset('js/app.js')}}" defer></script>--}}
    <script src="{{asset('dashboard/js/momentjs/moment.js')}}"></script>
    <script src="{{asset('dashboard/js/momentjs/moment-with-locales.js')}}"></script>
    <script src="{{asset('dashboard/js/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('dashboard/js/bootstrap-datepicker/bootstrap-datepicker.pt-BR.min.js')}}"></script>
    <script src="{{asset('dashboard/js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{ asset('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('dashboard/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('dashboard/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('dashboard/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
    <!-- Page level custom scripts -->
    {{-- <script src="{{ asset('dashboard/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('dashboard/js/demo/chart-pie-demo.js') }}"></script> --}}


    @yield('scripts')
</body>

</html>
