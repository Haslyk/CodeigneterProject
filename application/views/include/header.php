<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

  <title>SAMU Etkinlik</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/bootstrap.css"/>

  <!-- Fontawesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"  rel="stylesheet" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap" rel="stylesheet"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&family=Permanent+Marker&family=Shadows+Into+Light&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/') ?>css/style.css?v=<?=time()?>" rel="stylesheet"/>
  <!-- responsive style -->
  <link href="<?php echo base_url('assets/') ?>css/responsive.css?v=<?=time()?>" rel="stylesheet"/>
</head>

<body class="sub_page" style="background-image: url(<?php echo base_url('assets/') ?>images/activity5.png);background-position: center;background-attachment: fixed;">
  <div class="hero_area">
      <!-- header section strats -->
    <header class="navbar navbar-expand-lg bg-light header_section">
      <div class="logo">
        SAMU Etkinlik
      </div>
      <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse menus" id="navbarNav">
        <ul class="navbar-nav" style="width:100%">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('homepage') ?>"><i class="fa-solid fa-house"></i><span> Anasayfa</span></a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('ideas') ?>"><i class="fa-solid fa-hashtag"></i><span> Etkinlikler </span></a>
          </li>
          <?php   $data = $this->session->userdata('data');
           if(isset($data)) {
          if($data['giris'] == false){ ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('signin') ?>"><i class="fa-solid fa-right-to-bracket"></i><span> Giriş Yap </span></a>
          </li>
          <?php } ?>
          <?php if($data['giris'] == true){ ?>
          <li class="nav-item">
            <div class="icon">
              <img src="<?php echo base_url('assets/') ?>images/icon8.png" alt="">
            </div>
            <a class="nav-link" href="<?php echo base_url('profile') ?>">Profilim</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("signin/cikis_yap"); ?>"><i class="fa-solid fa-right-to-bracket"></i></a>
          </li>
          <?php }} else { ?>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('signin') ?>"><i class="fa-solid fa-right-to-bracket"></i><span> Giriş Yap </span></a>
          </li>
          <?php } ?>
        </ul>
      </div>
</header>
      <!-- end header section -->