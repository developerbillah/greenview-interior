<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta <?php bloginfo('charset'); ?>>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
  <header>
    <!-- Header Top -->
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-auto">
            <div class="icon-list">
              <ul>
                <li>
                  <a href="mailto:greenviewinteriordesign1@gmail.com"><i class="fa-solid fa-envelope"></i> <span class="d-none d-md-inline-block">greenviewinteriordesign1@gmail.com</span></a>
                </li>
                <li>
                  <a href=""><i class="fa-solid fa-phone-volume"></i> <span class="d-none d-md-inline-block"> 01776542081 / 01642252168</span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-auto ms-auto">
            <div class="social-icon">
              <a href=""><i class="fa-brands fa-facebook"></i></a>
              <a href=""><i class="fa-brands fa-twitter"></i></a>
              <a href=""><i class="fa-brands fa-youtube"></i></a>
              <a href=""><i class="fa-brands fa-tiktok"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Main Navigation Menu -->
    <div class="main-navwrapper bg-white">
      <nav class="container d-flex align-items-center justify-content-between">
        <a class="navbar-brand" href="index.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo-dark.png" alt=""></a>
       
        <ul class="main-menu d-flex align-items-center">
          <li class="d-none d-md-block d-lg-block d-xl-block"><a href="" class="active">Home</a></li>
          <li class="d-none d-md-block d-lg-block d-xl-block"><a href="">About</a></li>
          <li class="d-none d-md-block d-lg-block d-xl-block"><a href="">SERVICES</a></li>
          <li class="d-none d-md-block d-lg-block d-xl-block"><a href="projects.html">Projects</a></li>
          <li class="d-none d-md-block d-lg-block d-xl-block"><a href="">Gallery</a></li>
          <li class="d-none d-md-block d-lg-block d-xl-block"><a href="">Contact</a></li>
          <button class="d-lg-none d-xl-none d-xxl-none d-sm-block border-0 bg-transparent" id="openNav">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/navbar.png" alt="" width="24">
          </button>
        </ul>
      </nav>
    </div>

    <!-- Mobile Nav -->
    <div id="sideNav">
      <nav>
       <div class="d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="index.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo-dark.png" alt=""></a>
        <button id="closeNav"><i class="fa-solid fa-xmark"></i></button>
       </div>
       <ul class="mobile-navItem">
        <li><a href="">Home</a></li>
        <li><a href="">about</a></li>
        <li><a href="">Services</a></li>
        <li><a href="projects.html">Projects</a></li>
        <li><a href="">Gallery</a></li>
        <li><a href="">Contact</a></li>
       </ul>
      </nav>
    </div>
  </header>

  <!-- Latest Projects -->
  <section class="section-padding">
    <div class="container">
      <div class="section-top d-flex justify-content-between align-items-end">
        <div class="section-heading">
          <h2>All Projects</h2>
        </div>
      </div>

      <div class="latest-projects">
        <article class="project-card" style="background: url('<?php echo get_template_directory_uri();?>/assets/img/project-1.png');">
          <div class="project-meta">
            <h6>Hotel/Restaurant interior</h6>
            <ul class="project-cat-list">
              <li><a href="">Commercial</a></li>
            </ul>
          </div>
          <a href="" class="project-view">View Project</a>
        </article>

        <!-- Project 02 -->
        <article class="project-card" style="background: url('<?php echo get_template_directory_uri();?>/assets/img/project-6.png');">
          <div class="project-meta">
            <h6>Hotel/Restaurant interior</h6>
            <ul class="project-cat-list">
              <li><a href="">Commercial</a></li>
            </ul>
          </div>
          <a href="" class="project-view">View Project</a>
        </article>

        <!-- Project 03 -->
        <article class="project-card" style="background: url('<?php echo get_template_directory_uri();?>/assets/img/project-3.png');">
          <div class="project-meta">
            <h6>Hotel/Restaurant interior</h6>
            <ul class="project-cat-list">
              <li><a href="">Commercial</a></li>
            </ul>
          </div>
          <a href="" class="project-view">View Project</a>
        </article>

        <!-- Project 04 -->
        <article class="project-card" style="background: url('<?php echo get_template_directory_uri();?>/assets/img/project-4.png');">
          <div class="project-meta">
            <h6>Hotel/Restaurant interior</h6>
            <ul class="project-cat-list">
              <li><a href="">Commercial</a></li>
            </ul>
          </div>
          <a href="" class="project-view">View Project</a>
        </article>

        <!-- Project 05 -->
        <article class="project-card" style="background: url('<?php echo get_template_directory_uri();?>/assets/img/project-5.png');">
          <div class="project-meta">
            <h6>Hotel/Restaurant interior</h6>
            <ul class="project-cat-list">
              <li><a href="">Commercial</a></li>
            </ul>
          </div>
          <a href="" class="project-view">View Project</a>
        </article>

        <!-- Project 06 -->
        <article class="project-card" style="background: url('<?php echo get_template_directory_uri();?>/assets/img/project-2.png');">
          <div class="project-meta">
            <h6>Hotel/Restaurant interior</h6>
            <ul class="project-cat-list">
              <li><a href="">Commercial</a></li>
            </ul>
          </div>
          <a href="" class="project-view">View Project</a>
        </article>

      </div>
    </div>
  </section>
  <!-- Latest Projects End -->

   <!-- Footer -->
   <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="single_footer">
            <h4>Contact</h4>
            <p>Baitus Sharaf Jame Mosjid Complex 149/A, Kazi Nazrul Islam Avenue, 1215 বিজয় সরণী, ঢাকা 1215</p>
            <ul>
              <li><a href="#"><i class='bx bxs-envelope'></i> akashsomobay@gmail.com</a></li>
              <li><a href="#"><i class='bx bxs-phone-call'></i> 01717288373</a></li>
            </ul>
          </div>
        </div><!--- END COL -->

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="single_footer single_footer_address ms-3">
            <h4>Important Link</h4>
            <ul>
              <li><a href="#">Lorem Ipsum</a></li>
              <li><a href="#">Simply dummy text</a></li>
              <li><a href="#">The printing and typesetting </a></li>
              <li><a href="#">Standard dummy text</a></li>
              <li><a href="#">Type specimen book</a></li>
            </ul>
          </div>
        </div><!--- END COL -->

        <div class="col-md-6 col-sm-6 col-xs-12">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.62665040747!2d90.38638611498158!3d23.76068958458433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c72b447f6309%3A0x4896dc89b5a975f5!2sTechnoval%20Limited!5e0!3m2!1sbn!2sbd!4v1679113477055!5m2!1sbn!2sbd"
            width="100%" height="280" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!--- END COL -->
      </div><!--- END ROW -->

      <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
          <p class="copyright">Copyright © 2023 | <a href="#">Greenview Interior Desin</a>.</p>
        </div><!--- END COL -->
      </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
  </footer>
  <!-- Footer End -->

  <?php wp_footer();?>
</body>
</html>