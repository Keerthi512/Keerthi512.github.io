<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
//echo $activePage;
?>

<header id="header">
	<nav id="main-nav" class="navbar navbar-default" role="banner">
		<div class="container-fluid header-border">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="logoSection"> <a class="navbar-brand" href="index.html"><img src="images/1.png" alt="logo" width="500" Title="Website Designing | E-commerce Websites| Software Development | Domains | Web Hosting | SEO | Digital Marketing"></a></div>
				</div>
			</div>
			
		</div><!--/.container-->

		<div class="container">
			<div class="collapse navbar-collapse navbar-left">
				<ul class="nav navbar-nav">
					<li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php">Our Goshala</a></li>
					<li class="<?= ($activePage == 'services') ? 'active':''; ?>"><a href="services.php">Cow Service</a></li>
					<li class="<?= ($activePage == 'cow-seva-in-sastra') ? 'active':''; ?>"><a href="cow-seva-in-sastra.php">Cow Seva in Sastra</a></li>
					<li class="<?= ($activePage == 'contact') ? 'active':''; ?>"><a href="contact.php">Contact Us</a></li>
					<li class="<?= ($activePage == 'cow-sevak') ? 'active':''; ?>"><a href="cow-sevak.php">Cow Sevak</a></li> 
					<li class="<?= ($activePage == 'donations') ? 'active':''; ?>"><a href="donations.php">Donation</a></li>  
				</ul>
			</div>
		</div>
				
	</nav><!--/nav-->
</header>