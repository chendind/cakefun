var app = angular.module('userinfo',['ngRoute','ngAnimate']);
app.config(['$routeProvider', function($routeProvider) {
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
            .when('/myorder', {
                templateUrl: './myorder.html',
                controller:'UserinfoCtrl'
            })
            .when('/myorderinfo', {
                templateUrl: './myorderinfo.html',
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
    .
                directive('draggable', function() {
                    
                        return function(scope, element) {
                             var startX = 0,
                                             startY = 0,
                                             x =0,
                                             y = 0;
                                    element.bind('mousedown', function(evt) {
                                            x =element.position().left;
                                             y = element.position().top;
                                            startX = evt.screenX - x;
                                            startY = evt.screenY - y;

                                            element.bind('mousemove', mousemove);
                                            element.bind('mouseup', mouseup);
                                    });

                                    function mousemove(evt) {
                                            y = evt.screenY - startY;
                                            x = evt.screenX - startX;
                                            element.css({
                                                    top: y + "px",
                                                    left: x + "px"
                                            })
                                    }

                                    function mouseup() {
                                            element.unbind('mousemove', mousemove);
                                            element.unbind('mouseup', mouseup);
                                    }
                                 }
                })
   .directive('dragbar',function(){
        return function(scope, element){
            element.bind('mousedown',function(evt){
                x=element.position().left;
                y=element.position().top;
                startX = evt.screenX - x;
                startY = evt.screenY - y;

                element.bind('mousemove', mousemove);
                element.bind('mouseup', mouseup);
            });
            function mousemove(evt){
                y=evt.screenY - startY;
            }
        }
   })

