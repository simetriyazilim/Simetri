<!DOCTYPE HTML>
<html lang = "en">
	<head>
		<meta charset="utf-8" />
		<title>Simetri Yazılım</title>
		<meta content="IE=edge" http-equiv="X-UA-Compatible" />
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta property="og:type" content="company" />
		<meta property="og:title" content="Revelio Theme | Homepage" />
		<meta property="og:image" content="" />
		<meta property="og:description" content="" />
		<meta property="og:url" content="http://datcouch.com" />
		<meta property="og:site_name" content="Revelio Theme | Homepage" />
		<link rel="shortcut icon" type="image/png" href="images/favicon.png" />
		<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/dat-menu.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/main-stylesheet.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Oswald:300,400,700|Source+Sans+Pro:300,400,600,700&amp;subset=latin,latin-ext" />
		<!--[if lt IE 9 ]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			#featured-img-1 {
				background-image: url(images/slider/büyük/1.jpg);
			}
			#featured-img-2 {
				background-image: url(images/slider/büyük/2.jpg);
			}
			#featured-img-3 {
				background-image: url(images/slider/büyük/3.png);
			}
			#featured-img-4 {
				background-image: url(images/photos/image-4.jpg);
			}

			/* Man content & sidebar top lne, default #256193 */
			#sidebar .panel,
			#main-box #main {
				border-top: 5px solid #256193;
			}

			/* Slider colors, default #256193 */
			a.featured-select,
			#slider-info .padding-box ul li:before,
			.home-article.right ul li a:hover {
				background-color: #256193;
			}

			/* Button color, default #256193 */
			.panel-duel-voting .panel-duel-vote a {
				background-color: #256193;
			}

			/* Menu background color, default #000 */
			#menu-bottom.blurred #menu > .blur-before:after {
				background-color: #000;
			}

			/* Top menu background, default #0D0D0D */
			#header-top {
				background: #0D0D0D;
			}

			/* Sidebar panel titles color, default #333333 */
			#sidebar .panel > h2 {
				color: #333333;
			}

			/* Main titles color, default #353535 */
			#main h2 span {
				color: #353535;
			}

			/* Selection color, default #256193 */
			::selection {
				background: #256193;
			}

			/* Links hover color, default #256193 */
			.article-icons a:hover,
			a:hover {
				color: #256193;
			}

			/* Image hover background, default #256193 */
			.article-image-out,
			.article-image {
				background: #256193;
			}

			/* Image hover icons color, default #256193 */
			span.article-image span .fa {
				color: #256193;
			}
		</style>
	</head>
	<!--<body class="no-slider">-->
	<body class="has-top-menu">
		<!-- BEGIN #slider-imgs -->
		<div id="slider-imgs">
			<div class="featured-img-box">
				<div id="featured-img-1" class="featured-img"></div>
				<div id="featured-img-2" class="featured-img invisible"></div>
				<div id="featured-img-3" class="featured-img invisible"></div>
				<div id="featured-img-4" class="featured-img invisible"></div>
			</div>
		<!-- END #slider-imgs -->
		</div>

		<!-- BEGIN #top-layer -->
		<div id="top-layer">
			<div id="header-top">
				<div class="wrapper">
					<ul class="right">
						<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-twitch"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-steam"></i></a></li>
					</ul>
					<ul class="load-responsive" rel="Top menu">
						<li><a href="podcasts.html">Canlı Yayın</a></li>
						<li><a href="#drop-the-bass">Duyurular<small>2</small></a>
							<div class="drop">
								<div class="notify-header">Duyurular</div>
								<ol class="notify-list">
									<li>
										<a href="post.html" class="notify-content">
											<span class="article-thumb"><img src="images/photos/image-35.jpg" alt="" /></span>
											<span class="notify-head">
												<span class="notify-user"><b>Lorem Ipsum</b></span>
											</span>
											<span class="notify-text">Facete eruditi an vis, vel utamur aliquid partiendo ex</span>
											<span class="notify-date">11:22, Sep 11, 2012</span>
										</a>
									</li>
									<li>
										<a href="post.html" class="notify-content">
											<span class="article-thumb"><img src="images/photos/image-36.jpg" alt="" /></span>
											<span class="notify-head">
												<span class="notify-user"><b>Lorem Ipsum 2</b></span>
											</span>
											<span class="notify-text">Te deserunt eleifend usu, patrioque eloquentiam qui in</span>
											<span class="notify-date">11:22, Sep 11, 2012</span>
										</a>
									</li>
								</ol>
							</div>
						</li>
						<li><a href="login.html">Giriş</a></li>
					</ul>
				</div>
			</div>
			<section id="content">
				<header id="header">
					<div id="menu-bottom">
						<!-- <nav id="menu" class="main-menu width-fluid"> -->
						<nav id="menu" class="main-menu">
							<div class="blur-before"></div>
							<a href="index.html" class="header-logo left"><img src="images/logo.png" class="logo" alt="Revelio" title="" /></a>
							<a href="#dat-menu" class="datmenu-prompt"><i class="fa fa-bars"></i>Menü</a>
                            <ul class="load-responsive right" rel="Main menu">
                                <li><a href="index.html"><i class="fa fa-home"></i><strong>Anasayfa</strong></a></li>                                
                                <li><a href="events.html"><i class="fa fa-calendar"></i><strong>Etkinlikler</strong></a></li>
                                <li><a href="team.html"><i class="fa fa-users"></i><strong>Takım</strong></a></li>
                                <li><a href="index.html"><i class="fa fa-info-circle"></i><strong>Biz Kimiz ?</strong></a></li>
                                <li><a href="contact-us.html"><i class="fa fa-map-marker"></i><strong>İletişim</strong></a></li>
                            </ul>
						</nav>
					</div>
					<div id="slider">
						<div id="slider-info">
							<div class="padding-box">
								<ul>
									<li>
										<h2><a href="post.html">Deneme</a></h2>
										<p>Liber alterum mentitum ea vel, cu debet harum altera vim. Te velit voluptaria qui. Cu has ipsum vitae torquatos, at modus congue delicata duo adversarium...</p>
										<a href="post.html" class="read-more-r">Read this article</a>
									</li>
									<li class="dis">
										<h2><a href="post.html">Lorem ipsum dolor sit amet, ne nec suas graece</a></h2>
										<p>Liber alterum mentitum ea vel, cu debet harum altera vim. Te velit voluptaria qui. Cu has ipsum vitae torquatos, at modus congue delicata duo adversarium...</p>
										<a href="post.html" class="read-more-r">Read this article</a>
									</li>
									<li class="dis">
										<h2><a href="post.html">Lorem ipsum dolor sit amet, ne nec suas graece</a></h2>
										<p>Liber alterum mentitum ea vel, cu debet harum altera vim. Te velit voluptaria qui. Cu has ipsum vitae torquatos, at modus congue delicata duo adversarium...</p>
										<a href="post.html" class="read-more-r">Read this article</a>
									</li>
									<li class="dis">
										<h2><a href="post.html">Lorem ipsum dolor sit amet, ne nec suas graece</a></h2>
										<p>Liber alterum mentitum ea vel, cu debet harum altera vim. Te velit voluptaria qui. Cu has ipsum vitae torquatos, at modus congue delicata duo adversarium...</p>
										<a href="post.html" class="read-more-r">Read this article</a>
									</li>
								</ul>
							</div>
							<a href="javascript: featSelect(1);" id="featSelect-1" class="featured-select this-active">
								<span class="w-bar" id="feat-countdown-bar-1">.</span>
								<span class="w-coin" id="feat-countdown-1">0</span>
								<img src="images/photos/image-5.jpg" alt="" title="" />
							</a>
							<a href="javascript: featSelect(2);" id="featSelect-2" class="featured-select">
								<span class="w-bar" id="feat-countdown-bar-2">.</span>
								<span class="w-coin" id="feat-countdown-2">0</span>
								<img src="images/photos/image-6.jpg" alt="" title="" />
							</a>
							<a href="javascript: featSelect(3);" id="featSelect-3" class="featured-select">
								<span class="w-bar" id="feat-countdown-bar-3">.</span>
								<span class="w-coin" id="feat-countdown-3">0</span>
								<img src="images/photos/image-7.jpg" alt="" title="" />
							</a>
							<a href="javascript: featSelect(4);" id="featSelect-4" class="featured-select">
								<span class="w-bar" id="feat-countdown-bar-4">.</span>
								<span class="w-coin" id="feat-countdown-4">0</span>
								<img src="images/photos/image-8.jpg" alt="" title="" />
							</a>
						</div>
					</div>
				</header>
				<div id="main-box">
					
					<div id="main">
						<div class="content-padding">
							<div class="grid-articles">

								<!-- BEGIN .item -->
								<div class="item">
									
									<span class="article-image-out">
										<span class="image-comments"><span>21</span></span>
										<span class="article-image">
											<span class="nth1 strike-tooltip" title="Read Article">
												<a href="post.html"><i class="fa fa-eye"></i></a>
											</span>
											<span class="nth2 strike-tooltip" title="Save to read later">
												<a href="#"><i class="fa fa-plus"></i></a>
											</span>
											<a href="post.html"><img src="images/photos/image-25.jpg" alt="" title="" /></a>
										</span>
									</span>
									<h3><a href="post.html">Lorem ipsum dolor sit amet usu sit amet usu at quot case</a></h3>
									<p>Eos deleniti moderatius ea. Dolorem definiebas usu cu, quot case detracto mei in. Eum tollit eripuit voluptatibus ea, hinc choro omnesque eam cu mel te timeam...</p>
									<div>
										<a href="post.html" class="defbutton"><i class="fa fa-reply"></i>Read full article</a>
									</div>

								<!-- END .item -->
								</div>

								<!-- BEGIN .item -->
								<div class="item">
									
									<span class="article-image-out">
										<span class="image-comments"><span>21</span></span>
										<span class="article-image">
											<span class="nth1 strike-tooltip" title="Read Article">
												<a href="post.html"><i class="fa fa-eye"></i></a>
											</span>
											<span class="nth2 strike-tooltip" title="Save to read later">
												<a href="#"><i class="fa fa-plus"></i></a>
											</span>
											<a href="post.html"><img src="images/photos/image-26.jpg" alt="" title="" /></a>
										</span>
									</span>
									<h3><a href="post.html">Lorem ipsum dolor sit amet usu sit amet usu at quot case</a></h3>
									<p>Eos deleniti moderatius ea. Dolorem definiebas usu cu, quot case detracto mei in. Eum tollit eripuit voluptatibus ea, hinc choro omnesque eam cu mel te timeam...</p>
									<div>
										<a href="post.html" class="defbutton"><i class="fa fa-reply"></i>Read full article</a>
									</div>

								<!-- END .item -->
								</div>

								<!-- BEGIN .item -->
								<div class="item">
									
									<span class="article-image-out">
										<span class="image-comments"><span>21</span></span>
										<span class="article-image">
											<span class="nth1 strike-tooltip" title="Read Article">
												<a href="post.html"><i class="fa fa-eye"></i></a>
											</span>
											<span class="nth2 strike-tooltip" title="Save to read later">
												<a href="#"><i class="fa fa-plus"></i></a>
											</span>
											<a href="post.html"><img src="images/photos/image-27.jpg" alt="" title="" /></a>
										</span>
									</span>
									<h3><a href="post.html">Lorem ipsum dolor sit amet usu sit amet usu at quot case</a></h3>
									<p>Eos deleniti moderatius ea. Dolorem definiebas usu cu, quot case detracto mei in. Eum tollit eripuit voluptatibus ea, hinc choro omnesque eam cu mel te timeam...</p>
									<div>
										<a href="post.html" class="defbutton"><i class="fa fa-reply"></i>Read full article</a>
									</div>

								<!-- END .item -->
								</div>

								<!-- BEGIN .item -->
								<div class="item">
									
									<span class="article-image-out">
										<span class="image-comments"><span>21</span></span>
										<span class="article-image">
											<span class="nth1 strike-tooltip" title="Read Article">
												<a href="post.html"><i class="fa fa-eye"></i></a>
											</span>
											<span class="nth2 strike-tooltip" title="Save to read later">
												<a href="#"><i class="fa fa-plus"></i></a>
											</span>
											<a href="post.html"><img src="images/photos/image-28.jpg" alt="" title="" /></a>
										</span>
									</span>
									<h3><a href="post.html">Lorem ipsum dolor sit amet usu sit amet usu at quot case</a></h3>
									<p>Eos deleniti moderatius ea. Dolorem definiebas usu cu, quot case detracto mei in. Eum tollit eripuit voluptatibus ea, hinc choro omnesque eam cu mel te timeam...</p>
									<div>
										<a href="post.html" class="defbutton"><i class="fa fa-reply"></i>Read full article</a>
									</div>

								<!-- END .item -->
								</div>

								<!-- BEGIN .item -->
								<div class="item">
									
									<span class="article-image-out">
										<span class="image-comments"><span>21</span></span>
										<span class="article-image">
											<span class="nth1 strike-tooltip" title="Read Article">
												<a href="post.html"><i class="fa fa-eye"></i></a>
											</span>
											<span class="nth2 strike-tooltip" title="Save to read later">
												<a href="#"><i class="fa fa-plus"></i></a>
											</span>
											<a href="post.html"><img src="images/photos/image-29.jpg" alt="" title="" /></a>
										</span>
									</span>
									<h3><a href="post.html">Lorem ipsum dolor sit amet usu sit amet usu at quot case</a></h3>
									<p>Eos deleniti moderatius ea. Dolorem definiebas usu cu, quot case detracto mei in. Eum tollit eripuit voluptatibus ea, hinc choro omnesque eam cu mel te timeam...</p>
									<div>
										<a href="post.html" class="defbutton"><i class="fa fa-reply"></i>Read full article</a>
									</div>

								<!-- END .item -->
								</div>

								<!-- BEGIN .item -->
								<div class="item">
									
									<span class="article-image-out">
										<span class="image-comments"><span>21</span></span>
										<span class="article-image">
											<span class="nth1 strike-tooltip" title="Read Article">
												<a href="post.html"><i class="fa fa-eye"></i></a>
											</span>
											<span class="nth2 strike-tooltip" title="Save to read later">
												<a href="#"><i class="fa fa-plus"></i></a>
											</span>
											<a href="post.html"><img src="images/photos/image-9.jpg" alt="" title="" /></a>
										</span>
									</span>
									<h3><a href="post.html">Lorem ipsum dolor sit amet usu sit amet usu at quot case</a></h3>
									<p>Eos deleniti moderatius ea. Dolorem definiebas usu cu, quot case detracto mei in. Eum tollit eripuit voluptatibus ea, hinc choro omnesque eam cu mel te timeam...</p>
									<div>
										<a href="post.html" class="defbutton"><i class="fa fa-reply"></i>Read full article</a>
									</div>

								<!-- END .item -->
								</div>

							</div>
						</div>
					</div>
					
					<!-- BEGIN #sidebar -->
					<div id="sidebar">
						
						<!-- BEGIN .panel -->
						<div class="panel">
							<h2>We are social</h2>
							<div class="panel-content socialize">
								
								<a href="#" target="_blank" class="strike-tooltip s-fb" title="Facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" target="_blank" class="strike-tooltip s-tw" title="Twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" target="_blank" class="strike-tooltip s-yt" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                                <a href="#" target="_blank" class="strike-tooltip s-st" title="İnstagram"><i class="fa fa-instagram"></i></a>
                                <a href="#" target="_blank" class="strike-tooltip s-yt" title="Google Plus"><i class="fa fa-google-plus"></i></a>
								
							</div>
						<!-- END .panel -->
						</div>

                        <!-- BEGIN .panel -->
                        <div class="panel">
                            <h2>Bize Ulaşın</h2>
                            <div class="panel-content">

                                <div>
                                    <h4>What do we stand for ?</h4>
                                    <p>Soleat aperiam ex pri, at pericula constituam efficiantu per, voluptaria intellegam eu nec. Duo modus homero vivendum an, facete timeam ne eum.</p>

                                    <a href="mailto:revelio@oursite.com" class="icon-line">
                                        <i class="fa fa-comment"></i><span>revelio@oursite.com</span>
                                    </a>

                                    <span class="icon-line">
                                        <i class="fa fa-map-marker"></i><span>949 West Grassland Drive, UT 84003</span>
                                    </span>

                                </div>

                            </div>
                            <!-- END .panel -->
                        </div>
						
						
						
						<!-- BEGIN .panel -->
						<div class="panel">
							<h2>Öne Çıkanlar</h2>
							<div class="panel-content">
								
								<div class="d-articles">
									<div class="item">
										<div class="item-header">
											<a href="#"><img src="images/photos/image-95.jpg" alt="" /></a>
										</div>
										<div class="item-content">
											<h4><a href="post.html">Fermentum hac consectetur</a></h4>
											<p>Sagittis ut eleifend taciti eleifend, mauris primis...</p>
										</div>
									</div>
									<div class="item">
										<div class="item-header">
											<a href="post.html"><img src="images/photos/image-96.jpg" alt="" /></a>
										</div>
										<div class="item-content">
											<h4><a href="post.html">Fermentum hac consectetur</a></h4>
											<p>Sagittis ut eleifend taciti eleifend, mauris primis...</p>
										</div>
									</div>
									<div class="item">
										<div class="item-header">
											<a href="post.html"><img src="images/photos/image-97.jpg" alt="" /></a>
										</div>				
										<div class="item-content">
											<h4><a href="post.html">Fermentum hac consectetur</a></h4>
											<p>Sagittis ut eleifend taciti eleifend, mauris primis...</p>
										</div>
									</div>
									<div class="item">
										<div class="item-header">
											<a href="post.html"><img src="images/photos/image-98.jpg" alt="" /></a>
										</div>				
										<div class="item-content">
											<h4><a href="post.html">Fermentum hac consectetur</a></h4>
											<p>Sagittis ut eleifend taciti eleifend, mauris primis...</p>
										</div>
									</div>
									<div class="item">
										<div class="item-header">
											<a href="#"><img src="images/photos/image-99.jpg" alt="" /></a>
										</div>				
										<div class="item-content">
											<h4><a href="post.html">Fermentum hac consectetur</a></h4>
											<p>Sagittis ut eleifend taciti eleifend, mauris primis...</p>
										</div>
									</div>
								</div>
								
							</div>
						<!-- END .panel -->
						</div>


                        <!-- BEGIN .panel -->
                        <div class="panel">
                            <h2>Yeni Yazılar</h2>
                            <div class="panel-content">

                                <div class="d-articles">
                                    <div class="item">
                                        <div class="item-header">
                                            <a href="#"><img src="images/photos/image-95.jpg" alt="" /></a>
                                        </div>
                                        <div class="item-content">
                                            <h4><a href="post.html">Fermentum hac consectetur</a></h4>
                                            <p>Sagittis ut eleifend taciti eleifend, mauris primis...</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-header">
                                            <a href="post.html"><img src="images/photos/image-96.jpg" alt="" /></a>
                                        </div>
                                        <div class="item-content">
                                            <h4><a href="post.html">Fermentum hac consectetur</a></h4>
                                            <p>Sagittis ut eleifend taciti eleifend, mauris primis...</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-header">
                                            <a href="post.html"><img src="images/photos/image-97.jpg" alt="" /></a>
                                        </div>
                                        <div class="item-content">
                                            <h4><a href="post.html">Fermentum hac consectetur</a></h4>
                                            <p>Sagittis ut eleifend taciti eleifend, mauris primis...</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-header">
                                            <a href="post.html"><img src="images/photos/image-98.jpg" alt="" /></a>
                                        </div>
                                        <div class="item-content">
                                            <h4><a href="post.html">Fermentum hac consectetur</a></h4>
                                            <p>Sagittis ut eleifend taciti eleifend, mauris primis...</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-header">
                                            <a href="#"><img src="images/photos/image-99.jpg" alt="" /></a>
                                        </div>
                                        <div class="item-content">
                                            <h4><a href="post.html">Fermentum hac consectetur</a></h4>
                                            <p>Sagittis ut eleifend taciti eleifend, mauris primis...</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- END .panel -->
                        </div>
						
						<!-- BEGIN .panel -->
						<div class="panel">
							<h2>etiketler</h2>
							<div class="panel-content">
								
								<div class="tagcloud">
									<a href="#">sapien</a><a href="#">scelerisque</a><a href="#">sed</a><a href="#">sem</a><a href="#">senectus</a><a href="#">sit</a><a href="#">sodales</a><a href="#">sollicitudin</a><a href="#">tellus</a><a href="#">tempus</a><a href="#">tincidunt</a><a href="#">tristique</a><a href="#">ullamcorper</a><a href="#">urna</a><a href="#">ut</a><a href="#">varius</a><a href="#">vel</a><a href="#">vivamus</a><a href="#">viverra</a><a href="#">volutpat</a>
								</div>
								
							</div>
						<!-- END .panel -->
						</div>
						
						
						
					<!-- END #sidebar -->
					</div>
					
					<div class="clear-float"></div>
					
				</div>
			</section>
		<!-- END #top-layer -->
		</div>
			
		<div class="clear-float"></div>
		
		<div class="wrapper">
			<!-- BEGIN .footer -->
			<div class="footer">

				<div class="footer-top"></div>
				
				<div class="footer-content">

					<!-- BEGIN .panel -->
					<div class="panel">
						<h2>Popular Articles</h2>
						<div class="top-right"><a href="#">View all</a></div>
						<div class="panel-content">
							
							<div class="d-articles">
								<div class="item">
									<div class="item-header">
										<a href="post.html"><img src="images/photos/image-96.jpg" alt="" /></a>
									</div>
									<div class="item-content">
										<h4><a href="post.html">Fermentum hac consectetur</a></h4>
										<p>Sagittis ut eleifend taciti eleifend, mauris primis...</p>
									</div>
								</div>
								<div class="item">
									<div class="item-header">
										<a href="post.html"><img src="images/photos/image-97.jpg" alt="" /></a>
									</div>
									<div class="item-content">
										<h4><a href="post.html">Fermentum hac consectetur</a></h4>
										<p>Sagittis ut eleifend taciti eleifend, mauris primis...</p>
									</div>
								</div>
								<div class="item">
									<div class="item-header">
										<a href="post.html"><img src="images/photos/image-98.jpg" alt="" /></a>
									</div>
									<div class="item-content">
										<h4><a href="post.html">Fermentum hac consectetur</a></h4>
										<p>Sagittis ut eleifend taciti eleifend, mauris primis...</p>
									</div>
								</div>
							</div>
							
						</div>
					<!-- END .panel -->
					</div>
						
					<!-- BEGIN .panel -->
					<div class="panel">
						<h2>Contact Information</h2>
						<div class="panel-content">
							
							<div>
								<h4>What do we stand for ?</h4>
								<p>Soleat aperiam ex pri, at pericula constituam efficiantu per, voluptaria intellegam eu nec. Duo modus homero vivendum an, facete timeam ne eum.</p>

								<a href="mailto:revelio@oursite.com" class="icon-line">
									<i class="fa fa-comment"></i><span>revelio@oursite.com</span>
								</a>
			
								<span class="icon-line">
									<i class="fa fa-map-marker"></i><span>949 West Grassland Drive, UT 84003</span>
								</span>
			
							</div>
							
						</div>
					<!-- END .panel -->
					</div>
					
					<!-- BEGIN .panel -->
					<div class="panel">
						<h2>Tag Cloud</h2>
						<div class="panel-content">
							
							<div class="tagcloud">
								<a href="#">sapien</a><a href="#">scelerisque</a><a href="#">sed</a><a href="#">sem</a><a href="#">senectus</a><a href="#">sit</a><a href="#">sodales</a><a href="#">sollicitudin</a><a href="#">tellus</a><a href="#">tempus</a><a href="#">tincidunt</a><a href="#">tristique</a><a href="#">ullamcorper</a><a href="#">urna</a><a href="#">ut</a><a href="#">varius</a><a href="#">vel</a><a href="#">vivamus</a><a href="#">viverra</a><a href="#">volutpat</a>
							</div>
							
						</div>
					<!-- END .panel -->
					</div>

				</div>

				<div class="footer-bottom">
					<div class="left">&copy; Copyright 2016 <strong>Revelio</strong>.Tüm hakları saklıdır.</div>
					<div class="right">
						<ul>
							<li><a href="index.html">Anasayfa</a></li>
							<li><a href="blog.html">Etkinlik</a></li>
							<li><a href="photo-gallery.html">Takım</a></li>
							<li><a href="about.html">İletişim</a></li>
						</ul>
					</div>
					<div class="clear-float"></div>
				</div>
				
			<!-- END .footer -->
			</div>
		</div>
		<script type='text/javascript' src='jscript/jquery-1.11.2.min.js'></script>
		<script type='text/javascript' src='jscript/modernizr.custom.50878.js'></script>
		<script type='text/javascript' src='jscript/iscroll.js'></script>
		<script type='text/javascript' src='jscript/dat-menu.js'></script>
		<script type='text/javascript'>
			var strike_featCount = 4;
			var strike_autostart = true;
			var strike_autoTime = 7000;
		</script>
		<script type='text/javascript' src='jscript/theme-script.js'></script>
	</body>
</html>