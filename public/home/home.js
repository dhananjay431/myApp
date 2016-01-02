		/*deriveCtrl*/
		angular.module("myApp")
		.controller("homeCtrl",function($scope,bhttp){
				$scope.data={};
				bhttp.dis('POST','/myApp/index.php/userCtrl/bsave',{NAME:'sonu',SAL:00000})
				.then(function(response){
				  		console.log(response);
				}, function(response){
				  	console.log(response);
				});

		});