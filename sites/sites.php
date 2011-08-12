<?php
// This file is Peytz-specific, see http://drupal.org/node/231298

// Support development URLs, nn.example-org.pressflow6.dev.peytz.dk, and
// temporary production URLs, example-org.pressflow6.f2.peytz.dk.
$hostname = $_SERVER['HTTP_HOST'];
if (preg_match('/([^.]+)\.pressflow(\d+)\./', $hostname, $matches)) {
  $sites = array(
    $hostname => strtr($matches[1], array('-' => '.', '--' => '-'))
  );
}
