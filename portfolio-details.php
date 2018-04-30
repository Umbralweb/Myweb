<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Jose Mariani - Web Designer and programer</title>
<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">

<!--Favicon-->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
<!-- Preloader -->
    <div class="preloader"></div>
        <?include("header.php");?>
    <!--Main Contetn Outer Box-->
    <div class="main-content-outerbox home-page-content">
    	<!--Fixed Left Column-->
    	<div class="fixed-left-column">
			<div class="bg-box" style="background-image:url(images/background/14.jpg);"></div>
			<div class="overlay-box"></div>
		<div class="content-box">
            	<div class="sidebar-title"><h2><?echo $title?></h2></div>
                <div class="page-progress-bar"><div class="bar-inner"><div class="page-progress" style="width: 63.4695%;"></div></div></div>
            	<!--Portfolio Content-->
				<div class="portfolio-content">
                    <div class="text-box">
                    	<div class="text">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards.</div>
                    </div>
				</div>
                
			</div></div>
		<!--Main Content Column-->
    	<div class="main-content-column" id="viewport">
			<div class="content-column-inner">
			<div class="content-container">
                <div class="fixed-top-bar">
						<!--Nav Outer-->
						<div class="nav-outer clearfix">
							<!--Search Form-->
                            <div class="search-form-one">
                                <form id="language">
                                    <div class="form-group">
                                        <!--input type="search" name="field-name" value="" placeholder="Search" required-->
                                        <img id="es" class="lang" data-toggle="tooltip" title="Español" src="images/icons/es.svg"><img id="en" class="lang" data-toggle="tooltip" title="English" src="images/icons/gb.svg">
                                    </div>
                                </form>
                            </div>
							<!-- Back Menu -->
							<?include("back-menu.php")?>
						</div>
						<!--Nav Outer End-->
					</div><!--End Fixed Top Bar-->
                    <section class="portfolio-section portfolio-details-section">
                    	<div class="portfolio-item-details">
                                
                            <div class="auto-container">
                                <!--Title Style One-->
                                <div class="title-style-one"><h2>Yes’ i can </h2></div>
                                <div class="content-box">
                                	<div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation. </div>
                                    
                                	<div class="main-image-box">
                                        <figure class="image"><img src="images/resource/fetured-image-3.jpg" alt=""></figure>
                                        <div class="overlay-box">
                                            <h3>Design is not <br>just what it looks <br>like and feels like</h3>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <!--Content Column-->
                                        <div class="content-column col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                            <div class="inner">
                                            	<h4>PROJECT DETAILS</h4>
                                                <div class="text">
                                                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                                                    <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps.</p>
                                                </div>
                                                <div class="link-box"><a href="#" class="theme-btn btn-style-one">View Project</a></div>
                                            </div>
                                        </div>
                                        
                                        <!--Info Column-->
                                        <div class="info-column col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                            <div class="inner">
                                            	<ul class="info-list">
                                                	<li class="clearfix"><span class="pull-left subtitle">Category   </span> <span class="pull-right">Branding / Photography</span></li>
                                                    <li class="clearfix"><span class="pull-left subtitle">Date   </span> <span class="pull-right">December , 27 </span></li>
                                                    <li class="clearfix"><span class="pull-left subtitle">Client   </span> <span class="pull-right">Smith</span></li>
                                                    <li class="clearfix"><span class="pull-left subtitle">Address   </span> <span class="pull-right">webino.ne</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <!--Post Controls-->
                                <div class="post-controls-one">
                                	<div class="clearfix">
                                    	<a href="#" class="prev-post pull-left"><span class="fa fa-angle-left"></span>&nbsp; Prev</a>
                                        <a href="#" class="prev-post pull-right">Next &nbsp;<span class="fa fa-angle-right"></span></a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </section>
                    <!--Main Footer-->
					<? include("footer.php");?>
			</div>
			</div>
		</div>	
	</div>
    
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-arrow-up"></span></div>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<!--Revolution Slider-->
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>
<!--End Revolution Slider Script-->

<script src="js/isInViewportLib.js"></script>
<script src="js/isInViewport.js"></script>
<script src="js/scrollTo.js"></script>
<script src="js/pagenav.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/owl.js"></script>
<script src="js/knob.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>

</body>
</html>
