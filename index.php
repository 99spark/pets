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
    echo "Pet Home";
});

// Run fat-free
$f3->run();