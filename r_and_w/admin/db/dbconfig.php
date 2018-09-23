<?php
//ini_set('session.gc_maxlifetime', 3600);
//session_set_cookie_params(3600);
session_start();
date_default_timezone_set('Asia/kolkata');
$DB_host = "localhost";
$DB_user = "urbanliv_faizan";
$DB_pass = "jugglerbhai1990";
$DB_name = "urbanliv_gofresh";

try
{
     $DB_con = new PDO("mysql:host={$DB_host};port=3306;dbname={$DB_name};charset=UTF8",$DB_user,$DB_pass, array(
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_ORACLE_NULLS       => PDO::NULL_NATURAL,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"
    ));
     $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "1";
}
catch(PDOException $e)
{
     echo $e->getMessage();
}
   define("___DIR___","https:///");
   
include( $_SERVER['DOCUMENT_ROOT'] . '/admin/functions/functions.php' ); 
//include_once 'functions/functions.php';
$gofresh = new GOFRESH($DB_con);