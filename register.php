<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>FUNSWORDS | REGISTER</title>
	
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async="" defer=""></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

<link rel="shortcut icon" type="image/png" href="https://cdn.discordapp.com/attachments/1186582727936446465/1194532705828872292/photo_2024-01-08_16-16-04.jpg">
<link rel="stylesheet" href="asset/style2.css">
</head>
<script src="https://kit.fontawesome.com/81e200caad.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="scripts.js"></script>
<body>
	<?php if(isset($_SESSION["username"])){
		header('Location: index.php');
    	exit();
	}
	else { ?>
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
		<?php include('errors.php'); ?>
		<div class="containerrr">
		<div class="header">
		<h2>FunSwords|Register</h2>
		</div>
		<div class="form-floating mb-3">
			<label>Username</label>
			<input type="text" name="username" placeholder="Username" id="UsernameInput" value="<?php echo $username; ?>">
		</div>
		<div class="form-floating mb-3">
			<label>Email</label>
			<input type="email" name="email" placeholder="Email" required="required" value="<?php echo $email; ?>">
		</div>
		<div class="form-floating mb-3">
			<label>Password</label>
			<input type="password" name="password_1"  placeholder="Password" id="passwordInput1">
		</div>
		<div class="form-floating mb-3">
			<label>Password Confirm</label>
			<input type="password" name="password_2" placeholder="Confirm Password" id="passwordInput2">
		</div>
		<div class="form-floating mb-3">
			<label>Secondary</label>
			<input type="password" name="password_sec1"  placeholder="Secondary Password" id="passwordInput1">
		</div>
		<div class="form-floating mb-3">
			<label>Secondary Confirm</label>
			<input type="password" name="password_sec2" placeholder="Confirm Secondary" id="passwordInput2">
		</div>
		<div class="form-floating mb-3">
			<label>PhoneNumber</label>
			<input type="phonenumber" name="phonenumber" placeholder="Phone Number" required="required" value="<?php echo $phone; ?>">
		</div>
		<div class="form-floating mb-3">
			<button type="submit" class="btn" name="btn_regis">Register</button>
		</div>
		</div>
		
		
	</form>
<footer class="py-4 text-center">
        <a href="index.php">@ Copyright 2024 | FunSwords | System All By FunSwords.xyz</a>
        </footer>  

	<center>
	<?php } ?>
	
</body>
</html>
