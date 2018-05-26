<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hpy
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="happy-welcome">
				<h2><?php _e('Welcome to HappyKite', 'hpy'); ?></h2>
				<p>We're an agency, a good agency - soon to be an even better agency once we'ce hired our new web developer!</p>				
			</div>
			<div class="wrapper">
				<button id="pinkButton">
					<?php _e('WORK WITH US', 'hpy'); ?>
				</button>
			</div>	
		</div>
	</div>
</div>

<!-- How can we help section -->

<section class="section how-we-can-help">
	
<div class="container-fluid help-you services-bg">		
		<h2 class=center><?php _e('How can we help?', 'hpy'); ?></h2>
		<div class="container help-content">
			<div class="gallery row">
				<div class="col-sm-3 col-xs-6">
					<div class="card">
 						<div>
							<img src="<?php echo IMAGES; ?>ico-design.png">
							<div> 
								<div class="card-body">
    								<h6 class="card-title">Design and UX</h6>
    									<p class="card-text">Normcore authentic stumptown umami snackwave, pork belly meditation blog church-key thundercats chambray quinoa. Shaman retro readymade, stumptown lyft normcore bespoke selfies. Chartreuse actually salvia tilde.</p>
    									<a href="#" class="card-link">Learn More</a>
  								</div>
							</div>	
						</div>
					</div>
				</div>
		
				<div class="col-sm-3 col-xs-6">
					<div class="card">
 						<div>
							<img src="<?php echo IMAGES; ?>ico-dev.png">
						<div> 
							<div class="card-body">
    							<h6 class="card-title">Wordpress Development</h6>
    							<p class="card-text">Normcore authentic stumptown umami snackwave, pork belly meditation blog church-key thundercats chambray quinoa. Shaman retro readymade, stumptown lyft normcore bespoke selfies. Chartreuse actually salvia tilde.</p>
    							<a href="#" class="card-link">Learn More</a>
  							</div>
						</div>		
						</div>
					</div>
				</div>
		
				<div class="col-sm-3 col-xs-6">
					<div class="card">
 						<div>
							<img src="<?php echo IMAGES; ?>ico-marketing.png">
						<div>	
							<div class="card-body">
    							<h6 class="card-title">Digital Marketing</h6>
    							<p class="card-text">Normcore authentic stumptown umami snackwave, pork belly meditation blog church-key thundercats chambray quinoa. Shaman retro readymade, stumptown lyft normcore bespoke selfies. Chartreuse actually salvia tilde.</p>
    							<a href="#" class="card-link">Learn More</a>
  							</div>
						</div>
			
						</div>
					</div>
				</div>
		
				<div class="col-sm-3 col-xs-6">
					<div class="card">
 						<div>
							<img src="<?php echo IMAGES; ?>ico-support.png">
						<div> 
							<div class="card-body">
    							<h6 class="card-title">Support and Maintenance</h6>
    							<p class="card-text">Normcore authentic stumptown umami snackwave, pork belly meditation blog church-key thundercats chambray quinoa. Shaman retro readymade, stumptown lyft normcore bespoke selfies. Chartreuse actually salvia tilde.</p>
    							<a href="#" class="card-link">Learn More</a>
  							</div>
						</div>			
						</div>
					</div>
				</div>
  			</div>
		</div>
	</div>
	
<!-- Some of our work section -->
 
<section class="section some-of-our-work">
<div class="container-fluid">	
		<h2 id="work-heading"><?php _e('Some of our work...', 'hpy'); ?></h2>	
		<div class="container">
			<div class="row">
				<div class="col-xs-4">
					<div class="card">
 						<div class="work-background">
							<img src="<?php echo IMAGES; ?>asset-1.jpg">
								<div> 
									<div class="card-body">
    									<h6 class="card-title">Exterior Solutions</h6>
    									<p class="card-text">Normcore authentic stumptown umami snackwave, pork belly meditation blog church-key thundercats chambray quinoa. Shaman retro readymade, stumptown lyft normcore bespoke selfies. Chartreuse actually salvia tilde.</p>
    									<a href="#" class="card-link">Learn More</a>
  									</div>
							 	</div>
						</div>
					</div>
				</div>
		
				<div class="col-xs-4">
					<div class="card">
 						<div class="work-background">
							<img src="<?php echo IMAGES; ?>asset-2.jpg">
								<div> 
									<div class="card-body">
    									<h6 class="card-title">Owatrol Direct</h6>
    									<p class="card-text">Normcore authentic stumptown umami snackwave, pork belly meditation blog church-key thundercats chambray quinoa. Shaman retro readymade, stumptown lyft normcore bespoke selfies. Chartreuse actually salvia tilde.</p>
    									<a href="#" class="card-link">Learn More</a>
  									</div>
								</div>
					 	</div>
					</div>
				</div>
		
				<div class="col-xs-4">
					<div class="card">
 						<div class="work-background">
							<div class="image">
								<img src="<?php echo IMAGES; ?>asset-3.jpg">
								<div class="coming-soon">
									<h6>Coming Soon!</h6>
								</div>
							</div>
							<div> 
								<div class="card-body">
    								<h6 class="card-title">In the Book</h6>
    								<p class="card-text">Normcore authentic stumptown umami snackwave, pork belly meditation blog church-key thundercats chambray quinoa. Shaman retro readymade, stumptown lyft normcore bespoke selfies. Chartreuse actually salvia tilde.</p>
    								<a href="#" class="card-link">Learn More</a>
  								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
</div>	


<!-- Who are we anyway section -->
	
<section class="section who-are-we">
<div class="container about">
	<div class="about-bg">
		<h2><?php _e('Who are we anyway?', 'hpy'); ?></h2>	
		<h7>Vaporware unicorn coloring book, forage craft beer meggings kitsch kickstarter ramps cray. Palo santo stumptown coloring book, 90's marfa crucifix air plant shaman venmo lomo. Single-origin coffee fashion axe mumblecore fam blog. Echo park 90's unicorn truffaut chillwave. La croix ethical roof party, irony microdosing keffiyeh taxidermy portland shaman cornhole jianbing bespoke.</h7>
		<p>Hammock cardigan marfa tofu bespoke. Cloud bread iceland poke disrupt tumeric knausgaard locavore stumptown tilde lumbersexual. Post-ironic kinfolk lo-fi deep v hexagon lomo jean shorts kogi vegan. Jean shorts beard small batch tilde synth gentrify. Pitchfork polaroid knausgaard street art, squid intelligentsia irony tacos tilde cred put a bird on it. Tacos flannel enamel pin crucifix, bespoke jean shorts organic wolf pabst. Swag cornhole chartreuse, wolf slow-carb literally man braid dreamcatcher PBR&B tacos flannel tattooed organic. Listicle cronut coloring book, selvage meggings shoreditch pop-up tumeric. </p>
	</div>
</div>

	
<?php get_footer(); ?>
