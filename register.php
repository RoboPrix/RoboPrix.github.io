<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include('connect.php');

//--------------------------------------------
//          Team Registration
//---------------------------------------------

$eventName = ""; // Note : To be passed as a session_id
$teamName = "";
$POCName = ""; 
$POCNumber = "";
$POCEmail = "";
$college = "";
$teamMember1 = "";
$teamMember2 = "";
$teamMember3 = "";
$teamMember4 = "";
$teamMember5 = "";
$teamMember6 = "";
$teamMember7 = "";

//Auto generated password 
function generatePass(){
    $pass = "";
    $characters = "ABC456DE567890FGHIJKL1234MNO4656PQRSTU9879879VWXYZ";
    $characterslength = strlen($characters);
    for($i=0;$i<8;$i++){
        $pass .= $characters[rand(0,$characterslength - 1)];
    }
    return $pass;
}

//Retrieve details of the latest team
$retrieveLatestTeamDetails = "SELECT reg_no from registered ORDER BY reg_no DESC LIMIT 1" ;
$latestResult = mysqli_query($db,$retrieveLatestTeamDetails);

if(!$latestResult){
    die("Could not fetch latest team data ".mysqli_error($db));
}
$latestTeam = mysqli_fetch_assoc($latestResult);
$latestRegNo = $latestTeam['reg_no'];

//Auto generated registration number
//Will check latest registration number in the DB and increment it and provide it to the current user
function generateRegNo($latestRegNo){
    $lastFour = substr($latestRegNo,-3);
    $lastFour = str_pad($lastFour + 1, 3, 0, STR_PAD_LEFT);
    
    return "RP19".$lastFour;//returns incremented registration number  
}

$password = generatePass();
$teamRegNo = generateRegNo($latestRegNo);


?>