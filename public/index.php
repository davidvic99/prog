<?php
require_once __DIR__.'/../vendor/autoload.php';
use PPR\Controller\Kernel;

$k= new Kernel();
$k->start_kernel();
$k->start_action();
$k->finish_kernel();
?>