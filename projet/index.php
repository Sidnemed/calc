<!DOCTYPE html>
<html>
<head>
	<title>
		FORM
	</title>
	<meta charset="utf-8">
	<!-- boostrap -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="bootstrap-4.1.3-dist/bootstrap.min.js"></script>
	<!-- CSS -->
	<style type="text/css">
		body{
			background-color: #DCDCDC; 
		}
		.global{
			width: 1000px;
			margin-left: auto;
			margin-right: auto;
			background-color: #F8F8FF;
		}
		*{
			box-sizing: border-box;
		}
		.header{
			background-color:;
			text-align: center;
			width: 1000px
		}
		.section:after {
		  content: "";
		  display: table;
		  clear: both;
		  width: 1000px;
		}
		.article{
			float: left;
			padding: 10px;
			width:300px;
		}
		.answer{
			float: left;
			width: 700px;
			background:; 
			padding:2px;
		}
		.footer{
			background-color:;
			text-align: center;
		}
	</style>
</head>
<body>
	
	<div class="global"><div class="header">
		<h1>bienvenu</h1>
		<p>exemple sur form ,<b>HTML</b> , <u><strong>php</strong></u><br />
		 et comment va enregisterer le ficher en  text
		 et <strong><u>afficher</u></strong>
		</p>
	</div>
	<!-- tableau avec form -->
	
	<div class="section">
		<div class="article">
			<table>
				<form action="" method="post" class="form-group">					
					<tr>
						<td>
							civilité:
						</td>
						<td>
							<div class="form-control">
								<label>Mll <input class="radio-inline"  type='radio' name='male' value="M ll" required="required"  /></label>
								<label>Mm <input class="radio-inline" type='radio' name='male' value="Mm" required="required" /></label>
								<label>MR <input class="radio-inline" type='radio' name='male' value="MR" required="required" /></label>
							</div class="form-control">
						</td>
					</tr>
					<tr>
						<td>
							votre nom:
						</td>
						<td>
							<input type='text' class="form-control input-sm" name='nom' maxlength="10" placeholder="votre nom" required="required"  />
						</td>
					</tr>
					<tr>
						<td>
								<span class=""></span>prénom: 
						</td>
						<td>
							<input class="form-control input-sm" type='text' name='prenom' maxlength="8" placeholder="prenom"  required="required" />
						</td>
					</tr>
					<tr>
						<td>
							age:
						</td>
						<td>
							<input class="form-control input-sm" type='number' name='age' maxlength="2" placeholder="age" required="required" >
						</td>
					</tr>
					<tr>
						<td>
							email:
						</td>
						<td>
							<input class="form-control input-sm" type='email' name='email' placeholder="email"required="required" >
						</td>
					</tr>
					<tr>
						<td>
							message:
						</td>
						<td>
							<textarea class="form-control" cols="20" rows="4" name="message" maxlength="160" placeholder="ecrit ici"required="required"></textarea>
						</td>
					</tr>
					<tr>
						<td>
							ville:
						</td>
						<td>
							<select name="ville" class="form-control sm-4" id="exampleFormControlSelect1">
								<option>Marrakech</option>
								<option>Tanga</option>
								<option>Casa</option>
								<option>Rabat</option>
							</select>
						</td>
					</tr>
					<tr>

						<td>
							<button class="btn btn-danger btn-sm" type='submit'>anuller</button>
						</td>
						<td>
							<button type="submit" class="form-control btn btn-primary" name="ok">send</button>
						</td>
					</tr>
				
				</form>
			</table>
			<!-- php -->
				<?

					//var
					$male = $_POST['male'];
					$nom = $_POST["nom"];
					$prenom = $_POST["prenom"];
					$age  = $_POST["age"];
					$email = $_POST["email"];
					$message = $_POST["message"];
					$ville = $_POST["ville"];
					$ok  = $_POST["ok"];
							
					//verrification
					if(isset($ok)){

						$file = 'test.txt';
						$to  = fopen($file, 'w');
						if($to){
							$fwrite="
							civilite : $male
							nom : $nom 
							prenom:$prenom 
							age : $age 
							email : $email
							message:$message
							ville: $ville
							";
							$do = fwrite($to,$fwrite);
						}else{
								echo "error";
						}
						fclose($to);
					}				
				?>
		</div>
		<div class="answer">
			<!-- affichage du text -->
			<?php
				echo "<pre>";
				$to = fopen("test.txt", 'r');
				echo @fread($to,filesize("test.txt"));
			?>	
		</div>
	</div>
	<div class="footer">
		<P>codded by <I>sidne</I>, <strong>fb</strong> : <u>sidne.med.1</u></P>
	</div>
</div>
	
</body>
</html>