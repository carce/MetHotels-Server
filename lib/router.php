<?php

class Router {
    private $routes = array();

    public function addRoute(String $method, String $route, Closure $func) {
        $this->routes[strtoupper($method) . " " . $route] = $func;
    }

    public function run() {
        $current_route = $_SERVER['REQUEST_METHOD'] . ' ' . strtok($_SERVER['REQUEST_URI'], '?');

        if (isset($this->routes[$current_route])) {
            return $this->routes[$current_route]();
        }
        else {
            return '404 Page Not Found';
        }
    }
}