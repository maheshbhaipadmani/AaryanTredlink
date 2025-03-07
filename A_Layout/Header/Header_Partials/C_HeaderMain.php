<?php
$page = basename($_SERVER['PHP_SELF']);
echo
  '
<body>
    <div id="wrapper">
        <div class="float-text show-on-scroll">
            <span><a href="#">Scroll to top</a></span>
        </div>
        <div class="scrollbar-v show-on-scroll"></div>

        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <header class="transparent scroll-light has-topbar">
            <div id="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-between xs-hide">
                                <div class="header-widget d-flex">
                                    <div class="topbar-widget">
                                        <a href="tel:+919099903098">
                                            <i class="icofont-phone"></i> +91 90999 03098
                                        </a>
                                    </div>

                                    <div class="topbar-widget">
                                        <a href="mailto:ashish@aaryantradelink.com"
                                            style="text-decoration: none; color: white;">
                                            <i class="icofont-envelope"></i> ashish@aaryantradelink.com
                                        </a>
                                    </div>

                                    <div class="topbar-widget"><a href="javascript:void(0);"><i class="icofont-wall-clock"></i>Mon - Fri
                                            08.00 - 18.00</a></div>
                                </div>

                                <div class="social-icons">
                                    <a href="#"><i class="fa-brands fa-facebook fa-lg"></i></a>
                                    <a href="#"><i class="fa-brands fa-x-twitter fa-lg"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube fa-lg"></i></a>
                                    <a href="#"><i class="fa-brands fa-pinterest fa-lg"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="Home">
                                        <img class="logo-main" src="./images/logo/Aaryan Tredlink _Finle logo.png"
                                            alt="aaryan logo">
                                        <img class="logo-scroll" src="./images/logo/Aaryan Tredlink _Finle logo.png"
                                            alt="aaryan logo">
                                        <img class="logo-mobile" src="images/logo.webp" alt="logo">
                                    </a>
                                </div>
                                <!-- logo close -->
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="Home">Home</a></li>
                                    <li><a class="menu-item" href="About">About Us</a></li>
                                    <li><a class="menu-item" href="javascript:void(0);">Products</a>
                                        <ul>
                                            <li><a class="menu-item" href="It-Products-Products">IT Products</a>
                                            </li>
                                            <li><a class="menu-item" href="Office-Automation-Products">Office
                                                    Automation</a></li>
                                            <li><a class="menu-item" href="Air-Conditioning-Products">Air
                                                    Conditioning</a></li>
                                            <li><a class="menu-item"
                                                    href="Refrigeration-Products">Refrigeration</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="javascript:void(0);">Services</a>
                                        <ul>
                                            <li><a class="menu-item" href="It-Products">IT Products</a>
                                            </li>
                                            <li><a class="menu-item" href="Office-Automation">Office Automation</a>
                                            </li>
                                            <li><a class="menu-item" href="Air-Conditioning">Air Conditioning</a>
                                            </li>
                                            <li><a class="menu-item" href="Refrigeration">Refrigeration</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="Contact" class="btn-main bg-color-2">Contact</a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

'
                  ?>