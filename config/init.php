<?php

require_once 'config.php';
require_once 'lib/query.php';

function __autoload($class_name){
    require_once 'lib/'.$class_name. '.php';
}