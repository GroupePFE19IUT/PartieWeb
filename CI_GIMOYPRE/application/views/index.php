<?php
  include("vendor/page/liens2.php");
 ?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    <?php
      echo $titre;
    ?>
  </title>
  </head>

<body class="landing-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" rel="tooltip" title="" data-placement="bottom" target="_blank">
          <h3>IUT-FV BANDJOUN</h3>

        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav text-white">
          <li class="nav-item">

          <a href="#" class="nav-link">
              <h3><i class="nc-icon nc-layout-11"></i> A propos </h3>
          </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/" target="_blank">
              <i class="fa fa-twitter"></i>
              <p class="d-lg-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/" target="_blank">
              <i class="fa fa-facebook-square"></i>
              <p class="d-lg-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/" target="_blank">
              <i class="fa fa-instagram"></i>
              <p class="d-lg-none">Instagram</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Star on GitHub" data-placement="bottom" href="https://www.github.com/" target="_blank">
              <i class="fa fa-github"></i>
              <p class="d-lg-none">GitHub</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header" data-parallax="true" style="background-image: url('vendor/p/assets/img/daniel-olahh.jpg');">
    <div class="filter"></div>
    <div class="container">
      <div class="motto text-center">
        <h1> <span class="text-muted"> GIMOY</span><span class=" text-info">PRE</span></h1>
        <h3> <span class="text-muted">SYSTEME DE GESTION</span> <span class="text-info">DE PRESENCE DYNAMIQUE</span> .</h3>
        <br />
        <a href="<?php echo site_url('ConnextionControler\index'); ?>" class="">
          <button type="button" class="btn btn-outline-neutral btn-round"> <span class=" text-muted">Conne</span><span class="text-info">xion</span> <span class="text-primary">.</span></button>
        </a>
      </div>
    </div>
  </div>

  </div>
  <footer class="footer   footer-white ">
    <div class="container">
      <div class="row">
        <div class="credits ml-auto">
          <span class="copyright text-white">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>, GIMOYPRE
          </span>
        </div>
      </div>
    </div>
  </footer>
 </body>

</html>
