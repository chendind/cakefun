var app = angular.module('cust',['ngRoute','ngAnimate']);
app.config(['$routeProvider', function($routeProvider) {
        $routeProvider
            .when('/', {
                templateUrl: './step0.html',
                controller:'StepCtrl'
            })
            .when('/nowstep0/:e/step1/:a/step2/:b/step3/:c/step4/:d', {
                templateUrl: './step0.html',
                controller:'StepCtrl'
            })
            .when('/step0/:e/nowstep1/:a/step2/:b/step3/:c/step4/:d', {
                templateUrl: './step1.html',
                controller:'StepCtrl'
            })
            .when('/step0/:e/step1/:a/nowstep2/:b/step3/:c/step4/:d', {
                templateUrl: './step2.html',
                controller:'StepCtrl'
            })
            .when('/step0/:e/step1/:a/step2/:b/nowstep3/:c/step4/:d', {
                templateUrl: 'step3.html',
                controller:'StepCtrl'
            })
            .when('/step0/:e/step1/:a/step2/:b/step3/:c/nowstep4/:d', {
                templateUrl: 'step4.html',
                controller:'StepCtrl'
            })
        .otherwise({
            redirectTo: '/'
        });
    }])
.controller("StepCtrl",["$scope","$routeParams","$log","$location","$timeout",function($scope,$routeParams,$log,$location,$timeout){
        
        $scope.e = ($routeParams.e)?$routeParams.e.split(','):[0,0,0,""];
        $scope.a = ($routeParams.a)?$routeParams.a.split(','):[0,0,0];
        $scope.b = ($routeParams.b)?$routeParams.b.split(','):[0,0,0];
        $scope.c = ($routeParams.c)?$routeParams.c.split(','):[0,0,0];
        $scope.d = ($routeParams.d)?$routeParams.d.split(','):[0,0,0];
    $scope.seta = function(p,i){
        switch(p){
            case 0: $scope.a[0] = i;break;
            case 1: $scope.a[1] = i;break;
            case 2: $scope.a[2] = i;break;
        }
    }
    $scope.setb = function(p,i){
        switch(p){
            case 0: $scope.b[0] = i;break;
            case 1: $scope.b[1] = i;break;
            case 2: $scope.b[2] = i;break;
        }
    }
    $scope.setc = function(p,i){
        switch(p){
            case 0: $scope.c = [i,0,0];break;
            case 1: $scope.c[1] = i;break;
            case 2: $scope.c[2] = i;break;
        }
    }

    $scope.tostep0 = function(){
            $location.path('/nowstep0/'+$scope.e+'/step1/'+$scope.a+'/step2/'+$scope.b+'/step3/'+$scope.c+'/step4/'+$scope.d);
    }
    $scope.tostep1 = function(){
            $location.path('step0/'+$scope.e+'/nowstep1/'+$scope.a+'/step2/'+$scope.b+'/step3/'+$scope.c+'/step4/'+$scope.d);
    }
    $scope.tostep2 = function(){
            $location.path('step0/'+$scope.e+'/step1/'+$scope.a+'/nowstep2/'+$scope.b+'/step3/'+$scope.c+'/step4/'+$scope.d);
    }
    $scope.tostep3 = function(){
            $location.path('step0/'+$scope.e+'/step1/'+$scope.a+'/step2/'+$scope.b+'/nowstep3/'+$scope.c+'/step4/'+$scope.d);
    }
    $scope.tostep4 = function(){
            $location.path('step0/'+$scope.e+'/step1/'+$scope.a+'/step2/'+$scope.b+'/step3/'+$scope.c+'/nowstep4/'+$scope.d);
    }
    $scope.test = function(){
        console.log($scope.e);
    }
    $timeout(function(){
        $scope.onscroll = true;
    },200)
}])

