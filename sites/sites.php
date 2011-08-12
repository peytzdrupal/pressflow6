<?php
// This file is Peytz-specific, see http://drupal.org/node/231298
$hostname = $_SERVER['HTTP_HOST'];
if (preg_match('/([^.]+)\.pressflow(\d+)\./', $hostname, $matches)) {
  $sites = array(
    $hostname => strtr($matches[1], array('-' => '.', '--' => '-'))
  );
}
