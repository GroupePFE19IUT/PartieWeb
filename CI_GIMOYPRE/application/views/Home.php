<!DOCTYPE html>
<html lang="en">
<?php
      include("vendor/page/liens.php");
   ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>DYSprence</title>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
    <div class="container">
      <div class="navbar-translate" style="margin-left:40%;">
        <a class="navbar-brand" href="" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom" target="_blank">
          Gestion de Presence IUT-FV
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
          <!--  <a href="" class="nav-link"><i class="nc-icon nc-layout-11"></i></a>-->
          </li>
          <li class="nav-item">
          <!---  <a href="" target="_blank" class="nav-link"><i class="nc-icon nc-book-bookmark"></i></a>-->
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on WhatsApp" data-placement="bottom" href="whatsapp://send?phone=+237670824649&text=https://www.envoltech.com" target="_blank">
            <i class="fa fa-whatsapp"></i>
              <p class="d-lg-none">WhatsApp</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/LEARN0TRAVEL/" target="_blank">
              <i class="fa fa-facebook-square"></i>
              <p class="d-lg-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Youtube" data-placement="bottom" href="https://www.youtube.com/channel/UCMQerVOUkgpOFwv41rB5BLA/videos" target="_blank">
              <i class="fa fa-youtube-play"></i>
              <p class="d-lg-none">Youtube</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header" data-parallax="true" style="background-image: url('vendor/assets/img/daniel-olahh.jpg');">
    <div class="filter"></div>
    <div class="container">
      <div class="motto text-center"><br><br>
        <h1>Welcom To IUT-FV OF BANDJOUN</h1>
        <br />
        <a href="<?php //echo site_url('homecontroller\home'); ?>" class="btn btn-outline-neutral btn-round"><i class=""></i>Connection</a>
          <a href="<?php //echo site_url('homecontroller\homeInscription'); ?>" class="btn btn-outline-neutral btn-round"><i class=""></i>INscription</a>
      </div>
    </div>
  </div>
</body>

</html>
