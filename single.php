<?php get_header();?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="ok-bises ok-bises-type-2">
                <div class="ok-container">
                    <h2>
                        <a href="<?php the_permalink();?>"><?php the_title(); ?></a>

                    </h2>
                    <div class="ok-title-info flx">
                        <div class="ok-news-author-wrap ">
                            <div class="ok-news-author">
                                <span class="author-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/ok-icon.png" alt="अनलाइनखबर">
                                </span>
                                <span class="author-name"><?php the_Author();?></span>
                            </div>
                        </div>
                        <div class="ok-news-post-hour">
                            <i class="far fa-clock"></i>
                            <span><?php echo display_post_time(get_the_ID()); ?></span>
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
                    <p><?php the_content(); ?></p>

                </div>
            <!-- <?php edit_post_link(); ?> -->

           

    </section>
    <?php endwhile; ?>
<?php else : ?>

  <p>No posts found. :(</p>

<?php endif; ?>
<!-- //display comments1323 -->
<?php comment_form();
        $comments_number = get_comments_number();
        if($comments_number != 0){
            ?>
            <div class="comments">
                <h5>All Comments</h5>
                <ol class="all-comments">
                    <?php 
                    $comments = get_comments(array(
                        'post_id' => $post->ID,
                        'status'  => 'approve'
                    ));
                    wp_list_comments(array(
                        'per_page' => 15
                    ), $comments);
                    ?>
                </ol>
            </div>

            <?php
        }
        ?> 
       

   
<?php get_footer();?>