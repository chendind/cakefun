var app = angular.module("cakefun",['ngAnimate']);
app.controller("homeCtrl",["$scope","$interval",function($scope,$interval){
  $scope.tumbimg = 0;
  var num = parseInt($(".goodtumb .tumbimg").length);//这里定义图片的个数
  //图片轮播开始
  var tumbtimeout;
function beginflash(){
  tumbtimeout = $interval(function(){
      tumbflash(1);
  },5000);
}
  function tumbflash(dir){
  	    
  		var a = ($scope.tumbimg + dir)%num;
  		$scope.tumbimg = a;
  }
beginflash();
  //定义左右方向图片
  $scope.flashgoto = function(i){
    if(tumbtimeout){
      $interval.cancel(tumbtimeout);
    }
    var t = parseInt($scope.tumbimg);
    if(i>0)$scope.tumbimg = (t+i)%num;
    if(i<0)$scope.tumbimg = (t+num+i)%num;//i小于0时就减1
    beginflash();
  }
  //图片轮播结束
}])