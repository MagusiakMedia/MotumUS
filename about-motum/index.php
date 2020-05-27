<?php 
		$meta = array(
    	    "breadcrumb" 		=> "About",
    	    "title" 			=> "About Motum",
    	    "page_description" 	=> "",
    	    "page_keywords" 	=> "",
    	    "page_image" 		=> "",
    	    "page_url" 			=> "about-motum/",
        );
        
include ('../scripts/include/module_header.php'); ?>

<main id = "main" class = "secondary about-us">
        <div class = "container-fluid">

            <div class = "row">
                <div class="hero about-us" >
                    <div class = "col-sm-12">
                        <div class = "full-width-motion">
                            <img class = "chess-piece" src = "<?php echo $prefix; ?>static/media/images/king-small.png" />
                        </div>
                        <div class = "text-wrapper absolute" >
                            <h2 data-aos="fade-in" data-aos-delay = "2000">
                                Motum, The Way Forward <div class = "dash"></div>
                            </h2>
                            <h1 data-aos="fade-in" data-aos-delay = "2000">
                                Revenue Performance Solved
                            </h1>
                        </div>
                    </div>
                    <!--<div class = "col-sm-12">
                        <div class = "image-wrapper">
                            <img class = "chess-piece" src = "<?php echo $prefix; ?>static/media/images/king-prime.png" />
                        </div>
                        <div class = "text-wrapper" >
                            <h2 data-aos="fade-up-right" data-aos-delay = "1500">
                                Motum, The Way Forward <div class = "dash"></div>
                            </h2>
                            <h1 data-aos="fade-up-left" data-aos-delay = "2000">
                                Revenue Performance Solved
                            </h1>
                        </div>
                    </div> -->
                </div>
            </div>


            <div class = "row">
                
                <div class = "panel-row flex">
                    
                    <div class = "col-sm-7 flex-col">
                        <div class = "panel-text justify" >
                            <h3>About Us</h3>
                            <p>
                                At <strong>Motum</strong>, we are ONLY about helping companies grow revenue. We have been helping organizations identify and eliminate limitations and exploit opportunities for more than two decades. Whether it’s a simple tune-up or a full-scale overhaul, <strong>Motum</strong> has the rapid and high-impact approach to help you achieve your growth objectives.
                            </p>
                            
                            <div class = "grey-box">
                                <p>
                                    There are only <strong>four variables</strong> in the revenue performance equation: 
                                </p>
                                <ol >
                                    <li>Attracting enough qualified prospects. </li>
                                    <li>Converting those prospects to customers. </li>
                                    <li>Maximizing the price. </li>
                                    <li>Doing so at the lowest possible cost.  </li>
                                </ol>
                            </div>

                            <p class = "indent-right">
                                <em>It sounds simple, but impacting it can be complex.</em>
                            </p>
                            <p>
                                <strong>Motum</strong> has solved this equation for hundreds of early-stage start-ups, mid-market organizations, and Fortune 1000 companies falling short of their revenue potential. 
                            </p>
                            <p>
                            

                                Do you have a sufficient <a href = "<?php echo $prefix; ?>our-solutions/lead-generation-optimization/">stream of high-quality leads</a>? 
                                Is your sales team <a href = "<?php echo $prefix; ?>our-solutions/close-rate-improvement/">converting enough opportunities into revenue</a>?
                                Are you <a href = "<?php echo $prefix; ?>our-solutions/deal-size-average-selling-price-optimization/">experiencing lower pricing</a> or deal size than your competition?  
                                Are you <a href = "<?php echo $prefix; ?>our-solutions/customer-acquisition-cost-reduction/">spending too much money and resources to acquire new customers</a>?  
                                Are you <a href = "<?php echo $prefix; ?>our-solutions/data-driven-revenue-growth/">lacking timely, trustworthy data</a> to use in making sound decisions?
                                If so, please <a href = "<?php echo $prefix; ?>connect-with-us/">reach out to us</a>. 
                                We would like to show you how we can help.

                            </p>
                        </div>

                    </div>

                    <div class = "col-sm-5 hidden-sm">
                        <div class = "panel-img chess-alt flex-col">
                            <div class = "overlay"></div>
                            <a href = "<?php echo $prefix; ?>connect-with-us/" class = "cta">Connect With Us</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class = "row">
                <div class = "panel-row">
                    <div class = "col-sm-12 text-center">
                        <h2>Our Locations</h2><br />
                    </div>
                </div>
            </div>

            <div class = "row" data-aos="fade-up">
                <div class = "panel-row flex">

                    <div class = "col-sm-4 col-xs-12 flex-col-icon">
                        <div class = "icon-item flex-col-icon">
                            <div class = "icon"><img src = "<?php echo $prefix; ?>static/media/images/icon-location.png" /></div>
                            <div class = "icon-label">Dallas, Texas</div>
                            <div class = "content address">
                                1452 Hughes Road, Suite 200 <br />Grapevine, TX 76051 
                            </div>
                        </div>
                    </div>


                    <div class = "col-sm-4 col-xs-12 flex-col-icon">
                        <div class = "icon-item flex-col-icon">
                            <div class = "icon"><img src = "<?php echo $prefix; ?>static/media/images/icon-location.png" /></div>
                            <div class = "icon-label">Washington, D.C.</div>
                            <div class = "content address">
                                8000 Towers Crescent Dr, 13th Floor <br />Vienna, VA 22182 
                            </div>
                        </div>
                    </div>

                    <div class = "col-sm-4 col-xs-12 flex-col-icon">
                        <div class = "icon-item flex-col-icon">
                            <div class = "icon"><img src = "<?php echo $prefix; ?>static/media/images/icon-location.png" /></div>
                            <div class = "icon-label">London, England</div>
                            <div class = "content address">
                            1 The Green, Richmond <br />Surrey, UK TW91PL 
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <?php include ('../scripts/include/module_carousel.php'); ?>

</main>



<!-- body content -->


<?php include ('../scripts/include/module_footer.php'); ?>