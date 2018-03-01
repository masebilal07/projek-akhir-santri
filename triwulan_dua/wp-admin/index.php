<?php
session_start();
if(isset($_SESSION['login'])) {
  header("location:home.php");
} else {
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script src="../lib/jquery.js"></script>
	<script src="../dist/jquery.validate.js"></script>
	<style type="text/css">
		.conten {
			margin-top: 40px;
			border-radius: 5px;
			height: 500px;
			width: 350px;
			background: #e8e8e8;
			margin: auto;
			/*margin-top: 100px;*/
			box-shadow: 5px 5px 5px #333;
			opacity: 0.9;
			
		}
		.conten:hover {
			box-shadow: 0px 0px 10px #fff; 
  			-moz-box-shadow: 0px 0px 10px #fff; 
  			-webkit-box-shadow: 0px 0px 10px #fff
  			}
		#email {
			height: 40px;
			width: 260px;
			border-radius: 2px;
			border: 0px;
			background: #D3D3D3;
			margin-top:20px;
		}
		#password {
			height: 40px;
			width: 260px;
			border-radius: 2px;
			border: 0px;
			background: #D3D3D3;
			margin-top: 20px;
		}
		#button {
			height: 40px;
			width: 260px;
			border-radius: 2px;
			border: 0px;
			background: #56c9e4;
			font-weight: bold;
			color: #fff;
			margin-top: 20px;
			cursor: pointer;
		}
		#tabel {
			margin: auto;
			padding:10px;
			position: relative;
			top: -105px;
		}
		.text {
			margin: auto;
			color: black;
			font-family: calibri;
			font-size: 20px;
			text-decoration:none;
			padding-left: 30%;
			position: relative;
			/*top: -85px;*/
		}
		.text:hover {
			color: red;
		}
		#text2 {
			padding-left: 30%;
			font-size: 30px;
			font-family: calibri;
			position: relative;
		}
 		#form {
 			margin-left: 50px;
 		}
 		img {
 			margin-top: 30px;
 			margin-right: 20px;
 		}
 		.valid {
 			color: red;
 		}
	</style>
	<script type="text/javascript">
	$().ready(function() {
		$("#form").validate({
			rules: {
				password: {
					required: true,
					minlength: 3,
				},
				email: {
					required: true,
					email: true
				},
		
			},
			messages: {
				password: {
					required: "Masukan Password Anda",
					minlength: "Masukan password Anda Minimal 3"
				},
				email: "Masukan Email Anda",
			}
		});
		newsletter.click(function() {
			topics[this.checked ? "removeClass" : "addClass"]("gray");
			topicInputs.attr("disabled", !this.checked);
		});
	});
	</script>
</head>
<body background="../images/laptop.jpg">
	
	<div class="conten">
		<center><img src="images/Pondok.png" width="150" height="100"></center>
		<p id="text2"><b>Pondok</b> IT</p>
		<form action="proses/proses_login.php" method="post" id="form">
			<label class="valid" for="email">
				<input type="text" placeholder=" Email" id="email" name="email">
			</label>
			<label class="valid" for="password">
				<input type="password" placeholder=" Password" id="password" name="password">
			</label>
			<label>
				<input type="submit" name="submit" value="LOG IN" id="button">
			</label>
		</form>
		<a href="#" class="text">Lupa kata Sandi?</a>
	</div>
</body>
</html>
<?php
}
?>