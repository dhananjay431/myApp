angular.module('myApp')
.directive('myCustomer', ['$interval', 'dateFilter', function($interval, dateFilter)
{
		
     	var dir={};
     	dir.restrict='E';
     	dir.templateUrl='public/addDir/nav.html';
     	dir.link=function($scope,element,attrs){
     		$interval(function(){
     			$scope.data.head=dateFilter(new Date(),'d/m/yy h:mm:ss a');
     			},1000);
		};

		return dir;
}]);