<!Doctype HTML>
<html>
<head>
	<title>
		Result - Useful Stuff
	</title>
	<style>
		body {
			font-family: arial, helvetica, sans-serif;
		}
		.form-container {
			padding: 10px;
			border: 2px solid #000;
		}
		.container {
			margin-left: auto;
			margin-right: auto;
			max-width: 960px;			
		}
		h2 {
			text-align: center;
		}
		.result {
			padding-top: 3rem;
		}
		.text-center {
			text-align: center;
		}
	</style>
</head>
<body>
	<h2 class="result">
		Your result is: <?php echo $result;?>
	</h2>
	<div class="text-center">
		<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">Return</a>
	</div>
</body>
</html>