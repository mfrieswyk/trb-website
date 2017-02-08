<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <!--<link rel="stylesheet" href="css/style.css">-->
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Optional theme -->
  <link rel="stylesheet" href="css/bootstrap-theme.css">
  <link rel="stylesheet" href='//blueimp.github.io/Gallery/css/blueimp-gallery.min.css'>
  <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
  <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tania Rosa Bindhoff - Soprano</title>
  <style>
    .navbar-custom {
      background-color:#000 !important;
      color:#000 !important;
      border-radius:0 !important;
    }

    .navbar-custom .navbar-nav > li > a {
        color:#fff !important;
    }
    .navbar-custom .navbar-nav > .active > a,
    .navbar-nav > .active > a:hover,
    .navbar-nav > .active > a:focus {
        color: #000 !important;
        background-color:transparent !important;
    }
    .navbar-custom .navbar-brand {
        color:#eeeeee !important;
    }
    .navbar .navbar-inner {
      padding: 0 !important;
    }

    .navbar .nav {
      margin: 0 !important;
      display: table !important;
      width: 100% !important;
    }
    #menu {
      border-top: 1px solid rgba(166, 82, 255, 1) !important;
      border-bottom: 1px solid rgba(166, 82, 255, 1) !important;
      font-family: 'Open Sans Condensed', sans-serif !important;
      text-transform:uppercase !important;
      letter-spacing:3px !important;
    }

  /* .navbar .nav li {
      display: table-cell;
      width: 16.66%;
      float: none;
    } */

    .navbar .nav li.active {
      background-color: #A652FF !important;
    }

    .navbar .nav li a {
      font-weight: bold !important;
      text-align: center !important;
    }
    .quote {
      color: #FFF;
    }
    html {
    position: relative !important;
    min-height: 100% !important;
    }
    body {
      /* Margin bottom by footer height */
      margin-bottom: 50px !important;
    }
    .footer {
      position: absolute !important;
      bottom: 0 !important;
      width: 100% !important;
      /* Set the fixed height of the footer here */
      height: 50px !important;
      background-color: #A652FF !important;
      padding: 15px !important;
    }
    table, td, th {
      border-top: none !important;
    }
  </style>
</head>
<body>
<!--Header-->
  <div class="jumbotron" style="background-color: #1b1b1d; margin-bottom: 0px;">
    <div class="container-fluid" style="text-transform: uppercase;">
      <div class="row">
        <div style="font-family: 'Oswald';"><h1 style="margin-left: 20%; letter-spacing:3px; text-shadow: -1px 1px 1px #CCCCCC">Tania <span style="color:#A652FF; text-shadow: -1px 1px 1px #954AE6;">Rosa</span> Bindhoff</h1></div>
      </div>
      <div class="row">
        <div style="color: #5C5A60; font-family:'Open Sans Condensed'; letter-spacing:3px; margin-left: 20%;"><h3 style ="margin-top: 0px;">Soprano</h3></div>
      </div>
    </div>
  </div>
  <nav role="navigation" class="navbar navbar-custom">
  <!-- <nav class="navbar navbar-custom navbar-static-top"> -->
    <div class="container-fluid" id="menu">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- <a class="navbar-brand" href="#">Brand</a> -->
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="<?php if($section == "home"){ echo "active";}?>"><a href="index.php">Home</a></li>
            <li class="<?php if($section == "about"){ echo "active";}?>"><a href="about.php">About</a></li>
            <li class="<?php if($section == "photos"){ echo "active";}?>"><a href="photos.php">Photos</a></li>
            <li class="<?php if($section == "resume"){ echo "active";}?> dropdown">
              <a href="resume.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Resumés <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="resume_performance.php">Performance</a></li>
                <li><a href="resume_technical.php">Technical</a></li>
              </ul>
            </li>
            <li class="<?php if($section == "schedule"){ echo "active";}?>"><a href="schedule.php">Schedule</a></li>
            <li class="<?php if($section == "contact"){ echo "active";}?>"><a href="contact.php">Contact</a></li>
            <p class="navbar-text navbar-right quote">"Without music, life would be a mistake."<small> - Nietzsche</small></p>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
