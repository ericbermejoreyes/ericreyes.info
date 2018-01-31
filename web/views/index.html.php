<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="web/assets/img/favicon.png">
	<link rel="stylesheet" href="web/assets/css/theme.css">
	<link rel="shortcut icon" href="<?php asset('img/favicon.png'); ?>" type="image/png">
	<link rel="stylesheet" href="<?php asset('css/normalize.css'); ?>">
	<link rel="stylesheet" href="<?php asset('css/animations.css'); ?>">
	<link rel="stylesheet" href="<?php asset('css/animations-ie-fix.css') ?>">
	<link rel="stylesheet" href="<?php asset('css/theme.css'); ?>">
</head>
<body id="home">
	<div id="sticky-menu">
		<div class="row ph20">
			<div class="col-auto ph20 pv10">
				<a id="sticky-logo" href="<?php echo HOSTNAME; ?>"><img src="web/assets/img/logo.svg" alt="Eric-Reyes,logo,brand" class="svg"></a>
			</div>
			<div class="col-fill ph20 pv10 row flex-i-center flex-j-right">
				<div class="top-nav">
					<a href="#home" class="ph10">HOME</a>
					<a href="#about-section" class="ph10">ABOUT</a>
					<a href="#skills-section" class="ph10">SKILLS</a>
					<a href="#contact-section" class="ph10">CONTACT</a>
				</div>
			</div>
		</div>
	</div>
	<header class="pv30">
		<div id="brand" class="center">
			<a id="logo" href="<?php echo HOSTNAME; ?>"><img src="web/assets/img/logo.svg" alt="Eric-Reyes,logo,brand" class="svg mb30"></a>
		</div>
		<div class="top-nav row flex-j-center">
			<a href="#home" class="ph10">HOME</a>
			<a href="#about-section" class="ph10">ABOUT</a>
			<a href="#skills-section" class="ph10">SKILLS</a>
			<a href="#contact-section" class="ph10">CONTACT</a>
		</div>
	</header>
	<section id="banner">
		<div class="row flex-j-center">
			<div class="ph20">
				<img id="dp" src="<?php asset('img/eric.jpg'); ?>" alt="Eric-Reyes,logo,brand">
			</div>
			<div class="row flex-i-center flex-j-center ph20">
				<div>
					<h1>Hi! I'm Eric</h1><br>
					<span class="fs20 fw100">Web Developer, UX/UI & Graphic Designer</span>
				</div>
			</div>
		</div>
	</section>
	<section id="about-section" class="animatedParent animateOnce" data-sequence="250">
		<div class="animated fadeInUp fastest hidden" data-id="1">
			<div>
				<img src="<?php asset('img/about.svg'); ?>" alt="About" class="svg center" id="about">
			</div>
			<div class="mt50 ta-center p20">
				<span>
					I am a <span class="super-highlight">Creative Professional</span> with strong experience in <br>
					Web Developement and Web Design, which involves client & server side <br>
					web programming, Graphics and UX/UI design.
				</span>
			</div>
			<div class="row mt50 max-w800 center">
				<div class="animated fadeInUpShort slow hidden col-md-3 p20 delay-250" data-id="2">
					<img class="svg svg-h2 mb30" src="<?php asset('img/a_coder.svg'); ?>" alt="A Coder">
					Currently a full time <span class="highlight">Web Developer</span>. Specialized in developing functional web applications that passes clients standard, specifications and requirements.
				</div>
				<div class="animated fadeInUpShort slow hidden col-md-3 p20 p20 delay-250" data-id="3">
					<img class="svg svg-h2 mb30" src="<?php asset('img/a_creative.svg'); ?>" alt="A Creative">
					2 years of experience as a <span class="highlight">Web Designer (UX/UI, Graphics, Logo, Branding and Ads)</span>. Satisfying every clients with solid, clean and unique designs that match the business brand and needs.
				</div>
				<div class="animated fadeInUpShort slow hidden col-md-3 p20 p20 delay-250" data-id="4">
					<img class="svg svg-h2 mb30" src="<?php asset('img/and_also.svg'); ?>" alt="and also">
					A Hobbiyist. Has the love for arts, doodling is his past time.
				</div>
			</div>
		</div>
	</section>
	<section id="skills-section">
		<div class="p0 row">
			<div id="design" class="col-md-6 col-sm-12 row flex-i-center flex-j-center">
				<div>
					<h2>i DESIGN</h2><br>
					<div>
						Web Mockup, Graphics, Logo, Brand, UX/UI<br>
						Photoshop, Illustrator
					</div>
				</div>
			</div>
			<div id="development" class="col-md-6 col-sm-12 row flex-i-center flex-j-center">
				<div">
					<h2>i DEVELOP</h2><br>
					<div>
						HTML, CSS, Javascript, PHP, MySQL<br>
						Symfony, Laravel, NodeJS, jQuery, AngularJS
					</div>
				</div>
			</div>
		</div>
		<section id="contact-section">
			<div class="ta-center">
				Let's get connected
				<br><br>
				<div class="row flex-j-center">
					<div>
						<a href="https://www.facebook.com/ericbermejoreyes" target="_blank" class="inline-block w32"><img src="<?php asset('img/facebook_icon.svg') ?>" class="svg icon-md fill-lightgray" alt=""></a>
						<a href="https://github.com/ericbermejoreyes" target="_blank" class="inline-block w32"><img src="<?php asset('img/linkedin_icon.svg') ?>" class="svg icon-md fill-lightgray" alt=""></a>
						<a href="https://www.linkedin.com/in/ericbermejoreyes/" target="_blank" class="inline-block w32"><img src="<?php asset('img/github_icon.svg') ?>" class="svg icon-md fill-lightgray" alt=""></a>
					</div>
				</div>
			</div>
		</section>
	</section>
	<footer class="pv30">
		<div class="row max-w800 center flex-i-center">
			<div class="col-md-6">
				<div class="row ph20 fw100 fs10">
					© <?php echo date("Y") ?>. All Rights Reserved, Designed and Developed by &nbsp;<img src="web/assets/img/logo.svg" alt="footer-logo" class="svg" id="footer-logo">
				</div>
			</div>
			<div class="col-md-6">
				<div class="row ph20 fw100 fs12 flex-i-center flex-j-right"><img src="<?php asset('img/email_icon.svg'); ?>" class="svg icon-sm fill-lightgray">&nbsp;eric.bermejo.reyes@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php asset('img/hashtag_icon.svg'); ?>" class="svg icon-sm fill-lightgray">&nbsp;+639086257190</div>
			</div>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="<?php asset('js/imgsvg.js'); ?>"></script>
	<script src="<?php asset('js/ease-scroll.js'); ?>"></script>
	<script src="<?php asset('js/main.js'); ?>"></script>
	<script src="<?php asset('js/css3-animate-it.js'); ?>"></script>
</body>
</html>