<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Smart Logic Pro</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->

		<link rel="stylesheet" href="{{ asset('css/bootstrap1.min.css')}}" />

    <!-- Custom CSS -->

	<link rel="stylesheet" href="{{ asset('css/freelancer1.css')}}" />
	<link rel="stylesheet" href="{{ asset('css/landing-page1.css')}}" />
	

    <!-- Custom Fonts -->

	<link rel="stylesheet" href="{{ asset('font-awesome-4.1.0/css/font-awesome.min.css')}}" />
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style type="text/css">
		h2{
		margin: 0;     
		color: #666;
		padding-top: 90px;
		font-size: 52px;
		font-family: "trebuchet ms", sans-serif;    
		}
	
	.item{
		background: #333;    
		text-align: center;
		height: 475px !important;
		}
	
	.carousel{
		margin-top: 20px;
		}

	.bs-example{
		margin: 20px;
		}
	</style>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top"><img src="{{ asset('foto/Logo SB Plan putih.png') }}" align="absmiddle" style="margin-top:-9px;" width=340 height=50> </a><hr>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					
					<li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
					
                    <li class="page-scroll">
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
		<!-- Heading Row -->
		<br><br><br><br><br><br>
        <div class="row">
            <div class="col-md-8">
                  <!-- Carousel
    ================================================== -->
				<div class="bs-example">
					<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
						<!-- Carousel indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
						</ol>   
      
				<!-- Carousel items -->
						<div class="carousel-inner">
							<div class="active item">	
								<div>
									<img src="foto/bg1.jpg" alt="Generic placeholder image">
								</div>
								<div class="carousel-caption">
									<h3>First slide label</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
							</div>
           
							<div class="item">
								<div>
									<img src="foto/bg2.jpg" alt="Generic placeholder image">
								</div>
								<div class="carousel-caption">
									<h3>Second slide label</h3>
									<p>Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
								</div>
							</div>
            

						</div>
        
						<!-- Carousel nav -->
						<a class="carousel-control left" href="#myCarousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="carousel-control right" href="#myCarousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>
			</div>
			
            <!-- /.col-md-8 -->
            <div class="col-md-4">
				<h1>your  management business</h1>
                <p>You can login here to access your business plan</p>
			
                <div class="panel panel-default">
					<div class="panel-heading">
						<span class="glyphicon glyphicon-lock"></span> Login</div>
					<div class="panel-body">
                    
					{{ Form::open(array('url' => '/authenticate', 'class' => 'uk-panel uk-panel-box uk-form')) }}
					
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-3 control-label">Email</label>
							
							<div class="col-sm-9">				
								 {{ Form::text('email', null, array('class'=>'form-control', 'id'=> 'inputEmail3', 'placeholder'=>'Email')) }}
							</div>
						</div>

						<div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                        
							<div class="col-sm-9">															
								 {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
							</div>
						</div>
                    
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
								<div class="checkbox">
									<label>
										<input type="checkbox"/>Remember me
									</label>
								</div>
							</div>
						</div>
                    
						<div class="form-group last">
							<div class="col-sm-offset-3 col-sm-9">
								<button type="submit" class="btn btn-primary btn-sm">Sign in</button>
                                <button type="reset" class="btn btn-default btn-sm">Reset</button>
							</div>
						</div>
                    {{ Form::close() }}
                </div>
                
				<div class="panel-footer">
                    Not Registred? <a href="{{ URL::to('signup') }}">Register here</a></div>
				</div>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->


    <!-- About Section -->
	<br><br>
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Description</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
				<div class="text-right">
                    <p>Smart business plan merupakan salah satu anak perusahaan dari PT Sydeco yang focus dalam pengembangan system informasi untuk manajemen perusahaan. System informasi yang kami tawarkan merupakan penyempurnaan dari system informasi yang sudah ada sebelumnya. Smart business diharapkan mampu menjadi solusi untuk membantu  </p>
                </div>
				</div>
				
                <div class="col-lg-4">
				<div class="text-left">
                    <p> pengembangan perusahaan anda dengan system informasi yang sudah sangat modern dan didukung dengan fitur-fitur lengkap. Kami tidak akan berhenti disini, kami akan selalu mengembangkan system informasi yang sedang dibutuhkan oleh untuk bersaing di dunia usaha yang sudah semakin ketat seiring dengan semakin pesatnya perkembangan tegnologi.</p>
                </div>
				</div>
				
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">Read more. . .</a>
                </div>
            </div>
        </div>
    </section>
	
	<!-- Portfolio Grid Section -->
    <section id="portfolio">
	<div class="container">
        <!-- Three columns of text below the carousel -->
		<div class="row">
			<div class="col-lg-3">
			<div class="container">
				<img class="img-circle" src="{{ asset('img/bd1.jpg') }}" alt="Generic placeholder image" style="width: 200px; height: 200px; background-color:red;">
			</div>
			<div class="container">
				<h2>&nbsp;flexibel</h2>
			</div>
				<center><p>&nbsp; &nbsp; &nbsp; Smart business plan, memberikan jaminan software yang bisa diakses dimana saja kapan saja dengan kualitas yang memuaskan. Flexibilitas yang kami unggulkan berbeda dengan produk lain sejenis yang mungkin hanya bisa di akses pada satu device saja. Anda tidak perlu mengistal software yang kami sediakan, anda hanya perlu mendaftar untuk mendapatkan user login dan password yang bisa anda gunakan di semua device dan dimanapun anda berada, hanya membutuhkan akses internet..</p>
				</center>
			
			</div><!-- /.col-lg-4 -->
			
			<div class="col-lg-3">
			<div class="container">
				<img class="img-circle" src="{{ asset('img/bd2.jpg') }}" alt="Generic placeholder image" style="width: 200px; height: 200px; background-color:blue;">
			</div>
			<div class="container">
				<h2>&nbsp;Friendly</h2>
			</div>
				<center><p>&nbsp; &nbsp; &nbsp; Smart business plan, menyediakan software yang friendly, sangat mudah dimengerti. Software ini bisa digunakan bahkan oleh orang awam yang sebelumnya belum pernah menggunakan software sejenis. Selain itu anda bisa menghubungi kami, apabila memang ada kesulitan dalam penggunaan software tersebut. Staf kami dengan senang hati memberikan bimbingan dan jalan keluar kepada anda agar masalah anda terselesaikan..</p></center>
				
			</div><!-- /.col-lg-4 -->
        
			<div class="col-lg-3">
			<div class="container">
				<img class="img-circle" src="{{ asset('img/bd5.jpg') }}" alt="Generic placeholder image" style="width: 200px; height: 200px; background-color:purple;">
			</div>
			<div class="container">
				<h2>&nbsp;&nbsp;&nbsp;Prize</h2>
			</div>
				<center><p>&nbsp; &nbsp; &nbsp; Smart business plan, memberikan harga yang sangat terjangkau. Kami membidik semua jenis usaha, mulai dari usaha kecil, menengah, dan atas. Semua bisa menggunakan layanan yang diberikan oleh smart business plan. Kami mengguanakan jenis pembayaran berupa sewa per bulan, tidak beli putus, sehingga tidak memberatkan anda dalam masalah biaya, dan juga apabila anda memang sudah tidak ingin menggunakan layanan kami lagi,anda bisa berhenti dan tidak perlu membayar lagi..</p>
				</center>
				
			</div><!-- /.col-lg-4 -->
        
			<div class="col-lg-3">
			<div class="container">
				<img class="img-circle" src="{{ asset('img/bd4.jpg') }}" alt="Generic placeholder image" style="width: 200px; height: 200px; background-color:green;">
			</div>
			<div class="container">
				<h2>&nbsp; Quality</h2>
			</div>
				<center><p>&nbsp; &nbsp; &nbsp; Smart business plan, memberikan jaminan software yang berkualitas. Dalam prpses pembuatan software ini, kami melakukan beberapa riset kepada konsumen dan beberapa competitor  sehingga kualitas software sudah tidak perlu diragukan lagi. Kami selalu melakukan perbaikan apabila memang ada kekurangan. Kami siap memberikan pelayanan terbaik, dan software yang berkualitas. Smart business plan siap bersaing dengan penyedia jasa sejenis yang sudah ada..</p>
				</center>
			</div><!-- /.col-lg-4 -->
		</div>	
		</div><!-- /.row -->
    </section>

    <!-- Contact Section -->
    <section id="contact">
        
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Smart Logic Pro
Jl. Laksmana Adi Sucipto 
Perumahan Jogja Regency, 
<br>Kav : D.10, Yogyakarta (55283)</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Social Media</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About Smart Business Plan</h3>
                        <p>Smart business plan merupakan salah satu anak perusahaan dari.. <a href="http://smartlogicpro.com">smartlogicpro.com</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Smart Logic Pro 2014
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery Version 1.11.0 -->

	<script src="{{ asset('js/jquery-1.11.0.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->

	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

	<script src="{{ asset('js/classie.js') }}"></script>
	<script src="{{ asset('js/cbpAnimatedHeader.js') }}"></script>

    <!-- Contact Form JavaScript -->

	<script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
	

    <!-- Custom Theme JavaScript -->

	<script src="{{ asset('js/freelancer.js') }}"></script>

</body>

</html>
