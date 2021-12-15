<?php
$glob1 = glob('public/images/user/'. $_SESSION['nim'] . ".*");
$display['foto_profil'] = (empty($glob1)) ? '<i class="fas fa-times-circle text-danger"></i>' : '<i class="berhasil fas fa-check-circle text-success"></i>';

$glob2 = glob('public/dokumen/rekomendasi/*'. $_SESSION['nim'] . ".*");
$display['rekomendasi'] = (empty($glob2)) ? 'style="display:none;"' : '';
$display['tampilan_rekomendasi'] = (empty($glob2)) ? '<i class="fas fa-times-circle text-danger"></i>' : '<i class="berhasil fas fa-check-circle text-success"></i>';
$link = (empty($glob2)) ? '' : $glob2[0] ;
?>

<!DOCTYPE html> 
<html lang="id">
<head id="head">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="description" content="<?= $caption;?>"> -->
    <meta property="og:image" itemprop="image" content="<?= BASEURL;?>public/images/logo.png"> 
    <meta name="author" content="Karisma Polsri">
    <meta name="generator" content="Karisma Polsri">   
    <link rel="icon" type="image/png" href="<?= BASEURL;?>public/images/logo.png">
    <title><?= $data['title'] ?></title>
    <link href="<?= BASEURL;?>public/assets/bootstrap/bootstrap@5.1.3.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?= BASEURL;?>public/assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= BASEURL;?>public/assets/pages/dashboard/adminlte2.css">
    <style>
      .scrolling-wrapper {
        overflow-x: auto;
        padding-top: 2px;
        margin-left: 0px;
        padding-left: 15px;
        padding-right: 15px;
        -ms-overflow-style: none;
        scrollbar-width: none;
      }      

      .widget-user-profile {
        top:-50px;
      }

      .user-profile {
        border: 4px solid #fff;
        height: 168px;
        width: 168px;
      }

      .user-profile:hover {
        cursor: pointer;
      }

      .user-profile:hover > img {
        opacity: 0.99;
      }

      .user-profile:hover .btn-change-profile{
        display: block;
      }
      
      .btn-change-profile {
        display:none;
      }

      .user-profile > img {
        width: 168px;
        opacity: 1;
      }

      .content-header {
        padding: 0 0 15px 0;
      }

      .content {
        max-width: 908px;
        justify-content: center;
      }

      .cover {
        max-width: 940px;
        justify-content: center;
      }

      .cover-content{
        margin-bottom:-30px;
      }

      .widget-user-info {
          top:-50px;
          text-align: center;
      }

      .nav-top .nav-item {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-inline: 5px!important;
        background-color: #aaaeb3;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .nav-top .nav-item:hover{
        background-color: #0000008c;
      }

      .nav-top .nav-item .nav-link{
        color: #ffffff!important;
      }

      .nav-link {
        color: #000000c7 !important;
      }

      .nav-link:hover {
        color: #007bff !important;
      }

      .nav-link.active {
        border-bottom: 3px solid #007bff !important;
        color: #007bff !important;
        font-weight: bold;
      }

      .main-navbar {
        width: 940px;
        display:flex;
        flex-flow: row nowrap;
        justify-content: flex-start;
        align-items: center;
        margin-left: auto !important;
        margin-right: auto !important;
      }
      
      .navbar-sub{
        z-index:1000;
      }

      .ringkasan-biodata tr td:first-child {
        text-align: center !important;
      }

      .ringkasan-biodata tr td:last-child {
        padding-left: 20px !important;
      }

      .btn-close {
        float: right;
        position: absolute;
        right: 20px;
      }

      .btn-change-profile{
        position: absolute;
        top: 40%;
      }
      
      @media (min-width: 992px) {
        .widget-user-info {
          top:0px;
          text-align: left;
        }
      }
      
      @media (min-width: 768px) {
        body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .content-wrapper,
        body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-footer,
        body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-header {
          margin-left: 0px!important;
        }
      }

      .loading-skeleton {
        color: transparent;
        appearance: none;
        -webkit-appearance: none;
        background-color: #eee;
        border-color: #eee;

        &::placeholder {
          color: transparent;
        }
      }
      @keyframes loading-skeleton {
        from {
          opacity: .4;
        }
        to {
          opacity: 1;
        }
      }
      .loading-skeleton {
        pointer-events: none;
        animation: loading-skeleton 1s infinite alternate;
        
        img {
          filter: grayscale(100) contrast(0%) brightness(1.8);
        }
        h1, h2, h3, h4, h5, h6,
        p, li,
        .btn,
        label,
        .form-control {
          @extend %loading-skeleton;
        }
      }
    </style>
</head>
<body class="layout-fixed layout-navbar-fixed layout-footer-fixed"> 
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white">
    <div class="main-navbar">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
        <span class="brand-text font-weight-bold pl-2 h4">LDK KARISMA</span>
        </li>
      </ul>
      
      <!-- Right navbar links -->
      <ul class="navbar-nav nav-top ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fab fa-whatsapp"></i>
          </a>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fa fa-cog"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout">
            <i class="fas fa-sign-out-alt"></i>
          </a>
        </li>
      </ul>    
    </div>
    </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row bg-white">

          <div class="widget-user-header text-white" style="padding-top:200px; background: #fff url(<?= BASEURL;?>public/images/bg-user.jpg) center center/cover no-repeat;">
          </div>

          <div class="border-bottom border-2 cover mx-auto">
            <div class="row cover-content">
              <div class="widget-user-profile col-lg-4 d-flex align-items-start justify-content-center">
                <div class="user-profile img-circle overflow-hidden d-flex align-items-start justify-content-center">
                  <img src="<?php ($data['url']=='detail') ? $this->model('Profile_model')->getUserImage($data['nim']) : $this->model('Profile_model')->getUserImage();?>" alt="User Avatar" data-bs-toggle="modal" data-bs-target="#change-profile">
                  <button type="button" class="btn btn-light btn-sm btn-change-profile" data-bs-toggle="modal" data-bs-target="#change-profile">
                    Perbarui Foto
                  </button>
                </div>
              </div>
              <div class="col-lg-8 widget-user-info">
                <h3 class="h1 fw-bold pt-4"><?= ($data['url']=='detail') ? $data['nama'] : $_SESSION['nama']; ?></h3>
                <h4 class="h3 fw-italic"><?= ($data['url']=='detail') ? $data['nim'] : (($_SESSION['nama']=='') ? '' : $_SESSION['nim']); ?></h3>
              </div>
            </div>
          </div>

          <div class="modal fade" id="change-profile" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header align-items-center justify-content-center">
                  <h5 class="modal-title text-center">Perbarui Profil</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="form-group">
                      <div class="d-flex align-items-center justify-content-center">
                        <img height="300px" src="<?php ($data['url']=='detail') ? $this->model('Profile_model')->getUserImage($data['nim']) : $this->model('Profile_model')->getUserImage();?>" alt="foto-profil" id="foto_profile">
                      </div>
                      <label for="foto" class="btn btn-outline-primary btn-block mt-4">Unggah Foto</label>
                      <input type="file" id="foto" class="form-control mt-4" name="foto" accept="image/*" style="display:none;">
                    </div>
                </div>
              </div>
            </div>
          </div>

          <navbar class="navbar-sub border-bottom bg-white shadow-sm">
            <div class="content pt-2 mx-auto">
            <ul class="nav" role="tablist">
              <li class="nav-item">
                <a class="nav-link <?= ($data['url']=='dashboard') ? 'active' : '';?>" href="dashboard">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= ($data['url']=='profile') ? 'active' : '';?>" href="profile">Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= ($data['url']=='biodata') ? 'active' : '';?>" href="biodata">Biodata</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= ($data['url']=='dokumen') ? 'active' : '';?>" href="dokumen">Dokumen</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= ($data['url']=='anggota') ? 'active' : '';?>" href="anggota">Anggota</a>
              </li>
            </ul>
            </div>
          </navbar>

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
