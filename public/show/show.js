		/*deriveCtrl*/
		angular.module("myApp")
		.controller("showCtrl",function($scope,bhttp){
				$scope.data="showCtrl";

			bhttp.dis('http://localhost/myApp/index.php/user2Ctrl/all')
				.then(function(response){
				  		console.log(response);
				}, function(response){
				  	console.log(response);
				});

								var map = new GMaps({
							      el: '#map',
								  zoom: 16,
							      lat: 19.579558,
							      lng: 74.201353,
								  //19.579558, 74.201353
							    });
								map.addMarker({
								  lat: 19.579558,
							      lng: 74.201353,
								title: 'dhananjay Home',
								});
								map.addMarker({
								  lat: 19.563397,
							      lng: 74.203977,
								title: 'mangal Home',
								});
								map.addMarker({
								  lat: 22.718827,
							      lng: 75.859360,
								title: 'mangal Home',
								});
								
								//19.563397, 74.203977
								
								//dhananjay 19.579558, 74.201353
								//kar 19.563397, 74.203977
								//indore 22.718827, 75.859360
								map.drawRoute({
								origin: [19.579558, 74.201353],
								destination: [19.563397, 74.203977],
								travelMode: 'driving',
								strokeColor: '#131540',
								strokeOpacity: 0.6,
								strokeWeight: 6
								});
								
								map.drawRoute({
								origin: [19.579558, 74.201353],
								destination: [22.718827,75.859360],
								travelMode: 'driving',
								strokeColor: '#131540',
								strokeOpacity: 0.6,
								strokeWeight: 6
								})
								map.drawRoute({
								origin: [19.563397, 74.203977],
								destination: [22.718827,75.859360],
								travelMode: 'driving',
								strokeColor: '#131540',
								strokeOpacity: 0.6,
								strokeWeight: 6
								});

		});