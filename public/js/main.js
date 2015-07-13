var democracy = angular.module('democracy', [
	
])
.controller('AppCtrl', [
	'$scope', 
	'$mdSidenav', 
	function($scope, $mdSidenav) {
		$scope.toggleSidenav = function(menuId) {
	    	$mdSidenav(menuId).toggle();
		};
	}
]);