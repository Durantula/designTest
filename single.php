<?php
/**
 * The main template file

* Template Name: Default Template
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Vokke
 * @subpackage Allroad
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<body>



<?php wp_reset_postdata(); ?>
<?php include "sections/common/navigation.php" ?>

<?php 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full');
$thumb_url = $thumb_url_array[0];
?>

 <div style="background-image: url(<?php echo get_field('feature_banner_image',$post->ID)["url"] ?>)" class="main secondary-main"> 

            <div class="overlay secondary-overlay"></div>
            <div class="main-content">
              
                <div class="main-heading">
                    <h1><?php echo get_option('blog_name'); ?></h1>
                </div>
            </div>
        </div>


     

        <div class="post">
            <div class="container">
                <div class="row post-heading">
                    <div class="col-md-2 post-back-centre">

                        <div class="return">
                            <a href="javascript:history.go(-1)"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                        </div>

                    </div>
                    <div class="col-md-8 ">
                        <div class="title">
                            <h1><?php echo get_the_title();?></h1>
                            <p class="text-uppercase"><?php echo get_the_date('F j')?> | <?php echo get_the_author()?></p>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-md-2 share">
                        <div class="share">
                            <p>Share</p>

                            <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Share on LinkedIn" class="circle">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook." class="circle">
                                 <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
    
                        </div>
                    </div>
                    
                    <div class="col-md-8 post-content">
          
                        <img class="img-fluid" src='<?php echo get_the_post_thumbnail_url(); ?>' alt="">

                        <?php echo the_content()?>

                    </div>
                </div>
            </div>

            <?php

            $related = new WP_Query( ( array( 'category__in' => wp_get_post_categories($post->ID), 
                                               'posts_per_page' => 5, 'post__not_in' => array($post->ID) ) ));
            $post_count = $related->post_count;

            if( $related->have_posts() ) : 
                while( $related->have_posts() ) : $related->the_post();
           ?>

            <div class="related">
                <h3 class="related-heading">Related Articles</h3>
            </div>

            <div class="row related-articles">

                <div class="col-md-4 ">
                    <a class="related-hover" href="<?php echo get_permalink();?>">
                        <div  style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)" class="related-image1"></div>
                        <div class="related-content">
                            <p class="text-uppercase"><?php echo get_the_date('F j')?> | <?php echo get_the_author()?></p>
                            <h3><?php echo get_the_title() ?></h3>
                        </div>
                    </a>
                </div>

                <?php endwhile; ?>

                <?php
                 // number_of_coming_soon returns the number of "More coming soon boxes" to end the line.
                $number_of_coming_soon = 3 - ($post_count % 3);
      
                for($i = 0; $i < $number_of_coming_soon; $i++) : ?>
                    <div class="col-md-4 fixed-height">
                        <p>More Coming Soon...</p>
                    </div>
                <?php endfor; ?>
            </div>
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>
        

            
      

            <div class="navigate">
                <a href="#"><p>Top <i class="fa fa-arrow-up" aria-hidden="true"></i></p></a>
            </div>       
        </div>



	<?php include "sections/common/mainFooter.php" ?>

	<?php include "sections/common/modal.php" ?>
	<?php wp_footer(); ?>


</body>
</html>



        