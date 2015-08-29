var app = angular.module('QuicApp', []);

app.directive('quickLinks', function() {
    return {
        restrict: 'E',
        scope: {},
        templateUrl: 'assets/templates/quick-links.html'
    };
});