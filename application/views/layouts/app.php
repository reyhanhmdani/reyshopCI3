<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?= isset($title) ? $title : 'ReyShop' ?> - ReyShop E-commerce</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbar-fixed/">

	<!-- Bootstrap core CSS -->
	<link href="<?= base_url('assets/library/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/library/fontawesome/css/all.min.css') ?>">

	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
</head>
<body>

<!--Navbar-->
<?php $this->load->view('layouts/_navbar'); ?>
<!--End Navbar-->


<!--Content-->
<?php $this->load->view($page); ?>
<!--End Content-->

<!-- jQuery and Bootstrap JS -->
<script src="<?= base_url('assets/library/jquery/jquery-3.4.1.min.js') ?>"></script>
<script src="<?= base_url('assets/library/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/js/app.js') ?>"></script>
</body>
</html>
