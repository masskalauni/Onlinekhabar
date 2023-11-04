    <?php get_header();?>
<style>
 

  .container {
    text-align: center;
 
  }

  .error h1 {
    font-size: 100px;
    margin: 0;
    color: #d9534f; /* Red color */
  }

  .error p {
    font-size: 18px;
    margin-top: 10px;
    color: #333; /* Dark gray color */
  }

  .error a {
    display: inline-block;
  
    padding: 10px 20px;
    background-color: #428bca; /* Blue color */
    color: #fff; /* White text color */
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
  }

  .error a:hover {
    background-color: #317abf; /* Slightly darker blue on hover */
  }
</style>



<div class="container p-5">
    <div class="row">
        <div class="col">
            <div class="error">
                <h1>404</h1>
                <p><?php _e('Oops! That page can&rsquo;t be found.','sage'); ?></p>
                <a href="<?= esc_url(home_url('/')); ?>"><?php _e('Go to homepage','sage');
                echo ' &rarr;'; ?></a>
                
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>