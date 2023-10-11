<?php
abstract class RouteSwitch
{
 protected function home()
 {
  require __DIR__ . '/paginas/home.html';
 }

 protected function about()
 {
  require __DIR__ . '/paginas/about.html';
 }

 protected function contact()
 {
  require __DIR__ . '/paginas/contact.html';
 }

 public function __call($name, $args)
 {
  http_response_code(404);
  require __DIR__ . '/paginas/not-found.html';
 }
}
