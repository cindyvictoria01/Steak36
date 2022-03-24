<!DOCTYPE html>
	<head>
	    <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			UAS
		</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>
	<body>
		<header class="header1" id="header">
			<nav class="nav bd-container">
				<a href="Home.php" class="nav__logo">STEAK 36</a>
				<div class="nav__menu" id="nav-menu">
					<ul class="nav__list">
						<li class="nav__item"><a href="Home.php"> HOME</a></li>
						<li class="nav__item"><a href="#menu"> MENU </a></li>
						<li class="nav__item"><a href="Reservation.php"> RESERVATION </a></li>
						<li class="nav__item"><a href="#event" class="nav__link">EVENT</a></li>
						<li class="nav__item"><a href="#contact" class="nav__link">CONTACT US</a></li>
						<li class="nav__item"><a href="admin/" class="nav__link">ADMIN</a></li>
					</ul>
				</div>
			</nav>
		</header>

		<main class="1-main">
			<section class="home" id="home"><br><br><br>
				<div class="home__container bd-container bd-grid">
					<div class="home__data">
						<h1 class="home__title">Welcome!!</h1>
						<h2 class="home__subtitle">Try the best food of<br> the week. </h2>
						<a href="Menu.php" class="button">View Menu</a>
					</div>
					<img src="homeimg.png" class="home__img">
				</div>
			</section>
			
			<section class="event section bd-container" id="event"><br><br><br><br><br>
				<span class="section-subtitle event__initial">Events</span><br><br>
				<div class="event__container bd-grid">
					<?php 
                    include "connection.php";
                    $event = mysqli_query($koneksi, "SELECT * FROM `event` order by id_event desc limit 2");
                    // $hasil = mysqli_query($koneksi, "SELECT * FROM gambar");
                    $nomor = 1;
                    if(mysqli_num_rows($event)){
                        while($events = mysqli_fetch_array($event)){
                    ?>
					<img src="<?php echo $events['gambar'] ?>" class="christmas__img">
					<div class="event__data">
						<h2 class="event__title event__initial"><?php echo $events['nama_event']; ?></h2>
						<span>From: <?php echo $events['date_from']; ?> Until: <?php echo $events['date_until']; ?></span>
						<p class="event__description"><?php echo $events['deskripsi'] ?> </p>
					</div>
					<?php }} ?>
				</div>
		    </section>

		    <section class="menu section bd-container" id="menu"><br><br><br><br><br>
				<span class="section-subtitle">Recommendation</span>
				<h2 class="section-title">Menu of the week</h2>
				<div class="menu__container bd-grid">
					<?php 
                    include "connection.php";
                    $tutor = mysqli_query($koneksi, "SELECT `id_menu`,`nama_menu`, `deskripsi`, `harga`, `kategori`, `gambar` FROM `menu` order by id_menu desc limit 2");
                    // $hasil = mysqli_query($koneksi, "SELECT * FROM gambar");
                    $nomor = 1;
                    if(mysqli_num_rows($tutor)){
                        while($rajut = mysqli_fetch_array($tutor)){
                    ?>
					<div class="menu__content">
						<img src="template_admin/img/<?php echo $rajut['gambar']; ?>" width='50%' height='auto'>
						<h3 class="menu__name"><?php echo $rajut['nama_menu']; ?></h3>
						<span class="menu__detail"><?php echo strip_tags($rajut['deskripsi']); ?></span>
					</div>
				<?php }} ?>
		    	</div>
		    	<a href="Menu.php" class="menu__button">More Delish</a>
		    </section>
			
			<section class="contact section bd-container" id="contact"><br><br><br><br><br>
		        <div class="contact__container bd-grid">
		            <div class="contact__data">
						<h2 class="section-subtitle contact__initial">Contact us</h2>
		                <p class="contact__description">If you want to reserve a table in our restaurant, contact us and we will attend you quickly, with our 24/7 chat service.</p>
						<a href="rate.php" class="contact__button">Phone	: 061- 83906327</a>
						<a href="rate.php" class="contact__button">e-mail	: steak36@gmail.com</a>
					</div>
				</div>
		    </section>
		</main>
		<footer class="footer section bd-container">
	        <div class="footer__container bd-grid">
	            <div class="footer__content">
	            	<a href="Home.php" class="footer__logo">Steak 36</a>
					<span class="footer__description">Restaurant</span>

					<div>
						<a href="https://www.facebook.com" class="footer__social"><i class="bx bxl-facebook"></i></a>
						<a href="https://www.instagram.com" class="footer__social"><i class="bx bxl-instagram"></i></a>
						<a href="https://twitter.com" class="footer__social"><i class="bx bxl-twitter"></i></a>
					</div>
				</div>

				<div class="footer__content">
					<h3 class="footer__title">Services</h3>
					<ul>
						<li><a href="Reservation.php" class="footer__link">Reserve Your Spot</a></li>
					</ul>
				</div>

				<div class="footer__content">
					<h3 class="footer__title">Information</h3>
					<ul>
						<li><a href="Home.php#event" class="footer__link">Event</a></li>
						<li><a href="Home.php#contact" class="footer__link">Contact Us</a></li>
					</ul>
				</div>

				<div class="footer__content">
					<h3 class="footer__title">Address</h3>
					<ul>
						<li>Jalan Adam Malik No. 79</li>
						<li>061- 83906327</li>
						<li>Steak36@gmail.com</li>
					</ul>
				</div>
			</div>
			<p class="footer__copyright">&#169; 2021 Steak36. All Right Reserved.</p>
		</footer>
		<script>
			/* To Disable Inspect Element */
			$(document).bind("contextmenu",function(e) {
		 		e.preventDefault();
			});

			$(document).keydown(function(e){
		    	if(e.which === 123){
		       		return false;
		    	}
			});
		</script>
	</body>
</html>