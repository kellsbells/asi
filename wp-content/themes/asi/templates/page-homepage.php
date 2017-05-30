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
			</div>	
		</section>	
	</section>

	<section class="about" id="about">
		<div class="container">
			<div class="about__intro">
				<h1 class="js-inview appear">We are Alert Security Inc.</h1>
				<div class="js-inview appear">
					<h3>We </h3>
					<h3 class="js-rotating-words active">Deliver</h3>
					<h3 class="js-rotating-words">Protect</h3>
					<h3 class="js-rotating-words">Rise Above</h3>
					<h3 class="js-rotating-words">Are Your Local Response</h3>
					<h3 class="js-rotating-words">Provide Professional Disgretion</h3>
					<h3 class="js-rotating-words">Protect homes and businesses</h3>
					<h3 class="js-rotating-words">Are security for a changing world</h3>
					<h3 class="js-rotating-words">Are your source for security</h3>
					<h3 class="js-rotating-words">Are your source for local Residential &amp; Commercial Security Systems</h3>
				</div>
			</div>
			<div class="about__container">
				<div class="about__left js-inview appear">
					<p>Protect what you love most. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus auctor cursus. Aliquam sed rhoncus sem. Suspendisse ullamcorper elit magna, in hendrerit lorem egestas semper. Donec justo sapien, imperdiet feugiat hendrerit sit amet, tincidunt vel risus. Pellentesque luctus ornare tincidunt. Aenean egestas ante et sem posuere, quis posuere elit condimentum.</p>
				</div>
				<div class="about__right js-inview appear">
					<img src="<?php echo $imagedir ?>/1.jpg">
				</div>
			</div>

			<div class="about__cta js-inview appear">
				<h3>Contact us for a <span>FREE</span> Custom Security Review Today</h3>
				<a class="button" href="#contact">Contact Us</a>
			</div>

		</div>	
	</section>


	<section class="sub-hero">
		<div class="container">
			<div class="sub-hero__heading">
				<h3 class="js-inview appear">Why a Home Security System is a Necessity</h3>
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
	<section class="customers" id="customers">
		<div class="container">

			<div class="customers__header">
				<h3 class="js-inview appear">What Our Customers Say About Us</h3>
				<p class="js-inview appear">Alert Security Inc. has partnered with Alarm Center Inc., a 24-hour state of the art UL listed local monitoring center that has provided monitoring for over 30 years because we believe in answering the phone with a “live” voice rather than an automated attendant. Because we believe in quality, we use Honeywell security products for the most trusted systems available.</p>
			</div>	

			<div class="customers__logos">
				<div class="customers__logo js-inview appear">
					<img src="<?php echo $imagedir ?>/bbb-logo.png" alt="A+ Rating Better Business Bureau">
				</div>
				<div class="customers__logo js-inview appear">
					<img src="<?php echo $imagedir ?>/angies-list.png" alt="Angie's List">
				</div>
			</div>

			<div class="customers__testimonials js-inview appear js-testimonials">
				<div class="customers__testimonial">
					<blockquote>
						"I'd be lost without Alert Security Inc.."
					</blockquote>
					<cite>- Cassy K.</cite>
				</div>
				<div class="customers__testimonial">
					<blockquote>
						"Fantastic, I'm totally blown away by Alert Security Inc.."
					</blockquote>
					<cite>- Jack F.</cite>
				</div>
				<div class="customers__testimonial">
					<blockquote>
						"The very best. Alert Security Inc. is awesome!"
					</blockquote>
					<cite>- Way O.</cite>
				</div>
				<div class="customers__testimonial">
					<blockquote>
						"Keep up the excellent work. You won't regret it. Alert Security Inc. impressed me on multiple levels. I will recommend you to my neighbors."
					</blockquote>
					<cite>- Thebault E.</cite>
				</div>
			</div>	
			
		</div>
	</section>
	<section class="services" id="services">
		<div class="container">

			<div class="services__header">
				<h3 class="js-inview appear">The Services we Provide</h3>
			</div>	

			<div class="services__icons">
				<div class="services__icon js-inview appear">
					<i class="fa fa-building" aria-hidden="true"></i>
					<h6>Commercial Security</h6>
				</div>
				<div class="services__icon js-inview appear">
					<i class="fa fa-home" aria-hidden="true"></i>
					<h6>Residential Security</h6>
				</div>
				<div class="services__icon js-inview appear">
					<i class="fa fa-road" aria-hidden="true"></i>
					<h6>New Construction &amp; Pre-Wire</h6>
				</div>
				<div class="services__icon js-inview appear">
					<i class="fa fa-id-card" aria-hidden="true"></i>
					<h6>Commercial Card Access</h6>
				</div>
				<div class="services__icon js-inview appear">
					<i class="fa fa-fire" aria-hidden="true"></i>
					<h6>Residential Smoke Detection</h6>
				</div>
			</div>
			
			<div class="services__cta">
				<a class="button" href="#contact">Find Out More</a>	
			</div>
		</div>
	</section>
	<section class="products" id="products">
		<div class="container">

			<div class="products__header">
				<h3 class="js-inview appear">The Products We Use</h3>
				<p class="js-inview appear">Alert Security Inc. has partnered with Alarm Center Inc., a 24-hour state of the art UL listed local monitoring center that has provided monitoring for over 30 years because we believe in answering the phone with a “live” voice rather than an automated attendant. Because we believe in quality, we use Honeywell security products for the most trusted systems available.</p>
			</div>	

			<div class="products__container">
				<div class="products__left">
					<img src="<?php echo $imagedir ?>/products/keypad.png" class="js-inview slide-right">
				</div>
				<div class="products__right js-inview appear">
					<h3>Keypad</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in mauris eu purus facilisis eleifend at nec nisi. Cras volutpat tortor tempor tortor vestibulum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in mauris eu purus facilisis eleifend at nec nisi. Cras volutpat tortor tempor tortor vestibulum condimentum.</p>
				</div>
			</div>
			<div class="products__container">
				<div class="products__left js-inview appear">
					<img src="<?php echo $imagedir ?>/products/remote-control-2.jpg" class="js-inview slide-left">
				</div>
				<div class="products__right">
					<h3>Wireless Keys</h3>
					<p>Control your security system with the touch of a button in or around your home.</p>
				</div>
			</div>	
			<div class="products__container">
				<div class="products__left">
					<img src="<?php echo $imagedir ?>/products/alarm-communicator.jpg" class="js-inview slide-right">
				</div>
				<div class="products__right js-inview appear">
					<h3>Internet and Digital Cellular Alarm Communicator</h3>
					<p>Control your security system from any wireless handheld device...anywhere in the world!</p>
				</div>
			</div>	
			<div class="products__container">
				<div class="products__left js-inview appear">
					<img src="<?php echo $imagedir ?>/products/smoke-detector.jpg" class="js-inview slide-left">
				</div>
				<div class="products__right">
					<h3>Smoke Detector</h3>
					<p>System Sensor i3TM series smoke detectors represent significant advancement in conventional detection. The i3 family is founded on three principles: installation ease, intelligence, and instant inspection.</p>
				</div>
			</div>
		</div>

		
	</section>
	<section class="contact" id="contact">
		<div class="container">
			<div class="contact__header">
				<h3 class="js-inview appear">Contact Us</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in mauris eu purus facilisis eleifend at nec nisi. Cras volutpat tortor tempor tortor vestibulum condimentum.</p>
			</div>	
			<div class="contact__container">
				<div class="contact__form js-inview appear">
					<?php echo do_shortcode( '[contact-form-7 id="7" title="Contact form 1"]' ); ?>
				</div>	
			</div>	
		</div>
	</section>
</div>	

<?php get_footer();
