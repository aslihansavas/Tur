<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bilgi Turizm | Anasayfa </title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
    
	<!-- banner slider css -->
	<link href="css/minimal-slider.css" rel='stylesheet' type='text/css' />
	<!-- //banner slider css -->
	
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
    <link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!--//web font-->

</head>

<body>

<!-- header -->
<div class="header-top">
	<header>
		<div class="top-head ml-lg-auto text-center">
			
		</div>
		<div class="clearfix"></div>
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="logo">
				<h1>
					<a class="navbar-brand" href="index.php">
						<i class="fab fa-cloudversify"></i> Bilgi Tur</a>
				</h1>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon">
					<i class="fas fa-bars"></i>
				</span>

			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-lg-auto text-center">
				<li class="nav-item active">
						<a class="nav-link" href="index.php">Anasayfa
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="turlar.php">Turlar</a>
					</li>
					
				</ul>

			</div>
		</nav>
	</header>
</div>
<!-- header -->

<!-- main image slider container -->
<section class="slide-window">
	<div class="slide-wrapper" style="width:300%;">
		<div class="slide">
			<div class="slide-caption text-center">
			   <h2 class="text-uppercase">Nevşehir <span>Kapadokya</span></h2>
			   <p class="my-4">Balon gezisi ve muhteşem manzarasıyla Kapadokya'nın güzelliklerini keşfedin.</p>
			   <div class="read">
				<a href="rezervasyon.php">Rezervasyon Yap<span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
				</div>				
			</div>
		</div>
		<div class="slide slide2">
			<div class="slide-caption text-center">
				<h3 class="text-uppercase">Bolu <span>Yedigöller </span></h3>
			   <p class="my-4">Bolu'da kamp deneyimi.</p>
			   <div class="read">
				<a href="rezervasyon.php">Rezervasyon Yap<span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
				</div>	
			</div>
		</div>
		<div class="slide slide3">
			<div class="slide-caption text-center">
				<h3 class="text-uppercase">Amsterdam <span> Turu</span></h3>
			   <p class="my-4">Amsterdam'da muhteşem tatil,5 yıldızlı otelde konaklama ve çeşitli gezi planları.</p>
			   <div class="read">
				<a href="rezervasyon.php">Rezervasyon Yap<span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
				</div>	
			</div>
		</div>
	</div>
	<div class="slide-controller">
		<div class="slide-control-left">
			<div class="slide-control-line"></div>
			<div class="slide-control-line"></div>
		</div>
		<div class="slide-control-right">
			<div class="slide-control-line"></div>
			<div class="slide-control-line"></div>
		</div>
	</div>
</section>
<!-- end of main image slider container -->
	

<!-- copyright -->
<div class="cpy-right text-center">
	<p>© 2018 Bilgi Turizm |
		
	</p>
</div>
<!-- //copyright -->

	

	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	

    <!-- dropdown nav -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

	<!-- banner slider js -->
	<script src="js/minimal-slider.js"></script>
	<!-- //banner slider js -->

	<!-- Stats-Number-Scroller-Animation-JavaScript -->
	<script src="js/waypoints.min.js"></script> 
	<script src="js/counterup.min.js"></script> 
	<script>
		jQuery(document).ready(function( $ ) {
			$('.counter').counterUp({
				delay: 100,
				time: 1000
			});
		});
	</script>
	<!-- //Stats-Number-Scroller-Animation-JavaScript -->

	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

</body>
</html>