		angular.module("myApp")
		.service('bhttp',function($q,$http){
		var bobj={};
		bobj.dis=function(method,url,data){
			return $q(function(resolve, reject) 
			  {
			  		if(method=="GET"){
					$http.get(url).then(function successCallback(response){
								resolve(response.data);
						  	}, function errorCallback(response) {
								reject(response.data);	    
						});
			  		}
			  		if(method=='POST')
			  		{
			  		
					$http.post(url,data).then(function successCallback(response){
								resolve(response.data);
						  	}, function errorCallback(response) {
								reject(response.data);	    
						});

			  		}
						
			   });
			  		
		}
		return bobj;
	});