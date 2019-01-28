<?php
/**
 * Created by PhpStorm.
 * User: sarah
 * Date: 28.01.2019
 * Time: 11:50
 */
require_once "config.php";
require "vendor/autoload.php";

$config = new \Doctrine\DBAL\Configuration();

$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
