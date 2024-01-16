<?php include('server.php') ?>
<?php 
	if($_SESSION["username"]) 
		header('location:index.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>FUNSWORDS | LOGIN</title>
	<link rel="stylesheet" type="text/css" href="asset/style3.css">
	<script type="text/javascript" src="scripts.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async="" defer=""></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

<link rel="shortcut icon" type="image/png" href="https://cdn.discordapp.com/attachments/1186582727936446465/1194532705828872292/photo_2024-01-08_16-16-04.jpg">
</head>
<script src="https://kit.fontawesome.com/81e200caad.js" crossorigin="anonymous"></script>
<body>
	<center>
	
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
        <a class="navbar-brand" href="./"><i class="fa-solid fa-khanda"></i> FUNSWORDS</a>
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home</a>
            </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="login.php"><i class="fa fa-user"></i> Login</a>
            </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="register.php"><i class="fa fa-user"></i> Register</a>
            </li>
            </ul>
            <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="download.php"><i class="fa-solid fa-download"></i> Download</a>
            </li>
            </ul>
        </div>
    </nav>

   
<form method="post" action="server.php">
		<!-- <?php include('errors.php'); ?> -->
<div class="containerr">
<div class="header">
		<h2>FunSwords | Login</h2>
	</div>

		<div class="input-group">
			<label>Usernames</label>
			<input type="text" name="username" value="<?php echo $username; echo $user1?>">
		</div>
		<div class="input-group">
			<label>Passwords</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="btn_login">Submit</button>
		</div>
</div>
	</form>

<footer class="py-4 text-center">
        <a href="index.php">@ Copyright 2024 | FunSwords | System All By FunSwords.xyz</a>
        </footer>  

	<center>
</body>
</html>
