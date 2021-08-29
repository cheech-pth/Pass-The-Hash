<?php

namespace app\core;

class Router {
    protected array $routes = [
        'get' => [
            '/' => callback,
            '/contact',
            '/blogs',
            '/about'
        ],
        'post' => [
            '/'
        ]
    ];
   public function get($path, $callback) {
       this->routes['get'][$path] = $callback;
   } 

   public function resolve() {
       $_SERVER
   }
}
