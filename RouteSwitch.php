<?php
abstract class RouteSwitch
{
 protected function home()
 {
  require __DIR__ . '/paginas/home.php';
 }

 protected function about()
 {
  require __DIR__ . '/paginas/about.php';
 }

 protected function contact()
 {
  require __DIR__ . '/paginas/contact.php';
 }

 public function __call($name, $args)
 {
  http_response_code(404);
  require __DIR__ . '/paginas/not-found.php';
 }
}
