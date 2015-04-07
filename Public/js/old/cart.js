var myapp=angular.module('myapp',[]);
myapp.controller('cartCtrl',function($scope){
  $scope.number=2;
  $scope.plus = function(){
      $scope.number = 2;
  }
  console.log($scope.number);
});