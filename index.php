<?php
/**
 * The main template file

 * Template Name: Landing page template
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Vokke
 * @subpackage Wattle
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<body>


<?php include "template-parts/navigation.php" ?>

<?php include "template-parts/header.php" ?>

<div class="container">
    <?php include "template-parts/home-about.php" ?>

    <hr>

    <?php include "template-parts/benefits.php" ?>

</div>


<div class="brand-banner">
    <p><span class="rotate">Private Wealth Managers, Estate Planners, Investments, Portfolio Construction</span></p>
</div>

<div class="container">
    <?php include "template-parts/home-family.php"?>
</div>



<div class="container">
    <div class="services">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-sm-12 services-box">
                <img src="<?php echo get_template_directory_uri(); ?>/img/people.png" alt="Couple icon">
                <h2>Our Customers</h2>
                <p>Lorem ipsum dolor sit amet, consectetur cing elit. Suspe ndisse suscipit sagittis leo sit met condimentum estibulum issim posuere cubilia Curae Suspendisse at consectetur massa. </p>
                
                <button class="standard-button">
                    <p>Learn More</p>  
                    <div class="standard-circle">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </div>
                </button>
            </div>

            <div class="col-xl-3 col-lg-6 col-sm-12 services-box">
                <img src="<?php echo get_template_directory_uri(); ?>/img/money.png" alt="Couple icon">
                <h2>What we Do</h2>
                <p>Lorem ipsum dolor sit amet, consectetur cing elit. Suspe ndisse suscipit sagittis leo sit met condimentum estibulum issim posuere cubilia Curae Suspendisse at consectetur massa. </p>
                
               <button class="standard-button">
                    <p>Learn More</p>  
                    <div class="standard-circle">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </div>
                </button>
            </div>

            <div class="col-xl-3 col-lg-6 col-sm-12 services-box">
                <img src="<?php echo get_template_directory_uri(); ?>/img/lightBulb.png" alt="Couple icon">
                <h2>How we do it</h2>
                <p>Lorem ipsum dolor sit amet, consectetur cing elit. Suspe ndisse suscipit sagittis leo sit met condimentum estibulum issim posuere cubilia Curae Suspendisse at consectetur massa. </p>
                
                <button class="standard-button">
                    <p>Learn More</p>  
                    <div class="standard-circle">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </div>
                </button>
            </div>

            <div class="col-xl-3 col-lg-6 col-sm-12 services-box">
                <img src="<?php echo get_template_directory_uri(); ?>/img/person.png" alt="Couple icon">
                <h2>Our Team</h2>
                <p>Lorem ipsum dolor sit amet, consectetur cing elit. Suspe ndisse suscipit sagittis leo sit met condimentum estibulum issim posuere cubilia Curae Suspendisse at consectetur massa. </p>
                
                <button class="standard-button">
                    <p>Learn More</p>  
                    <div class="standard-circle">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </div>
                </button>
            </div>
        </div>
        
    </div>
</div>



<!-- differentiating points -->

<div class="different">

    <h3>Differentiating points</h3>
    <div class="different-line"></div>
    
    <div class="owl-carousel owl-theme owl-different">

        <div class="item"><p>‘It takes the personal commitment of your adviser to make your life easier, what better way than through ownership of your success'</p></div>
        
        <div class="item"><p>‘It takes the personal commitment of your adviser to make your life easier, what better way than through ownership of your success'.</p></div>
       
    </div>
</div>


<div class="container">
    <div class="home-firm-heading">
        <h2>Unconventional Wisdom</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/img/wattle-icon.png" alt="Wattle Partners icon">
    </div>


    <div class="row">
        <div class="col-lg-4 col-md-12 home-blog">
            <div class="home-blog-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/house.png)"></div>
            <div class="home-blog-box">
                <h3>Three disruptive investments to stash your cash</h3>

                <p>The word of the year goes to “Disruption.” But what does it really mean? Disruption means ...</p>
                <div class="date-box">
                    <p>Aug 18, 2017</p>
                    <div class="date-circle">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>

         <div class="col-lg-4 col-md-12 home-blog">
            <div class="home-blog-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/house.png)"></div>
            <div class="home-blog-box">
                <h3>Three disruptive investments to stash your cash</h3>

                <p>The word of the year goes to “Disruption.” But what does it really mean? Disruption means ...</p>
                <div class="date-box">
                    <p>Aug 18, 2017</p>
                    <div class="date-circle">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
         <div class="col-lg-4 col-md-12 home-blog">
            <div class="home-blog-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/house.png)"></div>
            <div class="home-blog-box">
                <h3>Three disruptive investments to stash your cash</h3>

                <p>The word of the year goes to “Disruption.” But what does it really mean? Disruption means ...</p>
                <div class="date-box">
                    <p>Aug 18, 2017</p>
                    <div class="date-circle">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a target="_blank" href="https://www.uwj.com.au"><button class="standard-button">
        <p>More Articles</p>  
        <div class="standard-circle">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
        </div>
    </button></a>

</div>


    <div class="home-contact">

        <div class="container ">

        <div class="row">

            <div class="col-lg-6 col-md-12 home-contact-form">
                <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]') ?>
            </div>

            <div class="col-lg-6 col-md-12 home-contact-call">
                <div class="home-contact-call-box">
                    <h1>Let's Talk</h1>
                    <h2>If you have a question, we would love to hear from you.</h2>
                    <div class="home-contact-line"></div>
                    <h2>Need for information</h2>
                    <button class="standard-button standard-button-left">
                        <p>FAQ's</p>
                        <div class="standard-circle">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        </div>
    </div>




<?php get_footer() ?>




