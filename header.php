



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
       
        <?php wp_head(); ?>
       
</head>

<body>



<?php 


wp_nav_menu(
    array(
      'menu' => 'primary',
      'link_before' => '<span class="screen-reader-text">',
      'link_after' => '</span>',
    )
  );

?>


    <!-- ===============top mobile header========== -->
    <div class="okam-ad-position-wrap home-top-header-mb okam-device-mobile" data-alias="home-top-header-mb"
        data-device-type="mobile">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 col-md-12 mobile_wrap">
                     <!-- <a href=""><img src="<?php echo get_template_directory_uri();?>/images/Mitsubishi-1230x100-F02.gif" alt="gif"></a>  -->
                </div>
            </div>
        </div>
    </div>
    <!-- =================top mobile navbar =============== -->
    <header id="masthead" class="site-header mobile-site-header">
        <div class="ok-user-activity flx">



            <span class="ok-login-trigger">
                <i class="far fa-user"></i>
            </span>
            <div class="ok-login-condition"></div>

            <div class="ok-logo-wrap">
                <a href="">
                    <img src="<?php echo get_template_directory_uri();?>/images/ok-logo-main.png" class="ol_logo_for_mobile" alt="Onlinekhabar">
                </a>
                <div class="ok-current-time ok18-date-holder" data-today>
                    <p class="date">
                        <span id="Date"><?php echo do_shortcode('[ndu_today_date]');?></span>
                    </p>
                </div>
            </div>
            <span class="ok-push-menu-trigger" onclick="OpenRightSiderbar()" id="menu" class="sideMenuBars">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </div>
    </header>

    <!-- ===========================top left logo and right  ads section start =================== -->
    <div class="left_side_top_logo container-fluid mt-3">
        <div class="row  mx-4">
            <div class="col-lg-3 col-md-3 col-3 logo">
                <div class="main_logo_date_wrapper">
                    <img src="<?php echo get_template_directory_uri();?>/images/ok-logo-main.png" alt="logo" class="ok_logo">
                    <p class="date">
                        <span id="Date"><?php echo do_shortcode('[ndu_today_date]');?></span>
                        <!-- २ कात्तिक २०८०, मंगलबार -->
                    </p>
                </div>
            </div>
            <div class="topAdGif logo col-lg-7 col-md-7 col">
                <a href=""><img src="<?php echo get_template_directory_uri();?>/images/Mitsubishi-1230x100-F02.gif" alt="gif"></a>
            </div>
        </div>

    </div>
    <!-- ===========================top left logo and right ads section end =================== -->


    <!-- =========================navbar section start================================= -->
    <section class="sticky_top">

        <div class="container-fluid navbar  sticky-nav ">
            <div class="row ">
                <div class="col flex-container">
                    <div class="ok-current-time ok18-date-holder" data-today>
                        <!-- <p class="date">
                                <span id="Date">२ कात्तिक २०८०, मंगलबार</span>
                            </p> -->
                    </div>
                    <div class="logo-sticky">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri();?>/images/ok-icon.png"></a>
                    </div>
                    <div class="list_items">
                        <ul class="list1 mb-0">
                            <li><a href="<?php echo site_url(''); ?>">होमपेज</a></li>
                            <li><a href="<?php echo site_url('/blog'); ?>">समाचार</a></li>
                            <li><a href="<?php echo site_url('/projects'); ?>">विजनेश</a></li>
                            <li><a href="<?php echo site_url('/about'); ?>">जीवनशैली</a></li>
                            <li><a href="">मनोरन्जन</a></li>
                            <li><a href="">विचार</a></li>
                            <li><a href="">प्रवास</a></li>
                            <li><a href="">खेलकुद</a></li>
                            <li><a href="">अन्य</a></li>
                            <li><a href="" class="english_button">English</a></li>
                            <li><a href="" class="election_button">चुनाव २०७९</a></li>
                        </ul>
                    </div>


                    <div class="ok-user-activity" id="hidden_div">
                        <div class="ok-icon-latest latest-trigger">
                            <svg version="1.1" id="Capa_1" xmlns="<?php echo get_template_directory_uri();?>/http://www.w3.org/2000/svg"
                                xmlns:xlink="<?php echo get_template_directory_uri();?>/http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <path d="M443.4,248.8c-6.4,0-11.7,5.2-11.7,11.7c0,96.9-78.8,175.7-175.7,175.7c-96.9,0-175.7-78.8-175.7-175.7
                        S159.1,84.8,256,84.8c29.5,0,58.3,7.3,83.9,21.3l-14.6,14.6c-3.3,3.3-4.3,8.4-2.5,12.7c1.8,4.4,6.1,7.2,10.8,7.2h55.8
                        c6.4,0,11.7-5.2,11.7-11.7V73.1c0-4.7-2.8-9-7.2-10.8c-4.4-1.8-9.4-0.8-12.7,2.5L357,89c-30.5-18-65.3-27.5-101-27.5
                        c-53.2,0-103.1,20.7-140.7,58.3C77.7,157.3,57,207.3,57,260.5s20.7,103.1,58.3,140.7c37.6,37.6,87.6,58.3,140.7,58.3
                        c53.2,0,103.1-20.7,140.7-58.3c37.6-37.6,58.3-87.6,58.3-140.7C455,254,449.8,248.8,443.4,248.8z"
                                        fill="white" />
                                    <path d="M236.1,262c0,0.2,0,0.3,0,0.5c0,0.3,0.1,0.6,0.1,0.9c0,0.1,0,0.2,0.1,0.3c0.1,0.3,0.2,0.7,0.3,1c0,0,0,0.1,0,0.1
                        c0.8,2.5,2.3,4.8,4.6,6.5l79.9,60.1c5.7,4.3,13.9,3.2,18.2-2.6c4.3-5.7,3.2-13.9-2.6-18.2L262,254.5V161c0-7.2-5.8-13-13-13
                        c-7.2,0-13,5.8-13,13v100c0,0.1,0,0.2,0,0.3C236,261.5,236,261.8,236.1,262z" fill="white" />
                                </g>
                            </svg>
                        </div>
                        <div class="ok-icon-trending trending-trigger">
                            <svg version="1.1" id="_x31__px" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <path
                                    d="M499.6,127.1H400c-6.9,0-12.4,5.6-12.4,12.4S393.2,152,400,152h69.5l-169,169l-90.7-90.7c-4.2-4.1-10.6-4.8-15.5-1.7
                    L5.7,390.6C0,394.3-1.7,402,1.9,407.8c2.4,3.7,6.4,5.7,10.5,5.7c2.3,0,4.6-0.6,6.7-1.9l180-156.7l92.5,92.5c4.9,4.9,12.7,4.9,17.6,0
                    l177.9-177.9v69.5c0,6.9,5.6,12.4,12.4,12.4c6.9,0,12.4-5.6,12.4-12.4v-99.5C512,132.7,506.4,127.1,499.6,127.1z"
                                    fill="white" />
                            </svg>
                        </div>
                        <span class="ok-login-trigger">
                            <i class="far fa-user"></i>
                        </span>
                        <div class="ok-login-condition"></div>
                        <span class="ok-push-menu-trigger" onclick="OpenRightSiderbar()" id="menu" class="sideMenuBars">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===================Side bar menu started=============== -->
        <div class="my-sidebar" id="sdbr">
            <div id="main-wrap">
                <div class="wrapper" id="Cross123">
                    <!-- <img src="images/logoMainWht.png" alt="logo" height="100px"> -->


                    <div id="close-sidebar" onclick="closeSidebar()">
                        <i class="fa-solid fa-xmark" style="color: #0045bd;"></i>
                    </div>
                </div>

                <ul class="sidebar-list">
                    <li><img src="<?php echo get_template_directory_uri();?>/images/home.png" alt=""></i>&ensp;<a href="">होमपेज</a></li>
                    <li><img src="<?php echo get_template_directory_uri();?>/images/news.png" alt="">&ensp;<a href="">समाचार</a></li>
                    <li><img src="<?php echo get_template_directory_uri();?>/images/business.png" alt="">&ensp;<a href="">विजनेश</a></li>
                    <li><img src="<?php echo get_template_directory_uri();?>/images/lifestyle.png" alt="">&ensp;<a href="">जीवनशैली</a></li>
                    <li><img src="<?php echo get_template_directory_uri();?>/images/information and communication.png" alt="">&ensp;<a href="">सूचना प्रविधि</a>
                    </li>
                    <li><img src="<?php echo get_template_directory_uri();?>/images/entertainment.png" alt="">&ensp;<a href="">मनोरन्जन</a></li>
                    <li><img src="<?php echo get_template_directory_uri();?>/images/horscopes.png" alt="">&ensp;<a href="">राशिफल</a></li>
                    <li><img src="<?php echo get_template_directory_uri();?>/images/sports.png" alt=""></i>&ensp;<a href="">खेलकुद</a></li>
                </ul>

                <div class="ok-en-edtn">
                    <a href="https://election.onlinekhabar.com" target="_blank" class="el-edition"
                        style="margin: 0 0 10px 0;display: block;line-height: 26px;">चुनाव २०७९</a>
                    <a href="https://english.onlinekhabar.com" target="_blank"> <span>English</span>
                        <span>edition</span> </a>
                </div>
            </div>
        </div>


        </div>



    </section>
    <!-- =========================navbar section end================================= -->



    


    <!-- ========================Trending Section Starts================== -->
    <section class="trending_section">
        <div class="container-fluid trend">
            <div class="row">
                <div class="col-lg-9">
                    <!-- <ul> -->
                        <!-- <li class="main-trend">   
                                       <span class="bg1">TRENDING</span>
                            </li> -->
                            
                         
                        <!-- <li> <span class="hash">#</span> <span> <a href=""> मकवानपुर </a> </span> </li>
                        <li> <span class="hash">#</span> <span> <a href=""> श्रीलंका</a> </span> </li>
                        <li> <span class="hash">#</span> <span> <a href=""> अपराध </a> </span> </li>
                        <li> <span class="hash">#</span> <span> <a href=""> इंग्ल्याण्ड</a> </span> </li>
                        <li> <span class="hash">#</span> <span> <a href=""> प्रधानमन्त्री </a> </span> </li>
                        <li> <span class="hash">#</span> <span> <a href=""> नेपाल यु-१९ क्रिकेट </a> </span> </li>
                    </ul> -->
                    <aside id="sidebar">
                    <?php dynamic_sidebar('main_sidebar'); ?>  
               </aside>
               
                </div>
                <div class="col-lg-3">
                    <?php get_search_form();?>
            </div>
            </div>
        </div>
      
    </section>
    <!-- ======================== Trending Section ends================== -->
<?php 

if(!is_front_page()){ ?>
<main>
<?php }?>

<!-- <aside class="project_sidebar">
<?php dynamic_sidebar('projects_widget') ;?>


            </aside>  -->