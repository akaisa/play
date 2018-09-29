<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Sewa Mainan Mufida</title>

  <!-- CSS  -->
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/materialize.css'?>">
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/init.css'?>">
	  <!-- font awesome -->
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  <!-- custom style -->

</head>
<body>
	<!-- NAVBAR -->
	<div class="navbar-fixed scrollspy" id="home">
		<nav class="orange">
			<div class="nav-wrapper container">
				<a href="#" class="brand-logo hide-on-med-and-down">
					<img height="50px" src="<?php echo base_url().'assets/images/ico.png'?>">
				</a>
				<a href="#" data-target="slide-out" class="sidenav-trigger">
					<i class="material-icons">menu</i>
				</a>
				<ul class="right hide-on-med-and-down">
					<li class="active"><a href="#home"><b>Home</b></a></li>
					<li><a href="#order">Order</a></li>
					<li><a href="auth/login"><i class="material-icons">account_circle</i></a></li>
				</ul>
			</div>
		</nav>
	</div>

	<!-- SIDENAV -->
	<ul id="slide-out" class="sidenav">
		<li><a href="#home">Home</a></li>
		<li><a href="#order">Order</a></li>
	</ul>

	<!-- Parallax Backgorund -->
	<div class="parallax-container">
		<div class="parallax">
			<img src="<?php echo base_url().'assets/images/parallax.jpg'?>">
		</div>
	</div>

	<!-- Order navigation -->
	<div class="container" id="order">
		<!-- create a row -->
		<div class="row">
			<div class="col s12 m12">
				<h3>Pesan disini !</h3>
			</div>
			<div class="col s12 m6">
				<div class="input-field">
					<i class="material-icons prefix">account_circle</i>
					<input type="text" name="nama" id="nama">
					<label for="nama">Nama Peminjam</label>
				</div>
			</div>
			<div class="col s12 m6">
				<div class="input-field">
					<i class="material-icons prefix">phone</i>
					<input type="text" name="ktp" id="ktp">
					<label for="ktp">Phone</label>
				</div>
			</div>
			<div class="col s12 m12">
				<div class="input-field">
					<select>
						<option value="" disabled selected>Pilih Mainan</option>
						<option value="1">Mainan 1</option>
						<option value="2">Mainan 2</option>
						<option value="3">Mainan 3</option>
					</select>
				</div>
			</div>
			<div class="col s12 m12">
				<div class="input-field">
					<select>
						<option value="" disabled selected>Durasi Pinjam</option>
						<option value="1">1 Minggu</option>
						<option value="2">2 Minggu</option>
					</select>
				</div>
			</div>
			<div class="col s12 m6">
				<button class="waves-effect waves-light btn">Submit</button>
			</div>
		</div>
	</div>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/materialize.js'?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/init.js'?>"></script>

	  <script type="text/javascript">
	  	//script here
	  	$(document).ready(function(){
		  $('.sidenav').sidenav();
		});
		$(document).ready(function(){
		  $('.parallax').parallax();
		});
		$(document).ready(function(){
		  $('.scrollspy').scrollSpy();
		});
		$(document).ready(function(){
	    	$('select').formSelect();
	  	});
	  	$(document).ready(function(){
	    	$('.fixed-action-btn').floatingActionButton();
	  	ß});
	  </script>

  </body>
</html>
