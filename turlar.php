<?php

include 'ayarlar.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bilgi Turizm | Turlar</title>
	
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
						<i class="fab fa-cloudversify"></i>Bilgi Tur</a>
				</h1>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon">
					<i class="fas fa-bars"></i>
				</span>

			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-lg-auto text-center">
					<li class="nav-item">
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
<!-- //header -->


<section class="inner-page-banner">
	<div class="page-heading text-center">
		<h2>DÜNYAYI KEŞFET</h2>
		<span class="section_1-breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i> Anasayfa</a> <span>/ Turlar</span></span>
	</div>
</section>


	
<section class="contact py-5">
	<div class="container py-sm-4">
		<div class="heading pb-4">
			<h3 class="heading mb-2 text-center"> <span>TUR </span> DETAYLARI </h3>
			<?php if (!empty($_SESSION['sontur'])) { ?>
				<p class="text-center">
				SON İNCELENEN TUR:
				<a href="rezervasyon.php?tur_id=<?php echo $_SESSION['sontur']['id'] ?>"><?php echo $_SESSION['sontur']['ad'] ?></a>
			</p>
			<?php } ?>
		</div>
		<div class="menu-grids">
			<div class="row t-in">
			<?php foreach ($turlar as $tur) { ?>
				<div class="col-md-4 col-sm-6 price-main-info text-center">
					<div class="price-inner card box-shadow">

						<div class="card-body">
							<h4 class="text-uppercase mb-3">
							<a href="tur-detay.php?tur_id=<?php echo $tur['id'] ?>">
									<?php echo $tur['ad'] ?>
							</a>
							</h4>
							<h5 class="card-title pricing-card-title">
								<span class="align-top">₺</span>
								<?php if ($tur['indirim'] > 0){ ?>
									<del><?php echo $tur['fiyat'] ?></del>
								<?php echo indirimHesapla($tur['fiyat'],$tur['indirim']); ?>
								<?php }else{ ?>
									<?php echo $tur['fiyat'] ?>
								<?php } ?>
							</h5>
							<ul class="list-unstyled mt-3 mb-4">
							<?php foreach ($tur['ozellikler'] as $ozellik) {?>
								<li><?php echo $ozellik; ?></li>
							<?php } ?>
							</ul>
							<div class="read">
								<a href="rezervasyon.php?tur_id=<?php echo $tur['id'] ?>">Rezervasyon Yap<span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
	</div>
</section>




<!-- copyright -->
<div class="cpy-right text-center">
	<p>© 2018 BİLGİ TURİZM | 
	</p>
</div>
<!-- //copyright -->

 

	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.js"></script> 
	<!-- //js -->
	
    <script src="js/modernizr-2.6.2.min.js"></script>

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