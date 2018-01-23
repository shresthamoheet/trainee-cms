<?php
/**
 * JankariTech
 * 
 * @author Artur Neumann <artur@jankaritech.com>
 */
require __DIR__ . '/../../../vendor/autoload.php';

$classLoader = new \Composer\Autoload\ClassLoader();
$classLoader->addPsr4("Page\\", __DIR__ . "/../lib", true);
$classLoader->register();
