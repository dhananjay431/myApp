<!DOCTYPE html>
<html lang="en">
<head>
	<script src="assets/js/angular.min.js"></script>
	<script type="text/javascript">
		angular.module("myApp",[])
		.controller("MyCtrl",function($scope){
				$scope.t1=456;
		});
	</script>
</head>
<body ng-app="myApp">
<div id="container" ng-controller="MyCtrl">
	 <h1>Welcome to CodeIgniter! {{ t1 }}</h1>
</div>
</body>
</html>