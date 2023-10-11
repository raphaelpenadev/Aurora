<?php
require_once __DIR__ . '/RouteSwitch.php';

class Router extends RouteSwitch
{
 public function run($requestUri)
 {
  $route = substr($requestUri, 1);
  $lastbarRoute = mb_strlen($route);
  $route = substr($route, $lastbarRoute);

  if ($route === '' || $route === null) {
   $this->home();
  } else {
   $this->$route();
  }
 }
}
