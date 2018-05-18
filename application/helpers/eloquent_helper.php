<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Capsule\Manager as Capsule;
// require the ci database config
if(file_exists(APPPATH.'config/'.ENVIRONMENT.'/database.php')){
    require_once APPPATH.'config/'.ENVIRONMENT.'/database.php';
}elseif(file_exists(APPPATH.'config/database.php')){
    require_once APPPATH.'config/database.php';
}
// Eloquent ORM
$capsule = new Capsule;
$capsule->addConnection(
    array(
        'driver'    => 'mysql',
        'host'      => $db['default']['hostname'],
        'database'  => $db['default']['database'],
        'username'  => $db['default']['username'],
        'password'  => $db['default']['password'],
        'charset'   => $db['default']['char_set'],
        'collation' => $db['default']['dbcollat'],
        'prefix'    => $db['default']['dbprefix']
    )
);
//boot Eloquent
$capsule->bootEloquent();