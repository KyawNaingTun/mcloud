angular.module('mainCtrl', [])
// for post controller
	.controller('postController', function($scope, $http, Post) {
		// object to hold all the data for the new comment form
		$scope.PostData = {};
		// loading variable to show the spinning loading icon
		$scope.loading = true;
		// get all the comments first and bind it to the $scope.comments object
		Post.get()
			.success(function(data) {
				
				$scope.posts = data;
				$scope.loading = false;
			});
		// function to handle submitting the form
		$scope.submitPost = function() {
			$scope.loading = true;

			// save the comment. pass in comment data from the form
			Post.save($scope.postData)
				.success(function(data) {

					// if successful, we'll need to refresh the comment list
					Post.get()
						.success(function(getData) {
							$scope.posts = getData;
							$scope.loading = false;
						});
				})
				.error(function(data) {
					console.log(data);
				});
		};
		// function to handle deleting a comment
		$scope.deletePost = function(id) {
			$scope.loading = true; 

			Post.destroy(id)
				.success(function(data) {

					// if successful, we'll need to refresh the comment list
					Post.get()
						.success(function(getData) {
							$scope.posts = getData;
							$scope.loading = false;
						});

				});
		};
		// the following codes for read more button
		

		
	}
	

);