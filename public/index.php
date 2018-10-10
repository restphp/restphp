<?php

session_start();

setlocale(LC_ALL, 'pl_PL');

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
define('APP_PATH', realpath('..') . '/');

define("APP_ENV", 'dev');

if (APP_ENV==="dev") {
    error_reporting(E_ALL);
    ini_set('error_reporting', E_ALL);
    ini_set("display_errors", 1);
}

require_once APP_PATH . 'vendor' . DS . 'autoload.php';


$restPHP = new RestPHP/RestPHP();

//RestPHP::DI()->get('module')->setDefault(new App/Frontend/Module());

//RestPHP::DI()->get('config')->addDir(APP_PATH.'config');


try {
    // Handle the request
   // $response = $restPHP->handle();

    //$response->send();

} catch (\Exception $e) {
   // echo 'Exception: ', $e->getMessage();
}