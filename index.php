<?php
require_once ('backend/connect.php');
require_once ('backend/scrolling_news.php');
require_once ('backend/news.php');
require_once ('backend/toppers.php')







?>









<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pune Instiute of Computer Technology</title>

    <!--    favicon to be cropped-->
    <link rel="icon" href="images/icon.jpg" sizes="32x32"/>
    <link rel="icon" href="images/icon.jpg" sizes="192x192"/>
    <link rel="apple-touch-icon-precomposed" href="images/icon.jpg"/>
    <!--Theme-->
    <link rel='stylesheet' href='plugins/goodlayers-core/plugins/combine/style.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='plugins/goodlayers-core/include/css/page-builder.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='plugins/revslider/public/assets/css/settings.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/style-core.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/kingster-style-custom.css' type='text/css' media='all'/>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--Fonts-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700%2C400" rel="stylesheet" property="stylesheet" type="text/css" media="all">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CABeeZee%3Aregular%2Citalic&amp;subset=latin%2Clatin-ext%2Cdevanagari&amp;ver=5.0.3' type='text/css' media='all'/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Custom css-->
    <link rel="stylesheet" type="text/css" href="css/cards.css">
  


    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


    <style>

        html{
            scroll-behavior: smooth;
        }

        h3{
            text-align: left;
            margin-left: 10px;
        }

        .msg{
            margin: 40px 2%;
            position: relative;
            width: 96%;
            text-align: center;
            height: fit-content;
            border: 2px black solid;
        }
        .msg-bg{
            position: absolute;
            z-index: -1;
            top: 0px;
            left: 0px;
            filter: blur(3px);
            width: 100%;
            border: 1px black solid;
        }
        .msg-img{
            position: relative;
            width: 60%;
            border: black 0.1px;
            border-radius: 50%;
            
            box-shadow: 0 0px 5px 0 rgba(0,0,0,0.), 0 7px 15px 0 rgba(0,0,0,0.9);
        }
        .msg-txt{
            position: relative;
            margin-left: 20px;
            margin-right: 20px;
            color: white;
            font-size: x-large;
            text-shadow: 1px 1px rgba(0,0,0,0.8);
        }

        .msg-name{
            color: white;
            margin-top: 50px;
            font-weight: bold;
            font-size: x-large;
            margin-bottom: 20px;
            text-shadow: 1px 1px rgba(0,0,0,0.8);
        }

        .msg-position{
            margin-top: 0;
            position: relative;
            color: white;
            font-size: large;
            margin-bottom: 60px;
            text-shadow: 1px 1px #000000;
        }

        .preloader{
            position: fixed;
            z-index: 1000;
        }

        .preloader-left{
            position: absolute;
            background: black;
            top: 0;
            left: 0;
            width: 51vw;
            height: 100vh;
            z-index: 1001;
            transition: all 0.7s;
        }

        .preloader-right{
            position: absolute;
            background: black;
            top: 0;
            right: 0;
            width: 51vw;
            height: 100vh;
            z-index: 1001;
            transition: all 0.7s;
        }

        .preloader-cont{
            position: absolute;
            top:50vh;
            left: 50vw;
            transform: translate(-50%, -50%);
            z-index: 1002;
            opacity: 1;
            transition: all 0.4s;
            font-size: larger;
        }

        .preloader-logo{
            width: 12vw;
            animation: logo1 1s infinite;
            transition: opacity 0.4s ease-in;

        }

        @keyframes logo {
            0% {transform: rotateY(0deg);}
            50% {transform: rotateY(90deg);}
            50% {transform: rotateY(-90deg);}
            100% {transform: rotateY(0deg);}
        }

        @keyframes logo1 {
            0% {transform: scale3d(1,1,1);}
            50% {transform: scale3d(1.1,1.1,1.6);}
            100% {transform: scale3d(1,1,1);}
        }

        .btn_top{
            position: fixed;
            right: 1rem;
            bottom: 1rem;
            width: 3.5rem;
            height: 3.5rem;
            border-radius: 50%;
            opacity: 0.4;
            font-size: 3rem;
            z-index: 999;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
        }

        .btn_top_hide{
            opacity: 0;
            cursor: default;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
        }



        .preloader-loaded{
            width: 0;
            opacity: 0;
        }

        .preloader-cont-loaded{
            opacity: 0;
        }

        #div_1dd7_22 {
            background: url('images/bg.JPG');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            filter: blur(5px);
        }
        .principal_text{
            text-shadow: 2px 1px 4px black;
        }
        
      
      
      
      @media only screen and (min-width: 768px) {
        .news-slider{
          margin-left: 5vw;
        }

      }

      // Transparent separator
      @mixin linear-gradient($position, $color, $percentage) {
        background: -webkit-linear-gradient($position, rgba(0,0,0,0.1), $color $percentage);
           background: -moz-linear-gradient($position, rgba(0,0,0,0.1), $color $percentage);
             background: -o-linear-gradient($position, rgba(0,0,0,0.1), $color $percentage); 
                background: linear-gradient(to $position, rgba(0,0,0,0.1), $color $percentage);
      }
      .transparent-separator {
        display: inline-block;
        height: 1px;
        width: 50%;
        position: relative;
        &:after {
          content: '';
          display: block;
          width: 50%;
          height: 1px;
          position: absolute;
          top: 0;
          left: 0;
        }
        &:before {
          content: '';
          display: block;
          width: 50%;
          height: 1px;
          position: absolute;
          top: 0;
          right: 0;
        }
        @each $color in $palette {
          &.#{nth($color, 1)} {
            &:after {
              @include linear-gradient(right, nth($color, 2), 60%);
            }
            &:before {
              @include linear-gradient(left, nth($color, 2), 60%);
            }
          }
        } 
      }
    </style>
    <script>
        $(document).ready(function () {
            $('.msg-bg').attr("style", "height: " + $('.msg').height() + "px;");
            console.log($('.msg').height());
        });

        $(window).scroll(function () {
            if($(window).scrollTop()>200){
                $('#btn_top').attr("class", "btn_top bg-dark text-center");
            }
            if($(window).scrollTop()<200){
                $('#btn_top').attr("class", "btn_top bg-dark text-center btn_top_hide");
            }
        });

        $(window).on("load", function () {
            $("#preloader-left").attr("class", $("#preloader-left").attr("class") + " preloader-loaded");
            $("#preloader-right").attr("class", $("#preloader-right").attr("class") + " preloader-loaded");
            $("#preloader-cont").attr("class", $("#preloader-cont").attr("class") + " preloader-cont-loaded");
        });

    </script>
</head>
  

<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js tribe-no-js kingster-body kingster-body-front kingster-full  kingster-with-sticky-navigation  kingster-blockquote-style-1 gdlr-core-link-to-lightbox">
  
  <div class="container-fluid preloader" id="preloader">
      <div class="preloader-left" id="preloader-left">

      </div>
      <div class="preloader-right" id="preloader-right">

      </div>
      <div class="preloader-cont text-muted text-center" id="preloader-cont">
          <img src="images/logo-pre.png" class="preloader-logo" id="preloader-logo"/>
          <p>Loading...</p>
      </div>
  </div>


  
  <a href="javascript: scrollTo(0,0)">
      <div class="btn_top bg-dark text-center btn_top_hide" id="btn_top">
          <i class="fas fa-angle-up text-white" style="transform: translateY(-22%);"></i>
      </div>
  </a>


  <div class="kingster-mobile-header-wrap">
      <div class="kingster-mobile-header kingster-header-background kingster-style-slide kingster-sticky-mobile-navigation "
           id="kingster-mobile-header">
          <div class="kingster-mobile-header-container kingster-container clearfix">
              <div class="kingster-logo  kingster-item-pdlr">
                  <div class="kingster-logo-inner">
                      <a class="" href="index.html"><img src="images/logo.png" class="" alt=""/></a>
                  </div>
              </div>
              <div class="kingster-mobile-menu-right">
                  <div class="kingster-main-menu-search" id="kingster-mobile-top-search"><i class="fa fa-search"></i>
                  </div>
                  <div class="kingster-top-search-wrap">
                      <div class="kingster-top-search-close"></div>
                      <div class="kingster-top-search-row">
                          <div class="kingster-top-search-cell">
                              <form role="search" method="get" class="search-form" action="#">
                                  <input type="text" class="search-field kingster-title-font" placeholder="Search..."
                                         value="" name="s">
                                  <div class="kingster-top-search-submit"><i class="fa fa-search"></i></div>
                                  <input type="submit" class="search-submit" value="Search">
                                  <div class="kingster-top-search-close"><i class="icon_close"></i></div>
                              </form>
                          </div>
                      </div>
                  </div>
                  <div class="kingster-mobile-menu"><a
                          class="kingster-mm-menu-button kingster-mobile-menu-button kingster-mobile-button-hamburger"
                          href="#kingster-mobile-menu"><span></span></a>
                      <div class="kingster-mm-menu-wrap kingster-navigation-font" id="kingster-mobile-menu"
                           data-slide="right">
                          <ul id="menu-main-navigation" class="m-menu">
                              <li class="menu-item menu-item-home current-menu-item menu-item-has-children"><a
                                      href="index.html">Home</a>
                                  <ul class="sub-menu">
                                      <li class="menu-item menu-item-home"><a href="index.html">Homepage 1</a></li>
                                      <li class="menu-item"><a href="homepage-2.html">Homepage 2</a></li>
                                  </ul>
                              </li>
                              <li class="menu-item menu-item-has-children"><a href="#">Pages</a>
                                  <ul class="sub-menu">
                                      <li class="menu-item"><a href="about-us.html">About KU</a></li>
                                      <li class="menu-item menu-item-has-children"><a
                                              href="blog-full-right-sidebar-with-frame.html">Blog</a>
                                          <ul class="sub-menu">
                                              <li class="menu-item menu-item-has-children"><a
                                                      href="blog-full-right-sidebar-with-frame.html">Blog Full</a>
                                                  <ul class="sub-menu">
                                                      <li class="menu-item"><a
                                                              href="blog-full-right-sidebar-with-frame.html">Blog Full
                                                          Right Sidebar With Frame</a></li>
                                                      <li class="menu-item"><a
                                                              href="blog-full-left-sidebar-with-frame.html">Blog Full Left
                                                          Sidebar With Frame</a></li>
                                                      <li class="menu-item"><a
                                                              href="blog-full-both-sidebar-with-frame.html">Blog Full Both
                                                          Sidebar With Frame</a></li>
                                                      <li class="menu-item"><a href="blog-full-right-sidebar.html">Blog
                                                          Full Right Sidebar</a></li>
                                                      <li class="menu-item"><a href="blog-full-left-sidebar.html">Blog
                                                          Full Left Sidebar</a></li>
                                                      <li class="menu-item"><a href="blog-full-both-sidebar.html">Blog
                                                          Full Both Sidebar</a></li>
                                                  </ul>
                                              </li>
                                              <li class="menu-item menu-item-has-children"><a
                                                      href="blog-grid-3-columns-no-space.html">Blog Grid</a>
                                                  <ul class="sub-menu">
                                                      <li class="menu-item"><a href="blog-grid-2-columns.html">Blog Grid 2
                                                          Columns</a></li>
                                                      <li class="menu-item"><a href="blog-grid-3-columns.html">Blog Grid 3
                                                          Columns</a></li>
                                                      <li class="menu-item"><a href="blog-grid-4-columns.html">Blog Grid 4
                                                          Columns</a></li>
                                                      <li class="menu-item"><a href="blog-grid-2-columns-no-space.html">Blog
                                                          Grid 2 Columns No Space</a></li>
                                                      <li class="menu-item"><a href="blog-grid-3-columns-no-space.html">Blog
                                                          Grid 3 Columns No Space</a></li>
                                                      <li class="menu-item"><a href="blog-grid-4-columns-no-space.html">Blog
                                                          Grid 4 Columns No Space</a></li>
                                                  </ul>
                                              </li>

                                              <li class="menu-item"><a href="standard-post-type.html">Single Post</a></li>
                                          </ul>
                                      </li>
                                      <li class="menu-item menu-item-has-children"><a href="#">Contact</a>
                                          <ul class="sub-menu">
                                              <li class="menu-item"><a href="contact.html">Contact</a></li>
                                              <li class="menu-item"><a href="contact-2.html">Contact 2</a></li>
                                              <li class="menu-item"><a href="contact-3.html">Contact 3</a></li>
                                          </ul>
                                      </li>
                                      <li class="menu-item menu-item-has-children"><a href="portfolio-3-columns.html">Portfolio</a>
                                          <ul class="sub-menu">
                                              <li class="menu-item menu-item-has-children"><a>Portfolio Grid</a>
                                                  <ul class="sub-menu">
                                                      <li class="menu-item"><a href="portfolio-2-columns.html">Portfolio 2
                                                          Columns</a></li>
                                                      <li class="menu-item"><a href="portfolio-3-columns.html">Portfolio 3
                                                          Columns</a></li>
                                                      <li class="menu-item"><a href="portfolio-4-columns.html">Portfolio 4
                                                          Columns</a></li>
                                                      <li class="menu-item"><a href="portfolio-5-columns.html">Portfolio 5
                                                          Columns</a></li>
                                                      <li class="menu-item"><a href="portfolio-2-columns-with-frame.html">Portfolio
                                                          2 Columns With Frame</a></li>
                                                      <li class="menu-item"><a href="portfolio-3-columns-with-frame.html">Portfolio
                                                          3 Columns With Frame</a></li>
                                                      <li class="menu-item"><a href="portfolio-4-columns-with-frame.html">Portfolio
                                                          4 Columns With Frame</a></li>
                                                      <li class="menu-item"><a href="portfolio-2-columns-no-space.html">Portfolio
                                                          2 Columns No Space</a></li>
                                                      <li class="menu-item"><a href="portfolio-3-columns-no-space.html">Portfolio
                                                          3 Columns No Space</a></li>
                                                      <li class="menu-item"><a href="portfolio-4-columns-no-space.html">Portfolio
                                                          4 Columns No Space</a></li>
                                                      <li class="menu-item"><a href="portfolio-5-columns-no-space.html">Portfolio
                                                          5 Columns No Space</a></li>
                                                  </ul>
                                              </li>
                                              <li class="menu-item menu-item-has-children"><a>Portfolio Masonry</a>
                                                  <ul class="sub-menu">
                                                      <li class="menu-item"><a href="portfolio-masonry-4-columns.html">Masonry
                                                          4 Columns</a></li>
                                                      <li class="menu-item"><a href="portfolio-masonry-3-columns.html">Masonry
                                                          3 Columns</a></li>
                                                      <li class="menu-item"><a href="portfolio-masonry-2-columns.html">Masonry
                                                          2 Columns</a></li>
                                                      <li class="menu-item"><a
                                                              href="portfolio-masonry-4-columns-no-space.html">Masonry 4
                                                          Columns No Space</a></li>
                                                      <li class="menu-item"><a
                                                              href="portfolio-masonry-3-columns-no-space.html">Masonry 3
                                                          Columns No Space</a></li>
                                                      <li class="menu-item"><a
                                                              href="portfolio-masonry-2-columns-no-space.html">Masonry 2
                                                          Columns No Space</a></li>
                                                  </ul>
                                              </li>

                                              <li class="menu-item menu-item-has-children"><a class="sf-with-ul-pre"
                                                                                              href="singleportfolio.html">Single
                                                  Portfolio</a></li>
                                          </ul>
                                      </li>
                                      <li class="menu-item"><a href="gallery.html">Gallery</a></li>
                                      <li class="menu-item"><a href="price-table.html">Price Table</a></li>
                                      <li class="menu-item"><a href="maintenance.html">Maintenance</a></li>
                                      <li class="menu-item"><a href="coming-soon.html">Coming Soon</a></li>
                                      <li class="menu-item"><a href="404.html">404 Page</a></li>
                                  </ul>
                              </li>
                              <li class="menu-item menu-item-has-children"><a
                                      href="bachelor-of-science-in-business-administration.html">Academics</a>
                                  <ul class="sub-menu">
                                      <li class="menu-item menu-item-has-children"><a>Departments</a>
                                          <ul class="sub-menu">
                                              <li class="menu-item"><a
                                                      href="#">First Year Engineering</a></li>
                                              <li class="menu-item"><a href="#">Computer Engineering</a></li>
                                              <li class="menu-item"><a href="#">Electronics and Telecommunication</a></li>
                                              <li class="menu-item"><a href="#">Information Technology</a></li>
                                          </ul>
                                      </li>
                                      <li class="menu-item menu-item-has-children"><a href="#">Student</a>
                                          <ul class="sub-menu">
                                              <li class="menu-item"><a href="#">Time Table</a></li>
                                              <li class="menu-item"><a href="#">Downloads</a></li>

                                          </ul>
                                      </li>
                                      <li class="menu-item menu-item-has-children"><a href="#">Resources</a>
                                          <ul class="sub-menu">
                                              <li class="menu-item"><a
                                                      href="bachelor-of-science-in-business-administration.html">Academic Calendar</a></li>


                                          </ul>
                                      </li>

                                  </ul>
                              </li>
                              <li class="menu-item menu-item-has-children"><a href="#">Admissions</a>
                                  <ul class="sub-menu">
                                      <li class="menu-item"><a href="apply-to-kingster.html">Undergraduate</a></li>
                                      <li class="menu-item"><a href="campus-tour.html">Postgraduate</a></li>
                                      <li class="menu-item"><a href="scholarships.html">Fees Structure</a></li>
                                      <li class="menu-item"><a href="athletics.html">Cut Off</a></li>

                                  </ul>
                              </li>
                              <li class="menu-item menu-item-has-children"><a href="#">Life@PICT</a>
                                  <ul class="sub-menu">
                                      <li class="menu-item"><a href="#">Campus Tour</a></li>
                                      <li class="menu-item"><a href="#">Extra-Curricular</a></li>
                                      <li class="menu-item"><a href="#">Co-Curricular</a></li>
                                      <li class="menu-item menu-item-has-children"><a href="#">Common Facilities</a>
                                          <ul class="sub-menu">
                                              <li class="menu-item menu-item-has-children"><a href="">Hostel</a>
                                                  <ul class="sub-menu">
                                                      <li class="menu-item"><a href="">Girls</a></li>
                                                      <li class="menu-item"><a href="">Boys</a></li>
                                                  </ul>
                                              </li>
                                              <li class="menu-item"><a href="">Medical</a></li>
                                              <li class="menu-item"><a href="">Sports</a></li>
                                              <li class="menu-item"><a href="">Internet</a></li>


                                          </ul>
                                      </li>
                                  </ul>
                              </li>
                              <li class="menu-item"><a href="athletics.html">Athletics</a></li>
                              <li class="menu-item"><a href="university-life.html">University Life</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="kingster-body-outer-wrapper ">
      <div class="kingster-body-wrapper clearfix  kingster-with-frame">
          <div class="kingster-top-bar">
              <div class="kingster-top-bar-background"></div>
              <div class="kingster-top-bar-container kingster-container ">
                  <div class="kingster-top-bar-container-inner clearfix">
                      <div class="kingster-top-bar-left kingster-item-pdlr"><i class="fa fa-envelope-open-o" id="i_fd84_0"></i> webmaster@pict.edu <i class="fa fa-phone" id="i_fd84_1"></i> +1-3435-2356-222</div>
                      <div class="kingster-top-bar-right kingster-item-pdlr">
                          <ul id="kingster-top-bar-menu" class="sf-menu kingster-top-bar-menu kingster-top-bar-right-menu">
                              <li class="menu-item kingster-normal-menu"><a href="#">Alumni</a></li>
                              <li class="menu-item kingster-normal-menu"><a href="#">Calender</a></li>
                              <li class="menu-item kingster-normal-menu"><a href="#">Feedback</a></li>
                          </ul>
                          <div class="kingster-top-bar-right-social"></div><a class="kingster-top-bar-right-button" href="#" target="_blank">MIS Portal</a></div>
                  </div>
              </div>
          </div>
          <header class="kingster-header-wrap kingster-header-style-plain  kingster-style-menu-right kingster-sticky-navigation kingster-style-fixed"
                  data-navigation-offset="75px">
              <div class="kingster-header-background"></div>
              <div class="kingster-header-container  kingster-container">
                  <div class="kingster-header-container-inner clearfix">
                      <div class="kingster-logo  kingster-item-pdlr">
                          <div class="kingster-logo-inner">
                              <a class="" href="index.html"><img src="images/logo.png" alt=""/></a>
                          </div>
                      </div>
                      <div class="kingster-navigation kingster-item-pdlr clearfix ">
                          <div class="kingster-main-menu" id="kingster-main-menu">
                              <ul id="menu-main-navigation-1" class="sf-menu">
                                  <li class="menu-item menu-item-home current-menu-item menu-item-has-children kingster-normal-menu">
                                      <a href="index.html" class="sf-with-ul-pre">Home</a>
                                      <ul class="sub-menu">
                                          <li class="menu-item menu-item-home" data-size="60"><a href="index.html">Homepage
                                              1</a></li>
                                          <li class="menu-item" data-size="60"><a href="homepage-2.html">Homepage 2</a>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class="menu-item menu-item-has-children kingster-normal-menu"><a href="#"
                                                                                                       class="sf-with-ul-pre">About
                                      Us</a>
                                      <ul class="sub-menu">
                                          <li class="menu-item menu-item-has-children kingster-normal-menu"><a href="#">PICT At Glance</a>
                                              <ul class="sub-menu">
                                                  <li class="menu-item"><a href="#">Vision Misson</a></li>
                                                  <li class="menu-item"><a href="#">Basic Info</a></li>
                                                  <li class="menu-item"><a href="#">History</a></li>
                                              </ul>
                                          </li>
                                          <li class="menu-item"><a href="#">Registrar's Office</a></li>

                                      </ul>
                                  </li>
                                  <li class="menu-item menu-item-has-children kingster-mega-menu"><a
                                          href="bachelor-of-science-in-business-administration.html"
                                          class="sf-with-ul-pre">Academics</a>
                                      <div class="sf-mega sf-mega-full megaimg">
                                          <ul class="sub-menu">
                                              <li class="menu-item menu-item-has-children" data-size="15"><a
                                                      class="sf-with-ul-pre">Departments</a>
                                                  <ul class="sub-menu">
                                                      <li class="menu-item"><a
                                                              href="#">First Year Engineering</a></li>
                                                      <li class="menu-item"><a href="#">Computer Engineering</a>
                                                      </li>
                                                      <li class="menu-item"><a href="#">Electronics and Telecommunication</a>
                                                      </li>
                                                      <li class="menu-item"><a href="#">Information Technology</a></li>


                                                  </ul>
                                              </li>
                                              <li class="menu-item menu-item-has-children" data-size="15"><a href="#"
                                                                                                             class="sf-with-ul-pre">Student</a>
                                                  <ul class="sub-menu">
                                                      <li class="menu-item"><a href="#">Time Table and Syllabus</a></li>
                                                      <li class="menu-item"><a href="#">Downloads</a></li>

                                                  </ul>
                                              </li>
                                              <li class="menu-item menu-item-has-children" data-size="15"><a href="#"
                                                                                                             class="sf-with-ul-pre">Resources</a>
                                                  <ul class="sub-menu">
                                                      <li class="menu-item"><a
                                                              href="bachelor-of-science-in-business-administration.html">Academic Calendar</a></li>

                                                  </ul>
                                              </li>
                                              <li class="menu-item" data-size="15">
                                                  <div class="kingster-mega-menu-section-content"><img
                                                          src="upload/mega-menu-logo.png" id="img_fd84_0" alt=""/> <span
                                                          id="span_fd84_0">Academic offerings include 95 majors, 86 minors, and more than 100 in-major specializations</span>
                                                  </div>
                                              </li>
                                          </ul>
                                      </div>
                                  </li>
                                  <li class="menu-item menu-item-has-children kingster-normal-menu"><a href="#"
                                                                                                       class="sf-with-ul-pre">Admissions</a>
                                      <ul class="sub-menu">
                                          <li class="menu-item" data-size="60"><a href="#">Undergraduate</a></li>
                                          <li class="menu-item" data-size="60"><a href="#">Postgraduate</a></li>
                                          <li class="menu-item" data-size="60"><a href="#">Fees Structure</a></li>
                                          <li class="menu-item" data-size="60"><a href="#">Cut Off</a></li>
                                      </ul>
                                  </li>
                                  <li class="menu-item menu-item-has-children kingster-normal-menu"><a href="#">Life@PICT</a>
                                      <ul class="sub-menu">
                                          <li class="menu-item"><a href="#">Campus Tour</a></li>
                                          <li class="menu-item"><a href="#">Extra-Curricular</a></li>
                                          <li class="menu-item"><a href="#">Co-Curricular</a></li>
                                          <li class="menu-item menu-item-has-children kingster-normal-menu"><a href="#">Common Facilities</a>
                                              <ul class="sub-menu">
                                                  <li class="menu-item menu-item-has-children"><a href="">Hostel</a>
                                                      <ul class="sub-menu">
                                                          <li class="menu-item"><a href="">Girls</a></li>
                                                          <li class="menu-item"><a href="">Boys</a></li>
                                                      </ul>
                                                  </li>
                                                  <li class="menu-item kingster-normal-menu"><a href="">Medical</a></li>
                                                  <li class="menu-item kingster-normal-menu"><a href="">Sports</a></li>
                                                  <li class="menu-item kingster-normal-menu"><a href="">Internet</a></li>


                                              </ul>
                                          </li>
                                      </ul>
                                  </li>

                                  <li class="menu-item kingster-normal-menu"><a href="university-life.html">Results & Placements</a></li>
                                  <li class="menu-item kingster-normal-menu"><a href="university-life.html">Library</a></li>
                                  <li class="menu-item kingster-normal-menu"><a href="university-life.html">Cell@PICT</a></li>


                              </ul>
                              <div class="kingster-navigation-slide-bar" id="kingster-navigation-slide-bar"></div>
                          </div>
                          <div class="kingster-main-menu-right-wrap clearfix ">
                              <div class="kingster-main-menu-search" id="kingster-top-search"><i class="icon_search"></i>
                              </div>
                              <div class="kingster-top-search-wrap">
                                  <div class="kingster-top-search-close"></div>
                                  <div class="kingster-top-search-row">
                                      <div class="kingster-top-search-cell">
                                          <form role="search" method="get" class="search-form" action="#">
                                              <input type="text" class="search-field kingster-title-font"
                                                     placeholder="Search..." value="" name="s">
                                              <div class="kingster-top-search-submit"><i class="fa fa-search"></i></div>
                                              <input type="submit" class="search-submit" value="Search">
                                              <div class="kingster-top-search-close"><i class="icon_close"></i></div>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </header>
          <div class="kingster-page-wrapper" id="kingster-page-wrapper">
              <div class="gdlr-core-page-builder-body">
                  <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
                      <div class="gdlr-core-pbf-background-wrap" style="background-color: #192f59 ;"></div>
                      <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                          <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                              <div class="gdlr-core-pbf-element">
                                  <div class="gdlr-core-revolution-slider-item gdlr-core-item-pdlr gdlr-core-item-pdb "
                                       style="padding-bottom: 0px ;">

                                      <div id="rev_slider_1_1_wrapper"
                                           class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery"
                                           style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                                          <div id="rev_slider_1_1" class="rev_slider fullwidthabanner"
                                               style="display:none;" data-version="5.4.8">
                                              <ul>
                                                  <li data-index="rs-3" data-transition="fade" data-slotamount="default"
                                                      data-hideafterloop="0" data-hideslideonmobile="off"
                                                      data-easein="default" data-easeout="default" data-masterspeed="300"
                                                      data-thumb="upload/slider-1-2-100x50.jpg" data-rotate="0"
                                                      data-saveperformance="off" data-title="Slide" data-param1=""
                                                      data-param2="" data-param3="" data-param4="" data-param5=""
                                                      data-param6="" data-param7="" data-param8="" data-param9=""
                                                      data-param10="" data-description=""><img src="upload/slider-1-2.jpg"
                                                                                               alt="" title="slider-1-2"
                                                                                               width="1800" height="1119"
                                                                                               data-bgposition="center center"
                                                                                               data-bgfit="cover"
                                                                                               data-bgrepeat="no-repeat"
                                                                                               class="rev-slidebg"
                                                                                               data-no-retina>
                                                      <div class="tp-caption   tp-resizeme" id="slide-3-layer-1"
                                                           data-x="38" data-y="center" data-voffset="-146"
                                                           data-width="['auto']" data-height="['auto']" data-type="text"
                                                           data-responsive_offset="on"
                                                           data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                           data-textAlign="['inherit','inherit','inherit','inherit']"
                                                           data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                           data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                           style="z-index: 5; white-space: nowrap; font-size: 33px; line-height: 33px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">
                                                          A Place Of Intense Energy And Creativity
                                                      </div>
                                                      <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                                                           id="slide-3-layer-4" data-x="33" data-y="center"
                                                           data-voffset="-44" data-width="['830']" data-height="['118']"
                                                           data-type="shape" data-responsive_offset="on"
                                                           data-frames='[{"delay":330,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                           data-textAlign="['inherit','inherit','inherit','inherit']"
                                                           data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                           data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                           style="z-index: 6;background-color:rgba(24,36,59,0.9);border-radius:3px 3px 3px 3px;"></div>
                                                      <div class="tp-caption   tp-resizeme" id="slide-3-layer-2"
                                                           data-x="55" data-y="center" data-voffset="-52"
                                                           data-width="['auto']" data-height="['auto']" data-type="text"
                                                           data-responsive_offset="on"
                                                           data-frames='[{"delay":360,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                           data-textAlign="['inherit','inherit','inherit','inherit']"
                                                           data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                           data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                           style="z-index: 7; white-space: nowrap; font-size: 43px; line-height: 43px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;">
                                                          Pune Institute Of Computer Technology
                                                      </div>
                                                      <div class="tp-caption   tp-resizeme" id="slide-3-layer-3"
                                                           data-x="423" data-y="center" data-voffset="-51"
                                                           data-width="['auto']" data-height="['auto']" data-type="text"
                                                           data-responsive_offset="on"
                                                           data-frames='[{"delay":360,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                           data-textAlign="['inherit','inherit','inherit','inherit']"
                                                           data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                           data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                           style="z-index: 8; white-space: nowrap; font-size: 88px; line-height: 88px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;"></div>
                                                      <div class="tp-caption rev-btn rev-hiddenicon " id="slide-3-layer-6"
                                                           data-x="34" data-y="center" data-voffset="80"
                                                           data-width="['auto']" data-height="['auto']" data-type="button"
                                                           data-responsive_offset="on"
                                                           data-frames='[{"delay":660,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(1,61,135);bg:rgba(255,255,255,1);bw:0 0 0 5px;"}]'
                                                           data-textAlign="['inherit','inherit','inherit','inherit']"
                                                           data-paddingtop="[19,19,19,19]"
                                                           data-paddingright="[21,21,21,21]"
                                                           data-paddingbottom="[19,19,19,19]"
                                                           data-paddingleft="[21,21,21,21]"
                                                           style="z-index: 9; white-space: nowrap; font-size: 17px; line-height: 16px; font-weight: 600; color: #2d2d2d; letter-spacing: 0px;font-family:Poppins;background-color:rgb(255,255,255);border-color:rgb(61,177,102);border-style:solid;border-width:0px 0px 0px 5px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                                          Take A Tour
                                                      </div>
                                                  </li>
                                                  <li data-index="rs-1" data-transition="fade" data-slotamount="default"
                                                      data-hideafterloop="0" data-hideslideonmobile="off"
                                                      data-easein="default" data-easeout="default" data-masterspeed="300"
                                                      data-thumb="upload/slider-2-100x50.jpg" data-rotate="0"
                                                      data-saveperformance="off" data-title="Slide" data-param1=""
                                                      data-param2="" data-param3="" data-param4="" data-param5=""
                                                      data-param6="" data-param7="" data-param8="" data-param9=""
                                                      data-param10="" data-description=""><img src="upload/slider-2.jpg"
                                                                                               alt="" title="slider-2"
                                                                                               width="1800" height="1119"
                                                                                               data-bgposition="center center"
                                                                                               data-bgfit="cover"
                                                                                               data-bgrepeat="no-repeat"
                                                                                               class="rev-slidebg"
                                                                                               data-no-retina>
                                                      <div class="tp-caption   tp-resizeme" id="slide-1-layer-1"
                                                           data-x="36" data-y="center" data-voffset="-120"
                                                           data-width="['auto']" data-height="['auto']" data-type="text"
                                                           data-responsive_offset="on"
                                                           data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                           data-textAlign="['inherit','inherit','inherit','inherit']"
                                                           data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                           data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                           style="z-index: 5; white-space: nowrap; font-size: 33px; line-height: 33px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">
                                                          PICT has secured
                                                      </div>
                                                      <div class="tp-caption   tp-resizeme" id="slide-1-layer-2"
                                                           data-x="33" data-y="center" data-voffset="-31"
                                                           data-width="['auto']" data-height="['auto']" data-type="text"
                                                           data-responsive_offset="on"
                                                           data-frames='[{"delay":370,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                           data-textAlign="['inherit','inherit','inherit','inherit']"
                                                           data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                           data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                           style="z-index: 6; white-space: nowrap; font-size: 83px; line-height: 83px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">
                                                          AIR 1 in SIH 2019
                                                      </div>
                                                      <div class="tp-caption rev-btn rev-hiddenicon " id="slide-1-layer-6"
                                                           data-x="34" data-y="center" data-voffset="80"
                                                           data-width="['auto']" data-height="['auto']" data-type="button"
                                                           data-responsive_offset="on"
                                                           data-frames='[{"delay":740,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,64,132);bg:rgba(255,255,255,1);bw:0 0 0 5px;"}]'
                                                           data-textAlign="['inherit','inherit','inherit','inherit']"
                                                           data-paddingtop="[19,19,19,19]"
                                                           data-paddingright="[21,21,21,21]"
                                                           data-paddingbottom="[19,19,19,19]"
                                                           data-paddingleft="[21,21,21,21]"
                                                           style="z-index: 7; white-space: nowrap; font-size: 17px; line-height: 16px; font-weight: 600; color: #2d2d2d; letter-spacing: 0px;font-family:Poppins;background-color:rgb(255,255,255);border-color:rgb(61,177,102);border-style:solid;border-width:0px 0px 0px 5px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                                          Take A Tour
                                                      </div>
                                                  </li>

                                                  <li data-index="rs-1" data-transition="fade" data-slotamount="default"
                                                      data-hideafterloop="0" data-hideslideonmobile="off"
                                                      data-easein="default" data-easeout="default" data-masterspeed="300"
                                                      data-thumb="upload/slider-3-100x50.jpg" data-rotate="0"
                                                      data-saveperformance="off" data-title="Slide" data-param1=""
                                                      data-param2="" data-param3="" data-param4="" data-param5=""
                                                      data-param6="" data-param7="" data-param8="" data-param9=""
                                                      data-param10="" data-description=""><img src="upload/slider-3.jpg"
                                                                                               alt="" title="slider-2"
                                                                                               width="1800" height="1119"
                                                                                               data-bgposition="center center"
                                                                                               data-bgfit="cover"
                                                                                               data-bgrepeat="no-repeat"
                                                                                               class="rev-slidebg"
                                                                                               data-no-retina>
                                                      <div class="tp-caption   tp-resizeme" id="slide-1-layer-1"
                                                           data-x="36" data-y="center" data-voffset="-120"
                                                           data-width="['auto']" data-height="['auto']" data-type="text"
                                                           data-responsive_offset="on"
                                                           data-frames='[{"delay":20,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                           data-textAlign="['inherit','inherit','inherit','inherit']"
                                                           data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                           data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                           style="z-index: 5; white-space: nowrap; font-size: 33px; line-height: 33px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">
                                                          PICT 2018-19
                                                      </div>
                                                      <div class="tp-caption   tp-resizeme" id="slide-1-layer-2"
                                                           data-x="33" data-y="center" data-voffset="-31"
                                                           data-width="['auto']" data-height="['auto']" data-type="text"
                                                           data-responsive_offset="on"
                                                           data-frames='[{"delay":380,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                           data-textAlign="['inherit','inherit','inherit','inherit']"
                                                           data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                           data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                           style="z-index: 6; white-space: nowrap; font-size: 83px; line-height: 83px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">
                                                          BE BATCH
                                                      </div>
                                                      <div class="tp-caption rev-btn rev-hiddenicon " id="slide-1-layer-6"
                                                           data-x="34" data-y="center" data-voffset="80"
                                                           data-width="['auto']" data-height="['auto']" data-type="button"
                                                           data-responsive_offset="on"
                                                           data-frames='[{"delay":760,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,64,132);bg:rgba(255,255,255,1);bw:0 0 0 5px;"}]'
                                                           data-textAlign="['inherit','inherit','inherit','inherit']"
                                                           data-paddingtop="[19,19,19,19]"
                                                           data-paddingright="[21,21,21,21]"
                                                           data-paddingbottom="[19,19,19,19]"
                                                           data-paddingleft="[21,21,21,21]"
                                                           style="z-index: 7; white-space: nowrap; font-size: 17px; line-height: 16px; font-weight: 600; color: #2d2d2d; letter-spacing: 0px;font-family:Poppins;background-color:rgb(255,255,255);border-color:rgb(61,177,102);border-style:solid;border-width:0px 0px 0px 5px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                                          Take A Tour
                                                      </div>
                                                  </li>

                                              </ul>
                                              <div class="tp-bannertimer tp-bottom"
                                                   style="visibility: hidden !important;"></div>
                                          </div>

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                
                  <div class="gdlr-core-pbf-wrapper  hp1-col-services"  data-skin="Blue Title" id="gdlr-core-wrapper-1">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                                <div class=" gdlr-core-pbf-wrapper-container-inner gdlr-core-item-mglr clearfix pt-3 pb-3" id="div_1dd7_0">
                                 
                                  
                                  <div class="gdlr-core-pbf-column-content-margin gdlr-core-js  gdlr-core-column-extend-left"
                                       id="div_1dd7_64" data-sync-height="height-3" data-sync-height-center=""
                                       style="height: 125px;">
                                      <div class="gdlr-core-pbf-background-wrap"></div>
                                      <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                          <div class="gdlr-core-pbf-element">
                                              <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                  <div class="gdlr-core-text-box-item-content" id="div_1dd7_66">
                                                      <div class="gdlr-core-twitter-item gdlr-core-item-pdb"
                                                           id="div_1dd7_67">
                                                          <div class="gdlr-core-block-item-title-nav ">
                                                              <div class="gdlr-core-flexslider-nav gdlr-core-plain-style gdlr-core-block-center"></div>
                                                          </div>

                                                          <div class="gdlr-core-twitter-content news-slider">
                                                              <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 "
                                                                   data-type="carousel" data-column="1"
                                                                   data-nav="navigation"
                                                                   data-nav-parent="gdlr-core-twitter-item">

                                                                  <div class="flex-viewport"
                                                                       style="overflow: hidden; position: relative;">
                                                                      <ul class="slides " id="ul_1dd7_0"
                                                                          style="width: 100%;">
                                                                          <li class="gdlr-core-item-mglr"
                                                                              style="width:100%; float: left; display: block;">
                                                                              <div class="gdlr-core-twitter-item-list">
                                                                                  <h4 class="gdlr-core-twitter-item-list-content">Shaking off the working week! What’s on the agenda for the weekend? by KonstantinKolosov via…
                                                                                      <a target="_blank"
                                                                                         href="https://t.co/fSyxq53H6P">https://t.co/fSyxq53H6P</a>
                                                                                  </h4>
                                                                                  <span class="gdlr-core-twitter-item-list-date gdlr-core-skin-caption">
                                                                                      <a class="gdlr-core-twitter-date"
                                                                                         href="http://twitter.com/Envato/statuses/1030582660324892674"
                                                                                         target="_blank"> 18 hours ago</a>
                                                                                  </span>
                                                                              </div>
                                                                          </li>
                                                                          <li class="gdlr-core-item-mglr"
                                                                                style="width:100%; float: left; display: block;">
                                                                                <div class="gdlr-core-twitter-item-list">
                                                                                    <h4 class="gdlr-core-twitter-item-list-content">
                                                                                      Kingster University was established by John Smith in 1920 for the public benefit and it is recognized.
                                                                                    </h4>
                                                                                    <span class="gdlr-core-twitter-item-list-date gdlr-core-skin-caption">
                                                                                        <a class="gdlr-core-twitter-date"
                                                                                           href="http://twitter.com/Envato/statuses/1030582660324892674"
                                                                                           target="_blank"> Yesterday</a>
                                                                                    </span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="gdlr-core-item-mglr"
                                                                                style="width:100%; float: left; display: block;">
                                                                                <div class="gdlr-core-twitter-item-list">
                                                                                    <h4 class="gdlr-core-twitter-item-list-content">
                                                                                      Our Chief People Officer @MRidsdale16 joined @benjaminlaw and @raejohnston on @tsushow to discuss all things Cultu…
                                                                                    </h4>
                                                                                    <span class="gdlr-core-twitter-item-list-date gdlr-core-skin-caption">
                                                                                        <a class="gdlr-core-twitter-date"
                                                                                           href="http://twitter.com/Envato/statuses/1030582660324892674"
                                                                                           target="_blank"> 2 months ago</a>
                                                                                    </span>
                                                                                </div>
                                                                            </li>
                                                                      </ul>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="gdlr-core-pbf-wrapper "  id="gdlr-core-wrapper-2">
                        <div class="gdlr-core-pbf-background-wrap">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_13" data-parallax-speed="0.8" style="">
                          
                          
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper " id="div_1dd7_44">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                
                                <div class="gdlr-core-pbf-column gdlr-core-column-40 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_45" data-sync-height="height-2">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-widget">
                                                    <div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr" id="div_1dd7_46">
                                                        <div class="gdlr-core-block-item-title-inner clearfix">
                                                            <h3 class="gdlr-core-block-item-title" id="h3_1dd7_10">News & Updates</h3>
                                                            <div class="gdlr-core-block-item-title-divider" id="div_1dd7_47"></div>
                                                        </div>
                                                        <a class="gdlr-core-block-item-read-more" href="#" target="_self" id="a_1dd7_5">Read All News</a>
                                                    </div>
                                                    <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                                        <div class="gdlr-core-item-list-wrap gdlr-core-column-30">
                                                            <div class="gdlr-core-item-list-inner gdlr-core-item-mglr">
                                                                <div class="gdlr-core-blog-grid ">
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <a href="#">
                                                                            <img src="upload/shutterstock_135948689-400x245.jpg" width="700" height="430" alt="" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-content-wrap">
                                                                        <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                                <a href="#">June 6, 2016</a>
                                                                            </span>
                                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-tag">
                                                                                <a href="#" rel="tag">Admission</a>
                                                                                <span class="gdlr-core-sep">,</span>
                                                                                <a href="#" rel="tag">Student</a>
                                                                            </span>
                                                                        </div>
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_1dd7_11">
                                                                            <a href="#" >Professor Albert joint research on mobile money in Tanzania</a>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-item-list-wrap gdlr-core-column-30">
                                                            <div class="gdlr-core-item-list gdlr-core-blog-widget gdlr-core-item-mglr clearfix gdlr-core-style-small">
                                                                <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                    <a href="#">
                                                                        <img src="upload/shutterstock_218235004-150x150.jpg" alt="" width="150" height="150" title="Student" />
                                                                    </a>
                                                                </div>
                                                                <div class="gdlr-core-blog-widget-content">
                                                                    <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                            <a href="#">June 6, 2016</a>
                                                                        </span>
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-tag">
                                                                            <a href="#" rel="tag">Hot</a>
                                                                            <span class="gdlr-core-sep">,</span>
                                                                            <a href="#" rel="tag">Updates</a>
                                                                        </span>
                                                                    </div>
                                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_1dd7_12">
                                                                        <a href="#" >A Global MBA for the next generation of business leaders</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <div class="gdlr-core-item-list gdlr-core-blog-widget gdlr-core-item-mglr clearfix gdlr-core-style-small">
                                                                <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                    <a href="#">
                                                                        <img src="upload/shutterstock_218235004-150x150.jpg" alt="" width="150" height="150" title="Student" />
                                                                    </a>
                                                                </div>
                                                                <div class="gdlr-core-blog-widget-content">
                                                                    <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                            <a href="#">June 6, 2016</a>
                                                                        </span>
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-tag">
                                                                            <a href="#" rel="tag">Admission</a>
                                                                            <span class="gdlr-core-sep">,</span>
                                                                            <a href="#" rel="tag">Event</a>
                                                                        </span>
                                                                    </div>
                                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_1dd7_13">
                                                                        <a href="#" >Professor Tom comments on voluntary recalls by snack brands</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <div class="gdlr-core-item-list gdlr-core-blog-widget gdlr-core-item-mglr clearfix gdlr-core-style-small">
                                                                <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                    <a href="#">
                                                                        <img src="upload/shutterstock_218235004-150x150.jpg" alt="" width="150" height="150" title="Student" />
                                                                    </a>
                                                                </div>
                                                                <div class="gdlr-core-blog-widget-content">
                                                                    <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                            <a href="#">June 6, 2016</a>
                                                                        </span>
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-tag">
                                                                            <a href="#" rel="tag">Article</a>
                                                                            <span class="gdlr-core-sep">,</span>
                                                                            <a href="#" rel="tag">Research</a>
                                                                        </span>
                                                                    </div>
                                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_1dd7_14">
                                                                        <a href="#" >Professor Alexa is interviewed about Twitter&#8217;s valuation</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 pb-2" id="gdlr-core-column-8">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js  gdlr-core-column-extend-right" id="div_1dd7_48" data-sync-height="height-2">
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_49" data-parallax-speed="0"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-event-item gdlr-core-item-pdb" id="div_1dd7_94">
                                                    <div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr" id="div_1dd7_95">
                                                        <div class="gdlr-core-block-item-title-inner clearfix">
                                                            <h3 class="gdlr-core-block-item-title" id="h3_1dd7_10">Upcoming Events</h3>
                                                        </div>
                                                    </div>
                                                    <div class="gdlr-core-event-item-holder clearfix">
                                                        <div class="gdlr-core-event-item-list gdlr-core-style-widget gdlr-core-item-pdlr  clearfix" id="div_1dd7_97">
                                                            <span class="gdlr-core-event-item-info gdlr-core-type-start-date-month">
                                                                <span class="gdlr-core-date" >07</span>
                                                                <span class="gdlr-core-month">Jan</span>
                                                            </span>
                                                            <div class="gdlr-core-event-item-content-wrap">
                                                                <h3 class="gdlr-core-event-item-title">
                                                                    <a href="#" >Reunion Event : Kingster’s Alumni Golf Tour</a>
                                                                </h3>
                                                                <div class="gdlr-core-event-item-info-wrap">
                                                                    <span class="gdlr-core-event-item-info gdlr-core-type-time">
                                                                        <span class="gdlr-core-head" >
                                                                            <i class="icon_clock_alt" ></i>
                                                                        </span>
                                                                        <span class="gdlr-core-tail">7:00 am - 11:30 pm</span>
                                                                    </span>
                                                                    <span class="gdlr-core-event-item-info gdlr-core-type-location">
                                                                        <span class="gdlr-core-head" >
                                                                            <i class="icon_pin_alt" ></i>
                                                                        </span>
                                                                        <span class="gdlr-core-tail">Kingster Grand Hall</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-event-item-list gdlr-core-style-widget gdlr-core-item-pdlr  clearfix" id="div_1dd7_98">
                                                            <span class="gdlr-core-event-item-info gdlr-core-type-start-date-month">
                                                                <span class="gdlr-core-date" >01</span>
                                                                <span class="gdlr-core-month">Jan</span>
                                                            </span>
                                                            <div class="gdlr-core-event-item-content-wrap">
                                                                <h3 class="gdlr-core-event-item-title">
                                                                    <a href="#" >Kingster’s Alumni Hot Air Ballon Trip in Turkey</a>
                                                                </h3>
                                                                <div class="gdlr-core-event-item-info-wrap">
                                                                    <span class="gdlr-core-event-item-info gdlr-core-type-time">
                                                                        <span class="gdlr-core-head" >
                                                                            <i class="icon_clock_alt" ></i>
                                                                        </span>
                                                                        <span class="gdlr-core-tail">10:00 am - 4:30 pm</span>
                                                                    </span>
                                                                    <span class="gdlr-core-event-item-info gdlr-core-type-location">
                                                                        <span class="gdlr-core-head" >
                                                                            <i class="icon_pin_alt" ></i>
                                                                        </span>
                                                                        <span class="gdlr-core-tail">Kingster Grand Hall</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-event-item-list gdlr-core-style-widget gdlr-core-item-pdlr  clearfix" id="div_1dd7_99">
                                                            <span class="gdlr-core-event-item-info gdlr-core-type-start-date-month">
                                                                <span class="gdlr-core-date" >17</span>
                                                                <span class="gdlr-core-month">Dec</span>
                                                            </span>
                                                            <div class="gdlr-core-event-item-content-wrap">
                                                                <h3 class="gdlr-core-event-item-title">
                                                                    <a href="#" >Fintech &#038; Key Investment Conference</a>
                                                                </h3>
                                                                <div class="gdlr-core-event-item-info-wrap">
                                                                    <span class="gdlr-core-event-item-info gdlr-core-type-time">
                                                                        <span class="gdlr-core-head" >
                                                                            <i class="icon_clock_alt" ></i>
                                                                        </span>
                                                                        <span class="gdlr-core-tail">1:00 pm - 5:00 pm</span>
                                                                    </span>
                                                                    <span class="gdlr-core-event-item-info gdlr-core-type-location">
                                                                        <span class="gdlr-core-head" >
                                                                            <i class="icon_pin_alt" ></i>
                                                                        </span>
                                                                        <span class="gdlr-core-tail">Kingster Grand Hall</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href="#" id="a_1dd7_7"><span class="gdlr-core-content" >View All Events</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" id="i_1dd7_2"  ></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    </div>
                
                    <div class="gdlr-core-pbf-wrapper " id="div_1dd7_21">
                        <div class="gdlr-core-pbf-background-wrap">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_22" data-parallax-speed="0.2"></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-left-align" id="div_1dd7_23">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" id="div_1dd7_24"><img src="upload/logo-white.png" alt="" width="262" height="35" title="logo-white" /></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" id="div_1dd7_25">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title principal_text " id="h3_1dd7_5">About Our University</h3></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-40">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" id="div_1dd7_26">
                                                   <div class="gdlr-core-text-box-item-content" id="div_1dd7_29">
                                                        <p class="principal_text">Kingster University was established by John Smith in 1920 for the public benefit and it is recognized globally. Throughout our great history, Kingster has offered access to a wide range of academic opportunities. As a world leader in higher education, the University has pioneered change in the sector.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" id="div_1dd7_28">
                                                    <div class="gdlr-core-text-box-item-content" id="div_1dd7_29">
                                                        <p class="principal_text">Kingster University was established by John Smith in 1920 for the public benefit and it is recognized globally. Throughout our great history, Kingster has offered access to a wide range of academic opportunities. As a world leader in higher education, the University has pioneered change in the sector.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href="#" id="gdlr-core-button-id-66813"><span class="gdlr-core-content principal_text"  >Read More</span><i class="gdlr-core-pos-right fa fa-long-arrow-right principal_text" id="i_1dd7_0"  ></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js mt-5">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-left-align" id="div_1dd7_23">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" id="div_1dd7_24"><img src="upload/logo-white.png" alt="" width="262" height="35" title="logo-white" /></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" id="div_1dd7_26">
                                                    <div class="gdlr-core-text-box-item-content" id="div_1dd7_27">
                                                       <img class="msg-img" src="images/photo_principal.JPG" alt="Photo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" id="div_1dd7_25">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title principal_text" id="h3_1dd7_5">Dr. P.T. Kulkarni</h3> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" id="div_1dd7_26">
                                                    <div class="gdlr-core-text-box-item-content principal_text" id="div_1dd7_27">
                                                       <p class="principal_text">Principal, PICT</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-40 mt-5 pt-3">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" id="div_1dd7_28">
                                                    <div class="gdlr-core-text-box-item-content" id="div_1dd7_29">
                                                        <p class="principal_text">Kingster University was established by John Smith in 1920 for the public benefit and it is recognized globally. Throughout our great history, Kingster has offered access to a wide range of academic opportunities. As a world leader in higher education, the University has pioneered change in the sector.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href="#" id="gdlr-core-button-id-66813"><span class="gdlr-core-content principal_text " >Read More</span><i class="principal_text gdlr-core-pos-right fa fa-long-arrow-right" id="i_1dd7_0"  ></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container" style="margin-left: 15rem">
                                <div class="gdlr-core-pbf-column gdlr-core-column-40 gdlr-core-column-first mt-5 pt-5 pr-5">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" id="div_1dd7_28">
                                                    <div class="gdlr-core-text-box-item-content" id="div_1dd7_29">
                                                        <p class="principal_text">Mr. Kothavale is a Technocrat and an Industrialist. He founded and promoted Rajkumar Forge Limited, a listed company at Bombay Stock Exchange in which he held the chair as the Managing Director until 2017. He is also an Educationist and Founder Trustee of Society for Computer Technology & Research, Pune which runs the famous Pune Institute of Computer Technology – PICT. PICT is now ranked No.8 in the country and is a well sought after Engineering College in the field of Computer Engineering, Information Technology and Electronics and Telecommunication.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href="#" id="gdlr-core-button-id-66813"><span class="gdlr-core-content principal_text" >Read More</span><i class="gdlr-core-pos-right fa fa-long-arrow-right principal_text" id="i_1dd7_0"  ></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 ">
                                    <div class=" gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-left-align" id="div_1dd7_23">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" id="div_1dd7_24"><img src="upload/logo-white.png" alt="" width="262" height="35" title="logo-white" /></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" id="div_1dd7_26">
                                                    <div class="gdlr-core-text-box-item-content" id="div_1dd7_27">
                                                       <img class="msg-img" src="images/photo_trustee.JPG" alt="Photo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" id="div_1dd7_25">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title principal_text " id="h3_1dd7_5">Mr. R S Kothavale</h3> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" id="div_1dd7_26">
                                                    <div class="gdlr-core-text-box-item-content" id="div_1dd7_27">
                                                       <p class="principal_text">Founder Trustee</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        
                    </div>
                
                  <!--div class="gdlr-core-pbf-wrapper " id="gdlr-core-wrapper-2">
                      <div class="gdlr-core-pbf-background-wrap">
                          <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_13"
                               data-parallax-speed="0.8"></div>
                      </div>
                      <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                          <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom">
                              <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                  <div class="msg">
                                      <img class="msg-bg" src="images/bg_msg.jpg" alt=""/>
                                      <img class="msg-img" src="images/photo_trustee.png" alt="Photo">
                                      <p class="msg-txt">"Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur."</p>
                                      <p class="msg-name">x</p>
                                      <p class="msg-position">Trustee,<br> Pune Institute of Computer Technology, Pune</p>
                                  </div>
                              </div>
                              <div class="gdlr-core-pbf-column gdlr-core-column-30" id="gdlr-core-column-4">
                                  <div class="msg">
                                      <img class="msg-bg" src="images/bg_msg.jpg" alt=""/>
                                      <img class="msg-img" src="images/photo_principal.jpg" alt="Photo">
                                      <p class="msg-txt">"Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur."</p>
                                      <p class="msg-name">Dr. P. T. Kulkarni</p>
                                      <p class="msg-position">Principal,<br> Pune Institute of Computer Technology, Pune</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div-->
                
                  <div class="gdlr-core-pbf-wrapper " id="div_1dd7_30" data-skin="Column Service">
                        <div class="gdlr-core-pbf-background-wrap" id="div_1dd7_31"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container" style="max-width: 100%">
                                <h2 class="text-center">University Toppers</h2>
                                <div class="uni_toppers_wrapper text-center">
                                  <div class="uni_toppers" style="">
                                      <div class="div1">
                                          <div class="col-sm-3" id="team">
                                              <div class="card" style="-webkit-box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15); box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15);">
                                                  <img class="card-img-top" src="images/sample_photo.png" alt="Card image cap" style="border-radius: 50%; width: 80%; margin: 5% 10%; box-shadow: 4px 4px 15px 0px rgba(1,1,1,1)">
                                                  <div class="card-body" style="padding: 1.25rem 0">
                                                      <div style="background: linear-gradient(to right, rgba(27, 41, 69, 1), rgba(27, 41, 69, 0.9), rgba(27, 41, 69, 0.8) , rgba(27, 41, 69, 0));padding: 5px 8px;margin: 5px 0; padding: 5px 8px; margin: 5px 0;"><h3 class="card-title" style="text-transform: uppercase; color: white; margin: 5px">Topper 1</h3></div>
                                                      <p class="card-text text-center text-dark" style="font-size: larger; font-weight: bold; margin: 1.25rem 10px 0px 10px">Firstname Lastname</p>
                                                  </div>
                                              </div>
                                          </div>


                                          <div class="col-sm-3">
                                              <div class="card" style="-webkit-box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15); box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15);">
                                                  <img class="card-img-top" src="images/sample_photo.png" alt="Card image cap" style="border-radius: 50%; width: 80%; margin: 5% 10%; box-shadow: 4px 4px 15px 0px rgba(1,1,1,1)">
                                                  <div class="card-body" style="padding: 1.25rem 0">
                                                      <div style="background: linear-gradient(to right, rgba(27, 41, 69, 1), rgba(27, 41, 69, 0.9), rgba(27, 41, 69, 0.8) , rgba(27, 41, 69, 0));padding: 5px 8px;margin: 5px 0; padding: 5px 8px; margin: 5px 0;"><h3 class="card-title" style="text-transform: uppercase; color: white; margin: 5px">Topper 2</h3></div>
                                                      <p class="card-text text-center text-dark" style="font-size: larger; font-weight: bold; margin: 1.25rem 10px 0px 10px">Firstname Lastname</p>
                                                  </div>
                                              </div>
                                          </div>


                                          <div class="col-sm-3">
                                              <div class="card" style="-webkit-box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15); box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15);">
                                                  <img class="card-img-top" src="images/sample_photo.png" alt="Card image cap" style="border-radius: 50%; width: 80%; margin: 5% 10%; box-shadow: 4px 4px 15px 0px rgba(1,1,1,1)">
                                                  <div class="card-body" style="padding: 1.25rem 0">
                                                      <div style="background: linear-gradient(to right, rgba(27, 41, 69, 1), rgba(27, 41, 69, 0.9), rgba(27, 41, 69, 0.8) , rgba(27, 41, 69, 0));padding: 5px 8px;margin: 5px 0; padding: 5px 8px; margin: 5px 0;"><h3 class="card-title" style="text-transform: uppercase; color: white; margin: 5px">Topper 3</h3></div>
                                                      <p class="card-text text-center text-dark" style="font-size: larger; font-weight: bold; margin: 1.25rem 10px 0px 10px">Firstname Lastname</p>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="col-sm-3">
                                              <div class="card" style="-webkit-box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15); box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15);">
                                                  <img class="card-img-top" src="images/sample_photo.png" alt="Card image cap" style="border-radius: 50%; width: 80%; margin: 5% 10%; box-shadow: 4px 4px 15px 0px rgba(1,1,1,1)">
                                                  <div class="card-body" style="padding: 1.25rem 0">
                                                      <div style="background: linear-gradient(to right, rgba(27, 41, 69, 1), rgba(27, 41, 69, 0.9), rgba(27, 41, 69, 0.8) , rgba(27, 41, 69, 0));padding: 5px 8px;margin: 5px 0; padding: 5px 8px; margin: 5px 0;"><h3 class="card-title" style="text-transform: uppercase; color: white; margin: 5px">Topper 4</h3></div>
                                                      <p class="card-text text-center text-dark" style="font-size: larger; font-weight: bold; margin: 1.25rem 10px 0px 10px">Firstname Lastname</p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- This div is intentionally kept empty (content added using js) --><div class="div2"></div>
                                  </div>



                                  <script type="text/javascript">

                                      function pause(){
                                          $(".div1").attr("style", "animation-play-state: paused;");
                                          $(".div2").attr("style", "animation-play-state: paused;");
                                      }

                                      $('.div2').html($('.div1').html());

                                      function play(){
                                          $(".div1").attr("style", "");
                                          $(".div2").attr("style", "");
                                      }

                                      $(".div1").hover(pause, play);
                                      $(".div2").hover(pause, play);
                                  </script>
                                </div>
                            </div>
                        </div>
                  </div>
                
                  <div class="gdlr-core-pbf-wrapper " id="div_1dd7_44">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                
                                
                                
                                
                                
                            </div>
                        </div>
                    </div>

                 

                 
              
              <div class="gdlr-core-pbf-wrapper ">
                        
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #f5f5f5 ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <center><h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 40px ;font-weight: 700 ;">Contact Us</h3></center>
                                <div class="gdlr-core-pbf-column gdlr-core-column-40 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 32px ;font-weight: 700 ;">Leave us a message</h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 35px ;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;text-transform: none ;">
                                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                                    <div role="form" class="wpcf7" id="wpcf7-f1979-p1977-o1" lang="en-US" dir="ltr">
                                                        <div class="screen-reader-response"></div>
                                                        <form class="quform" action="plugins/quform/process.php" method="post" enctype="multipart/form-data" onclick="">

                                                            <div class="quform-elements">
                                                                <div class="quform-element">
                                                                    <p>Your Name (required)
                                                                        <br>
                                                                        <span class="wpcf7-form-control-wrap your-name">
                                                                            <input id="name" type="text" name="name" size="40" class="input1" aria-required="true" aria-invalid="false">
                                                                        </span> 
                                                                    </p>
                                                                </div>
                                                                <div class="quform-element">
                                                                    <p>Your Email (required)
                                                                        <br>
                                                                        <span class="wpcf7-form-control-wrap your-email">
                                                                            <input id="email" type="text" name="email" size="40" class="input1" aria-required="true" aria-invalid="false">
                                                                        </span> 
                                                                    </p>
                                                                </div>
                                                                <div class="quform-element">
                                                                    <p>Your Message
                                                                        <br>
                                                                        <span class="wpcf7-form-control-wrap your-message">
                                                                            <textarea  id="message" name="message" cols="40" rows="10" class="input1" aria-invalid="false"></textarea>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <p>
                                                                    <!-- Begin Submit button -->
                                                                    <div class="quform-submit">
                                                                        <div class="quform-submit-inner">
                                                                            <button type="submit" class="submit-button"><span>Send</span></button>
                                                                        </div>
                                                                        <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                                                    </div>
                                                                </p>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 28px ;font-weight: 700 ;">Location</h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                                        <p>4 apt. Flawing Street. The Grand Avenue.
                                                            <br />Liverpool, UK 33342</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix ">
                                                    <ul>
                                                        <li class=" gdlr-core-skin-divider gdlr-core-with-hover"><span class="gdlr-core-icon-list-icon-wrap"><i class="gdlr-core-icon-list-icon-hover fa fa-envelope-o" style="font-size: 16px ;"  ></i><i class="gdlr-core-icon-list-icon fa fa-envelope-o" style="font-size: 16px ;width: 16px ;" ></i></span>
                                                            <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 16px ;">contact@infinitewptheme.com</span></div>
                                                        </li>
                                                        <li class=" gdlr-core-skin-divider gdlr-core-with-hover"><span class="gdlr-core-icon-list-icon-wrap"><i class="gdlr-core-icon-list-icon-hover fa fa-phone" style="font-size: 16px ;"  ></i><i class="gdlr-core-icon-list-icon fa fa-phone" style="font-size: 16px ;width: 16px ;" ></i></span>
                                                            <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 16px ;">+1-3524-3356</span></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 28px ;font-weight: 700 ;">Map</h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-wp-google-map-plugin-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">
                                                    <div style="overflow:hidden;width: 100%;position: relative;">
                                                        
                                                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.5760775413232!2d73.84864491439687!3d18.457547175917043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2eac85230ba47%3A0x871eddd0a8a0a108!2sPune+Institute+of+Computer+Technology!5e0!3m2!1sen!2sin!4v1557343930714!5m2!1sen!2sin"
                                          width="600" height="450" frameborder="0" style="border:0"
                                          allowfullscreen></iframe>
                                                        <div style="position: absolute;width: 80%;bottom: 20px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;">

                                                        </div>
                                                        <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
          </div>
        </div>
      </div>
  </div>
  <br><br>
  <footer>
      <div class="kingster-footer-wrapper ">
          <div class="kingster-footer-container kingster-container clearfix">
              <div class="kingster-footer-column kingster-item-pdlr kingster-column-15 pr-5">
                  <div id="text-2" class="widget widget_text kingster-widget">
                      <div class="textwidget">
                          <p><img src="images/logo.png" alt=""/>
                              <br/> <span class="gdlr-core-space-shortcode" id="span_1dd7_10"></span>
                              <br/> Box 35300
                              <br/> 1810 Campus Way NE</p>
                          <p><span id="span_1dd7_11">+1-2534-4456-345</span>
                              <br/> <span class="gdlr-core-space-shortcode" id="span_1dd7_12"></span>
                              <br/> <a id="a_1dd7_8" href="mailto:admin@kingsteruni.edu">webmaster@pict.edu</a></p>
                          <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-left-align">
                              <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_1dd7_111"></div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                  <div id="gdlr-core-custom-menu-widget-2"
                       class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                      <h3 class="kingster-widget-title">Our Campus</h3><span class="clear"></span>
                      <div class="menu-our-campus-container">
                          <ul id="menu-our-campus" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                              <li class="menu-item"><a href="#">Acedemic</a></li>
                              <li class="menu-item"><a href="#">Planning &#038; Administration</a></li>
                              <li class="menu-item"><a href="#">Campus Safety</a></li>
                              <li class="menu-item"><a href="#">Office of the Chancellor</a></li>
                              <li class="menu-item"><a href="#">Facility Services</a></li>
                              <li class="menu-item"><a href="#">Human Resources</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                  <div id="gdlr-core-custom-menu-widget-3"
                       class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                      <h3 class="kingster-widget-title">Campus Life</h3><span class="clear"></span>
                      <div class="menu-campus-life-container">
                          <ul id="menu-campus-life" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                              <li class="menu-item"><a href="#">Accessibility</a></li>
                              <li class="menu-item"><a href="#">Financial Aid</a></li>
                              <li class="menu-item"><a href="#">Food Services</a></li>
                              <li class="menu-item"><a href="#">Housing</a></li>
                              <li class="menu-item"><a href="#">Information Technologies</a></li>
                              <li class="menu-item"><a href="#">Student Life</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                  <div id="gdlr-core-custom-menu-widget-4"
                       class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                      <h3 class="kingster-widget-title">Academics</h3><span class="clear"></span>
                      <div class="menu-academics-container">
                          <ul id="menu-academics" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                              <li class="menu-item"><a href="#">Canvas</a></li>
                              <li class="menu-item"><a href="#">Catalyst</a></li>
                              <li class="menu-item"><a href="#">Library</a></li>
                              <li class="menu-item"><a href="#">Time Schedule</a></li>
                              <li class="menu-item"><a href="#">Apply For Admissions</a></li>
                              <li class="menu-item"><a href="#">Pay My Tuition</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="kingster-copyright-wrapper">
          <div class="kingster-copyright-container kingster-container clearfix">
              <div class="kingster-copyright-left kingster-item-pdlr">Copyright All Right Reserved 2019, Max Themes</div>
              <div class="kingster-copyright-right kingster-item-pdlr">
                  <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" id="div_1dd7_112">
                      <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="facebook">
                          <i class="fa fa-facebook"></i>
                      </a>
                      <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="google-plus">
                          <i class="fa fa-google-plus"></i>
                      </a>
                      <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="linkedin">
                          <i class="fa fa-linkedin"></i>
                      </a>
                      <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="skype">
                          <i class="fa fa-skype"></i>
                      </a>
                      <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="twitter">
                          <i class="fa fa-twitter"></i>
                      </a>
                      <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="instagram">
                          <i class="fa fa-instagram"></i>
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </footer>


<script type='text/javascript' src='js/jquery/jquery.js'></script>
<script type='text/javascript' src='js/jquery/jquery-migrate.min.js'></script>
<script type='text/javascript' src='plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
<script type='text/javascript' src='plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
<script type="text/javascript"
        src="plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript"
        src="plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript"
        src="plugins/revslider/public/assets/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript"
        src="plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript"
        src="plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript"
        src="plugins/revslider/public/assets/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript"
        src="plugins/revslider/public/assets/js/extensions/revolution.extension.video.min.js"></script>

<script type="text/javascript">
    /*<![CDATA[*/
    function setREVStartSize(e) {
        try {
            e.c = jQuery(e.c);
            var i = jQuery(window).width(),
                t = 9999,
                r = 0,
                n = 0,
                l = 0,
                f = 0,
                s = 0,
                h = 0;
            if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
                f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
            }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                var u = (e.c.width(), jQuery(window).height());
                if (void 0 != e.fullScreenOffsetContainer) {
                    var c = e.fullScreenOffsetContainer.split(",");
                    if (c) jQuery.each(c, function (e, i) {
                        u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                    }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                }
                f = u
            } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
            e.c.closest(".rev_slider_wrapper").css({
                height: f
            })
        } catch (d) {
            console.log("Failure at Presize of Slider:" + d)
        }
    }; /*]]>*/
</script>
<script>
    (function (body) {
        'use strict';
        body.className = body.className.replace(/\btribe-no-js\b/, 'tribe-js');
    })(document.body);
</script>
<script>
    var tribe_l10n_datatables = {
        "aria": {
            "sort_ascending": ": activate to sort column ascending",
            "sort_descending": ": activate to sort column descending"
        },
        "length_menu": "Show _MENU_ entries",
        "empty_table": "No data available in table",
        "info": "Showing _START_ to _END_ of _TOTAL_ entries",
        "info_empty": "Showing 0 to 0 of 0 entries",
        "info_filtered": "(filtered from _MAX_ total entries)",
        "zero_records": "No matching records found",
        "search": "Search:",
        "all_selected_text": "All items on this page were selected. ",
        "select_all_link": "Select all pages",
        "clear_selection": "Clear Selection.",
        "pagination": {
            "all": "All",
            "next": "Next",
            "previous": "Previous"
        },
        "select": {
            "rows": {
                "0": "",
                "_": ": Selected %d rows",
                "1": ": Selected 1 row"
            }
        },
        "datepicker": {
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
            "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            "monthNamesShort": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            "monthNamesMin": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            "nextText": "Next",
            "prevText": "Prev",
            "currentText": "Today",
            "closeText": "Done",
            "today": "Today",
            "clear": "Clear"
        }
    };
    var tribe_system_info = {
        "sysinfo_optin_nonce": "a32c675aaa",
        "clipboard_btn_text": "Copy to clipboard",
        "clipboard_copied_text": "System info copied",
        "clipboard_fail_text": "Press \"Cmd + C\" to copy"
    };
</script>

<script type="text/javascript">
    /*<![CDATA[*/
    function revslider_showDoubleJqueryError(sliderID) {
        var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
        errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
        errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
        errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
        jQuery(sliderID).show().html(errorMessage);
    } /*]]>*/
</script>

<script type='text/javascript' src='plugins/goodlayers-core/plugins/combine/script.js'></script>
<script type='text/javascript'>
    var gdlr_core_pbf = {
        "admin": "",
        "video": {
            "width": "640",
            "height": "360"
        },
        "ajax_url": "https:\/\/demo.goodlayers.com\/kingster\/wp-admin\/admin-ajax.php"
    };
</script>
<script type='text/javascript' src='plugins/goodlayers-core/include/js/page-builder.js'></script>


<script type='text/javascript' src='js/jquery/ui/effect.min.js'></script>
<script type='text/javascript'>
    var kingster_script_core = {
        "home_url": "https:\/\/demo.goodlayers.com\/kingster\/"
    };
</script>
<script type='text/javascript' src='js/plugins.min.js'></script>
<script>
    /*<![CDATA[*/
    var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
    var htmlDivCss = "";
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement("div");
        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
        document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
    } /*]]>*/
</script>
<script type="text/javascript">
    /*<![CDATA[*/
    if (setREVStartSize !== undefined) setREVStartSize({
        c: '#rev_slider_1_1',
        gridwidth: [1380],
        gridheight: [713],
        sliderLayout: 'auto'
    });
    var revapi1, tpj;
    (function () {
        if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad);
        else onLoad();

        function onLoad() {
            if (tpj === undefined) {
                tpj = jQuery;
                if ("off" == "on") tpj.noConflict();
            }
            if (tpj("#rev_slider_1_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_1");
            } else {
                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "//demo.goodlayers.com/kingster/wp-content/plugins/revslider/public/assets/js/",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            touchOnDesktop: "off",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 1500,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            }
                        },
                        bullets: {
                            enable: true,
                            hide_onmobile: false,
                            hide_over: 1499,
                            style: "uranus",
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 30,
                            space: 7,
                            tmp: '<span class="tp-bullet-inner"></span>'
                        }
                    },
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1380,
                    gridheight: 713,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
            ;
        };
    }()); /*]]>*/
</script>
<script>
    /*<![CDATA[*/
    var htmlDivCss = unescape("%23rev_slider_1_1%20.uranus.tparrows%20%7B%0A%20%20width%3A50px%3B%0A%20%20height%3A50px%3B%0A%20%20background%3Argba%28255%2C255%2C255%2C0%29%3B%0A%20%7D%0A%20%23rev_slider_1_1%20.uranus.tparrows%3Abefore%20%7B%0A%20width%3A50px%3B%0A%20height%3A50px%3B%0A%20line-height%3A50px%3B%0A%20font-size%3A40px%3B%0A%20transition%3Aall%200.3s%3B%0A-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%20%20%23rev_slider_1_1%20.uranus.tparrows%3Ahover%3Abefore%20%7B%0A%20%20%20%20opacity%3A0.75%3B%0A%20%20%7D%0A%23rev_slider_1_1%20.uranus%20.tp-bullet%7B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20box-shadow%3A%200%200%200%202px%20rgba%28255%2C%20255%2C%20255%2C%200%29%3B%0A%20%20-webkit-transition%3A%20box-shadow%200.3s%20ease%3B%0A%20%20transition%3A%20box-shadow%200.3s%20ease%3B%0A%20%20background%3Atransparent%3B%0A%20%20width%3A15px%3B%0A%20%20height%3A15px%3B%0A%7D%0A%23rev_slider_1_1%20.uranus%20.tp-bullet.selected%2C%0A%23rev_slider_1_1%20.uranus%20.tp-bullet%3Ahover%20%7B%0A%20%20box-shadow%3A%200%200%200%202px%20rgba%28255%2C%20255%2C%20255%2C1%29%3B%0A%20%20border%3Anone%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background%3Atransparent%3B%0A%7D%0A%0A%23rev_slider_1_1%20.uranus%20.tp-bullet-inner%20%7B%0A%20%20-webkit-transition%3A%20background-color%200.3s%20ease%2C%20-webkit-transform%200.3s%20ease%3B%0A%20%20transition%3A%20background-color%200.3s%20ease%2C%20transform%200.3s%20ease%3B%0A%20%20top%3A%200%3B%0A%20%20left%3A%200%3B%0A%20%20width%3A%20100%25%3B%0A%20%20height%3A%20100%25%3B%0A%20%20outline%3A%20none%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%0A%20%20background-color%3A%20rgba%28255%2C%20255%2C%20255%2C%200.3%29%3B%0A%20%20text-indent%3A%20-999em%3B%0A%20%20cursor%3A%20pointer%3B%0A%20%20position%3A%20absolute%3B%0A%7D%0A%0A%23rev_slider_1_1%20.uranus%20.tp-bullet.selected%20.tp-bullet-inner%2C%0A%23rev_slider_1_1%20.uranus%20.tp-bullet%3Ahover%20.tp-bullet-inner%7B%0A%20transform%3A%20scale%280.4%29%3B%0A%20-webkit-transform%3A%20scale%280.4%29%3B%0A%20background-color%3Argb%28255%2C%20255%2C%20255%29%3B%0A%7D%0A");
    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement('div');
        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
    } /*]]>*/
</script>
</body>
</html>

