angular.module('hospitalService', [])


	.factory('Post', function($http) {

		return {
			get : function() {
				return $http.get('/api/posts');
			},
			show : function(id) {
				return $http.get('/api/comment/' + id);
			},
			save : function(postData) {
				return $http({
					method: 'POST',
					url: '/api/posts',
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: $.param(postData)
				});
			},
			destroy : function(id) {
				return $http.delete('/api/posts/' + id);
			}
		}

	});

	