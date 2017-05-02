<?php
/**
 * Template Name: Homepage
 *
 * @package AWAL
 */

$imagedir = get_stylesheet_directory_uri() . "/assets/img";

get_header();

?>

<div class="homepage">
	<section class="hero">
		<section class="hero__front">
			<div class="overlay"></div>
			<div class="hero__container">
				<div class="hero__left">
					<img src="<?php echo $imagedir ?>/asi-logo.png">
				</div>
				<div class="hero__right">
					<h1 class="js-rotating-words">Delivers</h1>
					<h1 class="js-rotating-words">Protects</h1>
					<h1 class="js-rotating-words">Rises above</h1>
					<h1 class="js-rotating-words">Reliability</h1>
					<h1 class="js-rotating-words">Local Response</h1>
					<h1 class="js-rotating-words">Professional Disgretion</h1>
					<h1 class="js-rotating-words">Protects homes and businesses</h1>
					<h1 class="js-rotating-words">For all your security needs</h1>
					<h1 class="js-rotating-words">Security for a changing world</h1>
					<h1 class="js-rotating-words">Your source for security</h1>
				</div>
			</div>	
		</section>	
	</section>

	<section class="about" id="about">
		<div class="container">
			<div class="about__container">
				<div class="about__left js-inview appear">
					<h2>We are ASI</h2>
					<h3>Your local resource for alert security.</h3>
					<p>Protect what you love most. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus auctor cursus. Aliquam sed rhoncus sem. Suspendisse ullamcorper elit magna, in hendrerit lorem egestas semper. Donec justo sapien, imperdiet feugiat hendrerit sit amet, tincidunt vel risus. Pellentesque luctus ornare tincidunt. Aenean egestas ante et sem posuere, quis posuere elit condimentum.</p>
				</div>
				<div class="about__right js-inview appear">
					<img src="<?php echo $imagedir ?>/1.jpg">
				</div>
			</div>	
		</div>	
	</section>


	<section class="sub-hero">
		<div class="overlay"></div>
		<div class="container">
			<div class="sub-hero__heading">
				<h2 class="js-inview appear">Why a Home Security System is a Necessity</h2>
			</div>

			<div class="sub-hero__columns js-inview appear">
				<div class="sub-hero__line-item">
					<div class="sub-hero__icon">
						<i class="fa fa-check-square-o" aria-hidden="true"></i><p>Every 13 seconds a break - in occurs in this country.</p>
					</div>
				</div>
				<div class="sub-hero__line-item">
					<div class="sub-hero__icon">
						<i class="fa fa-check-square-o" aria-hidden="true"></i><p>Unprotected homes are 300% more vulnerable.</p>
					</div>
				</div>
				<div class="sub-hero__line-item">
					<div class="sub-hero__icon">
						<i class="fa fa-check-square-o" aria-hidden="true"></i><p>Burglars prefer to operate when no one is home. 71% of break-ins occur when the home is unoccupied.</p>
					</div>
				</div>
				<div class="sub-hero__line-item">
					<div class="sub-hero__icon">
						<i class="fa fa-check-square-o" aria-hidden="true"></i><p>Homeowners can protect against burglary by using preventative and/or detection methods. The only detection method is an alarm system. Most burglars claim they avoid breaking into "advertised" alarm homes.</p>
					</div>
				</div>
				<div class="sub-hero__line-item">
					<div class="sub-hero__icon">
						<i class="fa fa-check-square-o" aria-hidden="true"></i><p>In a study of why a burglary attempt was unsuccessful, 74.3% of the unsuccessful attempts were due to an alarm deterring the intruder.</p>
					</div>
				</div>
				
				
				<div class="sub-hero__line-item">
					<div class="sub-hero__icon">
						<i class="fa fa-check-square-o" aria-hidden="true"></i><p>50% of victimized suburban homes will experience 2 or more burglaries. (US Department of Justice)</p>
					</div>
				</div>
				<div class="sub-hero__line-item">
					<div class="sub-hero__icon">
						<i class="fa fa-check-square-o" aria-hidden="true"></i><p>55.6%of all break-ins occur between 6:00 a.m. and 6:00 p.m. (Bureau of Justice Statistics, Criminal Victimization in the US, US Department of Justice)</p>
					</div>
				</div>
			</div>

		</div>
	</section>
	<section class="products" id="products">
		<div class="container">
			<div class="products__container">
				<div class="products__left">
					<img src="<?php echo $imagedir ?>/products/keypad.png" class="js-inview slide-right">
				</div>

				<div class="products__right js-inview appear">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in mauris eu purus facilisis eleifend at nec nisi. Cras volutpat tortor tempor tortor vestibulum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in mauris eu purus facilisis eleifend at nec nisi. Cras volutpat tortor tempor tortor vestibulum condimentum.</p>
				</div>
			</div>	
		</div>
	</section>
	<section class="products">
		<div class="container">
			<div class="products__container">
				<div class="products__left js-inview appear">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in mauris eu purus facilisis eleifend at nec nisi. Cras volutpat tortor tempor tortor vestibulum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in mauris eu purus facilisis eleifend at nec nisi. Cras volutpat tortor tempor tortor vestibulum condimentum.</p>
				</div>

				<div class="products__right">
					<img src="<?php echo $imagedir ?>/products/honeywell-l7000.jpg" class="js-inview slide-left">
				</div>
			</div>	
		</div>
	</section>
	<section class="contact" id="contact">
		<div class="overlay"></div>
		<div class="container">
			<div class="contact__container">
				<div class="contact__form js-inview appear">
					<?php echo do_shortcode( '[contact-form-7 id="7" title="Contact form 1"]' ); ?>
				</div>	
			</div>	
		</div>
	</section>
</div>	

<?php get_footer();
