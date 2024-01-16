<?php
session_start();
?>
<html>
<head>
	<title>FUNSWORDS | DOWNLOAD</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script type="text/javascript" src="scripts.js"></script>
	<link rel="stylesheet" href="styledownload.css">

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

	<?php if($_SESSION["username"]) {?>
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
            <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="download.php"><i class="fa-solid fa-download"></i> Download</a>
            </li>
            </ul>
        </div>
    </nav>
	<h1>Welcome <span style="color:orange;"><?php echo $_SESSION["username"]; ?></span>!</h1>
	<?php } else { ?>
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
    <button type="button" class="btn btn-white rounded-circle btn-music"><i class="fas fa-volume-up"></i></button> <audio id="music" loop="loop" autoplay="autoplay" class="d-none"><source src="https://cdn.discordapp.com/attachments/1186582727936446465/1195591037981298709/JO_II-Vanda-Lyric__.m4a" type="audio/mp3"></audio>

    <table border="1">
<tbody>
<tr>
<td>
<h4 style="text-align: center;"><strong>Minimum Recommended PC</strong></h4>
</td>
<td>
<h4 style="text-align: center;"><strong>Recommended</strong></h4>
</td>
</tr>
<tr>
<td>
<ul>
<li>WindowsXP SP2, DX9</li>
<li>CPU P4 &gt;2GHz</li>
<li>RAM 256MB</li>
<li>VGA RAM 64MB</li>
<li>Internet 64kbps, with &gt; 100 ms ping time to our servers</li>
</ul>
</td>
<td>
<ul>
<li>WindowsXP S2, DX9 or better</li>
<li>CPU Dual Core &gt;2GHz</li>
<li>RAM 1GB</li>
<li>VGA RAM 128 MB</li>
<li>Internet 512kbps with &lt; 100 ms ping time to our servers</li>
</ul>
</td>
</tr>

</tbody>
</table>

<table style="height: 41px;" border="0" width="780">
<tbody>
<tr>
<td>
<a href="https://drive.google.com/file/d/15X8T_RwVTe3TmwCNeVoNk6Mu15pj1gIm/view?usp=sharing" data-wplink-edit="true">
<h2>FunSwords_Client (3.2G) [Drive]</h2>
</a>
</td>
<td><a href="https://drive.google.com/file/d/15X8T_RwVTe3TmwCNeVoNk6Mu15pj1gIm/view?usp=sharing"><img class="alignnone wp-image-1167 size-full" style="border: 0px none;" title="Download patch file" src="https://cdn.discordapp.com/attachments/1186582727936446465/1195402138126385202/32cae48daaccd9105eb3d1cc7519d4b1.gif" alt="" width="112" height="20" border="0"></a></td>
</tr>
<tr>
</tr>
<tr>
<td>
<a href="https://mega.nz/file/gDlAnTwD#jrjh2nHu_vd6hxfN1OaFr8ljuyqy7F97ogYx4oiTDEA" data-wplink-edit="true">
<h2>FunSwords_Client (3.2G) [Mega]</h2>
</a>
</td>
<td><a href="https://mega.nz/file/gDlAnTwD#jrjh2nHu_vd6hxfN1OaFr8ljuyqy7F97ogYx4oiTDEA"><img class="alignnone wp-image-1167 size-full" style="border: 0px none;" title="Download patch file" src="https://cdn.discordapp.com/attachments/1186582727936446465/1195402138126385202/32cae48daaccd9105eb3d1cc7519d4b1.gif" alt="" width="112" height="20" border="0"></a></td>
</tr>
<tr>
</tr>
<td>
<a href="https://www.mediafire.com/file/x5m25vvj9oghgi8/FunSwords_Clientt.zip" data-wplink-edit="true">
<h2>FunSwords_Client (3.2G) [MediaFire]</h2>
</a>
</td>
<td><a href="https://www.mediafire.com/file/x5m25vvj9oghgi8/FunSwords_Clientt.zip"><img class="alignnone wp-image-1167 size-full" style="border: 0px none;" title="Download patch file" src="https://cdn.discordapp.com/attachments/1186582727936446465/1195402138126385202/32cae48daaccd9105eb3d1cc7519d4b1.gif" alt="" width="112" height="20" border="0"></a></td>
</tr>
<tr>
</tr>
<tr>
<td>
<address><strong>&nbsp;</strong></address>
</td>
<td></td>
</tr>
</tbody>
</table>

<footer class="py-4 text-center">
        <a href="index.php">@ Copyright 2024 | FunSwords | System All By FunSwords.xyz</a>
        </footer>  
	<?php } ?>
</body>
</html>