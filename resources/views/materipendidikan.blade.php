<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Pesantren Daarul Qolam</title>
	<meta charset="UTF-8">
	<meta name="description" content="Ahana Yoga HTML Template">
	<meta name="keywords" content="yoga, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="frontend/ahana/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="frontend/ahana/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="frontend/ahana/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="frontend/ahana/css/nice-select.css"/>
	<link rel="stylesheet" href="frontend/ahana/css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="frontend/ahana/css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header-section">
		<div class="header-top">
			<div class="row m-0">
				<div class="col-md-6 d-none d-md-block p-0">
					<div class="header-info">
						<i class="material-icons">map</i>
						<p>Jl. Cilisung No.74, Sukamenak, Bandung</p>
					</div>
					<div class="header-info">
						<i class="material-icons">phone</i>
						<p>(022) 5415203</p>
					</div>
				</div>
				<div class="col-md-6 text-left text-md-right p-0">
					<div class="header-info d-none d-md-inline-flex">
						<i class="material-icons">alarm_on</i>
						<p>Sen - Sab:  06:30am - 18:45pm</p>
					</div>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<a href="index.html" class="site-logo">
				<img src="/frontend/ahana/img/logo3.png" width="145p" height="55p" alt="">
			</a>
			<div class="container">
				<ul class="main-menu">
                    <li><a href="/">Beranda</a></li>
                    <li><a class="active">Profil</a>
						<ul class="sub-menu">
							<li><a href="materipendidikan">Materi Pendidikan</a></li>
							<li><a href="visimisi">Visi Misi & Tujuan Pendidikan</a></li>
						</ul>
                    </li>
                    <li><a href="fasilitas">Fasilitas</a></li>
                    <li><a href="ekstrakurikuler">Ekstrakurikuler</a></li>
                    <li><a href="galeri">Galeri</a></li>
					<li><a href="pendaftaran">Pendaftaran</a></li>
                </ul>
			</div>
		</div>
	</header>
    <!-- Header Section end -->

	<!-- Page top Section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>Materi Pendidikan</h2>
                    <p>Pesantren Daarul Qolam</p>
                </div>
			</div>
		</div>
	</section>
	<!-- Page top Section end -->

	<!-- Trainers Section -->
	<section class="trainers-page-section spad overflow-hidden">
		<div class="container">
            <div class="ti-text">
                    <p></p>
                    <h2></h2>
                </div>
			<div class="row">
                @foreach ($materipendidikan as $item)
				<div class="col-lg-4">
					<div class="trainer-item">
                        <div class="ti-img">
							<img src="{{asset('assets/img/materipendidikan/' .$item->foto)}}" alt="">
						</div>
						<div class="ti-text">
                            <h4><a>{{ $item->namabidang }}</a></h4>
                            <h6><a>{!! nl2br($item->matapelajaran) !!}</a></h6>
                        </div>
					</div>
                </div>
                @endforeach
			</div>
		</div>
	</section>
    <!-- Trainers Section end -->

	<!-- Footer Section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<div class="about-widget">
							<ul>
								<li><i class="material-icons">map</i>Jl. Cilisung No.74, Sukamenak, Bandung</li>
                                <li><i class="material-icons">phone</i>(022) 5415203</li>
                            </ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget pl-0 pl-lg-5">
						<h2 class="fw-title">Artikel Terbaru</h2>
						<ul>
							<li><a href="trainer">Materi Pendidikan</a></li>
							<li><a href="blog">Fasilitas</a></li>
							<li><a href="about">Ekstrakurikuler</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="row">
					<div class="col-md-4">
						<div class="footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
					<div class="col-md-8 text-md-right">
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer Section end -->

	<div class="back-to-top"><img src="/frontend/ahana/img/icons/up-arrow.png" alt=""></div>

	<!-- Search model -->
	<div class="search-model set-bg" data-setbg="img/search-bg.jpg">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch"><i class="material-icons">close</i></div>
			<form class="search-moderl-form">
				<input type="text" id="search-input" placeholder="Search">
				<button><img src="/frontend/ahana/img/icons/search-2.png" alt=""></button>
			</form>
		</div>
	</div>
	<!-- Search model end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="/frontend/ahana/js/vendor/jquery-3.2.1.min.js"></script>
	<script src="/frontend/ahana/js/bootstrap.min.js"></script>
	<script src="/frontend/ahana/js/jquery.slicknav.min.js"></script>
	<script src="/frontend/ahana/js/owl.carousel.min.js"></script>
	<script src="/frontend/ahana/js/jquery.nice-select.min.js"></script>
	<script src="/frontend/ahana/js/jquery-ui.min.js"></script>
	<script src="/frontend/ahana/js/jquery.magnific-popup.min.js"></script>
	<script src="/frontend/ahana/js/main.js"></script>

	</body>
</html>
