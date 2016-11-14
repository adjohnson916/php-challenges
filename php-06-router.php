<?php

/*
  Write a simple HTTP router which accepts a URL and attempts to match it to
  a class mapped against the URL, with a method matching the HTTP verb
  (GET, POST, etc.)

  Non mapped URLs should result in a 404 response being returned.

  Feel free to use more that one file if needed.
*/

class Router {
  private $routes = [];

  public function register ($path, $class, $method) {
    $this->routes[$path] = [
      'class' => $class,
      'method' => $method
    ];
  }

  public function route ($url) {
    $route = $this->routes[$url];
    if (empty($route)) return "404\n";
    return $route['class']::$route['method']();
  }

}

class Hello {
  public static function get() {
    return "hello\n";
  }
}

$router = new Router;
$router->register('/hello', 'Hello', 'get');
echo $router->route('/hello');
