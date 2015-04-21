var mall = angular.module('mall',['ngAnimate']);
mall

.controller("MallController",function($scope){
	$scope.goods =[
	{"kind":"desert","name":"snake1","price":"￥100","src":"gaodian1.jpg","link":"index.html","show":true},
	{"kind":"desert","name":"snake2","price":"￥100","src":"gaodian2.jpg","link":"index.html","show":true},
	{"kind":"desert","name":"snake3","price":"￥100","src":"gaodian3.jpg","link":"index.html","show":true},
	{"kind":"desert","name":"snake1","price":"￥100","src":"gaodian1.jpg","link":"index.html","show":true},
	{"kind":"cakekind","name":"snake2","price":"￥100","src":"gaodian2.jpg","link":"index.html","show":true},
	{"kind":"cakekind","name":"snake1","price":"￥100","src":"gaodian1.jpg","link":"index.html","show":true},
	{"kind":"cakekind","name":"snake2","price":"￥100","src":"gaodian2.jpg","link":"index.html","show":true},
	{"kind":"cakekind","name":"snake3","price":"￥100","src":"gaodian3.jpg","link":"index.html","show":true},
	{"kind":"drink","name":"snake1","price":"￥100","src":"gaodian1.jpg","link":"index.html","show":true},
	{"kind":"drink","name":"snake1","price":"￥100","src":"gaodian1.jpg","link":"index.html","show":true},
	{"kind":"drink","name":"snake2","price":"￥100","src":"gaodian2.jpg","link":"index.html","show":true},
	{"kind":"drink","name":"snake3","price":"￥100","src":"gaodian3.jpg","link":"index.html","show":true},
	{"kind":"desert","name":"snake1","price":"￥100","src":"gaodian1.jpg","link":"index.html","show":true}
	];
});
