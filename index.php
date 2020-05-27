	<?php 
	
		$meta = array(
    	    "breadcrumb" 		=> "Home",
    	    "title" 			=> "The Way Forward",
    	    "page_description" 	=> "",
    	    "page_keywords" 	=> "",
    	    "page_image" 		=> "",
    	    "page_url" 			=> "index.php",
    	);

	
		include ('scripts/include/module_header.php'); 
	?>

	<main id = "main">
		<section id = "welcome" class = "hidden-xs hidden-sm">
			<div class="jumbotron" >
				<img class = "jumbo ship img-responsive" src = "<?php echo $prefix; ?>static/media/images/ship.png" />
				<img class = "jumbo ship-burnt img-responsive" src = "<?php echo $prefix; ?>static/media/images/ship-fire.png" />
  					<div class="container-fluid">
					 	<div class = "col-sm-12 h1-wrapper">
							<div class = "h1">
								<div class = "animated-text" data-aos="zoom-right" data-aos-delay="1000" data-aos-easing="ease-in-sine"> Want More Revenue?</div>
								<div class = "animated-text sub" data-aos="zoom-right" data-aos-delay="3000" data-aos-easing="ease-in-sine" class = "sub"> Burn The Boats.</div>
							</div>
						</div>

						<div class = "col-sm-4 cell top active-cell">
							<h2>Low Lead Volume?</h2>
							<div class = "content">
								<ul>
									<li>Not enough deals to support revenue targets?</li>
									<li>Too many marketing leads aren't qualified?</li>
									<li>Valuable sales time being wasted sifting through low quality leads?</li>
								</ul>

								<a href = "<?php echo $prefix; ?>our-solutions/lead-generation-optimization/" class = "cta accent">Learn More</a>
							</div>
						</div>
						<div class = "col-sm-4 cell top center active-cell">
							<h2 class="">Customer Acquisiton Costs Too High?</h2>
							<div class = "content">
								<ul>
									<li>Campaigns not delivering results? </li>
									<li>Are your conversion rates too low? </li>
									<li>Mismatch between Sales and Operations planning?</li>
								</ul>
								<a href = "<?php echo $prefix; ?>our-solutions/customer-acquisition-cost-reduction/" class = "cta accent">Learn More</a>
							</div>
						</div>
						<div class = "col-sm-4 cell top active-cell">
							<h2>Close Rates Too Low?</h2>
							<div class = "content">
								<ul>
									<li>Is there a trust-based relationship before selling?</li>
									<li>Does your team know and adhere to your sales process?</li>
									<li>Is your team client-focused or solution-focused?</li>
								</ul>
								<a href = "<?php echo $prefix; ?>our-solutions/close-rate-improvement/" class = "cta accent">Learn More</a>
							</div>
						</div>

						<div class = "clearfix"> </div>

						



						<div class = "col-sm-4 cell active-cell">
							<h2 class="">Is Data Driving Your Decision Making?</h2>
							<div class = "content">
								<ul>
									<li>Do sales and marketing systems hinder sales teams’ performance?</li>
									<li>Is there reliable, consistent data available to make sound decisions about the market and potential and current customers?</li>
									<li>Do your systems enforce and automate your sales process?</li>
								</ul>
								<a href = "<?php echo $prefix; ?>our-solutions/data-driven-revenue-growth/" class = "cta accent">Learn More</a>
							</div>
						</div>
						<div class = "col-sm-4 cell center active-cell">
							<h2>Are Your Deals Too Small or Priced Too Low?</h2>
							<div class = "content">
								<ul>
									<li>Are you using pricing as a differentiator?</li>
									<li>Does the market perceive sufficient value in what you provide?</li>
									<li>Is your pricing below the market’s potential?</li>
								</ul>
								<a href = "<?php echo $prefix; ?>our-solutions/deal-size-average-selling-price-optimization/" class = "cta accent">Learn More</a>
							</div>
						</div>
						<div class = "col-sm-4 cell center active-cell">
							<h2>Do you lack experienced leadership overseeing your marketing function?</h2>
							<div class = "content">
								<ul>
									<li>Do you have enough qualified leads to fuel exceptional revenue growth?</li>
									<li>Are your marketing activities, programs, communications, planning, budgeting, metrics and reporting all managed by and expert?</li>
									<li>Who is working with sales to ensure all marketing goals, campaigns and strategies are aligned with the sales strategy?</li>
								</ul>
								<a href = "<?php echo $prefix; ?>our-solutions/marketing-leadership-as-a-service/" class = "cta accent">Learn More</a>
							</div>
						</div>
					</div>
			</div>
		</section>

		<section id = "welcome" class = "visible-xs visible-sm">
			<div class = "container-fluid no-padding">
				<div class = "mobile-jumbo">
					<div class = "h1-mobile">
						<div class = "animated-text" data-aos="zoom-right" data-aos-delay="1000" data-aos-easing="ease-in-sine"> Want More Revenue?</div>
						<div class = "animated-text sub" data-aos="zoom-right" data-aos-delay="3000" data-aos-easing="ease-in-sine" class = "sub"> Burn The Boats.</div>
					</div>
					<img class = "static-ship" src = "<?php echo $prefix; ?>static/media/images/ship.jpg" />
					<img class = "burning-ship" style = "display: none;" src = "<?php echo $prefix; ?>static/media/images/ship-fire.jpg" />
				</div>
			</div>

			<div id="homeCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
				<ol class="carousel-indicators">
					<li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#homeCarousel" data-slide-to="1"></li>
					<li data-target="#homeCarousel" data-slide-to="2"></li>
					<li data-target="#homeCarousel" data-slide-to="3"></li>
					<li data-target="#homeCarousel" data-slide-to="4"></li>
					<li data-target="#homeCarousel" data-slide-to="5"></li>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner">

					<div class="item">
						<div class="carousel-wrapper">
							<h2>Low Lead Volume?</h2>
							<ul>
								<li>Not enough deals to support revenue targets?</li>
								<li>Too many marketing leads aren't qualified?</li>
								<li>Valuable sales time being wasted sifting through low quality leads?</li>
							</ul>

							<a href = "<?php echo $prefix; ?>our-solutions/lead-generation-optimization/" class = "cta accent">Learn More</a>
						</div>
					</div>

					<div class="item ">
						<div class="carousel-wrapper">
						<h2 class="">Customer Acquisiton Costs Too High?</h2>
							<ul>
								<li>Campaigns not delivering results? </li>
								<li>Are your conversion rates too low? </li>
								<li>Mismatch between Sales and Operations planning?</li>
							</ul>
							<a href = "<?php echo $prefix; ?>our-solutions/customer-acquisition-cost-reduction/" class = "cta accent">Learn More</a>
						</div>
					</div>

					<div class="item ">
						<div class="carousel-wrapper">
							<h2>Close Rates Too Low?</h2>
							<ul>
								<li>Is there a trust-based relationship before selling?</li>
								<li>Does your team know and adhere to your sales process?</li>
								<li>Is your team client-focused or solution-focused?</li>
							</ul>
							<a href = "<?php echo $prefix; ?>our-solutions/close-rate-improvement/" class = "cta accent">Learn More</a>
						</div>
					</div>

					<div class="item ">
						<div class="carousel-wrapper">
							<h2 class="">Is Data Driving Your Decision Making?</h2>
							<ul>
								<li>Do sales and marketing systems hinder sales teams’ performance?</li>
								<li>Is there reliable, consistent data available to make sound decisions about the market and potential and current customers?</li>
								<li>Do your systems enforce and automate your sales process?</li>
							</ul>
							<a href = "<?php echo $prefix; ?>our-solutions/data-driven-revenue-growth/" class = "cta accent">Learn More</a>
						</div>
					</div>

					<div class="item ">
						<div class="carousel-wrapper">
							<h2>Are Your Deals Too Small or Priced Too Low?</h2>
							<ul>
								<li>Are you using pricing as a differentiator?</li>
								<li>Does the market perceive sufficient value in what you provide?</li>
								<li>Is your pricing below the market’s potential?</li>
							</ul>
							<a href = "<?php echo $prefix; ?>our-solutions/deal-size-average-selling-price-optimization/" class = "cta accent">Learn More</a>
						</div>
					</div>

					<div class="item active">
						<div class="carousel-wrapper">
							<h2>Do you lack experienced leadership overseeing your marketing function?</h2>
							<ul>
								<li>Do you have enough qualified leads to fuel exceptional revenue growth?</li>
								<li>Are your marketing activities, programs, communications, planning, budgeting, metrics and reporting all managed by and expert?</li>
								<li>Who is working with sales to ensure all marketing goals, campaigns and strategies are aligned with the sales strategy?</li>
							</ul>
							<a href = "<?php echo $prefix; ?>our-solutions/marketing-leadership-as-a-service/" class = "cta accent">Learn More</a>
						</div>
					</div>

					
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#homeCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#homeCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

		</section>

		<section id = "about-us">
			<div class = "container-fluid">
				<div class = "row">
					<div class = "col-sm-8 col-sm-offset-4 text-right">
						<div >
							<div class = "quote" data-aos="">
								<p>
									"Perhaps the greatest expression of commitment is the military leader who, upon reaching a foreign land, orders the torching of their ships, leaving his warriors no other option but to succeed. If your organization has made this same commitment to achieving unprecedented growth, Motum can help you strategically transform your organization to accelerate and optimize revenue."
									<br />
									<div class = "attribute">&mdash; Bill Huber, Motum co-founder</div>
								</p>
							</div>
							<div class = "logo text-right"><img src = "<?php echo $prefix; ?>static/media/images/logo-transparent.png" /></div>

						</div>
						
					</div>
					</div>
				</div>
			</div>
		</section>

		<?php include ('scripts/include/module_carousel.php'); ?>

	</main>



<!-- body content -->

	
<?php include ('scripts/include/module_footer.php'); ?>