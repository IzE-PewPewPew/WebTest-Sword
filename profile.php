<?php include('server.php') ?>
<?php
if (isset($_POST['btn_login'])) {
    login($db);
}
?>
<html>
<head>
	<title>FUNSWORDS | HOME</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script type="text/javascript" src="scripts.js"></script>
	<link rel="stylesheet" href="asset/Account.css">

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
<script src="https://cdn.jsdelivr.net/npm/@widgetbot/crate@3"></script>
<script src="https://kit.fontawesome.com/81e200caad.js" crossorigin="anonymous"></script>



<body>
	
	<center>

	<?php if($_SESSION["username"]) {?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
        <a class="navbar-brand" href="Account.php"><i class="fa-solid fa-khanda"></i>FUNSWORDS</a>
            <li class="nav-item dropdown pe-3">
			  	<!-- <img src="/img/christmas-hat.png" alt="" style="position: absolute;left: -13px;top: -11px;width: 41px;" data-bs-toggle="dropdown"> -->
				<a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" aria-expanded="false">
				<img src="https://cdn.discordapp.com/attachments/1195410943853727825/1195647794808098836/avatar-10.png" alt="Profile" class="rounded-circle">
				<span class="logo"><?php echo $_SESSION["username"]; ?></span>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile show" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(126px, 38px);" data-popper-placement="bottom-end">
                <li>
					<a class="dropdown-item d-flex align-items-center" href="profile.php">
					<i class="bi bi-person"></i>
					<span>My Profile</span>
					</a>
                    <a class="dropdown-item d-flex align-items-center" href="logout.php">
					<i class="bi bi-person"></i>
					<span>Sign Out</span>
					</a>
				</li>
				</a><!-- End Profile Iamge Icon -->
            </ul><!-- End Profile Dropdown Items -->
          </li>
        </div>
      </div>
    </nav>

    <div class="vh-100">
    <div class="pagetitle">
        <h1 class="activee">Profile</h1>
        <section class="section profile">
        <div class="row">
        <div class="col-xxl-4 col-xl-4">
            <div class="card">
                <div class="card-body pt-4 d-flex flex-column align-items-center">
                    <ul role="tablist" class="nav nav-tabs nav-tabs-bordered">
                        <li role="presentation" class="nav-item">
                            <button data-bs-toggle="tab" data-bs-target="#profile" aria-selected="true" role="tab" class="nav-link active"><i class="far fa-user"></i> Profile</button>
                        </li> 
                </ul> 
                <div class="tab-content pt-4"><div id="profile" role="tabpanel" class="tab-pane fade text-center profile-card active show">
                    <div class="position-relative">
                        <i class="fas fa-exclamation-circle text-warning userinfo-verify bg-dark"></i> 
                        <img src="https://cdn.discordapp.com/attachments/1195410943853727825/1195647794808098836/avatar-10.png" alt="Profile" class="rounded-circle border border-secondary">
                    </div> 
                    <h2><?php echo $_SESSION["username"]; ?></h2>
    </div>
    </section>
    </div>
    </div>

    



            <footer class="py-4 text-center">
        <a href="Account.php">@ Copyright 2024 | FunSwords | System All By funswords.site</a>
        </footer>  

	<?php } ?>
</body>
</html>