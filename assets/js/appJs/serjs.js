		angular.module("myApp")
		.service('bhttp',function($q,$http){
		var bobj={};
		bobj.dis=function(url){
			return $q(function(resolve, reject) 
			  {
						$http({
							method: 'GET',
						  	url: url
							}).then(function successCallback(response){
								resolve(response.data);
						  	}, function errorCallback(response) {
								reject(response.data);	    
						});
			   });
		}
		return bobj;
	});