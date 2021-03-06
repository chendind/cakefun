<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-cn" ng-app="drag">
        <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=Edge">
                <meta name="renderer" content="webkit">
                <title>拖拽</title>
                <meta name="keywords" content="">
                <meta name="description" content="">
                <style>
                .drag{width: 50px;height: 50px;}
                </style>
        </head>
        <body>
                <div class="drag" draggable></div>
                <script src="/cakefox/Public/js/angular-1.3.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.15/angular-animate.js"></script>
                <script>
                var ang = angular;
                ang.module('drag', []).
                directive('draggable', function($document) {
                        var startX = 0,
                                startY = 0,
                                x = 0,
                                y = 0;
                        return function(scope, element) {
                                element.css({
                                        position: 'relative',
                                        border: '1px solid red',
                                        backgroundColor: 'lightgrey',
                                        cursor: 'pointer'
                                });
                                element.bind('mousedown', function(evt) {
                                        startX = evt.screenX - x;
                                        startY = evt.screenY - y;
                                        $document.bind('mousemove', mousemove);
                                        $document.bind('mouseup', mouseup);
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
                                        $document.unbind('mousemove', mousemove);
                                        $document.unbind('mouseup', mouseup);
                                }
                        }
                })
                
                </script>
        </body>
</html>