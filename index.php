<?php

//This is my Controller

//turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);


//Require the autoload file
require_once('vendor/autoload.php');

//create an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /',function(){
    //echo "Pet Home";

    $view = new Template();
    echo $view->render('views/home.html');
});

//define second route
$f3->route('GET /cats',function(){
    //echo "Pet Home";

    $view = new Template();
    echo $view->render('views/cats.html');
});

// Run fat-free
$f3->run();