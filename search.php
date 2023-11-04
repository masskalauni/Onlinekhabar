<?php get_header(); ?>

<section class="ok-bises ok-bises-type-2">
    <div class="ok-container">
        <p>
            <?php printf(__('Search Results for: %s', 'your-theme-textdomain'), '<span>' . get_search_query() . '</span>'); ?>
</p>
    </div>
</section>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="ok-bises ok-bises-type-2">
        <div class="ok-container">
            <h2>
                <a href="<?php the_permalink(); ?>">
                    <?php
                    // Highlight the matched content within the post title
                    $title = get_the_title();
                    $search_query = get_search_query();
                    $title = preg_replace('/(' . preg_quote($search_query, '/') . ')/i', '<span class="highlighted">$1</span>', $title);
                    echo $title;
                    ?>
                </a>
            </h2>
            <div class="ok-title-info flx">
                <!-- Your existing author and date code here -->
            </div>
            <div class="ok-bises-feauted-img">
                <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image Description">
                    <?php endif; ?>
                </a>
            </div>
            <p>
                <?php
                // Highlight the matched content within the post content
                


                $content = get_the_content();
                $search_query = get_search_query();
                $content = preg_replace('/(' . preg_quote($search_query, '/') . ')/i', '<span class="highlighted">$1</span>', $content);
                echo $content;


                ?>
            </p>
        </div>
    </section>
<?php endwhile; ?>
<?php else : ?>
    <section class="ok-bises ok-bises-type-2">
        <div class="ok-container">
            <p>No posts found. :(</p>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
