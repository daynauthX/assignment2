<?php
/**
 * Comp 6300 Assignment 2
 * Group Memembers: Roland Daynauth 813005028
 *                  Willis Estrada 808012999
 * 
 * Development Environment:
 * OS - Windows 8.1
 * PHP - Version 5.5.5
 * Apache - Version - 2.4.6
 * Browsers: 
 * Google Chrome Version 32.0.1700.107 m
 * Firefox Version 27.0.1 
 * Opera 19.0
 * 
 *                  
 */

function __autoload($classname){
    $filename = '/class/' . $classname . '.Class.php';
    include_once ($filename);
}

/*Config class that holds path to soap service*/
$config = new Config();

/*The username, password and institution are hardcoded into the systen*/
$credentials = new Credentials();

/*Authenticate the credentials against the soap path*/
$authen = new Authenticate($credentials, $config);
$token = $authen->authenUser();

/*If authenticated, call the model and view*/        
if($token > 0){
    $model = new Model($config, $credentials, $token);
    $view = new View($model);
    $view->render();
}
else{
    /*Should probabily call an error view, but this should work for this case*/
    echo "Could not be connected";
}
