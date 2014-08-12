<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!--  from admin -->

        <!-- bootstrap 3.0.2 -->
        <link href="admin-theme/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="admin-theme/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="admin-theme/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="admin-theme/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="admin-theme/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="admin-theme/csadmin-theme/s/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="admin-theme/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="admin-theme/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="admin-theme/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- My custom style -->
        <link href="css/custom.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    <!-- Bootstrap core CSS -->
    <!-- <link href="wall/css/bootstrap.css" rel="stylesheet"> -->
    <!-- <link href="wall/css/modern-business.css" rel="stylesheet"> -->
    <link href="admin-theme/wall/css/custom.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <!-- <link href="css/nat/bootstrap-theme.css" rel="stylesheet">
    <link href="css/nat/bootstrap-theme.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="admin-theme/wall/css/font-awesome.css" rel="stylesheet">
    <link href="admin-theme/wall/css/style.css" rel="stylesheet"> 
    <!-- for inline editor -->
    <link href="angular/css/xeditable.css" rel="stylesheet"> 


     <!-- jQuery 2.0.3 -->
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
        <script src="angular/angular.min.js"></script> <!-- load our angular js -->
        <script src="angular/controllers/mainCtrl.js"></script> <!-- load our controller -->
        <script src="angular/services/hospitalService.js"></script> <!-- load our service -->
        <script src="angular/xeditable.js"></script> <!-- load our inline editor -->
        <script src="angular/truncate.js"></script> <!-- load our truncate for see more -->
        <script src="angular/app.js"></script> <!-- load our application --> 
    
  </head>
  <style type="text/css">
    body{
        font-size: 14px;
    }
  </style>

  <body class="skin-blue" ng-app="hospitalApp" ng-controller="postController"><!-- if you can fix the nav and left-sidebar, you will add (fixed)calss skin-blue -->
    