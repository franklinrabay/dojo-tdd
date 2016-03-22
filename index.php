<?php
  include(__DIR__."/vendor/autoload.php");
  include(__DIR__."/vendor/altorouter/altorouter/AltoRouter.php");
  include(__DIR__."/src/Core/routes.php");

  $routes = new \Core\Router();
  $routes->init();