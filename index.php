<?php
session_start();
?>
<html>
<head>
	<title>FUNSWORDS | HOME</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script type="text/javascript" src="scripts.js"></script>
	<link rel="stylesheet" href="asset/style.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async="" defer=""></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.min.js"></script>

<link rel="shortcut icon" type="image/png" href="https://cdn.discordapp.com/attachments/1186582727936446465/1194532705828872292/photo_2024-01-08_16-16-04.jpg">

</head>
<script src="https://kit.fontawesome.com/81e200caad.js" crossorigin="anonymous"></script>
<body>
	
	<center>
	<?php if(isset($_SESSION["username"])) {?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
        <a class="navbar-brand" href="index.php"><i class="fa-solid fa-khanda"></i>FUNSWORDS</a>
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home</a>
            </li>
            </ul>
            <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link-logo-Account-managment" href="Account.php"><i class="fa-solid fa-user"></i> Account Management</a>
            </li>
            </ul>
        </div>
    </nav>
	<h1>Welcome <span style="color:orange;"><?php echo $_SESSION["username"]; ?></span>!</h1>
	<?php
     } else { ?>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
        <a class="navbar-brand" href="index.php"><i class="fa-solid fa-khanda"></i>FUNSWORDS</a>
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

    <div class="header">
    <h1>សួស្ដីមេទ័ពទាំងអស់គ្នា</h1>
        <h2>នៅពេលនេះពួកយើងនាំគ្នាដឹកនាំទ័ពដើម្បីច្បាំងជាមួយសត្រូវដែលនៅនឹងមុខទាំងអស់គ្នា</h2>
        <h3>កម្រាន្តជាមួយការវែដៃSqរបស់GM Toch បានដែលនៅខាងក្រោម!</h3>
        
    </div>
    
    

    <div class="part-box part-box-active">
   
   </div>

<iframe width="850" height="700" src="https://www.youtube.com/embed/OjbGIabEFM8" title="Jx2 FunSwords Server Private Coming Soon! SM Fight Sq | ZhoaZhan" frameborder="2" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" autoplay="autoplay" allowfullscreen></iframe>

    
<footer class="py-4 text-center">
        <a href="index.php">@ Copyright 2024 | FunSwords | System All By funswords.site</a>
        </footer>  

	<?php } ?>
</body>
</html>