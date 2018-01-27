<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>404 Page Not Found!</title>
	<link rel="shortcut icon" href="web/assets/img/favicon.png" type="image/png">
	<style>
		@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,700');
		
		:root {
			background: #FCF7FF;
		}

		* {
			padding: 0;
			margin: 0;
			position: relative;
			box-sizing: border-box;
		}

		body {
			display: flex;
			width: 100%;
			height: 100vh;
			justify-content: center;
			align-items: center;
			font-family: 'Roboto', sans-serif;
			font-size: 14px;
			color: #2e2e2e;
			line-height: 1.8;
			overflow-x: hidden;
		}

		body > div {
			text-align: center;
		}

		#img-404{
			fill: #FF3E26;
			width: 200px;
		}

		#hashtag {
			fill: #FF3E26;
			width: 60px;
		}

		.highlight {
			color: #FF3E26;
		}
	</style>
</head>
<body>
	<div>
		<img src="http://localhost/ericreyes.info/web/assets/img/cancel_icon.svg" class="svg" id="hashtag">&nbsp;&nbsp;
		<img src="http://localhost/ericreyes.info/web/assets/img/oops_404.svg" class="svg" id="img-404">
		<div>Are you lost? Back to <a href="/ericreyes.info" class="highlight">Homepage</a></div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="http://localhost/ericreyes.info/web/assets/js/imgsvg.js"></script>
</body>
</html>