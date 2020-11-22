<?php
include 'ayarlar.php';

if (!empty($_GET['tur_id'])){
	$tur = array_slice(array_filter($turlar, function($tur){
		return $tur['id'] == $_GET['tur_id'];
	}),0)[0];
		
}

if (empty($tur)){
	header('Location: turlar.php');
	exit;
}	
 
$_SESSION['sontur']=$tur;



?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bilgi Turizm| Rezervasyon</title>
	
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
			<div class="row mr-0">

			</div>
		</div>
		<div class="clearfix"></div>
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="logo">
				<h1>
					<a class="navbar-brand" href="index.php">
						<i class="fab fa-cloudversify"></i> Bilgi Turizm</a>
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
		<h2>Rezervasyon</h2>
		<span class="section_1-breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i> Anasayfa</a> <span>/ Rezervasyon</span></span>
	</div>
</section>


		
<section class="contact py-5">
	<div class="container">
		<div class="heading pb-4">
			<h3 class="heading mb-2 text-center"> <span>Rezervasyon </span> Yap </h3>
		</div>
		<?php if ($_POST){
			if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ ?>
			<div class="alert alert-danger">
					<p>e-posta adres geçersiz</p>
				</div>
			<?php }else { ?>
				<div class="alert alert-success">
					<p>Rezervasyonunuzu onaylamak için mail adresinize gönderilen bağlantıya tıklayınız. Satış ekibimiz en kısa süre içerisinde size geri dönüş yapacaktır.</p>
				</div>
			<?php }} ?>
		<div class="row contact-agileinfo">
			
			<div class="col-md-7 contact-right"> 
				 <form action="" method="post">  
					<input type="text" name="Name" placeholder="İsim Soyisim" required="">
					<input type="text"  name="email" placeholder="Email" required="">
					<input type="text" name="Phone no" placeholder="Telefon" required="">
					<input type="text" name="Message" placeholder="Adres" required="">
					<select name="turlar" disabled>
						<?php  foreach ($turlar as $t) { ?> 
						<option value="<?php echo $t['id']?>" <?php echo $t['id'] == $_GET['tur_id'] ? "selected='true'" : '' ?>> <?php echo $t['ad'] ?> </option>
						<?php } ?>

					  </select> 
					<input type="date" name="gtarih">
					 <div class="read mt-3">
						<button type="submit">Gönder</button>
					 </div>	
				 </form>
			</div>
			<div class="col-md-5 contact-right"> 
				 <h1>
					<?php echo $tur['ad'] ?>
				</h1>
				<?php if (!empty($tur['programlar'])){ ?>
					<?php foreach ($tur['programlar'] as $program){?>
						<h2><?php echo strtoupper($program['baslik']) ?></h2>
						<p><?php echo $program['icerik']?></p>
						<?php } ?>
						<?php }else { ?>
							<br>
							<br>
							<p>Tur detayı henüz oluşturulmadı.</p>
						<?php } ?>
			</div>
		</div>
	</div>
</section>



<!-- copyright -->
<div class="cpy-right text-center">
	<p>© 2018 Bilgi Turizm | 

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
    <!-- //dropdown nav -->


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


    </body>
</html>