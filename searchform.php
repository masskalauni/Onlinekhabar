

<div id="search_form">
    <form role="search" method="get" class="ok-top-search" action="<?php echo site_url();?>">
              <input type="text" placeholder="Search Keywords" name="s" class="ok-smart-search-field" id="s" autocomplete="off" value="<?php get_search_query();?>"/>
               <span class="ok-search-trigger">
             <button type="submit" title="Search">
             <img src="<?php echo get_template_directory_uri(); ?>/images/search-icon.png" alt="Search" />
                     </button>
                </span>
                  </form>
</div>