<!DOCTYPE html>
<html lang="en">
<head>
	<script src="assets/js/angular.min.js"></script>
	<script src="assets/js/angular-ui-router.min.js"></script>
	<script src="assets/js/appJs/main.js"></script>
	<script src="assets/js/appJs/myhome.js"></script>
	<script src="http://maps.google.com/maps/api/js"></script>
	<script src="assets/js/appJs/gmaps.js"></script>
	





	<script src="public/addDir/nav.js"></script>
	<script src="public/home/home.js"></script>
	<script src="public/show/show.js"></script>
	
	

	
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body ng-app="myApp">
	<div id="container" ng-controller="MyCtrl">
		  <ui-view></ui-view>
	</div>
</body>
</html>