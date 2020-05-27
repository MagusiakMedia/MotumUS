<?php 


	if(!isset($meta['title']) || ($meta['title'] == "")){
		$meta['title'] = "The Way Forward";
	}
	if(!isset($meta['page_description']) || ($meta['page_description'] == "")){
		$meta['page_description'] = "At Motum, we are ONLY about helping companies grow revenue. We have been helping organizations identify and eliminate limitations and exploit opportunities for more than two decades. Whether it’s a simple tune-up or a full-scale overhaul, Motum has the rapid and high-impact approach to help you achieve your growth objectives.";
	}
	if(!isset($meta['page_keywords']) || ($meta['page_keywords'] == "")){
		$meta['page_keywords'] = "Increase revenue, lead generation optimization, deal size/average selling price optimization, close rate improvement, customer acquisition cost reduction, data-driven revenue growth, marketing leadership as a service, low lead volume, customer acquisiton costs too high, close rates too low, data driving your decision making, deals priced accurately, lack experience leadership overseeing marketing function, burn the boats, generate revenue";
	}
	if(!isset($meta['page_image']) || ($meta['page_image'] == "")){
		$meta['page_image'] = "main-image.png";
	}
	if(!isset($meta['page_url']) || ($meta['page_url'] == "")){
		$meta['page_url'] = "";
	}

	$homeActive = $solutionsActive = $clientsActive = $aboutActive = $connectActive = "";

	if(isset($meta['breadcrumb'])){
		if($meta['breadcrumb'] == "Home"){
			$homeActive = "active";
		}
		if($meta['breadcrumb'] == "Solutions"){
			$solutionsActive = "active";
		}
		if($meta['breadcrumb'] == "Clients"){
			$clientsActive = "active";
		}
		if($meta['breadcrumb'] == "About"){
			$aboutActive = "active";
		}
		if($meta['breadcrumb'] == "Connect"){
			$connectActive = "active";
		}
	}



	//$prefix = "/MotumWeb/";
	$prefix = "/";

	//$domain = "http//www.magusiakmedia.com";
	$ImageDomain = "http://www.motum-us.com/";
	$domain = "";

	$this_domain = $domain . $prefix;
?>


<!DOCTYPE html>

<html lang="en">
<head>
	<!-- Google Tag Manager -->

	
	<script type="text/javascript">
	
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-167782435-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();

	</script>


	<!-- End Google Tag Manager -->


	<meta charset="utf-8">
	<title>Motum | <?php echo $meta['title']; ?></title>
	<meta name="description" 		content="<?php echo $meta['page_description']; ?>" />
	<meta name="keywords" 			content="<?php echo $meta['page_keywords']; ?>" />

	
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />

	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" 		content="Motum | <?php echo $meta['title']; ?>">
	<meta property="og:description" content="<?php echo $meta['page_description']; ?>">
	<meta property="og:url" 		content="<?php echo $ImageDomain . $meta['page_url']; ?>">
	<meta property="og:image" 		content="<?php echo $ImageDomain; ?>static/media/images/og/<?php echo $meta['page_image']; ?>">
	
	<meta name="twitter:card" 		content="summary_large_image">
	<meta property="og:site_name" 	content="Motum LLC | The Way Forward">
	<meta name="twitter:image:alt" 	content="Motum LLC | The Way Forward">

	<link rel="canonical" 			href="<?php echo $this_domain . $meta['page_url']; ?>">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="/favicon.ico" />
  
    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?php echo $prefix; ?>static/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo $prefix; ?>static/css/font-awesome.css">
	
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo $prefix; ?>static/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700;900&display=swap" rel="stylesheet"> 

    <!-- Custom styles for this template -->
    <link href="<?php echo $prefix; ?>static/css/motum.css" rel="stylesheet">
    <link href="<?php echo $prefix; ?>static/css/aos.css" 	 rel="stylesheet">

	<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="'<?php echo $prefix; ?>static/css/ie.css" />
	<![endif]-->
	

		
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="'<?php echo $prefix; ?>static/js/html5shiv.min.js"></script>
      <script src="'<?php echo $prefix; ?>static/js/respond.min.js"></script>
    <![endif]-->
	

</head>


<body> 
	<!-- Google Tag Manager (noscript) -->
	
	<!-- End Google Tag Manager (noscript) -->
	
	<!-- Facebook Tag Manager (noscript) -->
	
	<!-- End Facebook Tag Manager (noscript) -->

	<header id = "page-header">
		<nav class="navbar">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo $prefix; ?>"><img src = "<?php echo $prefix; ?>static/media/images/logo-main.png" /></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li class="<?php echo $homeActive; ?>"><a href="<?php echo $prefix; ?>">Home</a></li>
						<li class="<?php echo $solutionsActive; ?> dropdown">
          					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Solutions <span class="caret"></span></a>
          					<ul class="dropdown-menu">
            					<li><a href="<?php echo $prefix; ?>our-solutions/">Our Solutions</a></li>
            					<li><a href="<?php echo $prefix; ?>our-solutions/lead-generation-optimization/">Lead Generation Optimization</a></li>
								<li><a href="<?php echo $prefix; ?>our-solutions/deal-size-average-selling-price-optimization">Deal Size/Average Selling Price Optimization</a>
								<li><a href="<?php echo $prefix; ?>our-solutions/close-rate-improvement">Close Rate Improvement</a>
								<li><a href="<?php echo $prefix; ?>our-solutions/customer-acquisition-cost-reduction">Customer Acquisition Cost Reduction</a>
								<li><a href="<?php echo $prefix; ?>our-solutions/data-driven-revenue-growth">Data-Driven Revenue Growth</a>
								<li><a href="<?php echo $prefix; ?>our-solutions/marketing-leadership-as-a-service">Marketing Leadership As A Service</a>
          					</ul>
        				</li>
						<li class="<?php echo $clientsActive; ?>"><a href="<?php echo $prefix; ?>representative-clients/">Representative Clients</a></li>
						<li class="<?php echo $aboutActive; ?>"><a href="<?php echo $prefix; ?>about-motum/">About Motum</a></li>
						<li class="<?php echo $connectActive; ?>"><a href="<?php echo $prefix; ?>connect-with-us/">Connect With Us</a></li>
					</ul>
				</div>
			</div>
		</nav> 
	</header>
<!-- body content -->