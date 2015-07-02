<?php
/**
 * Template Name: Page - Full-width
 * Description: Displays a page title and content without displaying a sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

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
                            <a class="brand" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
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
                <?php the_content(); ?>
            </div>
        </div><!-- .row content -->
    </div><!--/.container -->

<?php endwhile; // end of the loop.

get_footer(); ?>



