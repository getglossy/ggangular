<?php
/**
 * Default Post Template
 * Description: Post template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
    <style>
        ::-webkit-scrollbar
        {
            width: 12px;
            background-color: #FFFFFF;
        }

        ::-webkit-scrollbar-thumb
        {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
            background-color: #555;
        }

        .pp_social {display: none}
    </style>
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

<?php
    $image = get_post_meta(get_the_ID(), 'imageID', TRUE);

    if($image) {

    echo '<div class="photoWrap"><a href="' . $image .'" rel="prettyPhoto">';
                                                                           echo '<img src="' . $image . '" alt="" />';?>

    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icon-plus.png" class="imagePop" />

    <?php echo '</a></div>';


}
    ?>
            <header class="post-title">
                <div class="postTitleWrap"><h1><?php the_title();?></h1></div>
            </header>
            <?php the_content(); ?>
            <?php the_tags('<p>Tags: ', ', ', '</p>'); ?>
            <?php endwhile; // end of the loop. ?>
            <hr/>

            <?php bootstrapwp_content_nav('nav-below'); ?>
     </div>
     </div>
     </div> 
</div>
  
    <?php get_footer(); ?>