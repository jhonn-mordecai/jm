<!DOCTYPE html>
<html lang="en">
	<head>
		<title>John Mordecai</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="John Mordecai - Web Developer in New Haven, CT">
		<meta name="keywords" content="john mordecai, mordecai, web development, web developer, developer, web designer, new haven, nhv, new haven ct web developer, new haven web development, new haven web design">
		<meta name="author" content="John Mordecai">
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="favicon.png" />
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700|PT+Serif:400,400i,700&display=swap" rel="stylesheet">
		<!-- font-family: 'Roboto', sans-serif; -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles.css">

	</head>
	<body>	
		<div id="page-wrapper">

			<header>
				<h1>
					<a>John Mordecai</a>
				</h1>
			</header>
			
			<section class="top-section">

				<div class="container justify-content-center d-flex">
					<div class="row align-items-end">
						<div class="col-12 text-center">
							<div class="titles">
								<div class="img-container">
									<img class="portrait" src="img/avatar.jpg" />
								</div>
								<h1>John Mordecai</h1>
							</div>
							<div class="intro-outer-container">
								<div class="intro-panel">
									<div class="intro-panel-body">
										<p>I develop for the front and back ends, and design for various digital means. I currently push pixels for the <a href="https://www.newhaven.edu/" target="_blank">University of New Haven</a>, and for <a href="https://cherishresearch.org" target="_blank">CHERISH</a>.</p>
										<p><a href="mailto:john@johnmordecai.com">Contact me</a> if needs be.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<div class="middle">
				<div class="point-down"></div>
			</div>

			<main class="content">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 offset-lg-3">
						
							<div class="project-container">
								<div class="project">
									<h4 data-title="bowie">
										<a href="http://whichbowiealbum.com" target="_blank">Which Bowie Album</a>
									</h4>
									<p>An Ajax-powered app that helps you pick which David Bowie album you should listen to. If you really need help, that is. No back-end scripting on this one, just JS/jQuery.</p>
								</div>
								<div class="project">
									<h4>
										<a href="http://johnmordecai.com/concerts" target="_blank">Concert Log</a>
									</h4>
									<p>I've gone to concerts pretty regularly since I was young and decided to make a helpful interface to keep track of them and look up as needed; I can do live search via text input or select a particular year. All stored in a MySQL database, jQuery and Ajax calls bring it all out to the front.</p>
								</div>
								<div class="project">
									<h4>
										<a href="http://nightnewhaven.club/" target="_blank">NIGHT</a>
									</h4>
									<p>Web presence for a local darkwave dance party. I built a feature to view playlists by date, and also a password-protected admin-only interface for a DJ to enter playlists into a MySQL database (which are then displayed on the public-facing site). There is also a search feature to look up how often a song or artist was played, and when. Much use of jQuery Ajax, PHP, etc.</p>
								</div>
								<!--
<div class="project">
									<h4>
										<a href="" target="_blank">MediaGRAB</a>
									</h4>
									<p>A search engine that connects to the APIs for the New York Times, The Guardian, Twitter, and YouTube. All PHP. I might think of a better name for it, but this was the joke that stuck.<br><span class="font-italic">nb. this was a collaborative project.</span></p>
								</div>
-->
							</div>
						</div>
					</div>
				</div>
			</main>

			<section class="about">
				<div class="container d-flex">
					<div class="row align-items-center justify-content-center">
						<div class="col-lg-6">
							<h2>About</h2>
							<div class="about-blurb">
								<p>In past lives I've been a touring musician, journalist, and novice digital designer (I'm still all those things at least a fraction of the time), before officially joining the developer world in 2016. Always a work in progress. I may add some works from those previous eras here, someday.</p>
							</div>
						</div>
						<!--
<div class="col-lg-5 offset-lg-1">
							<div class="card skill-card">
								<div class="card-body">
									<p class="card-head">Things I Use</p>
									<ul>
										<li>HTML5 + CSS {SASS/LESS}</li>
										<li>Javascript/jQuery</li>
										<li>PHP</li>
										<li>MySQL</li>
										<li>Smarty Template Engine</li>
										<li>WordPress/CMS Development</li>
										<li>Bootstrap</li>
										<li>Git</li>
										<li>Email Marketing (various platforms)</li>
										<li>Adobe Photoshop / Illustrator / InDesign</li>
									</ul>
								</div>
							</div>
						</div>
-->
					</div>
				</div>
			</section>

			<footer>
				<div class="row footer-row">
					<div class="col-12 text-center">
						<p class="footer-link">
							<a href="https://www.linkedin.com/in/john-mordecai" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
							&nbsp;
							<a href="mailto:john@johnmordecai.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
						</p>
						<p class="copyright">&copy;<?= date('Y'); ?> John Mordecai</p>
					</div>
				</div>
			</footer>
		</div>

		<!-- jQuery first, then Tether, then Bootstrap JS. -->
		<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>