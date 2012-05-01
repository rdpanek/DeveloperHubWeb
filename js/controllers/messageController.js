function MessageCtrl($scope, Project) {

	$scope.send_button = "Odeslat zprávu";

	$scope.save = function() {

		var request = $.ajax( { url: "https://api.mongolab.com/api/1/databases/developerhub/collections/message?apiKey=4f9ffc47e4b0df00ef646cad",
			data: JSON.stringify( {
				"name" : $scope.name,
				"email": $scope.email,
				"message": $scope.message
			} ),
			type: "POST",
			contentType: "application/json"
			}).done(function ( data ) {
				$('.alert-success').show();
			});
			request.fail(function(jqXHR, textStatus) {
				$('.alert-error').show();
			});

	};

}