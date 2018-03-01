<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style/home.css">
	<style type="text/css">
		.container {
		}
		.wrapper {
			max-width: 1300px;
			height: 50px;
			margin: auto;
		}
		.nav-bar {
			height: 50px;
			background: #3c8dbc;
		}
		.left {
			width: 630px;
			float: left;
		}
		.right {
			width: 630px;
			float: right;
		}
		button {
			float: right;
			height: 30px;
			width: 100px;
			margin-top: 10px;
			margin-right: 20px;
			border-radius: 5px;
			border: none;
			cursor: pointer;
			background:none;
			font-family: calibri;
			font-size: 15px;
		}
		button:hover {
			color: blue;
		}
		.dash {
			margin-top: 10px;
			margin-left: 10px;
			font-size: 35px;
			font-family: calibri;
			color: #fff;
		}
		.saidbar {
			width: 300px;
			height: 500px;
			float: left;
			background:#222d31;
		}
		.konten {
			width: 1000px;
			height: 500px;
			float: right;
			background: #e8e8e8;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="wrapper">
		<div class="nav-bar">
			<div class="left">
				<span class="dash"><b>Admin Pondok IT</b></span>
			</div>
			<div class="right">
				<a href="logout.php"><button class="Keluar">Keluar Admin</button></a>
			</div>
		</div>
	</div>
	<div class="wrapper">
		<div class="main">
			<div class="saidbar">
				
			</div>
			<div class="konten">
				
			</div>
		</div>
	</div>
</div>
</body>
</html>
