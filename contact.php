<?php
/**
 * Template Name: Contact
 */

get_header(); ?>


<?php include "template-parts/navigation.php" ?>


<div class="page-banner">
    <h1>Contact Us. We would love to hear from you.</h1>

    <div class="book-meeting" data-toggle="modal" data-target="#contact1">
        <p>Arrange a Meeting</p> 
        <div class="book-meeting-circle">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
        </div>
    </div>
</div>


<div class="contact">
    <div class="container ">
        <div class="row">
            <div class="col-lg-6 col-md-12 home-contact-form">
                <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]') ?>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info">
                            <h2>Location</h2>
                            <p>Unit 10, 3 Bromham Place, Richmond, Victoria, 3121</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info">
                            <h2>Mailing</h2>
                            <p>GPO Box 2031, Melbourne, Victoria, 3001</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info">
                            <h2>Phone</h2>
                            <p>03 8414 2901</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="contact-info">
                            <h2>Email</h2>
                            <p>info@wattlepartners.com.au</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info">
                            <h2>Open Hours</h2>
                            <p> Monday – Friday: 8:00 – 18:00</br>
                                Saturday: Closed</br>
                                Sunday: Closed</br>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info">
                            <h2>Social Media</h2>
                            <p>Facebook</br>
                                Linkedin</br>
                                Twitter</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info">
                            <h2>ABN</h2>
                            <p>89 145 903 840</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="contact-info">
                            <h2>AFSL</h2>
                            <p>83 169</p>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>


<div class="travel">
    <div class="travel-box">
        <img src="<?php echo get_template_directory_uri(); ?>/img/plane.png" alt="plane icon">        
        <h2>Travel Information</h2>
        <p>Wattle Partners is located in Richmond, Victoria, however our advisory team travels regularly across Australia</p>
        <p><b>When are we visiting your city?</b></br>
        <b>Perth –</b> Twice per year  <b>Sydney –</b> Once per month  <b>Canberra –</b> Twice per year</br>  <b>Brisbane</b> – Four times per year  <b>Adelaide –</b> Four times per year </p>

    </div>
</div>

<div id="map"></div>

<script>
    function initMap() {
    var wattle = {lat: -37.813395, lng: 144.998541};

    var iconBase = '<?php echo get_template_directory_uri()?>/img/';
   

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: wattle,
        styles:
                [
                {
                    "elementType": "geometry",
                    "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                    ]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [
                    {
                        "visibility": "off"
                    }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [
                    {
                        "color": "#616161"
                    }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                    ]
                },
                {
                    "featureType": "administrative.land_parcel",
                    "elementType": "labels.text.fill",
                    "stylers": [
                    {
                        "color": "#bdbdbd"
                    }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [
                    {
                        "color": "#757575"
                    }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.fill",
                    "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [
                    {
                        "color": "#ffffff"
                    }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.text.fill",
                    "stylers": [
                    {
                        "color": "#757575"
                    }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [
                    {
                        "color": "#dadada"
                    }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.text.fill",
                    "stylers": [
                    {
                        "color": "#616161"
                    }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                    ]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "geometry",
                    "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                    ]
                },
                {
                    "featureType": "transit.station",
                    "elementType": "geometry",
                    "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                    {
                        "color": "#c9c9c9"
                    }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                    ]
                }
                ]
    });
    var marker = new google.maps.Marker({
        position: wattle,
        map: map,
        icon: iconBase + 'marker.png',
    });
    }

</script>




<?php get_footer();?>

