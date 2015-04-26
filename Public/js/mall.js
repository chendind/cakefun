var app = angular.module('mall',['ngAnimate']);
app

.controller("MallController",function($scope){
	$scope.goods =[
	{"kind":"cakekind","name":"snake1","price":"￥100","src":"cake1.jpg","link":"itemdetail.html","show":true},
	{"kind":"cakekind","name":"snake2","price":"￥100","src":"cake2.jpg","link":"itemdetail.html","show":true},
	{"kind":"cakekind","name":"snake3","price":"￥100","src":"cake3.jpg","link":"itemdetail.html","show":true},
	{"kind":"cakekind","name":"snake1","price":"￥100","src":"cake4.jpg","link":"itemdetail.html","show":true},
	{"kind":"cakekind","name":"snake2","price":"￥100","src":"cake5.jpg","link":"itemdetail.html","show":true},
	{"kind":"cakekind","name":"snake1","price":"￥100","src":"cake6.jpg","link":"itemdetail.html","show":true},
	{"kind":"desert","name":"snake1","price":"￥100","src":"gaodian1.jpg","link":"itemdetail.html","show":true},
	{"kind":"desert","name":"snake2","price":"￥100","src":"gaodian2.jpg","link":"itemdetail.html","show":true},
	{"kind":"desert","name":"snake3","price":"￥100","src":"gaodian3.jpg","link":"itemdetail.html","show":true},
	{"kind":"drink","name":"snake1","price":"￥100","src":"redwire.png","link":"itemdetail.html","show":true},
	{"kind":"drink","name":"snake1","price":"￥100","src":"redwire2.png","link":"itemdetail.html","show":true},
	{"kind":"drink","name":"snake2","price":"￥100","src":"redwire3.png","link":"itemdetail.html","show":true}
	
	];
});
