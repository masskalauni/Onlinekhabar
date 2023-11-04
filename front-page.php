<?php //echo get_template_directory_uri();
 //bloginfo('template_directory');
 //bloginfo('template_directory');
?>


<?php get_header(); ?>



<?php 

while(have_posts()){
    the_post();
}
?>

<!-- <?php
$projects=new WP_Query($args);
  while($projects->have_posts()){
    $projects->the_post();

}

?> -->



<!-- ========= =========Advertisement below trnding starts ========= -->
<section>
    <div class="long_ads container-fluid">
        <div class="row">
            <div class="col desktop_size_ads1">
                <a href=""><img
                        src="<?php echo get_template_directory_uri();?>/images/nerolac02-1140-100-–-motion_Gehya1lYgW.webp">
                </a>
            </div>

        </div>
    </div>
</section>
<!-- ===============================Advertisemetn below trending ends  -->






<!-- ================================HOT NEWS SECTION STARTS============================ -->


<!-- ======================================1st hot news start================================ -->



<section class="ok-bises ok-bises-type-2">
    <?php 
   $args=array(
    'post_type' => 'post', // Adjust to your post type if necessary
    'posts_per_page' => 2,
  );
  $blogposts=new WP_Query($args);
  while($blogposts->have_posts()){
    $blogposts->the_post();
    ?>
    <div class="ok-container">
        <h2>
            <a href="<?php the_permalink();?>">
                <?php the_title();?>
            </a>
        </h2>
        <div class="ok-title-info flx">
            <div class="ok-news-author-wrap ">
                <div class="ok-news-author">
                    <span class="author-icon">
                        <img src="<?php echo get_template_directory_uri();?>/images/ok-icon.png" alt="अनलाइनखबर">
                    </span>
                    <span class="author-name">
                        <?php the_author();?>
                    </span>
                </div>
            </div>
            <div class="ok-news-post-hour">
                <i class="far fa-clock"></i>
                <span>
                    <?php echo display_post_time(get_the_ID()); ?>
                </span>
            </div>
            <div class="ok-news-comment">
                <i class="fa-regular fa-comment" style="color: #0c0d0d;"></i>
                <span>19.5K</span>
            </div>
        </div>
        <div class="ok-bises-feauted-img">
            <a href="<?php the_permalink();?>">
                <?php if (has_post_thumbnail()) : ?>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image Description">
                <?php endif; ?>
            </a>
        </div>
        <p>
            <?php echo wp_trim_words(get_the_content(), 30, '........'); ?>
        </p>
    </div>
    <?php 
    }wp_reset_query();?>

</section>





               




<!-- ======================================1st hot news ends================================ -->


<!-- ==================full length ads section================ -->
<section>
    <div class="long_ads container">
        <div class="row">
            <div class="col desktop_size_ads2">
                <a href=""><img src="<?php echo get_template_directory_uri();?>/images/ads13.png"> </a>
            </div>

        </div>
    </div>
</section>
<!-- ==================full length ads section================ -->


<!-- =======================second hot news start=============== -->

<!-- =======================second hot news ends=============== -->



<!-- ==================full length ads section================ -->
<section>
    <div class="long_ads container">
        <div class="row">
            <div class="col desktop_size_ads2">
                <a href=""><img src="<?php echo get_template_directory_uri();?>/images/ads145.gif"> </a>
            </div>

        </div>
    </div>
</section>
<!-- ==================full length ads section================ -->




<!-- ===========three columns recent hot new section start=================== -->



<section class="SectionTopBottomMargin ">
    <div class="container-fluid px-5 pt-5 ">
        <div class="row">
            <?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 1,
);

$blogposts = get_posts($args);

foreach ($blogposts as $post) {
    setup_postdata($post);
    ?>
            <div class="abv-img col-lg-4 col-md-6 col-12 ">
                <div class="img">
                    <a href="<?php the_permalink();?>">
                        <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image Description">
                        <?php endif; ?>
                    </a>
                </div>
                <div class="image-text">
                    <h3><a href="">
                            <?php the_title(); ?>
                        </a></h3>
                    <div class="wrapped">
                        <div class="comment d-inline">
                            <i class="far fa-clock"></i> <span class=" pb-5"
                                style="font-size:15px;font-family: mukta;font-weight:bold;">
                                <?php echo display_post_time(get_the_ID()); ?>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
            <?php
}
wp_reset_postdata();
?>
            <div class="top-four-news col-lg-5 col-md-6 col-12 ">
                <?php 
          $args=array(
           'post_Type'=>'post',
           'post_per_page'=>3,
            );
              $blogposts=new WP_Query($args);
               while($blogposts->have_posts()){
               $blogposts->the_post();
         ?>
                <div class="newNews" id="newNews1">

                    <div class="four-images">
                        <a href="<?php the_permalink();?>">
                            <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image Description">
                            <?php endif; ?>
                        </a>
                    </div>

                    <div class="four-text">
                        <p class="txt1"><a href="<?php the_permalink();?>">
                                <?php the_title(); ?>
                            </a></p>
                        <p class="txt2"><i class="far fa-clock" id="tclock"></i><span id="tTime">&ensp;
                                <?php echo display_post_time(get_the_ID()); ?>
                            </span></p>
                    </div>

                </div>
                <?php 
    }wp_reset_query();?>

                <div class="24_hour_update">
                    <a href="" class="ok-btn-quick update-24">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <path
                                    d="M443.4,248.8c-6.4,0-11.7,5.2-11.7,11.7c0,96.9-78.8,175.7-175.7,175.7c-96.9,0-175.7-78.8-175.7-175.7
                                S159.1,84.8,256,84.8c29.5,0,58.3,7.3,83.9,21.3l-14.6,14.6c-3.3,3.3-4.3,8.4-2.5,12.7c1.8,4.4,6.1,7.2,10.8,7.2h55.8
                                c6.4,0,11.7-5.2,11.7-11.7V73.1c0-4.7-2.8-9-7.2-10.8c-4.4-1.8-9.4-0.8-12.7,2.5L357,89c-30.5-18-65.3-27.5-101-27.5
                                c-53.2,0-103.1,20.7-140.7,58.3C77.7,157.3,57,207.3,57,260.5s20.7,103.1,58.3,140.7c37.6,37.6,87.6,58.3,140.7,58.3
                                c53.2,0,103.1-20.7,140.7-58.3c37.6-37.6,58.3-87.6,58.3-140.7C455,254,449.8,248.8,443.4,248.8z">
                                </path>
                                <path d="M236.1,262c0,0.2,0,0.3,0,0.5c0,0.3,0.1,0.6,0.1,0.9c0,0.1,0,0.2,0.1,0.3c0.1,0.3,0.2,0.7,0.3,1c0,0,0,0.1,0,0.1
                                c0.8,2.5,2.3,4.8,4.6,6.5l79.9,60.1c5.7,4.3,13.9,3.2,18.2-2.6c4.3-5.7,3.2-13.9-2.6-18.2L262,254.5V161c0-7.2-5.8-13-13-13
                                c-7.2,0-13,5.8-13,13v100c0,0.1,0,0.2,0,0.3C236,261.5,236,261.8,236.1,262z"></path>
                            </g>
                        </svg>
                        २४ घन्टाका ताजा अपडेट
                    </a>

                </div>

            </div>
            <!-- ==============side bar ads===================== -->
            <div class="advertiz col-lg-3 col-md-12 col-12 ">
                <div class="ad" id="ad1">
                    <a href=""><img src="<?php echo get_template_directory_uri();?>/images/karodpati.gif"></a>
                </div>

                <div class="ad" id="ad2">
                    <a href=""><img src="<?php echo get_template_directory_uri();?>/images/clove honey.gif"></a>
                </div>

                <div class="ad" id="ad3">
                    <a href=""><img src="<?php echo get_template_directory_uri();?>/images/tata motors.gif"></a>
                </div>
            </div>
        </div>
    </div>





</section>



<!-- ===========three columns recent hot new section ends=================== -->
<!-- ================================HOT NEWS SECTION ENDS============================ -->





<!-- ==================full length ads section================ -->
<section>
    <div class="long_ads container SectionTopBottomMargin">
        <div class="row">
            <div class="col desktop_size_ads2">
                <a href=""><img src="<?php echo get_template_directory_uri();?>/images/happy.gif"> </a>
            </div>

        </div>
    </div>
</section>
<!-- ==================full length ads section================ -->















<!-- =================== projects section start============ -->

<section class="SectionTopBottomMargin ">
    <div class="container-fluid px-5 pt-5 ">
        <div class="row">
            <h1>Our Projects</h1>
<?php
$args = array(
    'post_type' => 'projects',
    'posts_per_page' => 2,
);

$projects=new WP_Query($args);
  while($projects->have_posts()){
    $projects->the_post();
?>
            <div class="abv-img col-lg-6 col-md-6 col-12 ">
                <div class="img">
                    <a href="<?php the_permalink();?>?>">
                        <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image Description">
                        <?php endif; ?>
                    </a>
                </div>
                <div class="image-text">
                    <h3><a href="<?php the_permalink();?>">
                    <?php echo wp_trim_words(get_the_title(), 2, '....'); ?>

                        </a></h3>
                    <div class="wrapped">
                        <div class="comment d-inline">
                            <i class="far fa-clock"></i> <span class=" pb-5"
                                style="font-size:15px;font-family: mukta;font-weight:bold;">
                                <?php echo display_post_time(get_the_ID()); ?>
                            </span>
                        </div>
                    </div>
                </div>
               
            </div>
            
            <?php
}
wp_reset_postdata();
?>

        </div>
        
</div>

</section>

<div class="pagination">
  
   <?php echo paginate_links();?>
</div>

<!-- ===================  projects section ends ============ -->



   

 

  







<?php  get_footer()?>



<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script> -->