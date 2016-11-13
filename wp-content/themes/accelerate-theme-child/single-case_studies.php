<?php
/**
 * The Template for displaying case studies
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.1
 */

get_header(); ?>
    <div id="primary"	 class="site-content">
        <div id="content" role="main">

       <?php
				// Start the Loop.
				while ( have_posts() ) : the_post(); 

            $services = get_field('services');
            $client = get_field('client');
            $link = get_field('site_link');
            $image_1 = get_field('image_1');
            $image_2 = get_field('image_2');
            $image_3 = get_field('image_3');
            ?>
        <article class="case-study">
            <aside class="case-study-sidebar">
                <h2><?php the_title(); ?></h2>
                <h5><?php echo $services; ?></h5>
                <h6>Client: <?php echo $clint; ?></h6>

    	    <?php the_content(); ?>
                <p><a href="<?php echo $link; ?>">Site Link</a></p>
            </aside><!--end case-study-sidebar-->

            <div class="case-study-images">
            <img src="<?php echo $images_1; ?>" />
                <img src="<?php echo $images_2; ?>" />
                    <img src="<?php echo $images_3; ?>" />
            </div>

        </article>    
    <?php endwhile; // end of the loop ?>

            </div><!--#content-->
    </div><!--#primary-->
	<?php get_footer(); ?>			

				
						
						
						
					

			