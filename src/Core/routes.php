<?php
  namespace Core;
  use App\Controller\Car;

  class Router {
    public function init()
    {
      $router = new \AltoRouter();
      $router->setBasePath('/tdd');

      $router->map('GET', '/', function() {
        $controller = new \App\Controller\Home();
        $controller->index();
      });

      $router->map('GET', '/account', function() {

      });

      $router->map('GET', '/user', function() {

      });


      $match = $router->match();

      if( $match && is_callable( $match['target'] ) ) {
        call_user_func_array( $match['target'], $match['params'] ); 
      } else {
        header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
      }
    } 
  }