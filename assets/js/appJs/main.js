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