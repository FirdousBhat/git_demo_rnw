<? 
session_start();
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Asia/kolkata');


$DB_host = "localhost";
$DB_user = "";
$DB_pass = "";
$DB_name = "";

try
{
     $DB_con = new PDO("mysql:host={$DB_host};port=3306;dbname={$DB_name};charset=utf8",$DB_user,$DB_pass, array(
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_ORACLE_NULLS       => PDO::NULL_NATURAL,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"
    ));
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}
catch(PDOException $e)
{
     echo $e->getMessage();
}
   
   require('functions.php');
   $user = new RaW($conn);











?>
