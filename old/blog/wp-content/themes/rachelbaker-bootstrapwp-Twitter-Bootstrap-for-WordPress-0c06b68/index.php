<?php
/**
 * Description: Default Index template to display loop of blog posts
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header();

?>
<div class="container">
    <div class="row">
        <div class="span12">
            <?php if (function_exists('bootstrapwp_breadcrumbs')) {
                bootstrapwp_breadcrumbs();
            } ?>
        </div><!--/.span12 -->
    </div><!--/.row -->

    <div class="row content">
    <div class="span4">
        <div class="navbar navbar-inverse navbar-relative-left">
            <div class="navbar-inner">
                <div class="container">
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
    </div><!--/.span12 -->
        <div class="span8">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div <?php post_class(); ?>>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
                        <h3><?php the_title();?></h3>
                    </a>
                    <p class="meta">
                        <?php echo bootstrapwp_posted_on();?>
                    </p>

                    <div class="row">
                        <?php // Post thumbnail conditional display.
                        if ( bootstrapwp_autoset_featured_img() !== false ) : ?>
                            <div class="span2">
                                <a href="<?php the_permalink(); ?>" title="<?php  the_title_attribute( 'echo=0' ); ?>">
                                    <?php echo bootstrapwp_autoset_featured_img(); ?>
                                </a>
                            </div>
                            <div class="span6">
                        <?php else : ?>
                            <div class="span8">
                        <?php endif; ?>
                                <?php the_excerpt(); ?>
                            </div>
                    </div><!-- /.row -->

                    <hr/>
                </div><!-- /.post_class -->
            <?php endwhile; endif; ?>

            <?php bootstrapwp_content_nav('nav-below');?>
        </div>

    <?php get_sidebar('blog'); ?>




<?php get_footer(); ?>