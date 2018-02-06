<!DOCTYPE html>
<html>
<head>
	<style type="text/css">

	*{
		padding: 0px;
		margin: 0px
	}

	body{
		background:url(Images/4.png) no-repeat;
		background-size: cover;
		overflow: hidden;
		font-family: Times New Roman;
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

	.div_title{
		margin-top: 20px;
		height: 5px;
		text-align: center;
		font-size: 26px;
	}

	.div_title h1{
		text-shadow: black 3px 5px 5px;
		color: #FFFFFF;
	}

	table{
		width: 80%;
		margin: 80px 120px;
		border: none;
	}

	th{
		padding: 8px;
		text-align: center;
		border-bottom: 1px solid #ddd;
		font-size: 22px;
		color: white;
	}

	td {
		padding: 8px;
		text-align: center;
		border-bottom: 1px solid #ddd;
		color: black;
		font-size: 20px;
	}

	td:hover{
		background-color: #f5f5f5;
	}

	.a_btn button{
		width: 60px;
		height: 36px;
		color: #fff;
		background-color: #aaabbb;
		border-radius: 5px;
		border: 2px solid #cccccc;
		box-shadow: 2px 2px 1px #888888;
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
			<li><a href="login.php">Login</a></li>
		</ul>
	</div>

	<div class="div_title"><h1>List Account</h1></div>
	<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>ID</th>
			<th>User Name</th>
			<th>Password</th>
			<th></th>
			<th></th>
		</tr>
		<tr>
			<td>1</td>
			<td>Quang</td>
			<td></td>
			<td><a class="a_btn"><button>Edit</button></a></td>
			<td><a class="a_btn"><button>Delete</button></a></td>
		</tr>
</body>
</html>