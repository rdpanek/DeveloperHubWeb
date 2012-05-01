angular.module('mongo', ['ngResource']).
    factory('Project', function($resource){
		var Project = $resource('https://api.mongolab.com/api/1/databases/developerhub/collections/message',
		{
			apiKey: '4f9ffc47e4b0df00ef646cad',
			data: {
				"name": "Dan"
			},
			type: "Post",
			contentType: "application/json"
		});

	return Project;
});