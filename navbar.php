<?php
include 'header.php';
?>
<header class="d-flex justify-content-between align-items-center" style= "background-color: #32312f;">
  <!-- Logo on the left -->
  <a href="index.php" rel="home" title="Aspiration" class="navbar-brand" style="margin-left: 70px;">
    <h1 class="m-0 text-light">
      <img src="img/logos/logo.png" alt="Aspiration" style="width: 140px; margin-left: 20px; padding: 1px;">
    </h1>
  </a>
  <!-- Contact information and social media links on the right -->
  <div class="d-flex flex-column align-items-center" style="font-size: larger; font-variant-caps: normal;">
     <div class="d-flex" style=" margin-left: 200px; padding: 10px;">
        <a class="btn btn-outline-primary btn-square social-btn mr-2" href="#">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a class="btn btn-outline-primary btn-square social-btn" href="#">
            <i class="fab fa-instagram"></i>
        </a>
      </div>
      <div class="mr-3">
          <img src="img/whatsapp.png" alt="whatsapp" title="whatsapp" class="icon-call" style="width: 50px; height: 50px;">
          <span class="text">
              <input type="hidden" value="Whatsapp Call" class="gc_type">
              <a target="_blank" href="https://wa.me/+9779800000000" class="header-contact-number" style="font-size: 30px; font-weight: 800;">+9779800000000</a>
          </span>
      </div>
      <div class="quick-contact__email" style="font-size: larger; font-variant-caps: normal; margin: 10px 0;">
          <a href="mailto:contact@aspiration.com" style="margin-left: 56px;" target="_blank">contact@aspiration.com</a>
      </div>
  </div>
</header>
<!-- Navbar Start -->
<div class="container-fluid nav-bar p-0" style="background: #5596e7; height: 50px;">
  <div class="container-lg position-relative p-0 px-lg-3">
  <nav class="navbar navbar-expand-lg navbar-dark" style="font-size: large;">
    <button
      type="button"
      class="navbar-toggler"
      data-toggle="collapse"
      data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse" style="margin-right: 364px; font-size: larger;text-align: center;">
      <div class="navbar-nav ml-auto py-0">
        <div class="nav-item dropdown">
          <a
            href="#"
            class="nav-link dropdown-toggle nav-link-custom"
            data-toggle="dropdown"
            >Nepal</a
          >
          <div class="dropdown-menu border-0 rounded-0 m-0">
            <a href="package.php" class="dropdown-item"
              >Trekking in Nepal</a
            >
            <a href="package.php" class="dropdown-item">Day Trips</a>
            <a href="package.php" class="dropdown-item"
              >Cultural Tour & Sightseeing</a
            >
            <a href="package.php" class="dropdown-item"
              >Mountain Bike Trips</a
            >
          </div>
        </div>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle  text-uppercase"
              data-toggle="dropdown"
              >Bhutan</a
            >
            <div class="dropdown-menu border-0 rounded-0 m-0">
              <a href="package.php" class="dropdown-item"
                >Trekking in Bhutan</a
              >
              <a href="package.php" class="dropdown-item">Day Trips</a>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle text-uppercase"
              data-toggle="dropdown"
              >Tibet</a
            >
            <div class="dropdown-menu border-0 rounded-0 m-0">
              <a href="package.html" class="dropdown-item"
                >Trekking in Tibet</a
              >
              <a href="package.php" class="dropdown-item">Day Trips</a>
              <a href="package.php" class="dropdown-item"
                >Cultural Tour & Sightseeing</a
              >
              <a href="package.php" class="dropdown-item"
                >Mountain Bike Trips</a
              >
            </div>
          </div>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle text-uppercase"
              data-toggle="dropdown"
              >Company</a
            >
            <div class="dropdown-menu border-0 rounded-0 m-0">
              <a href="why-us.php" class="dropdown-item">Why Us</a>
              <a href="our-team.php" class="dropdown-item">Our Team</a>
            </div>
          </div>
          <a href="blog.php" class="dropdown-item nav-link-custom">Blogs</a>
        <a href="about-us.php" class="dropdown-item nav-link-custom">About Us</a>
        <a href="contact-us.php" class="dropdown-item nav-link-custom">Contact Us</a>
      </div>
      </div>
      <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse" >
        <div class="navbar-nav ml-auto py-0">

        </div>
      </div>
    </nav>
  </div>
</div>
<!-- Navbar End -->

