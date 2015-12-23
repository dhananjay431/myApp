<!DOCTYPE html>
<html lang="en">
<head>
	<script src="assets/js/angular.min.js"></script>
	<script src="assets/js/angular-ui-router.min.js"></script>
	<script src="assets/js/appJs/main.js"></script>
	<script src="assets/js/appJs/myhome.js"></script>
	<script src="assets/js/appJs/home/home.js"></script>
</head>
<body ng-app="myApp">
<div id="container" ng-controller="MyCtrl">
	 <h1>Welcome to CodeIgniter! {{ t1 }}</h1>
	 <ui-view></ui-view>
</div>
</body>
</html>