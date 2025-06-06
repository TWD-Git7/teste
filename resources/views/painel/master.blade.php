<!DOCTYPE html>
<html lang="pt">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- PAGE TITLE HERE -->
    <title>SG-Bolsa de Estudo</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
    <meta name="description" content="">
    <meta name="og:title" content="SG-Bolsa de Estudo">
    <meta name="og:description" content="">
    <meta name="twitter:title" content="SG-Bolsa de Estudo">
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicon.png}') }}">
    <link href="{{ asset('assets/vendor/chartist/css/chartist.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div> <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <svg class="logo-abbr" width="54" height="54" viewBox="0 0 54 54" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect class="svg-logo-rect" width="54" height="54" rx="27"
                        fill="url(#paint0_linear)" />
                    <path
                        d="M23.7487 23.6736C23.7487 25.0896 22.5961 26.2416 21.1793 26.2416C19.764 26.2416 18.6124 25.0896 18.6124 23.6736C18.6124 22.2567 19.764 21.1041 21.1793 21.1041C22.5961 21.1041 23.7487 22.2567 23.7487 23.6736ZM32.8168 21.1042C31.4015 21.1042 30.2499 22.2569 30.2499 23.6737C30.2499 25.0897 31.4015 26.2417 32.8168 26.2417C34.2336 26.2417 35.3862 25.0897 35.3862 23.6737C35.3862 22.2569 34.2336 21.1042 32.8168 21.1042ZM26.0079 36.8042L26.0286 42.6348C24.5259 42.6975 23.4593 42.5364 23.4593 42.5364V36.8055C23.4593 36.2557 23.013 35.8094 22.4632 35.8094C21.9133 35.8094 21.4671 36.2557 21.4671 36.8055V42.0574C18.1887 40.9111 15.8626 38.1857 15.852 35.0374V27.7139C14.9984 26.5905 14.491 25.1903 14.491 23.6736C14.491 22.3807 14.8599 21.1726 15.4973 20.1483L15.4931 12.3799C15.6563 11.1516 16.7925 11.3617 16.7925 11.3617L23.1379 13.9239C24.3426 13.4452 25.6554 13.1819 27.0287 13.1819C28.3907 13.1819 29.6932 13.4411 30.8898 13.9127L37.2075 11.3617C37.2075 11.3617 38.3438 11.1516 38.5069 12.3799L38.5028 20.1486C39.1402 21.1729 39.5091 22.3809 39.5091 23.6736C39.5091 25.1893 39.0022 26.5886 38.1495 27.7117V35.1389C38.155 36.9361 37.4102 38.6757 36.0524 40.0375C36.0524 40.0375 34.7582 41.4527 32.533 42.1947V36.8055C32.533 36.2557 32.0874 35.8094 31.5369 35.8094C30.9871 35.8094 30.5408 36.2557 30.5408 36.8055V42.605C29.8565 42.6794 28.0202 42.6348 28.0202 42.6348L28.0001 36.8068C28.0008 36.257 27.5552 35.8101 27.0054 35.8094C27.0053 35.8094 26.1004 35.8061 26.0079 36.8042ZM25.8788 23.6736C25.8788 21.0829 23.7706 18.9752 21.1793 18.9752C18.5898 18.9752 16.4831 21.0829 16.4831 23.6736C16.4831 26.2642 18.5898 28.3719 21.1793 28.3719C23.7706 28.3719 25.8788 26.2642 25.8788 23.6736ZM27.8489 32.902L30.6503 30.0032C29.097 29.4697 27.8002 28.3799 26.999 26.9729C26.207 28.364 24.9304 29.4448 23.4006 29.9846L26.5748 32.9355C26.5748 32.9355 27.1871 33.4418 27.8489 32.902ZM37.5169 23.6736C37.5169 21.0829 35.4097 18.9752 32.8196 18.9752C30.2278 18.9752 28.1192 21.0829 28.1192 23.6736C28.1192 26.2642 30.2278 28.3719 32.8196 28.3719C35.4097 28.3719 37.5169 26.2642 37.5169 23.6736Z"
                        fill="white" />
                    <defs>
                        <linearGradient id="paint0_linear" x1="27" y1="0" x2="45.6923" y2="64.9038"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#1E33F2" />
                            <stop offset="1" stop-color="#1EE5F2" />
                        </linearGradient>
                    </defs>
                </svg>
                <svg class="brand-title" width="88" height="26" viewBox="0 0 88 26" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path class="svg-logo-title"
                        d="M8.98401 25.3839C7.29868 25.3839 5.78401 25.0106 4.44001 24.2639C3.09601 23.5173 2.02935 22.4933 1.24001 21.1919C0.472013 19.8906 0.0880127 18.4293 0.0880127 16.8079C0.0880127 15.1653 0.472013 13.7039 1.24001 12.4239C2.02935 11.1226 3.09601 10.0986 4.44001 9.35195C5.78401 8.58395 7.29868 8.19995 8.98401 8.19995C10.6693 8.19995 12.1733 8.58395 13.496 9.35195C14.84 10.0986 15.896 11.1226 16.664 12.4239C17.4533 13.7039 17.848 15.1653 17.848 16.8079C17.848 18.4293 17.4533 19.8906 16.664 21.1919C15.896 22.4933 14.84 23.5173 13.496 24.2639C12.152 25.0106 10.648 25.3839 8.98401 25.3839ZM8.98401 21.0639C9.77335 21.0639 10.456 20.872 11.032 20.4879C11.608 20.1039 12.056 19.5919 12.376 18.9519C12.696 18.3119 12.856 17.5866 12.856 16.7759C12.856 15.9866 12.696 15.2719 12.376 14.6319C12.056 13.9919 11.608 13.4799 11.032 13.0959C10.456 12.7119 9.77335 12.5199 8.98401 12.5199C8.19468 12.5199 7.50135 12.7119 6.90401 13.0959C6.32801 13.4799 5.88001 13.9919 5.56001 14.6319C5.24001 15.2719 5.08001 15.9866 5.08001 16.7759C5.08001 17.5866 5.24001 18.3119 5.56001 18.9519C5.88001 19.5919 6.32801 20.1039 6.90401 20.4879C7.50135 20.872 8.19468 21.0639 8.98401 21.0639Z"
                        fill="#40415C" />
                    <path class="svg-logo-title"
                        d="M27.1615 25.3839C26.0308 25.3839 24.9748 25.1599 23.9935 24.7119C23.0335 24.2639 22.2548 23.5813 21.6575 22.6639C21.0815 21.7466 20.7935 20.5946 20.7935 19.2079V8.58395H25.7535V19.8479C25.7535 20.1039 25.8175 20.3386 25.9455 20.5519C26.0735 20.7653 26.2442 20.9359 26.4575 21.0639C26.6708 21.1919 26.9055 21.2559 27.1615 21.2559C27.4175 21.2559 27.6522 21.1919 27.8655 21.0639C28.0788 20.9359 28.2495 20.7653 28.3775 20.5519C28.5055 20.3386 28.5695 20.1039 28.5695 19.8479V14.3759C28.5695 13.0533 28.8468 11.9333 29.4015 11.0159C29.9562 10.0986 30.7135 9.40528 31.6735 8.93595C32.6548 8.44528 33.7535 8.19995 34.9695 8.19995C36.1855 8.19995 37.2735 8.44528 38.2335 8.93595C39.1935 9.40528 39.9508 10.0986 40.5055 11.0159C41.0602 11.9333 41.3375 13.0533 41.3375 14.3759V19.8479C41.3375 20.1039 41.4015 20.3386 41.5295 20.5519C41.6575 20.7653 41.8282 20.9359 42.0415 21.0639C42.2762 21.1919 42.5215 21.2559 42.7775 21.2559C43.0335 21.2559 43.2682 21.1919 43.4815 21.0639C43.6948 20.9359 43.8655 20.7653 43.9935 20.5519C44.1215 20.3386 44.1855 20.1039 44.1855 19.8479V8.58395H49.1455V19.2079C49.1455 20.5946 48.8468 21.7466 48.2495 22.6639C47.6735 23.5813 46.8948 24.2639 45.9135 24.7119C44.9535 25.1599 43.9082 25.3839 42.7775 25.3839C41.6468 25.3839 40.5908 25.1599 39.6095 24.7119C38.6495 24.2639 37.8708 23.5813 37.2735 22.6639C36.6762 21.7466 36.3775 20.5946 36.3775 19.2079V13.7679C36.3775 13.4906 36.3135 13.2453 36.1855 13.0319C36.0575 12.8186 35.8868 12.6479 35.6735 12.5199C35.4602 12.3919 35.2255 12.3279 34.9695 12.3279C34.7135 12.3279 34.4682 12.3919 34.2335 12.5199C34.0202 12.6479 33.8495 12.8186 33.7215 13.0319C33.5935 13.2453 33.5295 13.4906 33.5295 13.7679V19.2079C33.5295 20.5946 33.2308 21.7466 32.6335 22.6639C32.0575 23.5813 31.2788 24.2639 30.2975 24.7119C29.3375 25.1599 28.2922 25.3839 27.1615 25.3839Z"
                        fill="#40415C" />
                    <path class="svg-logo-title" d="M52.856 24.9999V1.63995H57.816V24.9999H52.856Z" fill="#40415C" />
                    <path class="svg-logo-title"
                        d="M61.481 24.9999V8.58395H66.473V24.9999H61.481ZM63.977 6.72795C63.1877 6.72795 62.505 6.43995 61.929 5.86395C61.353 5.28795 61.065 4.60528 61.065 3.81595C61.065 3.02661 61.353 2.34395 61.929 1.76795C62.505 1.17061 63.1877 0.871948 63.977 0.871948C64.7663 0.871948 65.449 1.17061 66.025 1.76795C66.601 2.34395 66.889 3.02661 66.889 3.81595C66.889 4.60528 66.601 5.28795 66.025 5.86395C65.449 6.43995 64.7663 6.72795 63.977 6.72795Z"
                        fill="#40415C" />
                    <path class="svg-logo-title"
                        d="M78.234 25.3839C76.5487 25.3839 75.034 25.0106 73.69 24.2639C72.346 23.5173 71.2794 22.4933 70.49 21.1919C69.722 19.8906 69.338 18.4293 69.338 16.8079C69.338 15.1653 69.722 13.7039 70.49 12.4239C71.2794 11.1226 72.346 10.0986 73.69 9.35195C75.034 8.58395 76.5487 8.19995 78.234 8.19995C79.9193 8.19995 81.4233 8.58395 82.746 9.35195C84.09 10.0986 85.146 11.1226 85.914 12.4239C86.7034 13.7039 87.098 15.1653 87.098 16.8079C87.098 18.4293 86.7034 19.8906 85.914 21.1919C85.146 22.4933 84.09 23.5173 82.746 24.2639C81.402 25.0106 79.898 25.3839 78.234 25.3839ZM78.234 21.0639C79.0233 21.0639 79.706 20.872 80.282 20.4879C80.858 20.1039 81.306 19.5919 81.626 18.9519C81.946 18.3119 82.106 17.5866 82.106 16.7759C82.106 15.9866 81.946 15.2719 81.626 14.6319C81.306 13.9919 80.858 13.4799 80.282 13.0959C79.706 12.7119 79.0233 12.5199 78.234 12.5199C77.4447 12.5199 76.7514 12.7119 76.154 13.0959C75.578 13.4799 75.13 13.9919 74.81 14.6319C74.49 15.2719 74.33 15.9866 74.33 16.7759C74.33 17.5866 74.49 18.3119 74.81 18.9519C75.13 19.5919 75.578 20.1039 76.154 20.4879C76.7514 20.872 77.4447 21.0639 78.234 21.0639Z"
                        fill="#40415C" />
                </svg>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div> <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                <div class="input-group search-area d-lg-inline-flex d-none me-5">
                                    <span class="input-group-text" id="header-search">
                                        <a href="javascript:void(0);">
                                            <i class="flaticon-381-search-2"></i>
                                        </a>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Search here"
                                        aria-label="Username" aria-describedby="header-search">
                                </div>

                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-theme-mode" href="javascript:void(0);">
                                    <i id="icon-light" class="fas fa-sun"></i>
                                    <i id="icon-dark" class="fas fa-moon"></i>

                                </a>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:void(0)" role="button"
                                    data-bs-toggle="dropdown">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M25.4707 19.1862L23.3333 15.9802V11.6667C23.3333 9.19135 22.35 6.81738 20.5997 5.06704C18.8493 3.3167 16.4753 2.33337 14 2.33337C11.5246 2.33337 9.15066 3.3167 7.40033 5.06704C5.64999 6.81738 4.66666 9.19135 4.66666 11.6667V15.9802L2.52932 19.1862C2.41256 19.362 2.34562 19.5661 2.33561 19.7769C2.32559 19.9877 2.37288 20.1972 2.47245 20.3833C2.57201 20.5693 2.72013 20.7249 2.90106 20.8335C3.08199 20.9421 3.28897 20.9997 3.49999 21H24.5C24.711 20.9997 24.918 20.9421 25.0989 20.8335C25.2798 20.7249 25.428 20.5693 25.5275 20.3833C25.6271 20.1972 25.6744 19.9877 25.6644 19.7769C25.6544 19.5661 25.5874 19.362 25.4707 19.1862Z"
                                            fill="#A5A5A5" />
                                        <path
                                            d="M14 25.6666C15.0344 25.6675 16.0397 25.324 16.8572 24.6903C17.6748 24.0565 18.258 23.1686 18.515 22.1666H9.485C9.74197 23.1686 10.3252 24.0565 11.1428 24.6903C11.9603 25.324 12.9656 25.6675 14 25.6666Z"
                                            fill="#A5A5A5" />
                                    </svg>

                                    <span class="badge light text-white bg-primary rounded-circle">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="dlab_W_Notification1" class="widget-media dz-scroll p-3 height380">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <img alt="image" width="50"
                                                            src="{{ asset('assets/images/avatar/1.jpg') }}">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="all-notification" href="javascript:void(0)">Mais Notificação <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.33334 23.3333C2.33611 24.2607 2.70575 25.1493 3.36153 25.8051C4.01731 26.4609 4.90594 26.8305 5.83334 26.8333H12.8333V15.1666H2.33334V23.3333Z"
                                            fill="#A5A5A5" />
                                        <path
                                            d="M15.1667 26.8333H22.1667C23.0941 26.8305 23.9827 26.4609 24.6385 25.8051C25.2942 25.1493 25.6639 24.2607 25.6667 23.3333V15.1666H15.1667V26.8333Z"
                                            fill="#A5A5A5" />
                                        <path
                                            d="M23.3333 5.83329H19.6233C19.7646 5.46066 19.8358 5.06513 19.8333 4.66663C19.8305 3.73922 19.4609 2.85059 18.8051 2.19481C18.1494 1.53903 17.2607 1.1694 16.3333 1.16663C15.4694 1.16888 14.6373 1.49337 14 2.07663C13.3626 1.49337 12.5306 1.16888 11.6667 1.16663C10.7392 1.1694 9.85062 1.53903 9.19484 2.19481C8.53906 2.85059 8.16942 3.73922 8.16665 4.66663C8.16417 5.06513 8.23537 5.46066 8.37665 5.83329H4.66665C3.73925 5.83606 2.85062 6.2057 2.19484 6.86148C1.53906 7.51726 1.16943 8.40589 1.16666 9.33329V11.6666C1.16666 11.976 1.28957 12.2728 1.50837 12.4916C1.72716 12.7104 2.0239 12.8333 2.33332 12.8333H12.8333V5.83329H11.6667C11.4359 5.83329 11.2103 5.76487 11.0185 5.63667C10.8266 5.50848 10.6771 5.32627 10.5888 5.11309C10.5005 4.89991 10.4774 4.66533 10.5224 4.43902C10.5674 4.21271 10.6785 4.00483 10.8417 3.84167C11.0049 3.67851 11.2127 3.56739 11.439 3.52238C11.6654 3.47736 11.8999 3.50046 12.1131 3.58877C12.3263 3.67707 12.5085 3.8266 12.6367 4.01846C12.7649 4.21032 12.8333 4.43588 12.8333 4.66663V5.83329H15.1666V4.66663C15.1666 4.43588 15.2351 4.21032 15.3633 4.01846C15.4915 3.8266 15.6737 3.67707 15.8869 3.58877C16.1 3.50046 16.3346 3.47736 16.5609 3.52238C16.7872 3.56739 16.9951 3.67851 17.1583 3.84167C17.3214 4.00483 17.4325 4.21271 17.4776 4.43902C17.5226 4.66533 17.4995 4.89991 17.4112 5.11309C17.3229 5.32627 17.1733 5.50848 16.9815 5.63667C16.7896 5.76487 16.5641 5.83329 16.3333 5.83329H15.1666V12.8333H25.6666C25.9761 12.8333 26.2728 12.7104 26.4916 12.4916C26.7104 12.2728 26.8333 11.976 26.8333 11.6666V9.33329C26.8305 8.40589 26.4609 7.51726 25.8051 6.86148C25.1493 6.2057 24.2607 5.83606 23.3333 5.83329Z"
                                            fill="#A5A5A5" />
                                    </svg>
                                    <span class="badge light text-white bg-primary rounded-circle">2</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end rounded">
                                    <div id="DZ_W_TimeLine11Home"
                                        class="widget-timeline dz-scroll style-1 p-3 height370">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-badge primary"></div>
                                                <a class="timeline-panel text-muted" href="#">
                                                    <span>10 minutes ago</span>
                                                    <h6 class="mb-0">Youtube, a video-sharing website, goes live
                                                        <strong class="text-primary">$500</strong>.
                                                    </h6>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
                                    <img src="{{ asset('assets/images/profile/pic1.jpg') }}" width="20"
                                        alt="" class="rounded-circle">
                                    <div class="header-info">
                                        <span>Wiliam</span>
                                        <small>Super Admin</small>
                                    </div>
                                    <i class="fa fa-caret-down ms-3 me-2 " aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ms-2">Perfil </span>
                                    </a>
                                    <a href="page-login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12">
                                            </line>
                                        </svg>
                                        <span class="ms-2">Sair </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div> <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class=" ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-025-dashboard"></i>
                            <span class="nav-text">Painel</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-050-info"></i>
                            <span class="nav-text">Funcionários</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#addFuncionarioModal">Cadastrar</a></li>
                            <li><a href="{{ route('crudFuncionario') }}">Lista de Funcionários</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-043-menu"></i>
                            <span class="nav-text">Bolsa</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="#">Cadastrar</a></li>
                            <li><a href="#">Lista dos Bolseiros</a></li>
                            <li><a href="#">Lista de Solicitações</a></li>
                            <li><a href="#">Solicitar Bolsa</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-086-star"></i>
                            <span class="nav-text">Padrinhos</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="#">Cadastrar</a></li>
                            <li><a href="#">Lista dos Padrinhos</a></li>
                            <li><a href="#">Doação</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-013-checkmark"></i>
                            <span class="nav-text">Configurações</span>
                        </a>
                    </li>
                    <li><a href="#" class="ai-icon" aria-expanded="false">
                            <i>
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                    width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </i>
                            <span class="nav-text">Perfil</span>
                        </a>
                    </li>
                    <li><a href="#" class="ai-icon" aria-expanded="false">
                            <i>
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                    width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12">
                                    </line>
                                </svg>
                            </i>
                            <span class="nav-text">Sair</span>
                        </a>
                    </li>

                </ul>

            </div>
        </div>
        <!--**********************************
            Sidebar end
         ***********************************-->

        @yield('content')

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/"
                        target="_blank">DexignZone</a> <span class="current-year">2024</span></p>
            </div>
        </div> <!--**********************************
                  Footer end
              ***********************************-->

        <!--**********************************
                 Support ticket button start
              ***********************************-->

        <!--**********************************
                 Support ticket button end
              ***********************************-->

    </div>
    <!--**********************************
              Main wrapper end
          ***********************************-->

    {{-- Modales --}}
    <!-- Add Order -->
    <div class="modal fade" id="addFuncionarioModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Adicionar Funcionário</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="text-black font-w500">Função</label>
                            <select name="" id="" class="form-control">
                                <option value="" selected>--Defina uma Função--</option>
                                <option value="">Secretário</option>
                                <option value="">Moderador</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-black font-w500">Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-black font-w500">Nº. Telefone</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-black font-w500">Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-black font-w500">Password</label>
                            <input type="password" class="form-control">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    {{-- End Modales --}}

    <!--**********************************
              Scripts
          ***********************************-->
    <!-- Required vendors -->
    <script>
        var enableSupportButton = '1'
    </script>
    <script>
        var asset_url = '{{ asset('assets/') }}
    </script>

    <script src="{{ asset('assets/vendor/global/global.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('assets/vendor/peity/jquery.peity.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/bootstrap-datetimepicker/js/moment.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/apexchart/apexchart.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard-1.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/deznav-init.js') }}" type="text/javascript"></script>
    <script src="assets/vendor/global/global.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/plugins-init/datatables.init.js') }}" type="text/javascript"></script>



</body>

</html>
