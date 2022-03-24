<!DOCTYPE html>
	<head>
	    <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			UAS
		</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	</head>
	<body>
		<header class="header1" id="header">
			<nav class="nav bd-container">
				<a href="Home.php" class="nav__logo">STEAK 36</a>
				<div class="nav__menu" id="nav-menu">
					<ul class="nav__list">
						<li class="nav__item"><a href="Home.php"> HOME</a></li>
						<li class="nav__item"><a href="Menu.php"> MENU </a></li>
						<li class="nav__item"><a href="Reservation.php"> RESERVATION </a></li>
						<li class="nav__item"><a href="Home.php#event" class="nav__link">EVENT</a></li>
						<li class="nav__item"><a href="Home.php#contact" class="nav__link">CONTACT US</a></li>
						<li class="nav__item"><a href="admin/" class="nav__link">ADMIN</a></li>
					</ul>
				</div>
			</nav>
		</header>
		<div>
			<section class="menu section bd-container" id="menu"><br><br><br>
				<br><br><span class="section-subtitle">Food</span>
				<h2 class="section-title"> Our Recommendation </h2>
				<div class="menu__container bd-grid">
					<?php 
                    include "connection.php";
                    $tutor = mysqli_query($koneksi, "SELECT `id_menu`,`nama_menu`, `deskripsi`, `harga`, `kategori`, `gambar` FROM `menu` where kategori='Main Course' and addition='Recommendation'");
                    // $hasil = mysqli_query($koneksi, "SELECT * FROM gambar");
                    $nomor = 1;
                    if(mysqli_num_rows($tutor)){
                        while($rajut = mysqli_fetch_array($tutor)){
                    ?>
					<div class="menu__content">
						<img src="template_admin/img/<?php echo $rajut['gambar']; ?>" width='50%' height='auto'>
		                <h4 class="dish"><?php echo $rajut['nama_menu']; ?></h4>
		                <span class="menu__detail" color='#fd8c41'>Rp <?php echo $rajut['harga']; ?></span>
		            </div>
		        <?php } } ?>
		        </div>
		        <br>
		        <?php
                include "connection.php";
                $tutor = mysqli_query($koneksi, "SELECT `id_menu`,`nama_menu`, `deskripsi`, `harga`, `kategori`, `gambar` FROM `menu` where kategori='Main Course' and addition='' limit 5");
                // $hasil = mysqli_query($koneksi, "SELECT * FROM gambar");
                $nomor = 1;
                if(mysqli_num_rows($tutor)){
                    while($rajut = mysqli_fetch_array($tutor)){
                ?>
				<h4 class="menu__list"><?php echo $rajut['nama_menu']; ?> <span class="price">Rp <?php echo $rajut['harga']; ?></span></h4>
				<?php } } ?>
		    </section>
			
			<section class="menu section bd-container" id="menu">
				<br><br><span class="section-subtitle">Beverage</span>
				<h2 class="section-title"> Our Recommendation </h2>
				<div class="menu__container bd-grid">
					<?php 
                    include "connection.php";
                    $tutor = mysqli_query($koneksi, "SELECT `id_menu`,`nama_menu`, `deskripsi`, `harga`, `kategori`, `gambar` FROM `menu` where kategori='Drink' and addition='Recommendation'");
                    // $hasil = mysqli_query($koneksi, "SELECT * FROM gambar");
                    $nomor = 1;
                    if(mysqli_num_rows($tutor)){
                        while($rajut = mysqli_fetch_array($tutor)){
                    ?>
					<div class="menu__content">
						<img src="template_admin/img/<?php echo $rajut['gambar']; ?>" width='50%' height='auto' >
						<h4 class="dish"><?php echo $rajut['nama_menu']; ?></h4>
						<span class="menu__detail">Rp <?php echo $rajut['harga']; ?></span>
					</div>
					<?php } } ?>
				</div>		
				<br>
				<?php 
                include "connection.php";
                $tutor = mysqli_query($koneksi, "SELECT `id_menu`,`nama_menu`, `deskripsi`, `harga`, `kategori`, `gambar` FROM `menu` where kategori='Drink' and addition='' limit 5");
                // $hasil = mysqli_query($koneksi, "SELECT * FROM gambar");
                $nomor = 1;
                if(mysqli_num_rows($tutor)){
                    while($rajut = mysqli_fetch_array($tutor)){
                ?>
				<h4 class="menu__list"><?php echo $rajut['nama_menu']; ?> <span class="price">Rp <?php echo $rajut['harga']; ?></span></h4>
			<?php } } ?>
		    </section>
		</div>

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
						<li><a href="#event" class="footer__link">Event</a></li>
						<li><a href="#contact" class="footer__link">Contact Us</a></li>
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
	</body>
</html>