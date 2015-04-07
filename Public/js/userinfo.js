var userinfo = angular.module('userinfo',['ngRoute','ngAnimate']);
userinfo.config(['$routeProvider', function($routeProvider) {
        $routeProvider
            .when('/', {
                templateUrl: './baseinfo.html',
                controller:'UserinfoCtrl'
            })
            .when('/baseinfo', {
                templateUrl: './baseinfo.html',
                controller:'UserinfoCtrl'
            })
            .when('/account', {
                templateUrl: './account.html',
                controller:'UserinfoCtrl'
            })
            .when('/address', {
                templateUrl: './address.html',
                controller:'UserinfoCtrl'
            })
            .when('/order', {
                templateUrl: './order.html',
                controller:'UserinfoCtrl'
            })
            .when('/coupon', {
                templateUrl: './coupon.html',
                controller:'UserinfoCtrl'
            })
        .otherwise({
            redirectTo: '/'
        });
    }]).controller('UserinfoCtrl',["$scope",function($scope){
    }])

