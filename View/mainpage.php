<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	*{
		padding: 0px;
		margin: 0px;
	}

	body{
		font-family: Times New Roman;
		background:url(Images/3.jpg);
		overflow: hidden;
		background-size: cover;
	}

	.div_menu{
		background: #3fa46a;
		text-align: center;
		border-radius: 5px;
		opacity: 0.8;
	}

	.div_menu ul {
		width: 1200px;
		height: 50px;
		text-align: center;
	}

	.div_menu li{
		display: inline-block;
		width: 120px;
		height: 60px;
		margin-left: 50px;
		font-size: 20px;
		margin-top: 15px;
	}

	.div_menu li a{
		text-decoration: none;
		color: #FFFFFF;
		font-size: 20px;
	}

	.div_menu li a:hover{
		border-right: 2px dotted #ffffff;
		color: #666
	}

	h1.h1_hi{
		text-align:center;
		color: black;
		font-size: 48px;
		line-height: 600px;
		text-shadow: black 2px 3px 4px;
	}

</style>
</head>

<body>
	<div class="div_menu">
		<ul>
			<li><a href="mainpage.php">Home</a></li>
			<li><a href="info.php">Infomation</a></li>
			<li><a href="account.php">Account</a></li>
			<li><a href="view.php">View</a></li>
			<li><a href="logout.php">Logout</a></li>
			<li><a href="registration.php">Registration</a></li>
		</ul>
	</div>
	<h1 class="h1_hi">
		<?php session_start(); 
		if (isset($_SESSION['name']) == true)
			echo "Welcome ".$_SESSION['name'];
		else
		{
			header('location: login.php');
		}
		?>
			
	</h1>
</body>
