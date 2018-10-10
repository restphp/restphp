<?php

use RestPHP/Route;

Routing::add('index')
		->setRoute('/')
		->setMethod('POST')
		->setReference(App/Frontend/IndexController::indexAction());