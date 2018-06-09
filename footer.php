<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<!-- #content -->

<footer >
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-12 footer-values-box">
					<h3>Heritage</h3>
					<div class="footer-line"></div>
					<h3>Family</h3>
					<div class="footer-line"></div>
					<h3>Community</h3>

					<img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="Wattle Partners Logo">
					
					
				</div>

				<div class="col-lg-3 col-md-6 footer-contact">

					<h4>Location</h4>
					<p>Unit 10, 3 Bromham Place, Richmond,</br>Victoria, 3121</br>Phone: 03 8414 2901</br>Email:  info@wattlepartners.com.au</p>

					<p class="footer-travel"><i class="fa fa-plane" aria-hidden="true"></i> We travel across the world frequently</p>
				</div>

				<div class="col-lg-4 col-md-6 footer-contact">
					<h4>Arrange a Meeting</h4>
					<button class="standard-button standard-button-left"  data-toggle="modal" data-target="#contact1">
						<p>Book now</p>  
						<div class="standard-circle">
							<i class="fa fa-arrow-right" aria-hidden="true"></i>
						</div>
					</button>
					<h4 class="footer-contact-top-margin">Want to know more?</h4>
					<button class="standard-button standard-button-left">
						<p>FAQS</p>  
						<div class="standard-circle">
							<i class="fa fa-arrow-right" aria-hidden="true"></i>
						</div>
					</button>

				</div>
			</div>
		</div>
	</div>

	<!--privacy and social media line -->
	<div class="footer-social">
		<div class="container footer-social-sidebyside">
			<p>Wattle Partners Private Wealth Managers 2017. All Rights Reserved.   |   <span>Privacy Policy</span></p>

			<div class="footer-social-icons">
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>

	
</footer>

<!-- Modal 1 -->
<div class="modal fade" id="contact1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="meeting1">
                    <h2>Book a Meeting</h2>
                    <p>What advice are you interested in?</p>

                    <form id="adviceService" action="">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="radioCat">
                                    <input name="advice" value="Superannuation" type="radio" id="radioButton"><p>Superannuation</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="radioCat">
                                    <input name="advice"value="SMSFs"  type="radio" id="radioButton"><p>SMSFs</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="radioCat">
                                    <input name="advice" value="Investments" type="radio" id="radioButton"><p>Investments</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="radioCat">
                                    <input name="advice" value="Ongoing_management" type="radio" id="radioButton"><p>Ongoing management</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="radioCat">
                                    <input name="advice" value="Family_trusts" type="radio" id="radioButton"><p>Family trusts</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="radioCat">
                                    <input name="advice" value="Insurance" type="radio" id="radioButton"><p>Insurance</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="radioCat">
                                    <input name="advice" value="Borrowing" type="radio" id="radioButton"><p>Borrowing</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="radioCat">
                                    <input name="advice" value="Estate_planning"  type="radio" id="radioButton"><p>Estate Planning</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="radioCat">
                                    <input name="advice" value="Cash_flow" type="radio" id="radioButton"><p>Cash flow</p>
                                </div>
                            </div>

                        </div>

                        <div class="meeting1-submit"><input id="contactModal" type="submit" value="Next" ></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal 2 -->
<div class="modal fade" id="contact2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div id="contactInfo2" class="modal-body">
                <div class="meeting2">
                    <h2>Book a Meeting</h2>
                    <p>Are you completing this form for yourself or you and a partner?</p>

                    <form class="radio-align-buttons" action="">
                        <div class="radioCat">
                            <input class="partnerRadio" name="partner" value="Single" type="radio" id="radioButton"><p>Single</p>
                        </div>
                        
                        <div class="radioCat">
                            <input class="partnerRadio" name="partner" value="Partner" type="radio" id="radioButton"><p>Partner</p>
                        </div>
                    </form>
                    
                    <div class="meeting2-single">
                        <?php echo do_shortcode('[contact-form-7 id="26" title="Meeting Single"]') ?>
                    </div>

                    <div class="meeting2-partner">
                        <?php echo do_shortcode('[contact-form-7 id="27" title="Meeting Partner"]') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8t__20rgnRTjRErveT7OQEY10IrJ7C5w&callback=initMap">
</script>




<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.simple-text-rotator.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/app.js" defer></script>



<script>

	$("#contactModal").on('click', function(e){
		e.preventDefault();

		var radioVal = $("input:radio[name=advice]:checked").val();
		console.log(radioVal);
		if(radioVal != null){
			$('#contact1').modal('hide');
			$('#contact2').modal('show');
		}else{
			alert("not selected");
		}
		
	});


	$(".partnerRadio").on('click', function(e){
		var radioStatus = $("input:radio[name=partner]:checked").val().toLowerCase();
		console.log(radioStatus);
	

		if(radioStatus == "partner"){
			$(".meeting2-single").fadeOut();
			$(".meeting2-partner").fadeIn();
		}else if(radioStatus == "single"){
			$(".meeting2-partner").fadeOut();
			$(".meeting2-single").fadeIn();
		}

	});


	
</script>

<script>
var index = 1;

function prepare() {

    function switchBackground() {
        if (index == 1) {
            //this switches to  the first background
            var div = document.getElementById("yourDiv");
            div.className = "animation--fade-bg-1";
            index = 0;
        }
        else {
            //this switches to  the second background
            var div = document.getElementById("yourDiv");
            div.className = "animation--fade-bg-2";
            index = 1;
        }
    }
    switchBackground();
    setInterval(function() {switchBackground()}, 6000);
}
</script>

<?php wp_footer(); ?>
</body>
</html>
