<?php 

require_once("db.php");

header('Content-type: application/json');

$db = new db(array(

    'server' => 'localhost',
    'username' => 'root', 
    'password' => 'peirudei', 
    'database' => 'projekter'

    )); 

$db->connect();


$result = $db->query("SELECT * FROM projekt"); 
while($row = $result->fetch_array()){
    
echo json_encode($row);
}   


?>