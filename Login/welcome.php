<?php
 session_start();
 if(!isset( $_SESSION['username'])){
	 header("location:login.php");
 }

?>


<!DOCTYPE HTML>

<html>
	<head>
		<title>welcome</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body id="top">
	<h5 style="text-align: right"><a href="logout.php" class="button"  >Logout</a></h5>
	
				<section id="banner" data-video="images/banner">
				
					<div class="inner">
						<header>
							<h1>Full Motion 	<?php echo $_SESSION['username']; ?> </h1>
							
						
							<p>A responsive video gallery template with a functional lightbox<br />
							designed by <a href="https://templated.co/">Templated</a> and released under the Creative Commons License.</p>
						</header>
						<a href="#main" class="more">Learn More</a>
					</div>
				</section>

			<!-- Main -->
				<div id="main">
					<div class="inner">

					<!-- Boxes -->
						<div class="thumbnails">

							<div class="box">
								<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="images/pic01.jpg" alt="" /></a>
								<div class="inner">
									<h3>Nascetur nunc varius commodo</h3>
									<p>Interdum amet accumsan placerat commodo ut amet aliquam blandit nunc tempor lobortis nunc non. Mi accumsan.</p>
									<a href="https://youtu.be/s6zR2T9vn2c" class="button fit" data-poptrox="youtube,800x400">Watch</a>
								</div>
							</div>

							<div class="box">
								<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
								<div class="inner">
									<h3>Nascetur nunc varius commodo</h3>
									<p>Interdum amet accumsan placerat commodo ut amet aliquam blandit nunc tempor lobortis nunc non. Mi accumsan.</p>
									<a href="https://youtu.be/s6zR2T9vn2c" class="button style2 fit" data-poptrox="youtube,800x400">Watch</a>
								</div>
							</div>

							<div class="box">
								<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
								<div class="inner">
									<h3>Nascetur nunc varius commodo</h3>
									<p>Interdum amet accumsan placerat commodo ut amet aliquam blandit nunc tempor lobortis nunc non. Mi accumsan.</p>
									<a href="https://youtu.be/s6zR2T9vn2c" class="button style3 fit" data-poptrox="youtube,800x400">Watch</a>
								</div>
							</div>
 
							<div class="box">
								<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="images/pic04.jpg" alt="" /></a>
								<div class="inner">
									<h3>Nascetur nunc varius commodo</h3>
					 				<p>Interdum amet accumsan placerat commodo ut amet aliquam blandit nunc tempor lobortis nunc non. Mi accumsan.</p>
									<a href="https://youtu.be/s6zR2T9vn2c" class="button style2 fit" data-poptrox="youtube,800x400">Watch</a>
								</div>
							</div>

							<div class="box">
								<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="images/pic05.jpg" alt="" /></a>
								<div class="inner">
									<h3>Nascetur nunc varius commodo</h3>
									<p>Interdum amet accumsan placerat commodo ut amet aliquam blandit nunc tempor lobortis nunc non. Mi accumsan.</p>
									<a href="https://youtu.be/s6zR2T9vn2c" class="button style3 fit" data-poptrox="youtube,800x400">Watch</a>
								</div>
							</div>

							<div class="box">
								<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="images/pic06.jpg" alt="" /></a>
								<div class="inner">
									<h3>Nascetur nunc varius commodo</h3>
									<p>Interdum amet accumsan placerat commodo ut amet aliquam blandit nunc tempor lobortis nunc non. Mi accumsan.</p>
									<a href="https://youtu.be/s6zR2T9vn2c" class="button fit" data-poptrox="youtube,800x400">Watch</a>
								</div>
							</div>

						</div>

					</div>
				</div>

			<!-- Footer -->
				<footer id="footer">
					<div class="inner">
						<h2>Etiam veroeros lorem</h2>
						<p>Pellentesque eleifend malesuada efficitur. Curabitur volutpat dui mi, ac imperdiet dolor tincidunt nec. Ut erat lectus, dictum sit amet lectus a, aliquet rutrum mauris. Etiam nec lectus hendrerit, consectetur risus viverra, iaculis orci. Phasellus eu nibh ut mi luctus auctor. Donec sit amet dolor in diam feugiat venenatis. </p>

						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<p class="copyright">&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com/">Unsplash</a>. Videos: <a href="http://coverr.co/">Coverr</a>.</p>
					</div>
				</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>