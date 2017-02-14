<!Doctype HTML>
<html>
<head>
	<title>
		Useful Stuff
	</title>
	<style>
		body {
			font-family: arial, helvetica, sans-serif;
		}
		.form-container {
			margin-top: 3rem;
			padding: 2rem;
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
	</style>
</head>
<body>
	<h2>
		Do some Useful Stuff
	</h2>
	<div class="container">
		<div class="form-container">
			<h4>
				Spell out state abbreviation:
			</h4>
			<form action="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" method="post">
				<input type="hidden" name="form-id" value="abbr-to-state" />
				<input type="text" name="state" />
				<input type="submit" />
			</form>
		</div>
		<div class="form-container">
			<h4>
				Abbreviate State Name:
			</h4>
			<form action="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" method="post">
				<input type="hidden" name="form-id" value="state-to-abbr" />
				<input type="text" name="abbr" />
				<input type="submit" />
			</form>
		</div>
	</div>
</body>
</html>