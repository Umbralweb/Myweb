<?require("lg-module.php");?>
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

<!--Favicon and icons-->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<script defer src="js/fontawesome-all.js"></script>
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
    <!--Home Banner-->
    <section class="main-slider home-banner inner-banner fullscreen-banner" style="background-image:url(videos/video-banner.jpg);">
    
        <!--Video-->
        <video class="bg-video" preload="auto" autoplay loop muted>
            <source src="videos/video-banner.webm" type="video/webm" />
            <source src="videos/video-banner.mp4" type="video/mp4" />
            <h3>This browser does not happen to support video</h3>
		</video>
        
        <!--Overlay Layer-->
        <div class="overlay-layer"></div>
        
        <!--Content Layer-->
    	<div class="content-outer">
        	<div class="content-inner">
                <div class="auto-container">
                	<h3><?php echo $lang["iam"]; ?></h3>
                    <h2>JOSE MARIANI</h2>
                    <div class="text"><?php print $lang["descripcion"];?></div>
                    <div class="link-box"><a href="contact.php" class="theme-btn btn-style-one"><?php echo $lang["writeme"]; ?></a></div>
                </div>
            </div>
        </div>
        
    </section>
    <!--End Home Banner-->
	
    <!--Main Contetn Outer Box-->
    <div class="main-content-outerbox home-page-content">
    	<!--Fixed Left Column-->
    	<div class="fixed-left-column home-fixed-left-column">
			<div class="bg-box" style="background-image:url(images/background/1.jpg);"></div>
			<div class="overlay-box"></div>
			<div class="content-box">
            	<div class="sidebar-title" data-sidebar-title="<?php echo $lang["about"];?>"><h2><?php echo $lang["about"]; ?></h2></div>
                <div class="page-progress-bar"><div class="bar-inner"><div class="page-progress"></div></div></div>
            	<!--About Content-->
				<div class="variable-content hidden-sidebar-content" data-scroll-content="#about-section">
                    <div class="text-box">
                    	<div class="text"><? echo $lang["lateral_bio"];?></div>
                        <div class="signature">Steve Jobs</div>
                    </div>
				</div>
                
			</div>
		</div>
		
		<!--Main Content Column-->
    	<div class="main-content-column" id="viewport">
			<div class="content-column-inner">
				<div class="content-container">
                	<!--Fixed Top Bar-->
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
							<!-- Main Menu -->
							<?include("menu.php")?>          
						</div>
						<!--Nav Outer End-->
					</div><!--End Fixed Top Bar-->
                    
                    <!--About Section-->
                    <section class="who_i_am scroll-section" id="about-section"  data-sidebar-image="url(images/background/1.jpg)" data-sidebar-title="<?php echo $lang["about"]; ?>">
                    	<!--About Content-->
                        <div class="variable-content hidden-sidebar-content about-content" data-scroll-content="#about-section">
                            <div class="text-box">
                                <div class="text"><? echo $lang["lateral_bio"];?></div>
								<div class="signature">Steve Jobs</div>
                            </div>
                        </div>
                        
                    	<div class="auto-container">
                        	<!--Title Style One-->
                            <div class="title-style-one"><h2><?php echo $lang["who"]; ?></h2></div>
                            
                            <div class="content-box">
                            	<div class="text"><?php print $lang["about_description"]; ?></div>
                                <div class="image-box">
                                	<figure class="image"><img src="images/resource/fetured-image-1.jpg" alt=""></figure>
                                    <div class="overlay-box">
                                    	<?php print $lang["about_image_title"]; ?>
                                    </div>
                                </div>
                                <div class="text">
                                	<?php print $lang["about_description_2"]; ?>
                                </div>
<!--                                 <div class="link-box"><a href="#" class="theme-btn btn-style-one">Read More</a></div>
 -->                            </div>
                            
                            <div class="fun-facts facts-style-one">
                            	<div class="title-style-two"><h3><? echo $lang["own"];?></h3></div>
								<div class="sponsors-style-one">
                            	<ul class="sponsors-carousel-one owl-theme owl-carousel">
                                	<li><a href="#"><img src="images/clients/1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/clients/2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/clients/3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/clients/4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/clients/1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/clients/2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/clients/3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/clients/4.jpg" alt=""></a></li>
                                </ul>
                            </div>
                                <!-- <div class="facts-outer clearfix">
                                    <div class="fact-column col-lg-3 col-md-6 col-xs-12">
                                    	<div class="inner-box">
                                        	<div class="inner">
                                            	<div class="count-box"><span class="count-text" data-stop="523" data-speed="3000">0</span></div>
                                                <div class="title">Finished projects</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fact-column col-lg-3 col-md-6 col-xs-12">
                                    	<div class="inner-box">
                                        	<div class="inner">
                                            	<div class="count-box"><span class="count-text" data-stop="350" data-speed="2500">0</span></div>
                                                <div class="title">Working projects</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fact-column col-lg-3 col-md-6 col-xs-12">
                                    	<div class="inner-box">
                                        	<div class="inner">
                                            	<div class="count-box"><span class="count-text" data-stop="300" data-speed="2000">0</span></div>
                                                <div class="title">Happy customers</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fact-column col-lg-3 col-md-6 col-xs-12">
                                    	<div class="inner-box">
                                        	<div class="inner">
                                            	<div class="count-box"><span class="count-text" data-stop="250" data-speed="1500">0</span></div>
                                                <div class="title">Working hours</div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            
                        </div>
                    </section>
                    
                    
                    <!--Resume Section-->
                    <section class="bio_section scroll-section" id="bio-section"  data-sidebar-image="url(images/background/2.png)" data-sidebar-title="<?php echo $lang["resume"]; ?>">
                    	<!--Resume Content-->
                        <div class="variable-content hidden-sidebar-content resume-content" data-scroll-content="#bio-section">
                            <div class="text-box">
                                <div class="text"><? echo $lang["lateral_resume"];?></div>
                            </div>
                        </div>
                        
                    	<div class="auto-container">
                        	<!--Title Style One-->
                            <div class="title-style-one">
                            	<h2><?php echo $lang["resume"]; ?></h2>
                                <div class="title-text"><? echo $lang["resume_description"];?></div>
                            </div>
                            
                            <div class="row clearfix">
                            	<!--Column-->
                            	<div class="timeline-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                	<div class="inner">
                                    	<div class="col-header"><div class="icon-box"><div class="icon-inner"><div class="icon"><span class="flaticon-briefcase-1"></span></div></div></div> <h2><? echo $lang["resume_title_left"];?></h2></div>
                                        
                                        <!--Timeline Block-->
                                        <div class="timeline-block">
                                        	<div class="inner-box">
                                            	<div class="date">2014</div>
                                                <h4>Exclusive Authore</h4>
                                                <div class="text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. </div>
                                            </div>
                                        </div>
                                        
                                        <!--Timeline Block-->
                                        <div class="timeline-block">
                                        	<div class="inner-box">
                                            	<div class="date">2014 - 2016</div>
                                                <h4>Front -End Developer</h4>
                                                <div class="text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. </div>
                                            </div>
                                        </div>
                                        
                                        <!--Timeline Block-->
                                        <div class="timeline-block">
                                        	<div class="inner-box">
                                            	<div class="date">2016 - 2018</div>
                                                <h4>Freelancer</h4>
                                                <div class="text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <!--Column-->
                            	<div class="timeline-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                	<div class="inner">
                                    	<div class="col-header"><div class="icon-box"><div class="icon-inner"><div class="icon"><span class="flaticon-graduation-cap"></span></div></div></div> <h2><? echo $lang["resume_title_right"];?></h2></div>
                                        
                                        <!--Timeline Block-->
                                        <div class="timeline-block">
                                        	<div class="inner-box">
                                            	<div class="date">2015</div>
                                                <h4>Software Engineering</h4>
                                                <div class="text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. </div>
                                            </div>
                                        </div>
                                        
                                        <!--Timeline Block-->
                                        <div class="timeline-block">
                                        	<div class="inner-box">
                                            	<div class="date">2015 - 2016</div>
                                                <h4>Copmuter Science</h4>
                                                <div class="text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. </div>
                                            </div>
                                        </div>
                                        
                                        <!--Timeline Block-->
                                        <div class="timeline-block">
                                        	<div class="inner-box">
                                            	<div class="date">2017 - 2018</div>
                                                <h4>AutoMobiles</h4>
                                                <div class="text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </section>
                    
                    
                    <!--Services Section-->
                    <section class="services_section scroll-section" id="services-section"  data-sidebar-image="url(images/background/3.jpg)" 
                    data-sidebar-title="<?php echo $lang["services"]; ?>">
                    	
                        <!--Services Content-->
                        <div class="variable-content hidden-sidebar-content services-content" data-scroll-content="#services-section">
                            <div class="text-box">
                                <div class="text"><?php echo $lang["lateral_services"]; ?></div>
                                <ul class="services-list">
                                    <li><?php echo $lang["service_development"]; ?></li>
                                    <li><?php echo $lang["service_security"]; ?></li>
                                    <li><?php echo $lang["service_web"]; ?></li>
                                </ul>
                            </div>
							<div class="link-box"><a href="#" class="theme-btn btn-style-one"><?echo $lang["view_portfolio"];?></a></div>
                        </div>
                        
                    	<div class="auto-container">
                        	<!--Title Style One-->
                            <div class="title-style-one"><h2><?php echo $lang["services"]; ?></h2></div>
                            <div class="row clearfix">
                            	<!--Content Column-->
                                <div class="content-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                	<div class="inner">
                                    	<div class="bold-text"><? print( $lang["services_description"]);?></div>
                                        <div class="text"><? print ($lang["services_description_2"]);?></div>
                                        
                                        <div class="services clearfix">
                                        	<div class="service-box">
                                            	<a href="#" class="box-inner"><div class="icon"><span class="fas fa-code"></span></div><div class="txt"><?php echo $lang["service_development"]; ?></div></a>
                                            </div>
                                            <div class="service-box">
                                            	<a href="#" class="box-inner"><div class="icon"><span class="fas fa-bug"></span></div><div class="txt"><?php echo $lang["service_security"]; ?></div></a>
                                            </div>
                                            <div class="service-box">
                                            	<a href="#" class="box-inner"><div class="icon"><span class="far fa-object-group"></span></div><div class="txt"><?php echo $lang["service_web"]; ?></div></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!--Image Column-->
                                <div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                	<div class="inner">
                                    	<div class="image-box">
                                        	<figure class="image"><img src="images/resource/fetured-image-2.jpg" alt=""></figure>
                                            <div class="overlay">
                                            	<a href="images/resource/fetured-image-2.jpg" class="overlay-link lightbox-image"><span class="icon flaticon-link" title="Josemariani.com"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </section>
                    
                    
                    <!--Skills Section-->
                    <section class="skills_section scroll-section" id="skills-section"  data-sidebar-image="url(images/background/4.jpg)" data-sidebar-title="<?php echo $lang["skills"]; ?>">
                    	<!--Skills Content-->
                        <div class="variable-content hidden-sidebar-content skills-content" data-scroll-content="#skills-section">
                            <div class="text-box">
                                <div class="text"><?php echo $lang["lateral_skills"]; ?></div>
                                <ul class="services-list">
                                    <li><?php echo $lang["lateral_skills_t1"]; ?></li>
                                    <li><?php echo $lang["lateral_skills_t2"]; ?></li>
                                    <li><?php echo $lang["lateral_skills_t3"]; ?></li>
                                </ul>
                            </div>
                        </div>
                        
                        
                    	<div class="auto-container">
                        	<!--Title Style One-->
                            <div class="title-style-one">
                            	<h2><? echo $lang["skills"];?></h2>
                                <div class="title-text"><? echo $lang["skills_description"];?></div>
                            </div>
                            
                            <div class="code-skills">
                            	<div class="title-style-two"><h3><? echo $lang["other_skills"];?></h3></div>
                                
                            	<div class="row clearfix">
                                	<!--Column-->
                                    <div class="column style-two col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="inner-box">
                                            <div class="graph-outer">
                                                <input type="text" class="dial" data-fgColor="#f8c000" data-bgColor="#ededed" data-width="180" data-height="180" data-linecap="normal"  value="75">
                                                <div class="inner-text count-box"><span class="count-text txt" data-stop="75" data-speed="2000"></span>%</div>
                                            </div>
                                            <h3>Media</h3>
                                            <div class="text"> Approaches to corporate strategy fostr collaborative further the overall value  </div>
                                        </div>
                                    </div>
                                    
                                    <!--Column-->
                                    <div class="column style-two col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="inner-box">
                                            <div class="graph-outer">
                                                <input type="text" class="dial" data-fgColor="#f8c000" data-bgColor="#ededed" data-width="180" data-height="180" data-linecap="normal"  value="95">
                                                <div class="inner-text count-box"><span class="count-text txt" data-stop="95" data-speed="2000"></span>%</div>
                                            </div>
                                            <h3>Branding</h3>
                                            <div class="text"> Approaches to corporate strategy fostr collaborative further the overall value  </div>
                                        </div>
                                    </div>
                                    
                                    <!--Column-->
                                    <div class="column style-two col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="inner-box">
                                            <div class="graph-outer">
                                                <input type="text" class="dial" data-fgColor="#f8c000" data-bgColor="#ededed" data-width="180" data-height="180" data-linecap="normal"  value="85">
                                                <div class="inner-text count-box"><span class="count-text txt" data-stop="85" data-speed="2000"></span>%</div>
                                            </div>
                                            <h3>Print Design</h3>
                                            <div class="text"> Approaches to corporate strategy fostr collaborative further the overall value  </div>
                                        </div>
                                    </div>
                                    
                                    <!--Column-->
                                    <div class="column style-two col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="inner-box">
                                            <div class="graph-outer">
                                                <input type="text" class="dial" data-fgColor="#f8c000" data-bgColor="#ededed" data-width="180" data-height="180" data-linecap="normal"  value="90">
                                                <div class="inner-text count-box"><span class="count-text txt" data-stop="90" data-speed="2000"></span>%</div>
                                            </div>
                                            <h3>Web Design</h3>
                                            <div class="text"> Approaches to corporate strategy fostr collaborative further the overall value  </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                            <div class="design-skills">
                            	<div class="title-style-two"><h3><? echo $lang["code_skills"];?></h3></div>
                            	<!--Progress Bars-->
                                <div class="progress-bars">
                                    <!--Skill Item-->
                                    <div class="bar-item">
                                        <div class="skill-header clearfix">
                                            <div class="skill-title"><span class="fab fa-php"></span> PHP & MYSQL</div>
                                            <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="95">0</span>%</div></div>
                                        </div>
                                        <div class="skill-bar">
                                            <div class="bar-inner"><div class="bar progress-line" data-width="95"></div></div>
                                        </div>
                                    </div>
                                    <!--Skill Item-->
                                    <div class="bar-item">
                                        <div class="skill-header clearfix">
                                            <div class="skill-title"><span class="fab fa-html5"></span> HTML5 & CSS</div>
                                            <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="99">0</span>%</div></div>
                                        </div>
                                        <div class="skill-bar">
                                            <div class="bar-inner"><div class="bar progress-line" data-width="99"></div></div>
                                        </div>
                                    </div>
                                    <!--Skill Item-->
                                    <div class="bar-item">
                                        <div class="skill-header clearfix">
                                            <div class="skill-title"><span class="fab fa-js"></span> JavaScript & Jquery</div>
                                            <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="97">0</span>%</div></div>
                                        </div>
                                        <div class="skill-bar">
                                            <div class="bar-inner"><div class="bar progress-line" data-width="97"></div></div>
                                        </div>
                                    </div>
                                    <!--Skill Item-->
                                    <div class="bar-item">
                                        <div class="skill-header clearfix">
                                            <div class="skill-title"><span class="fab fa-android"></span> Android Development</div>
                                            <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="75">0</span>%</div></div>
                                        </div>
                                        <div class="skill-bar">
                                            <div class="bar-inner"><div class="bar progress-line" data-width="75"></div></div>
                                        </div>
                                    </div>
                                    <!--Skill Item-->
                                    <div class="bar-item">
                                        <div class="skill-header clearfix">
                                            <div class="skill-title"><span class="fab fa-apple"></span> IOS Development</div>
                                            <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="65">0</span>%</div></div>
                                        </div>
                                        <div class="skill-bar">
                                            <div class="bar-inner"><div class="bar progress-line" data-width="65"></div></div>
                                        </div>
                                    </div>
                                    
                                </div>
                        
                            </div>
                            
                        </div>
                    </section>
                    
                    
                    <!--What Clients Says Section-->
                    <section class="what_clients_say scroll-section" id="clients-section"  data-sidebar-image="url(images/background/5.jpg)" data-sidebar-title="<?php echo $lang["clients"]; ?>">
                    	
                        
                        <!--Clients Content-->
                        <div class="variable-content hidden-sidebar-content clients-content" data-scroll-content="#clients-section">
                            <div class="text-box">
                                <div class="text"><? echo $lang["lateral_clients"];?></div>
                                <div class="testimonial-box">
                                    <div class="inner">
                                        <div class="icon"><span alt="Steve Jobs" class="quote">''</span></div>
                                        <div class="txt"><? echo $lang["lateral_clients"];?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    	<div class="auto-container">
                        	<!--Title Style One-->
                            <div class="title-style-one">
                            	<h2><? echo $lang["clients_say"];?></h2>
                            </div>
                            
                            <!--Testimonials-->
                            <div class="testimonial-style-one">
                            	
                                <div class="single-item-carousel owl-theme owl-carousel">
                                    <!--Slide Item-->
                                    <div class="slide-item">
                                        <div class="slide-inner">
                                            <figure class="image-box img-circle"><img class="img-circle" src="images/resource/author-1.jpg" alt=""></figure>
                                            <div class="info">
                                                <div class="title">John Martin</div>
                                                <div class="designation">Designer</div>
                                            </div>
                                            <div class="text-box">
                                                <span class="quote-icon flaticon-left-quotes-sign"></span>
                                                <div class="text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Slide Item-->
                                    <div class="slide-item">
                                        <div class="slide-inner">
                                            <figure class="image-box img-circle"><img class="img-circle" src="images/resource/author-1.jpg" alt=""></figure>
                                            <div class="info">
                                                <div class="title">John Martin</div>
                                                <div class="designation">Designer</div>
                                            </div>
                                            <div class="text-box">
                                                <span class="quote-icon flaticon-left-quotes-sign"></span>
                                                <div class="text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Slide Item-->
                                    <div class="slide-item">
                                        <div class="slide-inner">
                                            <figure class="image-box img-circle"><img class="img-circle" src="images/resource/author-1.jpg" alt=""></figure>
                                            <div class="info">
                                                <div class="title">John Martin</div>
                                                <div class="designation">Designer</div>
                                            </div>
                                            <div class="text-box">
                                                <span class="quote-icon flaticon-left-quotes-sign"></span>
                                                <div class="text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <!--Title Style Two-->
                            <div class="title-style-two"><h3><?echo $lang["clients_title"];?></h3></div>
                            
                            <!--Sponsors / Clients / Customers-->
                            <div class="sponsors-style-one">
                            	<ul class="sponsors-carousel-one owl-theme owl-carousel">
                                	<li><a href="#"><img src="images/clients/1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/clients/2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/clients/3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/clients/4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/clients/1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/clients/2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/clients/3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/clients/4.jpg" alt=""></a></li>
                                </ul>
                            </div>
                            
                        </div>
                    </section>
                  
                    <!--Main Footer-->
                    <? require("footer.php");?>
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
<script src="js/lg.js"></script>
</body>
</html>
