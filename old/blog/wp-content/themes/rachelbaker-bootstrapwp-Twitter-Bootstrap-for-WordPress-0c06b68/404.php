<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<?php if ( is_user_logged_in() ) { ?>
<div class="container">
	<div id="head">
        <?php
        if ( is_user_logged_in() ) {
                echo '<a href="http://getglossy.com.au/blog/Logout">Logout</a>';
        }
        else
        {
                echo '<a href="http://getglossy.com.au/blog/Login">Login</a>';
        }
        ?>
    </div>
    
   <div class="content">
            <div class="span2">
                <div class="navbar navbar-inverse navbar-relative-left">
                    <div class="navbar-inner">
                        <div class="container">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" id="logoImg" />
                        	<p id="navHead">CLIENTS</p>
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
            
                                <?php bloginfo('name'); ?></a>
                            <?php wp_nav_menu(
                                array(
                                    'menu' => 'main-menu',
                                    'container_class' => 'nav-collapse collapse',
                                    'menu_class' => 'nav',
                                    'fallback_cb' => '',
                                    'menu_id' => 'main-menu',
                                    'walker' => new Bootstrapwp_Walker_Nav_Menu()
                                )
                            ); ?>
                        </div>
                    </div>
                </div>
            </div>
       <div class="span10">
            
            	<div id="searchWrap">
                	<?php echo get_search_form(); ?>
                </div>

            <header class="page-title">
                <h1><?php _e('This is Embarrassing', 'bootstrapwp'); ?></h1>
            </header>

            <p class="lead"><?php _e(
                'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.',
                'bootstrapwp'
            ); ?></p>

           <div class="well">
               <?php get_search_form(); ?>
           </div>

       
               <div class="span4">
                   <h2>All Pages</h2>
                   <?php wp_page_menu(); ?>
               </div>
               <!--/.span4 -->
               <div class="span4">
                   <?php the_widget('WP_Widget_Recent_Posts'); ?>

                   <h2><?php _e('Most Used Categories', 'bootstrapwp'); ?></h2>
                   <ul>
                       <?php wp_list_categories(
                       array(
                           'orderby' => 'count',
                           'order' => 'DESC',
                           'show_count' => 1,
                           'title_li' => '',
                           'number' => 10
                       )
                   ); ?>
                   </ul>

               </div>
               <!--/.span4 -->
          
       </div>
<?php }
else
{
    echo '<script>window.location.href = "http://getglossy.com.au/blog/login"</script>';
}
?>

    <?php get_footer();
