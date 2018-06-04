<?php

session_start();
include_once($_SERVER["DOCUMENT_ROOT"] . '/milePact/loader.php');

if(!isset($_SESSION['loggeduser'])){
    header('location:'.$root_path.'');
}


$fetch_array = array('phoneNumber' => $_SESSION['loggeduser']);


$agentId         = getByValue('users', 'id', $fetch_array);
$location        = getByValue('users', 'location', $fetch_array);
$name            = getByValue('users', 'companyName', $fetch_array);
// $housesArray     = array('agent'      => $agentId);
// $houses          = getManyByValue('building', 'no_of_houses', $housesArray);
// $totalHouses     = array_sum($houses);
// $buildingId      = getManyByValue('building', 'id', $housesArray);

// foreach($buildingId as $id){
//     $tenant      = array('building' =>$id);
// }
// $occupied        = returnExists('tenants',$tenant);



?>