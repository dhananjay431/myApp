<!DOCTYPE html>
<html lang="en">
<head>
	<script src="assets/js/angular.min.js"></script>
	<script src="assets/js/angular-ui-router.min.js"></script>
	<script type="text/javascript">
		angular.module("myApp",['ui.router'])		  
		  .config(function($stateProvider, $urlRouterProvider) {
		  $urlRouterProvider.otherwise("/home");
		  $stateProvider
		    .state('home', {
		      url: "/home",
		      templateUrl: "public/home.html",
		      controller: "homeCtrl"
		    })
/*		    .state('home.show', {
		      url: "/show",
		      templateUrl: "show.html",
		//      controller: "homeCtrl"
		    })
		    .state('home.showById', {
		      url: "/showById/:id",
		      templateUrl: "showById.html",
		//      controller: "homeCtrl"
		    })*/
		  ;
		  });

		/*baseCtrl*/
		angular.module("myApp")
		.controller("MyCtrl",function($scope){
				$scope.t1=456;
		});
		/*deriveCtrl*/
		angular.module("myApp")
		.controller("homeCtrl",function($scope){
				$scope.t2=456;
		});
	</script>
</head>
<body ng-app="myApp">
<div id="container" ng-controller="MyCtrl">
	 <h1>Welcome to CodeIgniter! {{ t1 }}</h1>
	 <ui-view></ui-view>
</div>
</body>
</html>