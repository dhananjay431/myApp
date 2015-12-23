angular.module('myApp')
.directive('myCustomer', ['$interval', 'dateFilter', function($interval, dateFilter)
{
	function link($scope){
			$scope.data.head='home';
     	}

  return {
    //template: 'Name: {{t2}} Address: {{t2}}'
     //templateUrl:'assets/js/addDir/nav.html'
        restrict: 'E',
		templateUrl:'assets/js/addDir/nav.html',
     	link:link
  };
}]);