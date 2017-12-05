[1mdiff --git a/index.php b/index.php[m
[1mindex 0d9dedc..fbdd7f9 100644[m
[1m--- a/index.php[m
[1m+++ b/index.php[m
[36m@@ -1,4 +1,73 @@[m
[31m-<?php[m
[31m-[m
[31m-echo "hello world";[m
[32m+[m[32m<?php[m[41m [m
[32m+[m[32mrequire 'vendor/autoload.php'[m
 ?>[m
[32m+[m
[32m+[m[32m<!DOCTYPE html>[m
[32m+[m[32m<html lang="en">[m
[32m+[m
[32m+[m[32m  <head>[m
[32m+[m[32m    <meta charset="utf-8">[m
[32m+[m[32m    <meta http-equiv="X-UA-Compatible" content="IE=edge">[m
[32m+[m[32m    <meta name="viewport" content="width=device-width, initial-scale=1">[m
[32m+[m[32m    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->[m
[32m+[m[32m    <title>Bootstrap 101 Template</title>[m
[32m+[m
[32m+[m[32m    <!-- Bootstrap -->[m
[32m+[m[32m    <link href="css/bootstrap.min.css" rel="stylesheet">[m
[32m+[m
[32m+[m[32m    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->[m
[32m+[m[32m    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->[m
[32m+[m[32m    <!--[if lt IE 9]>[m
[32m+[m[32m      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>[m
[32m+[m[32m      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>[m
[32m+[m[32m    <![endif]-->[m
[32m+[m[32m  </head>[m
[32m+[m[32m  <body>[m
[32m+[m[41m  [m
[32m+[m
[32m+[m[32m      <div class="container-fluid">[m
[32m+[m
[32m+[m[32m  <div class="row">[m
[32m+[m[32m    "     "[m
[32m+[m[32m  </div>[m
[32m+[m[32m  <div class="row">[m
[32m+[m[32m    <div class="col-sm-3" ></div>[m
[32m+[m[32m    <div class="col-sm-6" style="background-color:lavenderblush;">[m
[32m+[m
[32m+[m[32m    <div class="container">[m
[32m+[m[41m  [m
[32m+[m[32m        <form class="form-signin">[m
[32m+[m[32m          <h2 class="form-signin-heading">Please sign in</h2>[m
[32m+[m[32m          <label for="inputEmail" class="sr-only">Email address</label>[m
[32m+[m[32m          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>[m
[32m+[m[41m          [m
[32m+[m[32m          <label for="inputPassword" class="sr-only">Password</label>[m
[32m+[m[32m          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>[m
[32m+[m[32m          <div class="checkbox">[m
[32m+[m[32m            <label>[m
[32m+[m[32m              <input type="checkbox" value="remember-me"> Remember me[m
[32m+[m[32m            </label>[m
[32m+[m[32m          </div>[m
[32m+[m[32m          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>[m
[32m+[m[32m        </form>[m
[32m+[m[41m  [m
[32m+[m[32m      </div> <!-- /container -->[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m[32m    </div>[m
[32m+[m[32m    <div class="col-sm-3" ></div>[m
[32m+[m[32m  </div>[m
[32m+[m[32m</div>[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m[32m    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->[m
[32m+[m[32m    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>[m
[32m+[m[32m    <!-- Include all compiled plugins (below), or include individual files as needed -->[m
[32m+[m[32m    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>[m
[32m+[m[32m<script src="https://npmcdn.com/bootstrap@4.0.0-alpha.5/dist/js/bootstrap.min.js"></script>[m
[32m+[m[32m    <script src="js/bootstrap.min.js"></script>[m
[32m+[m
[32m+[m[32m  </body>[m
[32m+[m[32m</html>[m
\ No newline at end of file[m
