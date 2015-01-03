<?php namespace Komly;

class App {
    
    protected $params = array();
    protected $router;

    public function __construct($params = array()) {
        $this->params = $params;
        $this->router = new \Komly\Routing\Router($this);

    }

    public function run() {
        $this->router->run();
    }

    public function get($url, $callback) {
        $this->router->match('GET', $url, $callback); 
    }

    public function post($url, $callback) {
        $this->router->match('POST', $url, $callback); 
    }

    public function put($url, $callback) {
        $this->router->match('PUT', $url, $callback); 
    }

    public function patch($url, $callback) {
        $this->router->match('PATCH', $url, $callback); 
    }

    public function delete($url, $callback) {
        $this->router->match('DELETE', $url, $callback); 
    }

}
