<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cote Heath</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('vendor/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('css/modern-business.css'); ?>" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url('welcome/index') ?>">Welcome <?php echo $_SESSION['user']['name']; ?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('welcome/about') ?>">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('welcome/pricing') ?>">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('welcome/contact') ?>">Contact</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Other Pages
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="<?php echo base_url('welcome/blogcreate') ?>">Blog Creation</a>
                <a class="dropdown-item" href="<?php echo base_url('welcome/blog') ?>">Blog</a>
                <a class="dropdown-item" href="<?php echo base_url('welcome/portfoliocreate') ?>">Portfolio Creation</a>                
                <a class="dropdown-item" href="<?php echo base_url('welcome/portfolio') ?>">Portfolio</a>
                <a class="dropdown-item" href="<?php echo base_url('welcome/users') ?>">Users</a>
                <a class="dropdown-item" href="<?php echo base_url('welcome/faq') ?>">FAQ</a>
                <a class="dropdown-item" href="<?php echo base_url('welcome/logout') ?>">logout</a>
              </div>
              
            </li>
          </ul>
        </div>
      </div>
    </nav>