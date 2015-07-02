<?php
/**
 * Search Results Template
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
    <style>
        ::-webkit-scrollbar {
            -webkit-appearance: none;
            width: 7px;
        }
        ::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background-color: rgba(0,0,0,.5);
            -webkit-box-shadow: 0 0 1px rgba(255,255,255,.5);
        }

        .type-page {
            display: none;
        }
    </style>
<div class="container">
    <div id="head">
        <?php
        if ( is_user_logged_in() ) {
            echo '<a href="http://getglossy.com.au/blog/Logout">Logout</a>';
            echo get_search_form();
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
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" id="menuLogo"/>
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
                <?php if (have_posts()) : ?>
                     <header class="post-title">
                         <h1><?php printf( __('Search Results for: %s', 'bootstrapwp'),'<span>' . get_search_query() . '</span>'); ?></h1>
                     </header>

                            <?php while (have_posts()) : the_post(); ?>
                    <div <?php post_class(); ?>>



                            <?php
                                $image = get_post_meta(get_the_ID(), 'imageID', TRUE);

                                if($image) {
                                    echo '<img src="' . $image .'" alt="" />';
                                }
                            ?>


                        <h3><?php the_title();?></h3>


                         <?php the_content();?>

                        <hr/>
                    </div><!-- /.post_class -->
                            <?php endwhile; ?>

                            <?php else : ?>
                    <div class="content">
                        <div class="span10">
                            <header class="post-title">
                                <h1><?php _e('No Results Found', 'bootstrapwp'); ?></h1>
                            </header>
                            <p class="lead">
                                <?php _e(
                                    'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps you should try again with a different search term.',
                                    'bootstrapwp'); ?>
                            </p>

                            <div class="well">
                                <?php get_search_form(); ?>
                            </div><!--/.well -->

                            <?php endif;?>
                        </div>
                    </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>