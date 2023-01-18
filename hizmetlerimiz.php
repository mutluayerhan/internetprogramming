<?php
include_once("lib/db_connect.php");
$alan_id = (isset($_GET["alan_id"])) ? $_GET["alan_id"] : 0;
$kisiler = [];

if ($alan_id) {
    
    $surucu_kurs = new Surucu;
    $kisiler =  $surucu_kurs->getOyuncularByTakimId($alan_id);
    
} else {
    echo "takim id belirtiniz.";
}
?>






<!DOCTYPE html>
<!-- NordEx - Premium App Landing Pages Pack Template design by DSAThemes (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">




	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="DSAThemes"/>	
		<meta name="description" content="NordEx - Premium App Landing Pages Pack"/>
		<meta name="keywords" content="Responsive, HTML5 template, DSAThemes, Mobile, Application, One Page, Landing, Product, Mobile App">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
  		<!-- SITE TITLE -->
		<title>NordEx - Premium App Landing Pages Pack</title>
							
		<!-- FAVICON AND TOUCH ICONS -->
		<link rel="shortcut icon" href="images/faviconico" type="image/x-icon">
		<link rel="icon" href="images/favico.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="images/appletouch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/appl-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="imagesapple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" href="iages/apple-touch-icon.png">
		<link rel="icon" href="images/apple-touch-con.png" type="image/x-icon">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@300;400;500;700;900&display=swap" rel="stylesheet">

		<!-- BOOTSTRAP CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
				
		<!-- FONT ICONS -->
		<link href="css/flaticon.css" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="css/menu.css" rel="stylesheet">	
		<link id="effect" href="css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
		<link href="css/magnific-popup.css" rel="stylesheet">	
		<link href="css/owl.carousel.min.css" rel="stylesheet">
		<link href="css/flexslider.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css" rel="stylesheet">

		<!-- TEMPLATE CSS -->
		<link href="css/style.css" rel="stylesheet">	
		
		<!-- ON SCROLL ANIMATION -->
		<link href="css/animate.css" rel="stylesheet">

		<!-- RESPONSIVE CSS -->
		<link href="css/responsive.css" rel="stylesheet">
	
	</head>




	<body>




		<!-- PRELOADER SPINNER
		============================================= -->	
		<div id="loader-wrapper">
			<div id="loading">
				<span class="cssload-loader"><span class="cssload-loader-inner"></span></span>
			</div>
		</div>




		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">


			<!-- HEADER
			============================================= -->
			<header id="header" class="header tra-menu navbar-light">
				<div class="header-wrapper">


					<!-- MOBILE HEADER -->
				    <div class="wsmobileheader clearfix">	  	
				    	<span class="smllogo"><img src="images/logo-01.png" alt="mobile-logo"/></span>
				    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>	
				 	</div>


				 	<!-- NAVIGATION MENU -->
				  	<div class="wsmainfull menu clearfix">
	    				<div class="wsmainwp clearfix">


	    					<!-- HEADER LOGO -->
	    					<div class="desktoplogo"><a href="#hero-2" class="logo-black"><img src="data:image/png;base64,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" alt="header-logo"></a></div>
	    					<div class="desktoplogo"><a href="#hero-2" class="logo-white"><img src="data:image/png;base64,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" alt="header-logo"></a></div>


	    					<!-- MAIN MENU -->
	      					<nav class="wsmenu clearfix">
	        					<ul class="wsmenu-list nav-skyblue-hover">
									 <!-- SIMPLE NAVIGATION LINK -->
							    	<li class="nl-simple" aria-haspopup="true"><a href="/internetProgramming">Anasayfa</a></li>

									
								   


							  
							    	<!-- SIMPLE NAVIGATION LINK --> 
							    	<li class="nl-simple" aria-haspopup="true "><a href="hizmetlerimiz.php?alan_id=1">A1 Motosiklet</a></li>
									<li class="nl-simple" aria-haspopup="true"><a href="hizmetlerimiz.php?alan_id=2">A2 Motosiklet</a></li>
									<li class="nl-simple" aria-haspopup="true"><a href="hizmetlerimiz.php?alan_id=3">B1 Otomobil</a></li>
									<li class="nl-simple" aria-haspopup="true"><a href="hizmetlerimiz.php?alan_id=4">İLETİŞİM</a></li>
							    	


				


	        					</ul>
	        				</nav>	<!-- END MAIN MENU -->


	    				</div>
	    			</div>	<!-- END NAVIGATION MENU -->


				</div>     <!-- End header-wrapper -->
			</header>	<!-- END HEADER -->




			

			<!-- BLOG POSTS LISTING
			============================================= -->
			<section id="blog-page" class="bg_whitesmoke hero-offset-nav pb-60 blog-page-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-md-10 offset-md-1">
							<div class="section-title text-center pc-50 mb-70">		

								<!-- Title -->	
								<h3 class="h3-lg">EVET DOĞRU YERDESİN HOŞ GELDİN</h3>	

								<!-- Text -->	
								<p class="p-xl">YAZA EHLİYETSİZ GİRME !!!!!
							       
								</p>
									
							</div>	
						</div>
					</div>


					<!-- FEATURED POST -->
					<div class="rel blog-post featured-post wide-post">
	 					<div class="row d-flex align-items-center">

	 						<div class="featured-badge text-center ico-30 bg_whitesmoke yellow-color">
	 							<span class="flaticon-star"></span>
	 						</div>
																		
							<!-- BLOG POST IMAGE -->
				 			<div class="col-lg-7 blog-post-img">
								<img class="img-fluid" src="https://2.bp.blogspot.com/-2cEQOn9ApUU/UoTv4-_bklI/AAAAAAAAAGQ/q0naPfFJZB8/s1600/TehlikeveUyari1.png">	
									
							</div>
							<!-- BLOG POST TEXT -->
							<div class="col-lg-5 blog-post-txt">

								<!-- Post Tag -->
								<p class="p-md post-tag"> </p>	

								<!-- Post Link -->
								<h5 class="h5-xl">
									<a href="https://www.nvi.gov.tr/ssss-surucu-belgesi">SÜRÜCÜ BELGESİ HAKKINDA</a>
									
								</h5>
								<h5 class="h5-xl">
									<a href="https://www.guncelakademi.com/meb-elektronik-sinav-gorevi-nedire-sinav-h1238.html">E SINAV NEDİR</a>
									
								</h5>
								<h5 class="h5-xl">
									<a href="https://www.sigortam.net/stajyer-ehliyet-nedir">STAJYER EHLİYET NEDİR</a>
									
								</h5>
								<!-- Text -->
								<p class="p-md">
									
								</p>

								<!-- Post Meta -->
								<div class="post-meta">
									<div class=""><img src="https://media.istockphoto.com/id/1175117991/tr/vekt%C3%B6r/yasak-araba-ve-motosiklet-sembol-i%C5%9Fareti-beyaz-arka-plan-%C3%BCzerinde-izole-vekt%C3%B6r-ill%C3%BCstrasyon.jpg?s=170667a&w=0&k=20&c=QHrSaaeyp47jTXCRaYJ0_NQPZQGt_0vjhI8hmNG92xM=" alt=""></div>
									<p></p>
								</div>	

							</div>	<!-- END BLOG POST TEXT -->

						</div>   <!-- End row -->
				 	</div>	<!-- END FEATURED POST -->


					<!-- POSTS WRAPPER -->
					<div class="posts-wrapper">


						<!-- BLOG POSTS CATEGORY --> 
						<div class="row">
							<div class="col-md-12">
								<h5 class="h5-lg posts-category">KADROMUZ</h5>
							</div>
						</div>


				 		<div class="row">
							<?php
							foreach ($kisiler as $key => $kisi) {
								# code...
							
							?>


			 				<!-- BLOG POST #1 -->
					 		<div class="col-md-6 col-lg-4">
					 			<div class="blog-post mb-40 wow fadeInUp" data-wow-delay="0.4s">	
				 			
						 			<!-- BLOG POST IMAGE -->
						 			<div class="blog-post-img">
										
									</div>

									<!-- BLOG POST TEXT -->
									<div class="blog-post-txt">

										<!-- Post Tag -->
										<p class="p-md post-tag"></p>	

										<!-- Post Link -->
										<h5 class="h5-xs">
											<a href="single-post.html?alan_id=<?php $alan_id?>"><?= $kisi['isim_soyisim'] ?></a>
										</h5>

										<!-- Text -->
										<p class="p-md">Bizi tercih ettiğiniz için TEŞEKKÜR EDERİZ
										   
										</p>

										<!-- Post Meta -->
										<div class="post-meta">
											<div class="post-author-avatar"><img src="https://media.istockphoto.com/id/1130542936/tr/vekt%C3%B6r/motosiklet-motosiklet-sembol-simge-siyah.jpg?s=612x612&w=0&k=20&c=wsXmU_ZoIFTZz5xv7v6rqkjlG2VwTuPxICSCiWYDbfc=" alt="author-avatar"></div>
											
											<p></p>
										</div>	

									</div>

								</div>
					 		</div>	<!-- END  BLOG POST #1 -->


							 <?php } ?>
				 		</div>  <!-- End row -->
				 	</div>	<!-- END POSTS WRAPPER -->


				</div>     <!-- End container -->


				<!-- GEOMETRIC OVERLAY -->	
				<div class="bg_fixed geometric_overlay"></div>


			</section>	<!-- END BLOG POSTS LISTING -->




			<!-- PAGE PAGINATION
			============================================= -->
			<div class="bg_whitesmoke pb-100 page-pagination division">
				<div class="container">
					<div class="row">	
						<div class="col-md-12">

							<nav aria-label="Page navigation">
								<ul class="pagination ico-20 justify-content-center">
									<li class="page-item disabled"><a class="page-link" href="" tabindex="-1">
										<span class="flaticon-chevron-pointing-to-the-left"></span>
									</a></li>
								    <li class="page-item active"><a class="page-link" href="hizmetlerimiz.php?alan_id=1">1 <span class="sr-only">(current)</span></a></li>
								    <li class="page-item"><a class="page-link" href="hizmetlerimiz.php?alan_id=2">2</a></li>
								    <li class="page-item"><a class="page-link" href="hizmetlerimiz.php?alan_id=3">3</a></li>
								    <li class="page-item"><a class="page-link" href="hizmetlerimiz.php?alan_id=3">4</a></li>
                                    <li class="page-item"><a class="page-link" href="hizmetlerimiz.php?alan_id=3">5</a></li>

								    <li class="page-item"><a class="page-link" href="#"><span class="flaticon-right-chevron"></span></a></li>
								</ul>	
							</nav>					

						</div>
					</div>  <!-- End row -->	
				</div> <!-- End container -->
			</div>	<!-- END PAGE PAGINATION -->




			<!-- NEWSLETTER-1
			============================================= -->
			<section id="newsletter-1" class="bg_whitesmoke pb-20 newsletter-section division">
				<div class="container">
					<div class="newsletter-wrapper bg-white">
						<div class="row d-flex align-items-center">


							<!-- SECTION TITLE -->	
							<div class="col-lg-6">
								<div class="newsletter-txt">	

									<!-- Section ID -->	
						 			<span class="section-id">KAYIT OL</span>

						 			<!-- Title -->	
									<h4 class="h4-xl">E POSTA ADRESİNİZİ GİRİNİZ</h4>	

								</div>								
							</div>


							<!-- NEWSLETTER FORM -->
							<div class="col-lg-6">
								<form class="newsletter-form">
											
									<div class="input-group">
										<input type="email" autocomplete="off" class="form-control" placeholder="Your email address" required id="s-email">								
										<span class="input-group-btn">
											<button type="submit" class="btn btn-md btn-skyblue tra-skyblue-hover">GÖNDER</button>
										</span>										
									</div>

									<!-- Newsletter Form Notification -->	
									<label for="s-email" class="for m-notification"></label>
												
								</form>							
							</div>	  <!-- END NEWSLETTER FORM -->


						</div>	  <!-- End row -->
					</div>    <!-- End newsletter-holder -->
				</div>	   <!-- End container -->	
			</section>	<!-- END NEWSLETTER-1 -->




			<!-- FOOTER-1
			============================================= -->
			<footer id="footer-1" class="bg_whitesmoke footer division">
				<div class="container">


					<!-- FOOTER CONTENT -->
					<div class="row">


						<!-- FOOTER INFO -->
						<div class="col-md-12 col-lg-3">	
							<div class="footer-info mb-40">

								<!-- Footer Logo -->	
								<img class="footer-logo" src="data:image/png;base64,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" alt="footer-logo">

							</div>	
						</div>


						<!-- FOOTER LINKS -->
						<div class="col-sm-4 col-md-4 col-lg-3 offset-lg-1">
							<div class="footer-links">

								<!-- Title -->
								<h5 class="h5-xs">ŞUBELERİMİZ</h5>

								<!-- Footer Links -->
								<ul class="foo-links clearfix">
									<li><p class="p-md"><a href="#">Eskişehir Odunpazarı Bozlak Sokak</a></p></li>
									<li><p class="p-md"><a href="#">Eskişehir Tepebaşı Kuş Sokak</a></p></li>
									<li><p class="p-md"><a href="#">Eskişehir Sütlüce Kaynar Sokak</a></p></li>
									<li><p class="p-md"><a href="#">Eskişehir Emek Taşbaşı Sokak</a></p></li>
								</ul>						

							</div>	
						</div>


						<!-- FOOTER LINKS -->
						<div class="col-sm-4 col-md-4 col-lg-3">
							<div class="footer-links">

								<!-- Title -->
								<h5 class="h5-xs">EHLİYETTE MERAK ETTİKLERİNİZ</h5>

								<!-- Footer Links -->
								<ul class="foo-links clearfix">
									<li><p class="p-md"><a href="#">Ehliyette Stajyerlik</a></p></li>									
									<li><p class="p-md"><a href="#">Direksiyon Sınavı Nasıl Yapılır</a></p></li>							
									<li><p class="p-md"><a href="#">Özel Direksiyon Dersi</a></p></li>
									
								</ul>

							</div>	
						</div>


						<!-- FOOTER SOCIAL LINKS -->
						<div class="col-sm-4 col-md-4 col-lg-2">
							<div class="footer-socials-links text-right mb-25">
							
								<!-- Social Links -->
								<h5 class="h5-xs"><a href="#" class="foo-facebook">Facebook</a></h5>
								<h5 class="h5-xs"><a href="#" class="foo-twitter">Twitter</a></h5>
								<h5 class="h5-xs"><a href="#" class="foo-instagram">Instagram</a></h5>
																						
								<!--	
								<h5 class="h5-sm"><a href="#" class="foo-behance">Facebook</a></h5>
								<h5 class="h5-sm"><a href="#" class="foo-pinterest">Twitter</a></h5>
								<h5 class="h5-sm"><a href="#" class="foo-linkedin">Instagram</a></h5>
								<h5 class="h5-sm"><a href="#" class="google-plus">Dribbble</a></h5>
								<h5 class="h5-sm"><a href="#" class="youtube">Twitter</a></h5>
								<h5 class="h5-sm"><a href="#" class="foo-tumblr">Instagram</a></h5>
								<h5 class="h5-sm"><a href="#" class="foo-vk">Dribbble</a></h5>	
								-->

							</div>
						</div>
						

					</div>	 <!-- END FOOTER CONTENT -->

					
					<!-- BOTTOM FOOTER -->
					<div class="bottom-footer">
						<div class="row">

							<!-- FOOTER COPYRIGHT -->
							<div class="col-md-12">
								<div class="footer-copyright">
									<p>&copy; MUTLUAY SÜRÜCÜ KURSU</p>
								</div>
							</div>

						</div>
					</div>	<!-- END BOTTOM FOOTER -->


				</div>	    <!-- End container -->
			</footer>	<!-- END FOOTER-1 -->




		</div>	<!-- END PAGE CONTENT -->




		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="js/jquery-3.5.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/modernizr.custom.js"></script>
		<script src="js/jquery.easing.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/jquery.scrollto.js"></script>	
		<script src="js/menu.js"></script>
		<script src="js/jquery.flexslider.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>	
		<script src="js/wow.js"></script>
				
		<!-- Custom Script -->		
		<script src="js/custom.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->															
		<!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->

		<p>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48152.69528633698!2d29.01271007818618!3d41.035243200158526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac826d524c9f1%3A0xc14f7612337b7f38!2zw5xza8O8ZGFyL8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1519733547760" width="1325" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</p>


	</body>




</html>	