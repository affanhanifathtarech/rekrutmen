<?php 
if(session_id()==NULL){
    session_start();
}
require_once '../app/init.php';
$app = new App;