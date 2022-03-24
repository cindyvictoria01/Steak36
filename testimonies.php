<?php 
    // session_start();

    // // cek apakah yang mengakses halaman ini sudah login
    // if($_SESSION['level']==""){
    //     header("location:authentication/login.php");
    // }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Form FeedBack</title>

    <link href="template_admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="template_admin/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="template_admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://raw.githubusercontent.com/kartik-v/bootstrap-star-rating/master/css/star-rating.min.css'>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <script type="text/javascript" src="template_admin/ckeditor/ckeditor.js"></script>
</head>
<body><br>
	<form method="POST" action="insert_feedback.php">
		<div class="container">
			<div class="form-group">
				<label for="nama">Nama Customer</label>
				<input type="text" name="nama" class="form-control" placeholder="Nama Customer" required>
			</div>
			<div class="form-group">
				<label for="isi">Isi Feedback</label>
				<textarea class="ckeditor" id="ckedtor" name="isi"></textarea>
			</div>
			<!-- <div class="form-group">
				<label for="review">Rate Your Experience</label>
				<div id="rating_div">
					<div class="star-rating">
						<span class="fa divya fa-star-o" data-rating="1" style="font-size:20px;"></span>
						<span class="fa fa-star-o" data-rating="2" style="font-size:20px;"></span>
						<span class="fa fa-star-o" data-rating="3" style="font-size:20px;"></span>
						<span class="fa fa-star-o" data-rating="4" style="font-size:20px;"></span>
						<span class="fa fa-star-o" data-rating="5" style="font-size:20px;"></span>
						<input type="hidden" name="whatever3" class="rating-value" value="1">
					</div>
				</div>
			</div> -->
		</div>
	</form>
</body>
</html>