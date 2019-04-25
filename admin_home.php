<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";

	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Little Flower E.M School</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php include"navbar.php";?><br>
		<img src="img/1.jpg" style="margin-left:90px;" class="sha">
			<div id="section">
				<?php include"sidebar.php";?><br>
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 >About Little Flower English Medium High School</h3><br>
					<img src="img/home.jpg" class="imgs">
					<p class="para">
						Little Flower Group has been tremendously successful in the field of education, because it has not waited
						for things to happen, but has created opportunities instead of waiting for it to knock.
					</p>
					<p class="para">
						This proactive approach has resulted in creating many vistas for learning and setting up different verticals
						in the field of education to suit the varying needs of the students. In over two decades of its existence,
						it has delivered to the society a steady and healthy band of successful youngsters who have made a mark in
						their respective career charts. Bhashyam has grown tall and spread far and wide at a decent pace mainly because
						parents and students responded.
					</p>
				</div>
			</div>
		<?php include"footer.php";?>
	</body>
</html>
