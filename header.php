<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<script>src="<?php echo get_template_directory_uri();?>/assets/js/jquery.simple-text-rotator.min.js"</script>



<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/wattle-icon.png">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/simpletextrotator.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,500,700,900" rel="stylesheet">


<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

<!-- Owl Carousel -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/owlcarousel/owl.theme.default.min.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700" rel="stylesheet">

<!-- Google maps API -->
 <style>
    #map {
        height: 400px;
        width: 100%;
    }
</style>


 <?php
    // wp_nav_menu( array(
    //     'menu'              => 'primary',
    //     'theme_location'    => 'primary',
    //     'depth'             => 2,
    //     'container'         => 'div',
    //     'container_class'   => 'collapse navbar-collapse',
    //     'container_id'      => 'bs-example-navbar-collapse-1',
    //     'menu_class'        => 'nav navbar-nav',
    //     'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    //     'walker'            => new wp_bootstrap_navwalker())
    // );
?> 

<script type="text/javascript">(function(e,a){if(!a.__SV){var b=window;try{var c,l,i,j=b.location,g=j.hash;c=function(a,b){return(l=a.match(RegExp(b+"=([^&]*)")))?l[1]:null};g&&c(g,"state")&&(i=JSON.parse(decodeURIComponent(c(g,"state"))),"mpeditor"===i.action&&(b.sessionStorage.setItem("_mpcehash",g),history.replaceState(i.desiredHash||"",e.title,j.pathname+j.search)))}catch(m){}var k,h;window.mixpanel=a;a._i=[];a.init=function(b,c,f){function e(b,a){var c=a.split(".");2==c.length&&(b=b[c[0]],a=c[1]);b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,
0)))}}var d=a;"undefined"!==typeof f?d=a[f]=[]:f="mixpanel";d.people=d.people||[];d.toString=function(b){var a="mixpanel";"mixpanel"!==f&&(a+="."+f);b||(a+=" (stub)");return a};d.people.toString=function(){return d.toString(1)+".people (stub)"};k="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
for(h=0;h<k.length;h++)e(d,k[h]);a._i.push([b,c,f])};a.__SV=1.2;b=e.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";c=e.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}})(document,window.mixpanel||[]);
mixpanel.init("<?php echo get_option('mixpanel_api_token'); ?>");</script>


<?php wp_head(); ?>
</head>

