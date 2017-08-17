<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<title>Mi Page</title>
</head>
<body>

<div class="row">
	<div class="col-md-offset-2 col-md-8">

		<?php
		function myTitle($title, $class){
			echo "<h3 class='$class'>$title</h3>";
		}

		function preCode($code){
			echo "<pre>$code</pre>";
		}

		function makeDescription($description) {
			echo "<p>$description</p>";
		}

		



		function nota( $title, $description, $codeShow, $codeText){
			myTitle($title, 'text-right');
			makeDescription($description);
			preCode($codeShow);
		}
		?>
		
		<h1 class="text-center">PHP</h1>
		
		
		<hr>
		<div class="">Apuntes inicials de clase</div>
		
		<h3 class="text-right">If</h3>
		<pre>
		if (condition) {
				# code...
			} elseif (condition) {
				# code...
			} else {
				# code...
			}
		</pre>
				
		<h3 class="text-right">Switch</h3>
		<pre>
		switch ($variable) {
			case 'value':
				# code...
				break;
			
			default:
				# code...
				break;
		}
		</pre>

		<h3 class="text-right">Mientras</h3>
		<h5 class="text-right">Ahora se usa el foreach</h5>
		<pre>
		while ($a <= 10) {
			# code...
		}
		<?php
		$a=0;
		
		while ($a <= 10) {
			$retVal = ($a == 0) ? $a : " - $a" ;
			echo $retVal;
			$a++;
		}
		?>	
		</pre>

		<h3 class="text-right">For</h3>
		
		<pre>
		for ($i=0; $i < ; $i++) { 
			# code...
		}
		<?php
		$a=0;
		
		for ($i=0; $i < 10; $i++) { 
			# code...
			$retVal = ($i == 0) ? $i : " - $i" ;
			echo $retVal;
		}
		?>	
		</pre>
		
		<h2>Funciones</h2>
		<h3 class="text-right">For</h3>
		
		<pre>
		for ($i=0; $i < ; $i++) { 
			# code...
		}
		<?php
		$a=0;
		
		for ($i=0; $i < 10; $i++) { 
			# code...
			$retVal = ($i == 0) ? $i : " - $i" ;
			echo $retVal;
		}
		?>	
		</pre>

		<?php
			nota(
				"Foreach",
				"Recorre todo una array",
				'
				foreach ($variable as $key => $value) {
					# code...
				}',
				"
				"
			)
			;
		?>
		

	</div>
</div>
</body>

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>