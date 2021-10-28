<!DOCTYPE html>
<html lang="en" class="nav-open">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/src/templates/admin/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/src/templates/admin/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Admin Panel
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="/src/templates/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/src/templates/admin/assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/src/templates/admin/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">

<div class="wrapper"  style="background-color: #F4F3EF">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo" style="display: flex; justify-content: center; background-color: #A23F25">
            <a class="simple-text logo-normal" style="color:white">
                TasteIt
            </a>
        </div>

        <div class="sidebar-wrapper" style="overflow:hidden; background-color: #B7472A">
            <ul class="nav">
                <li class="">
                    <a href="/admin" style="color:white">
                        <i class="nc-icon nc-chart-bar-32" style="color:white"></i>
                        <p>Statistiche</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/categories" style="color:white">
                        <i class="nc-icon nc-tag-content" style="color:white"></i>
                        <p>Categorie</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/products" style="color:white">
                        <i class="nc-icon nc-favourite-28" style="color:white"></i>
                        <p>Prodotti più venduti</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/customers" style="color:white">
                        <i class="nc-icon nc-single-02" style="color:white"></i>
                        <p>Clienti</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/coupons" style="color:white">
                        <i class="nc-icon nc-money-coins" style="color:white"></i>
                        <p>Coupons</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/orders" style="color:white">
                        <i class="nc-icon nc-cart-simple" style="color:white"></i>
                        <p>Ordini</p>
                    </a>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->

        {*<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-icon btn-round">
                            <i class="nc-icon nc-minimal-right text-center visible-on-sidebar-mini"></i>
                            <i class="nc-icon nc-minimal-left text-center visible-on-sidebar-regular"></i>
                        </button>
                    </div>
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="javascript:;">Paper Dashboard 2 PRO</a>
                </div>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="navbar-collapse justify-content-end collapse" id="navigation" style="">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="nc-icon nc-zoom-split"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn-magnify" href="javascript:;">
                                <i class="nc-icon nc-layout-11"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Stats</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item btn-rotate dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Some Actions</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-rotate" href="javascript:;">
                                <i class="nc-icon nc-settings-gear-65"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Account</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>*}

        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top" style="background-color: #A23F25">
            <div class="container-fluid" style="background-color: #A23F25">
                <div class="navbar-wrapper" >
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler" id="nav-toggler-btn">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>

                    <a class="navbar-brand" href="javascript:;">Area Riservata</a>

                </div>
            </div>
        </nav>
    {block name=admin}{/block}

        <style>
            .order-table {
                overflow-x: auto;
            }


            /* Quando lo schermo e' >= 1200px */
            @media (min-width: 1200px) {
                .order-table {
                    overflow: hidden;
                }
            }
        </style>

<!--   Core JS Files   -->
<script src="/src/templates/admin/assets/js/core/jquery.min.js"></script>
<script src="/src/templates/admin/assets/js/core/popper.min.js"></script>
<script src="/src/templates/admin/assets/js/core/bootstrap.min.js"></script>
<script src="/src/templates/admin/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<!-- Chart JS -->
<script src="/src/templates/admin/assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="/src/templates/admin/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/src/templates/admin/assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="/src/templates/admin/assets/demo/demo.js"></script>
<script src="/src/templates/admin/assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartsPages();

    });
</script>
<script>
    const navToggler = document.querySelector('#nav-toggler-btn')
    const html = document.querySelector('.nav-open')
    let isOpen = true

    navToggler.addEventListener('click', evt => {
        isOpen ? html.classList.remove('nav-open') : html.classList.add('nav-open')
        isOpen = !isOpen
    })
</script>

</body>
</html>

