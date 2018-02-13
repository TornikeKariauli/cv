<?php
	require_once "blocks/class.user.php";
	$user = new USER();
?>
<noscript>
	<meta http-equiv="refresh" content="0; URL=<?php echo $url . 'no_script.php'; ?>"/>
	<style type="text/css">div{display: none;}</style>
</noscript>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta name="description" content="Tornike Kariauli Curriculum Vitae Online CV">
	<meta name="author" content="Tornike Kariauli">

	<link rel="icon" href="assets/img/favicon.png">

	<title>Tornike Kariauli</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">

	<!-- Custom fonts -->
	<link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

	<!-- Plugin CSS -->
	<link rel="stylesheet" href="assets/vendor/carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">

	<!-- Custom styles -->
	<link href="assets/css/style.css" rel="stylesheet">

	<!-- Plugin JavaScript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/carousel/owl.carousel.js"></script>
</head>
<body id="page-top">
	<div id="loader-wrapper">
		<div id="loader" class="loader">
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
		</div>

		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
	
	<div id="main">
	<?php
		require_once "blocks/navigation.php";
		require_once "blocks/header.php";
		require_once "blocks/about.php";
		require_once "blocks/skills.php";
		require_once "blocks/languages.php";
		require_once "blocks/hobbies.php";
		require_once "blocks/footer.php";
	?>
	</div>

	<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
	<div class="scroll-to-top d-lg-none position-fixed">
		<a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
			<i class="fa fa-chevron-up"></i>
		</a>
	</div>

	<!-- Bootstrap core JavaScript -->
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts -->
	<script src="assets/js/script.js"></script>
</body>
</html>