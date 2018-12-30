<!DOCTYPE html>
<html>
<head>
	<title>cal</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/floating-labels.css">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="jquery/popper.min.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{margin:0;,
			font-size:1rem;
			font-weight:400;line-height:1.5;
			color:white;
			text-align:center;
			background-color:black
		}
	</style>
</head>
<body>

	<strong>
		calculator
	</strong>
	<div>
		<p>simple calculator and eazy to use</p>
	</div>	
	<div align="center">
		<div class="">
			<form action='' method='post'>
				<div class="form-label-group"><input type='text' name='var1' class="form-control-lg cols-2" placeholder="Ex:number" required="required"></div>
				<div class="">
				<select name='x'>
				<option name='plus'>+</option>
				<option name='moin'>-</option>
				<option name='fois'>*</option>
				<option name='diviser'>/</option>
				</select></div>
				<div class="form-label-group"><input type='' name='var2' class="form-control-lg cols-2" placeholder="Ex:number" required="required"></div>
				<button  class="btn btn-primary" type='submit' name='send'>cal</button>
			</form>
		</div>
		<!-- php -->
		<?php

			//var
			$x=$_POST["x"];
			$send=$_POST["send"];
			$var1=$_POST["var1"];
			$var2=$_POST["var2"];
			//work of machine
			if(isset($send)){
				switch($x){
				case "+":
				echo $var1 + $var2;
				break;
				case "-":
				echo $var1 - $var2;
				break;
				case "*":
				echo $var1 * $var2;
				break;
				case "/":
				echo $var1 / $var2;
				break;
				default:
				echo "error";
				}
			}
		?>
	
		<div>
			<i>coded by sidne &copy;</i>
			<div><img src="I9.gif"></div>
			<div><img src="I8.gif"></div>
		</div>
	</div>
	

</body>
</html>