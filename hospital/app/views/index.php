<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel and Angular Comment System</title>

	<!-- CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
	<style>
		body 		{ padding-top:30px; }
		form 		{ padding-bottom:20px; }
		.comment 	{ padding-bottom:20px; }
		.img-userlogo { width: 70px;}
	</style>

	<!-- JS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> <!-- load angular -->

	<!-- ANGULAR -->
	<!-- all angular resources will be loaded from the /public folder -->
		<script src="js/controllers/mainCtrl.js"></script> <!-- load our controller -->
		<script src="js/services/commentService.js"></script> <!-- load our service -->
		<script src="js/app.js"></script> <!-- load our application -->

</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="commentApp" ng-controller="mainController">
	<?php include('include/_nav.php'); ?>
<div class="col-md-8 col-md-offset-2">

	<!-- PAGE TITLE -->
	<div class="page-header">
		<h2>Laravel and Angular Single Page Application</h2>
		<h4>Commenting System</h4>
	</div>

	<!-- NEW COMMENT FORM -->
	<form ng-submit="submitComment()"> <!-- ng-submit will disable the default form action and use our function -->

		<!-- AUTHOR -->
		<div class="form-group">
			<input type="text" class="form-control input-sm" name="author" ng-model="commentData.author" placeholder="Name">
		</div>

		<!-- COMMENT TEXT -->
		<div class="form-group">
			<input type="text" class="form-control input-lg" name="comment" ng-model="commentData.text" placeholder="Say what you have to say">
		</div>
		
		<!-- SUBMIT BUTTON -->
		<div class="form-group text-right">	
			<button type="submit" class="btn btn-primary btn-lg">Submit</button>
		</div>
	</form>

	<pre>
	{{ commentData }}
	</pre>

	<!-- LOADING ICON -->
	<!-- show loading icon if the loading variable is set to true -->
	<p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

	<!-- THE COMMENTS -->
	<!-- hide these comments if the loading variable is true -->

	<!-- <div class="comment" ng-hide="loading" ng-repeat="comment in comments">
		<h3>Comment #{{ comment.id }} <small>by {{ comment.author }}</h3>
		<p>{{ comment.text }}</p>

		<p><a href="#" ng-click="deleteComment(comment.id)" class="text-muted">Delete</a></p>

	</div> -->

	<div class="col-lg-10 col-sm-10"> 
		  
	        <div class="row">
	          	<div class="col-lg-6 portfolio-item post comment" ng-hide="loading" ng-repeat="comment in comments">
	          
		            	<div class="col-sm-3">
		                	<a href="portfolio-item.html"><img class="img-responsive img-circle img-userlogo" src="http://placehold.it/140x140"></a>    
		            	</div>
			            <div class="col-sm-9">
			                <b><a href="blog-post.html">{{ comment.author }}</a></b>
			                <small >by <a href="#">Start {{ comment.id }}</a></small>
			            </div>

			            <br><br>

			            <a href="portfolio-item.html"><img class="img-responsive" src="http://placehold.it/750x450"></a>
			            <h3><a href="portfolio-item.html">Project Name</a></h3>
			            <p>{{ comment.text }}</p>
		        	</div>
		      
	        </div>
            
    </div>
            

</div>
</body>
</html>