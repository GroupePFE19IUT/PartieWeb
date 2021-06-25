<?php

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
        include("vendor/page/liens.php");
     ?>
  </head>
  <body>

    <div class="row bg-dark">
      <div class="col-md-1">
        <!--sider-->
          <span class="glyphicon glyphicon-list bg-secondary " aria-hidden="true"  id="sider"></span>
      </div>
      <div class="col-md-2">

         <span class="danger"></span>

      </div>
      <div class="col-md-2">
        <!--search boutuon-->
      </div>
      <div class="col-md-4">



      </div>
      <div class="col-md-1">
          <a href="#" class="">
              <span class="glyphicon glyphicon-user " aria-hidden="true"></span>
          </a>
      </div>
      <div class="col-md-2">
          <a href="<?php //echo site_url('homecontroller\home'); ?>" class="">
            Deconnexion  <span class="glyphicon glyphicon-log-out " aria-hidden="true"></span>
          </a>
      </div>
    </div>



  </body>
</html>
