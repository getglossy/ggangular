<?php
/**
 * Template Name: Page - Post Unprotected
 * Description: Displays a page title and content without displaying a sidebar.
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
                    $query = new WP_Query( 'category_name=' . get_the_title());

                    $ancestors = get_post_ancestors($post->ID);
                    $parent = $ancestors[0];
                    $currentParent = null;

                    if($parent) { //if its a CHILD page
                        $currentParent = wp_list_pages("title_li=&include=".$parent."&echo=0");
                        $children = wp_list_pages("title_li=&child_of=".$parent."&echo=0");
                        //echo $currentParent;
                    }  else { //if it's a PARENT page
                        $currentParent = wp_list_pages("title_li=&include=".get_the_ID()."&echo=0");
                        $children = wp_list_pages("title_li=&child_of=".get_the_ID()."&echo=0");
                    }

                    if ( $query->have_posts() ) {
                        echo '<div class="postWrap">';
                        while ( $query->have_posts() ) {
                            $query->the_post();

                            $image = get_post_meta(get_the_ID(), 'imageID', TRUE);

                            if($image) { 
						
                                echo '<div class="photoWrap"><a href="' . $image .'" rel="prettyPhoto">'; 
                                echo '<img src="' . $image . '" alt="" />';?>
                                
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/icon-plus.png" class="imagePop" />
                                
                                <?php echo '</a></div>';
									  
								
                            }

                            echo '<div class="postTitleWrap"><a href="' . get_permalink() . '" >' . get_the_title() . '</a></div>';

                          
                            echo '<div class="postDescWrap"><p>';
                            echo get_the_content();
                            echo '</p></div>';
                          

                            if ($children)
                            {
								echo '<div class="linksWrap">';
                                echo $children;
								echo '</div>';
                            }

                            echo '<br />';

                        }
                        echo '</div>';
                    } else {
                        // no posts found
                    }

                    wp_reset_query();

                ?>
            </div>

            <div class="span10">
                <?php the_content(); ?>
            </div>

        </div><!-- .row content -->
    </div><!--/.container -->


<?php get_footer(); ?>