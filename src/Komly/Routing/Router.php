<?php namespace Komly\Routing;

class Router {
    
    protected $app;

    protected $routes = array();

    
    public function __construct(\Komly\App $app) {
        $this->app = $app;
    }

    public function match($method, $url, $callback) {
        $url = trim($url,'/');
        $this->routes[$method . $url] = $callback; 
    }

    public function run() {
        $method = $_SERVER['REQUEST_METHOD'];
        $url    = trim($_SERVER['REQUEST_URI'], '/');
        if (isset($this->routes[$method . $url])) {
            $this->routes[$method . $url]($this->app);
        }
    }

}
