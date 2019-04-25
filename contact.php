<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Little Flower E.M School,Cuttack</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="back">
		<?php include"navbar.php";?>
		<img src="img/b1.jpg" width="800">

		<div class="login">
			<h1 class="heading">Contact Us</h1>
			<div class="cont">

				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

					Little Flower English Medium High School<BR>
					Vidya Nagar,2nd lane,<BR>
					Near Vani Vihar, Opp Nandakanan Bus Stop,<BR>
					Cuttack,Odisha-752 050<BR>
					Mail - littleflowerscuttack@gmail.com<br>Phone - 82800-66005
				</form>
			</div>
		</div>
		<div class="footer">
			<footer><p>Copyright &copy;pms10@iitbbs.ac.in</p></footer>
		</div>
		<script src="js/jquery.js"></script>
		 <script>
		$(document).ready(function(){
			$(".error").fadeTo(1000, 100).slideUp(1000, function(){
					$(".error").slideUp(1000);
			});

			$(".success").fadeTo(1000, 100).slideUp(1000, function(){
					$(".success").slideUp(1000);
			});
		});
	</script>



	</body>
</html>
