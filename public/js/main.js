var democracy = angular.module('democracy', [
    'ngAnimate',
    'ngTouch',
    'ngMaterial'
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