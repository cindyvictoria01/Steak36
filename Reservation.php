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

	 	<section class="reservation section bd-container" id="reservation">
			<br><br><br><br><br><h2 class="section-title">RESERVATION</h2>
			<span class="section-subtitle">Book a table online</span><br><br>
			<div class="reservation__container bd-grid">
				<form class="reservation__form" name="frmReservation" method="post" action="proses_rsvp.php">
					<div class="inputan">
						<i class='bx bxs-user'></i><h2 class="reservation__title">Your Name</h2><input type="text" size=37 name="txtName" id="txtName" placeholder="Enter Your Name"><br> <br>
					</div>
					<div class="inputan">
						<i class='bx bxs-calendar'></i></i><h2 class="reservation__title">Date and Time</h2><input type="datetime-local" size=20 min="2021-02-01T00:00" max="2021-12-31T00:00" name="dtDateTime" id="dtDateandTime" placeholder="Enter Reservation Date and Time"><br> <br>
					</div>
					<div class="inputan">
						<i class='bx bxs-envelope' ></i><h2 class="reservation__title">Email Address</h2><input type="text" size=45 name="txtEmail" id="txtEmail" placeholder="Enter Your Email"><br> <br>
					</div>
					<div class="inputan">
						<i class='bx bxs-user-plus'></i><h2 class="reservation__title">Guest</h2><input type="text" size=36 name="txtGuest" id="txtGuest" placeholder="Enter Guest Number"><br> <br>
					</div>
					<div class="inputan">
						<div><i class='bx bxs-phone'></i><h2 class="reservation__title">Phone Number</h2><input type="text" size=25 name="txtPhone" id="txtPhoneNumber" placeholder="Enter Your Phone Number"></div><br> <br>
					</div>
					<input type="submit" name="Submit" id="Submit" class="button" value="Make Reservation">
				</form>
				<img src="table.svg" class="table__img">
			</div><br><br><br><br><br>
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