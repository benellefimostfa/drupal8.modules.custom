<?php

namespace Drupal\mymodule\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

class MymoduleController extends ControllerBase {

  public static function create(ContainerInterface $container) {
    return new static($container->get('module_handler'));
  }

  public function myPage1() {
    $build = array(
      '#type' => 'markup',
      '#markup' => t('Hello world !!!'),
    );
    return $build;
  }

  public function myPage2() {
    $build = array(
      '#type' => 'markup',
      '#markup' => t('If you are seeing this page then you have permission to access this page.'),
    );
    return $build;
  }
}
