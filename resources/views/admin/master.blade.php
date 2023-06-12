<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/tivo/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Feb 2023 09:09:13 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tivo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Tivo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('/')}}admin/assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('/')}}admin/assets/images/favicon/favicon.png" type="image/x-icon">
    <title>Tanvir -@yield('title')</title><link rel="preconnect" href="https://fonts.googleapis.com/">
{{--    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/vendors/font-awesome.css">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/vendors/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/vendors/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/vendors/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/vendors/icons.min.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/vendors/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/vendors/prism.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/vendors/vector-map.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/vendors/datatables.css">
{{--    !-- Summernote css--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/vendors/summernote.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/vendors/summernote.min.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/vendors/summernote-bs4.min.css">--}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/style.css">
    <link id="color" rel="stylesheet" href="{{asset('/')}}admin/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/responsive.css">
</head>
<body onload="startTime()">
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"> </div>
    <div class="dot"></div>
</div>
<!-- Loader ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        <div class="header-wrapper row m-0">
            <div class="header-logo-wrapper col-auto p-0">
                <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
                <div class="logo-header-main"><a href="index.html"><img class="img-fluid for-light img-100" src="{{asset('/')}}admin/assets/images/logo/logo2.png" alt=""><img class="img-fluid for-dark" src="{{asset('/')}}admin/assets/images/logo/logo.png" alt=""></a></div>
            </div>
            <div class="left-header col horizontal-wrapper ps-0">
                <div class="left-menu-header">
                    <ul class="app-list">
                        <li class="onhover-dropdown">
                            <div class="app-menu"> <i data-feather="folder-plus"></i></div>
                            <ul class="onhover-show-div left-dropdown">
                                <li> <a href="file-manager.html">File Manager</a></li>
                                <li> <a href="kanban.html"> Kanban board</a></li>
                                <li> <a href="social-app.html"> Social App</a></li>
                                <li> <a href="bookmark.html"> Bookmark</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="header-left">
                        <li class="onhover-dropdown"><span class="f-w-600">Hello {{Auth::user()->name}}</span><span><i class="middle"></i></span>
{{--                            <ul class="onhover-show-div left-dropdown">--}}
{{--                                <li> <a href="index.html">Default5</a></li>--}}
{{--                                <li> <a href="dashboard-02.html"> Ecommerce</a></li>--}}
{{--                            </ul>--}}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nav-right col-6 pull-right right-header p-0">
                <ul class="nav-menus">
                    <li>
                        <div class="right-header ps-0">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text mobile-search"><i class="fa fa-search"></i></span></div>
                                <input class="form-control" type="text" placeholder="Search Here{{asset('/')}}admin{{asset('/')}}admin{{asset('/')}}admin{{asset('/')}}admin">
                            </div>
                        </div>
                    </li>
                    <li class="serchinput">
                        <div class="serchbox"><i data-feather="search"></i></div>
                        <div class="form-group search-form">
                            <input type="text" placeholder="Search here{{asset('/')}}admin.">
                        </div>
                    </li>
                    <li>
                        <div class="mode"><i data-feather="moon"></i></div>
                    </li>
                    <li class="onhover-dropdown">
                        <div class="notification-box"><i data-feather="bell"></i></div>
                        <ul class="notification-dropdown onhover-show-div">
                            <li><i data-feather="bell">            </i>
                                <h6 class="f-18 mb-0">Notitications</h6>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0"><i data-feather="truck"></i></div>
                                    <div class="flex-grow-1">
                                        <p><a href="order-history.html">Delivery processing </a><span class="pull-right">6 hr</span></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0"><i data-feather="shopping-cart"></i></div>
                                    <div class="flex-grow-1">
                                        <p><a href="cart.html">Order Complete</a><span class="pull-right">3 hr</span></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0"><i data-feather="file-text"></i></div>
                                    <div class="flex-grow-1">
                                        <p><a href="invoice-template.html">Tickets Generated</a><span class="pull-right">1 hr</span></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0"><i data-feather="send"></i></div>
                                    <div class="flex-grow-1">
                                        <p><a href="email_inbox.html">Delivery Complete</a><span class="pull-right">45 min</span></p>
                                    </div>
                                </div>
                            </li>
                            <li><a class="btn btn-primary" href="javascript:void(0)">Check all notification</a></li>
                        </ul>
                    </li>
                    <li class="onhover-dropdown">
                        <div class="message"><i data-feather="message-square"></i></div>
                        <ul class="message-dropdown onhover-show-div">
                            <li><i data-feather="message-square">            </i>
                                <h6 class="f-18 mb-0">Messages</h6>
                            </li>
                            <li>
                                <div class="d-flex align-items-start">
                                    <div class="message-img bg-light-primary"><img src="{{asset('/')}}admin/assets/images/user/3.jpg" alt=""></div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1"><a href="email_inbox.html">Emay Walter</a></h5>
                                        <p>Do you want to go see movie?</p>
                                    </div>
                                    <div class="notification-right"><i data-feather="x"></i></div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-start">
                                    <div class="message-img bg-light-primary"><img src="{{asset('/')}}admin/assets/images/user/6.jpg" alt=""></div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1"><a href="email_inbox.html">Jason Borne</a></h5>
                                        <p>Thank you for rating us.</p>
                                    </div>
                                    <div class="notification-right"><i data-feather="x"></i></div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-start">
                                    <div class="message-img bg-light-primary"><img src="{{asset('/')}}admin/assets/images/user/10.jpg" alt=""></div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1"><a href="email_inbox.html">Sarah Loren</a></h5>
                                        <p>What`s the project report update?</p>
                                    </div>
                                    <div class="notification-right"><i data-feather="x"></i></div>
                                </div>
                            </li>
                            <li><a class="btn btn-primary" href="email_inbox.html">Check Messages</a></li>
                        </ul>
                    </li>
                    <li class="maximize"><a href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize-2"></i></a></li>
                    <li class="language-nav">
                        <div class="translate_wrapper">
                            <div class="current_lang">
                                <div class="lang"><i data-feather="globe"></i></div>
                            </div>
                            <div class="more_lang">
                                <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">English<span> (US)</span></span></div>
                                <div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span class="lang-txt">Deutsch</span></div>
                                <div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span class="lang-txt">Espa&ntilde;ol</span></div>
                                <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span class="lang-txt">Fran&ccedil;ais</span></div>
                                <div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span class="lang-txt">Portugu&ecirc;s<span> (BR)</span></span></div>
                                <div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span class="lang-txt">&#x7B80;&#x4F53;&#x4E2D;&#x6587;</span></div>
                                <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span class="lang-txt">&#x644;&#x639;&#x631;&#x628;&#x64A;&#x629; <span> (ae)</span></span></div>
                            </div>
                        </div>
                    </li>
                    <li class="profile-nav onhover-dropdown">
                        <div class="account-user"><i data-feather="user"></i></div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li><a href="user-profile.html"><i data-feather="user"></i><span>Account</span></a></li>
                            <li><a href="email_inbox.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                            <li><a href="edit-profile.html"><i data-feather="settings"></i><span>Settings</span></a></li>
                            <li><a href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();"><i data-feather="log-in"> </i><span>Log out</span></a></li>
                            <form action="{{route('logout')}}" method="post" id="logoutForm">
                                @csrf

                            </form>
                        </ul>
                    </li>
                </ul>
            </div>
            <script class="result-template" type="text/x-handlebars-template">
                <div class="ProfileCard u-cf">
                    <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                    <div class="ProfileCard-details">
{{--                        <div class="ProfileCard-realName">{{name}}</div>--}}
                    </div>
                </div>
            </script>
            <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
    </div>
    <!-- Page Header Ends-->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
            <div>
                <div class="logo-wrapper"><a><img class="img-fluid for-light" src="{{asset('/')}}admin/assets/images/logo/logo.png" alt=""></a>
                    <div class="back-btn"><i data-feather="grid"></i></div>
                    <div class="toggle-sidebar icon-box-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
                </div>
                <div class="logo-icon-wrapper"><a href="index.html">
                        <div class="icon-box-sidebar"><i data-feather="grid"></i></div></a></div>
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn">
                                <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                            </li>
                            <li class="menu-box">
                                <ul>
                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="{{route('dashboard')}}"><i data-feather="home"></i><span class="lan-3">Dashboard</span></a>

                                    </li>
                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="shopping-cart"></i><span class="">Category</span></a>
                                        <ul class="sidebar-submenu">
                                            <li><a href="{{route('category.add')}}">Add Category</a></li>
                                            <li><a href="{{route('category.manage')}}">Manage Category</a></li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="shopping-cart"></i><span class="">Sub Category</span></a>
                                        <ul class="sidebar-submenu">
                                            <li><a href="{{route('sub-category.add')}}">Add Sub Category</a></li>
                                            <li><a href="{{route('sub-category.manage')}}">Manage Sub Category</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-box">
                                <ul>
                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="bold"></i><span>Brand</span></a>
                                        <ul class="sidebar-submenu">
                                            <li><a href="{{route('brand.add')}}">Add Brand</a></li>
                                            <li><a href="{{route('brand.manage')}}">Manage Brand</a></li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="box"></i><span>Unit</span></a>
                                        <ul class="sidebar-submenu">
                                            <li><a href="{{route('unit.add')}}">Add Unit</a></li>
                                            <li><a href="{{route('unit.manage')}}">Manage Unit</a></li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="shopping-bag"></i><span>Product</span></a>
                                        <ul class="sidebar-submenu">
                                            <li><a href="{{route('product.add')}}">Add Product</a></li>
                                            <li><a href="{{route('product.manage')}}">Manage Product</a></li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="database"></i><span>Order</span></a>
                                        <ul class="sidebar-submenu">
{{--                                            <li><a href="chat.html">Add Order</a></li>--}}
                                            <li><a href="{{route('admin.order-manage')}}">Manage Order</a></li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="github"></i><span>Customer</span></a>
                                        <ul class="sidebar-submenu">
                                            <li><a href="{{route('customer.manage')}}">Manage Customer</a></li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="aperture"></i><span>Company</span></a>
                                        <ul class="sidebar-submenu">
                                            <li><a href="chat-video.html">Manage Company</a></li>
                                        </ul>
                                    </li>
                                    @if(Auth::user()->user_type == 2)
                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="users"></i><span>User</span></a>
                                        <ul class="sidebar-submenu">
                                            <li><a href="{{route('user.add')}}">Add User</a></li>
                                            <li><a href="{{route('user.manage')}}">Manage User</a></li>
                                        </ul>
                                    </li>
                                    @endif
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="bookmark.html"><i data-feather="heart"> </i><span>Bookmarks</span></a></li>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="contacts.html"><i data-feather="list"> </i><span>Contacts</span></a></li>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="task.html"><i data-feather="check-square"> </i><span>Tasks</span></a></li>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="calendar-basic.html"><i data-feather="calendar"> </i><span>Calendar</span></a></li>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="social-app.html"><i data-feather="zap"> </i><span>Social App</span></a></li>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="to-do.html"><i data-feather="clock"> </i><span>To-Do</span></a></li>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="search.html"><i data-feather="search"> </i><span>Search Result</span></a></li>--}}
                                </ul>
                            </li>
{{--                            <li class="menu-box">--}}
{{--                                <ul>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="file-text"></i><span>Forms</span></a>--}}
{{--                                        <ul class="sidebar-submenu">--}}
{{--                                            <li><a class="submenu-title" href="javascript:void(0)">Form Controls<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>--}}
{{--                                                <ul class="nav-sub-childmenu submenu-content">--}}
{{--                                                    <li><a href="form-validation.html">Form Validation</a></li>--}}
{{--                                                    <li><a href="base-input.html">Base Inputs</a></li>--}}
{{--                                                    <li><a href="radio-checkbox-control.html">Checkbox & Radio</a></li>--}}
{{--                                                    <li><a href="input-group.html">Input Groups</a></li>--}}
{{--                                                    <li><a href="megaoptions.html">Mega Options</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li><a class="submenu-title" href="javascript:void(0)">Form Widgets<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>--}}
{{--                                                <ul class="nav-sub-childmenu submenu-content">--}}
{{--                                                    <li><a href="datepicker.html">Datepicker</a></li>--}}
{{--                                                    <li><a href="time-picker.html">Timepicker</a></li>--}}
{{--                                                    <li><a href="datetimepicker.html">Datetimepicker</a></li>--}}
{{--                                                    <li><a href="daterangepicker.html">Daterangepicker</a></li>--}}
{{--                                                    <li><a href="touchspin.html">Touchspin</a></li>--}}
{{--                                                    <li><a href="select2.html">Select2</a></li>--}}
{{--                                                    <li><a href="switch.html">Switch</a></li>--}}
{{--                                                    <li><a href="typeahead.html">Typeahead</a></li>--}}
{{--                                                    <li><a href="clipboard.html">Clipboard</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li><a class="submenu-title" href="javascript:void(0)">Form layout<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>--}}
{{--                                                <ul class="nav-sub-childmenu submenu-content">--}}
{{--                                                    <li><a href="default-form.html">Default Forms</a></li>--}}
{{--                                                    <li><a href="form-wizard.html">Form Wizard 1</a></li>--}}
{{--                                                    <li><a href="form-wizard-two.html">Form Wizard 2</a></li>--}}
{{--                                                    <li><a href="form-wizard-three.html">Form Wizard 3</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="server"></i><span>Tables</span></a>--}}
{{--                                        <ul class="sidebar-submenu">--}}
{{--                                            <li><a class="submenu-title" href="javascript:void(0)">Bootstrap Tables<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>--}}
{{--                                                <ul class="nav-sub-childmenu submenu-content">--}}
{{--                                                    <li><a href="bootstrap-basic-table.html">Basic Tables</a></li>--}}
{{--                                                    <li><a href="table-components.html">Table components</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li><a class="submenu-title" href="javascript:void(0)">Data Tables<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>--}}
{{--                                                <ul class="nav-sub-childmenu submenu-content">--}}
{{--                                                    <li><a href="datatable-basic-init.html">Basic Table</a></li>--}}
{{--                                                    <li><a href="datatable-advance.html">Advance Init</a></li>--}}
{{--                                                    <li><a href="datatable-API.html">Data API </a></li>--}}
{{--                                                    <li><a href="datatable-data-source.html">Data Source</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li><a href="datatable-ext-autofill.html">Ex. Data Table     </a></li>--}}
{{--                                            <li><a href="jsgrid-table.html">Js Grid Table        </a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="menu-box">--}}
{{--                                <ul>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="box"></i><span>Ui Kits</span></a>--}}
{{--                                        <ul class="sidebar-submenu">--}}
{{--                                            <li><a href="typography.html">Typography</a></li>--}}
{{--                                            <li><a href="avatars.html">Avatars</a></li>--}}
{{--                                            <li><a href="helper-classes.html">helper classes</a></li>--}}
{{--                                            <li><a href="grid.html">Grid</a></li>--}}
{{--                                            <li><a href="tag-pills.html">Tag & pills</a></li>--}}
{{--                                            <li><a href="progress-bar.html">Progress</a></li>--}}
{{--                                            <li><a href="modal.html">Modal</a></li>--}}
{{--                                            <li><a href="alert.html">Alert</a></li>--}}
{{--                                            <li><a href="popover.html">Popover</a></li>--}}
{{--                                            <li><a href="tooltip.html">Tooltip</a></li>--}}
{{--                                            <li><a href="loader.html">Spinners</a></li>--}}
{{--                                            <li><a href="dropdown.html">Dropdown</a></li>--}}
{{--                                            <li><a href="according.html">Accordion</a></li>--}}
{{--                                            <li><a class="submenu-title" href="javascript:void(0)">Tabs<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>--}}
{{--                                                <ul class="nav-sub-childmenu submenu-content">--}}
{{--                                                    <li><a href="tab-bootstrap.html">Bootstrap Tabs</a></li>--}}
{{--                                                    <li><a href="tab-material.html">Line Tabs</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li><a href="box-shadow.html">Shadow</a></li>--}}
{{--                                            <li><a href="list.html">Lists</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="folder-plus"></i><span>Bonus Ui</span></a>--}}
{{--                                        <ul class="sidebar-submenu">--}}
{{--                                            <li><a href="scrollable.html">Scrollable</a></li>--}}
{{--                                            <li><a href="tree.html">Tree view</a></li>--}}
{{--                                            <li><a href="bootstrap-notify.html">Bootstrap Notify</a></li>--}}
{{--                                            <li><a href="rating.html">Rating</a></li>--}}
{{--                                            <li><a href="dropzone.html">dropzone</a></li>--}}
{{--                                            <li><a href="tour.html">Tour</a></li>--}}
{{--                                            <li><a href="sweet-alert2.html">SweetAlert2</a></li>--}}
{{--                                            <li><a href="modal-animated.html">Animated Modal</a></li>--}}
{{--                                            <li><a href="owl-carousel.html">Owl Carousel</a></li>--}}
{{--                                            <li><a href="ribbons.html">Ribbons</a></li>--}}
{{--                                            <li><a href="pagination.html">Pagination</a></li>--}}
{{--                                            <li><a href="breadcrumb.html">Breadcrumb</a></li>--}}
{{--                                            <li><a href="range-slider.html">Range Slider</a></li>--}}
{{--                                            <li><a href="image-cropper.html">Image cropper</a></li>--}}
{{--                                            <li><a href="sticky.html">Sticky</a></li>--}}
{{--                                            <li><a href="basic-card.html">Basic Cards</a></li>--}}
{{--                                            <li><a href="dragable-card.html">Draggable Card</a></li>--}}
{{--                                            <li><a class="submenu-title" href="javascript:void(0)">Timeline<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>--}}
{{--                                                <ul class="nav-sub-childmenu submenu-content">--}}
{{--                                                    <li><a href="timeline-v-1.html">Timeline 1</a></li>--}}
{{--                                                    <li><a href="timeline-v-2.html">Timeline 2</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="cloud-drizzle"></i><span>Animation</span></a>--}}
{{--                                        <ul class="sidebar-submenu">--}}
{{--                                            <li><a href="animate.html">Animate</a></li>--}}
{{--                                            <li><a href="scroll-reval.html">Scroll Reveal</a></li>--}}
{{--                                            <li><a href="AOS.html">AOS animation</a></li>--}}
{{--                                            <li><a href="tilt.html">Tilt Animation</a></li>--}}
{{--                                            <li><a href="wow.html">Wow Animation</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="command"></i><span>Icons</span></a>--}}
{{--                                        <ul class="sidebar-submenu">--}}
{{--                                            <li><a href="flag-icon.html">Flag icon</a></li>--}}
{{--                                            <li><a href="font-awesome.html">Fontawesome Icon</a></li>--}}
{{--                                            <li><a href="ico-icon.html">Ico Icon</a></li>--}}
{{--                                            <li><a href="themify-icon.html">Themify Icon</a></li>--}}
{{--                                            <li><a href="feather-icon.html">Feather icon</a></li>--}}
{{--                                            <li><a href="whether-icon.html">Whether Icon</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="cloud"></i><span>Buttons</span></a>--}}
{{--                                        <ul class="sidebar-submenu">--}}
{{--                                            <li><a href="buttons.html">Default Style</a></li>--}}
{{--                                            <li><a href="button-group.html">Button Group</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="bar-chart"></i><span>Charts</span></a>--}}
{{--                                        <ul class="sidebar-submenu">--}}
{{--                                            <li><a href="chart-apex.html">Apex Chart</a></li>--}}
{{--                                            <li><a href="chart-sparkline.html">Sparkline chart</a></li>--}}
{{--                                            <li><a href="chart-flot.html">Flot Chart</a></li>--}}
{{--                                            <li><a href="chart-knob.html">Knob Chart</a></li>--}}
{{--                                            <li><a href="chart-morris.html">Morris Chart</a></li>--}}
{{--                                            <li><a href="chartjs.html">Chatjs Chart</a></li>--}}
{{--                                            <li><a href="chartist.html">Chartist Chart</a></li>--}}
{{--                                            <li><a href="chart-peity.html">Peity Chart</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="menu-box">--}}
{{--                                <ul>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="landing-page.html"><i data-feather="cast"> </i><span>Landing page</span></a></li>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="sample-page.html"><i data-feather="file-text"> </i><span>Sample page</span></a></li>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="internationalization.html"><i data-feather="globe"> </i><span>Internationalization</span></a></li>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="https://admin.pixelstrap.com/tivo/starter-kit/index.html" target="_blank"><i data-feather="anchor"></i><span>Starter kit</span></a></li>--}}
{{--                                    <li class="mega-menu"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="layers"></i><span>Others</span></a>--}}
{{--                                        <div class="mega-menu-container menu-content">--}}
{{--                                            <div class="container-fluid">--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col mega-box">--}}
{{--                                                        <div class="link-section">--}}
{{--                                                            <div class="submenu-title">--}}
{{--                                                                <h5>Error Page</h5>--}}
{{--                                                            </div>--}}
{{--                                                            <ul class="submenu-content opensubmegamenu">--}}
{{--                                                                <li><a href="error-page1.html">Error Page 1</a></li>--}}
{{--                                                                <li><a href="error-page2.html">Error Page 2</a></li>--}}
{{--                                                                <li><a href="error-page3.html">Error Page 3</a></li>--}}
{{--                                                                <li><a href="error-page4.html">Error Page 4</a></li>--}}
{{--                                                                <li><a href="error-page5.html">Error Page 5                            </a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col mega-box">--}}
{{--                                                        <div class="link-section">--}}
{{--                                                            <div class="submenu-title">--}}
{{--                                                                <h5> Authentication</h5>--}}
{{--                                                            </div>--}}
{{--                                                            <ul class="submenu-content opensubmegamenu">--}}
{{--                                                                <li><a href="login.html" target="_blank">Login Simple</a></li>--}}
{{--                                                                <li><a href="login_one.html" target="_blank">Login with bg image</a></li>--}}
{{--                                                                <li><a href="login_two.html" target="_blank">Login with image two                      </a></li>--}}
{{--                                                                <li><a href="login-bs-validation.html" target="_blank">Login With validation</a></li>--}}
{{--                                                                <li><a href="login-bs-tt-validation.html" target="_blank">Login with tooltip</a></li>--}}
{{--                                                                <li><a href="login-sa-validation.html" target="_blank">Login with sweetalert</a></li>--}}
{{--                                                                <li><a href="sign-up.html" target="_blank">Register Simple</a></li>--}}
{{--                                                                <li><a href="sign-up-one.html" target="_blank">Register with Bg Image</a></li>--}}
{{--                                                                <li><a href="sign-up-two.html" target="_blank">Register with Image Two</a></li>--}}
{{--                                                                <li><a href="unlock.html">Unlock User</a></li>--}}
{{--                                                                <li><a href="forget-password.html">Forget Password</a></li>--}}
{{--                                                                <li><a href="reset-password.html">Reset Password</a></li>--}}
{{--                                                                <li><a href="maintenance.html">Maintenance</a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col mega-box">--}}
{{--                                                        <div class="link-section">--}}
{{--                                                            <div class="submenu-title">--}}
{{--                                                                <h5>Coming Soon</h5>--}}
{{--                                                            </div>--}}
{{--                                                            <ul class="submenu-content opensubmegamenu">--}}
{{--                                                                <li><a href="comingsoon.html">Coming Simple</a></li>--}}
{{--                                                                <li><a href="comingsoon-bg-video.html">Coming with Bg video</a></li>--}}
{{--                                                                <li><a href="comingsoon-bg-img.html">Coming with Bg Image</a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col mega-box">--}}
{{--                                                        <div class="link-section">--}}
{{--                                                            <div class="submenu-title">--}}
{{--                                                                <h5>Email templates</h5>--}}
{{--                                                            </div>--}}
{{--                                                            <ul class="submenu-content opensubmegamenu">--}}
{{--                                                                <li><a href="basic-template.html">Basic Email</a></li>--}}
{{--                                                                <li><a href="email-header.html">Basic With Header</a></li>--}}
{{--                                                                <li><a href="template-email.html">Ecommerce Template</a></li>--}}
{{--                                                                <li><a href="template-email-2.html">Email Template 2</a></li>--}}
{{--                                                                <li><a href="ecommerce-templates.html">Ecommerce Email</a></li>--}}
{{--                                                                <li><a href="email-order-success.html">Order Success</a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="menu-box">--}}
{{--                                <ul>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="image"></i><span>Gallery</span></a>--}}
{{--                                        <ul class="sidebar-submenu">--}}
{{--                                            <li><a href="gallery.html">Gallery Grid</a></li>--}}
{{--                                            <li><a href="gallery-with-description.html">Gallery Grid Desc</a></li>--}}
{{--                                            <li><a href="gallery-masonry.html">Masonry Gallery</a></li>--}}
{{--                                            <li><a href="masonry-gallery-with-disc.html">Masonry with Desc</a></li>--}}
{{--                                            <li><a href="gallery-hover.html">Hover Effects</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="film"></i><span>Blog</span></a>--}}
{{--                                        <ul class="sidebar-submenu">--}}
{{--                                            <li><a href="blog.html">Blog Details</a></li>--}}
{{--                                            <li><a href="blog-single.html">Blog Single</a></li>--}}
{{--                                            <li><a href="add-post.html">Add Post</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="faq.html"><i data-feather="help-circle"> </i><span>FAQ</span></a></li>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="package"></i><span>Job Search</span></a>--}}
{{--                                        <ul class="sidebar-submenu">--}}
{{--                                            <li><a href="job-cards-view.html">Cards view</a></li>--}}
{{--                                            <li><a href="job-list-view.html">List View</a></li>--}}
{{--                                            <li><a href="job-details.html">Job Details</a></li>--}}
{{--                                            <li><a href="job-apply.html">Apply</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="radio"></i><span>Learning</span></a>--}}
{{--                                        <ul class="sidebar-submenu">--}}
{{--                                            <li><a href="learning-list-view.html">Learning List</a></li>--}}
{{--                                            <li><a href="learning-detailed.html">Detailed Course</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="map"></i><span>Maps</span></a>--}}
{{--                                        <ul class="sidebar-submenu">--}}
{{--                                            <li><a href="map-js.html">Maps JS</a></li>--}}
{{--                                            <li><a href="vector-map.html">Vector Maps</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="edit"></i><span>Editors</span></a>--}}
{{--                                        <ul class="sidebar-submenu">--}}
{{--                                            <li><a href="summernote.html">Summer Note</a></li>--}}
{{--                                            <li><a href="ckeditor.html">CK editor</a></li>--}}
{{--                                            <li><a href="simple-MDE.html">MDE editor</a></li>--}}
{{--                                            <li><a href="ace-code-editor.html">ACE code editor</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="sunrise"> </i><span>Knowledgebase</span></a>--}}
{{--                                        <ul class="sidebar-submenu">--}}
{{--                                            <li><a href="knowledgebase.html">Knowledgebase</a></li>--}}
{{--                                            <li><a href="knowledge-category.html">Knowledge category</a></li>--}}
{{--                                            <li><a href="knowledge-detail.html">Knowledge detail              </a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="support-ticket.html"><i data-feather="users"> </i><span>Support Ticket</span></a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </nav>
            </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
             @yield('body')
            <!-- Container-fluid starts-->

            <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer bg-secondary">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 p-0 footer-left">
                        <p class="mb-0">Copyright © 2023 Tivo. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 p-0 footer-right">
                        <p class="mb-0">Hand-crafted & made with <i class="fa fa-heart font-danger"></i></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- latest jquery-->
<script src="{{asset('/')}}admin/assets/js/jquery-3.6.0.min.js"></script>
<!-- Bootstrap js-->
<script src="{{asset('/')}}admin/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<!-- feather icon js-->
<script src="{{asset('/')}}admin/assets/js/icons/feather-icon/feather.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/icons/feather-icon/feather-icon.js"></script>
<script src="{{asset('/')}}admin/assets/js/icons/feather-icon/all.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/icons/feather-icon/fontawesome.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/icons/feather-icon/fontawesome.js"></script>
{{--<script src="{{asset('/')}}admin/assets/js/icons/feather-icon/fontawesome.init.js"></script>--}}
<!-- scrollbar js-->
<script src="{{asset('/')}}admin/assets/js/scrollbar/simplebar.js"></script>
<script src="{{asset('/')}}admin/assets/js/scrollbar/custom.js"></script>
<!-- Sidebar jquery-->
<script src="{{asset('/')}}admin/assets/js/config.js"></script>
<script src="{{asset('/')}}admin/assets/js/sidebar-menu.js"></script>
<script src="{{asset('/')}}admin/assets/js/chart/chartist/chartist.js"></script>
<script src="{{asset('/')}}admin/assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
<script src="{{asset('/')}}admin/assets/js/chart/apex-chart/apex-chart.js"></script>
<script src="{{asset('/')}}admin/assets/js/chart/apex-chart/stock-prices.js"></script>
<script src="{{asset('/')}}admin/assets/js/prism/prism.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/clipboard/clipboard.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/custom-card/custom-card.js"></script>
<script src="{{asset('/')}}admin/assets/js/notify/bootstrap-notify.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{asset('/')}}admin/assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js"></script>
<script src="{{asset('/')}}admin/assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js"></script>
<script src="{{asset('/')}}admin/assets/js/vector-map/map/jquery-jvectormap-au-mill.js"></script>
<script src="{{asset('/')}}admin/assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js"></script>
<script src="{{asset('/')}}admin/assets/js/vector-map/map/jquery-jvectormap-in-mill.js"></script>
<script src="{{asset('/')}}admin/assets/js/vector-map/map/jquery-jvectormap-asia-mill.js"></script>
<script src="{{asset('/')}}admin/assets/js/dashboard/default.js"></script>
<script src="{{asset('/')}}admin/assets/js/notify/index.js"></script>
<script src="{{asset('/')}}admin/assets/js/typeahead/handlebars.js"></script>
<script src="{{asset('/')}}admin/assets/js/typeahead/typeahead.bundle.js"></script>
<script src="{{asset('/')}}admin/assets/js/typeahead/typeahead.custom.js"></script>
<script src="{{asset('/')}}admin/assets/js/typeahead-search/handlebars.js"></script>
<script src="{{asset('/')}}admin/assets/js/typeahead-search/typeahead-custom.js"></script>
<script src="{{asset('/')}}admin/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/datatable/datatables/datatable.custom.js"></script>
<script src="{{asset('/')}}admin/assets/js/tooltip-init.js"></script>

{{--                 Summernote js start--}}
{{--<script src="{{asset('/')}}admin/assets/js/jquery.ui.min.js"></script>--}}
{{--<script src="{{asset('/')}}admin/assets/js/form-editor.init.js"></script>--}}
{{--<script src="{{asset('/')}}admin/assets/js/editor/summernote/summernote.js"></script>--}}
{{--<script src="{{asset('/')}}admin/assets/js/editor/summernote/summernote.min.js"></script>--}}
{{--<script src="{{asset('/')}}admin/assets/js/editor/summernote/summernote-bs4.min.js"></script>--}}

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height:250
        });
    });
</script>
{{--                 Summernote js ends--}}

<!-- Template js-->
<script src="{{asset('/')}}admin/assets/js/script.js"></script>
<script src="{{asset('/')}}admin/assets/js/theme-customizer/customizer.js">  </script>
<!-- login js-->
</body>

<!-- Mirrored from admin.pixelstrap.com/tivo/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Feb 2023 09:10:16 GMT -->
</html>
