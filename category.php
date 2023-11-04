








<?php get_header(); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="ok-bises ok-bises-type-2">
                <div class="ok-container">
                    <h1><?php the_archive_title() ?></h1>
                    <h2>
                        <a href="<?php the_permalink();?>"><?php the_title(); ?></a>

                    </h2>
                    <div class="ok-title-info flx">
                        <div class="ok-news-author-wrap ">
                            <div class="ok-news-author">
                                <span class="author-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/ok-icon.png" alt="अनलाइनखबर">
                                </span>
                                <span class="author-name"><?php the_author(); ?></span>
                            </div>
                        </div>
                        <div class="ok-news-post-hour">
                            <i class="far fa-clock"></i>
                            <span><?php echo display_post_time(get_the_ID()); ?></span>
                        </div>
                        <div class="ok-news-post-hour">
                        <i class="fa-solid fa-tag" style="color: #000000;"></i>
                        <span class="category-list"><?php echo get_the_category_list(', '); ?></span>

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
            <?php edit_post_link('<i class="fa fa-pencil"></i> Edit This', '<div class="edit-link">', '</div>'); ?>


           

    </section>
    <?php endwhile; ?>
<?php else : ?>

  <p>No posts found. :(</p>

<?php endif; ?>


<?php get_footer();?>