  <?php 
function gt_setup(){
    //Adding css and js files 
 
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap');
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
    wp_enqueue_script('script', get_theme_file_uri('js/script.js'), NULL, microtime(), true);
    wp_enqueue_style('responsive', get_theme_file_uri('css/responsive.css'), NULL, microtime(), 'all');
    wp_enqueue_style('global', get_theme_file_uri('css/global.css'), NULL, microtime(), 'all');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), '6.4.2');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true);
    wp_enqueue_style('404', get_theme_file_uri('css/404.css'));
}
  

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );




add_action('wp_enqueue_scripts', 'gt_setup');

//Adding theme support
function gt_init(){
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'sidebar' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5',
    array('comment-list','comment-form','search-form')
);

}
add_action('after_setup_theme','gt_init');

//Projects Post Type
function gt_custom_post_type(){
    register_post_type('projects',
      array(
        'rewrite'=>array('slug'=>'projects'),
        'labels'=>array(
            'name'=>"Projects",
            'singular_name'=> "Project",
            'add_new_item'=>'Add New Project',
            'edit_item'=>'Edit Project',
            
        ),
        'menu-icon'=>'dashicons-clipboard',
        'public'=>true,
        'has_archive'=>true,
        'supports'=>array(
            'title','thumbnail','editor','excerpt','comments'
        ),
        'taxonomies' => array('project_categories'),
       )
    );
    // Define a custom taxonomy for your projects
    register_taxonomy('project_categories', 'projects', array(
        'hierarchical' => true,
        'labels' => array(
            'name' => 'Project Categories',
            'singular_name' => 'Project Category',
           
        ),
        'rewrite' => array('slug' => 'project-category'), // Customize the slug
        'show_admin_column' => true,
    ));

}
add_action('init','gt_custom_post_type');






function display_post_time($post_id) {
    $time_diff = human_time_diff(get_post_time('U', true, $post_id), current_time('timestamp')) . ' अगाडि';
    return $time_diff;
}


function md_widgets(){
    register_sidebar(
        array(
            'name'=>'Main Sidebar',
            'id'=>'main_sidebar',
            'before_title'=>'<h3>',
            'after_title'=>'</h3>'
        )
        );

}
add_action('widgets_init','md_widgets');




function project_widgets(){
    register_sidebar(
        array(
            'name'=>'Projects Sidebar',
            'id'=>'projects_widget',
            'before_title'=>'<h3>',
            'after_title'=>'</h3>'
        )
        );
}

add_action('widgets_init','project_widgets');
  

  







  
function remove_footer_admin () 
{
    echo '<span id="footer-thankyou">Developed by <a href="https://www.bsdhami.com.np/" target="_blank">Mass Kalauni</a></span>';
}
 
add_filter('admin_footer_text', 'remove_footer_admin')






?>