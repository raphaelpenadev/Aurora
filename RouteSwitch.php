<?php
abstract class RouteSwitch
{

 protected function home()
 {
  require_once __DIR__ . '/helpers/base.php';
  require __DIR__ . '/templates/header.php';
  require __DIR__ . '/pages/home.php';
  require __DIR__ . '/templates/footer.php';
 }

 protected function about()
 {
  require __DIR__ . '/pages/about.php';
 }

 protected function contact()
 {
  require __DIR__ . '/pages/contact.php';
 }

 public function __call($name, $args)
 {
  http_response_code(404);
  require __DIR__ . '/pages/not-found.php';
 }
}
