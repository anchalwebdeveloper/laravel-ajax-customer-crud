<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Women‘s Collection</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/stylesheets/bootstrap.css')}}" />

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/stylesheets/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('frontend/stylesheets/responsive.css')}}" />

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/stylesheets/colors/color1.css')}}" id="colors" />

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/stylesheets/animate.css')}}" />


    <!-- Favicon and touch icons  -->
    <link href="{{url('frontend/icon/favicon.png')}}" rel="shortcut icon">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
</head> 
<body class="header_sticky header-style-1 has-menu-extra">
	<!-- Preloader -->
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>

    <!-- Boxed -->
    <div class="boxed">
        <div id="site-header-wrap">
            <!-- Header -->
            <header id="header" class="header header-container clearfix">
                <div class="container clearfix" id="site-header-inner">
                    <div id="logo" class="logo float-left">
                        <a href="{{url('/')}}" title="logo">
                            <img src="{{url('frontend/images/logo.png')}}" alt="image" width="107" height="24" data-retina="images/logo@2x.png" data-width="107" data-height="24">
                        </a>
                    </div><!-- /.logo -->
                    <div class="mobile-button"><span></span></div>
                    <ul class="menu-extra">
                        <li class="box-search">
                            <a class="icon_search header-search-icon" href="#"></a>
                            <form role="search" method="get" class="header-search-form" action="#">
                                <input type="text" value="" name="s" class="header-search-field" placeholder="Search...">
                                <button type="submit" class="header-search-submit" title="Search">Search</button>
                            </form>
                        </li>
                        <li class="box-login">
                            <a class="icon_login" href="#"></a>
                        </li>
                        <li class="box-cart nav-top-cart-wrapper">
                            <a class="icon_cart nav-cart-trigger active" href="#"><span>3</span></a>
                            <div class="nav-shop-cart">
                                <div class="widget_shopping_cart_content">
                                    <div class="woocommerce-min-cart-wrap">
                                        <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                            <li class="woocommerce-mini-cart-item mini_cart_item">
                                                <span>No Items in Shopping Cart</span>
                                            </li>
                                        </ul>
                                    </div><!-- /.widget_shopping_cart_content -->
                                </div>
                            </div><!-- /.nav-shop-cart -->
                        </li>
                    </ul><!-- /.menu-extra -->
                    <div class="nav-wrap">
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu">
                                <li class="active">
                                    <a href="{{url('/')}}">HOME</a>                                   
                                </li>
                                <li>
                                    <a href="shop-3col.html">SHOP</a>
                                   
                                </li>
                                
                                <li >
                                    <a href="{{url('/blog')}}">BLOG</a>
                                   
                                </li>
                                <li>
                                    <a href="{{url('/contact')}}">CONTACT</a>
                                    
                                </li>
                            </ul>
                        </nav><!-- /.mainnav -->
                    </div><!-- /.nav-wrap -->
                </div><!-- /.container-fluid -->
            </header><!-- /header -->
        </div><!-- /#site-header-wrap -->