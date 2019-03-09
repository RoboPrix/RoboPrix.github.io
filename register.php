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
    $characters = "ABCDE567890FGHIJKL1234MNOPQRSTUVWXYZ13456234567890abcdefg34567hijklmnopqr12356stuvw34789xyz";
    $characterslength = strlen($characters);
    for($i=0;$i<8;$i++){
        $pass .= $characters[rand(0,$characterslength - 1)];
    }
    return $pass;
}

//Retrieve details of the latest team
$retrieveLatestTeamDetails = "SELECT team_reg_no from registered ORDER BY team_reg_no DESC LIMIT 1" ;
$latestResult = mysqli_query($db,$retrieveLatestTeamDetails);

if(!$latestResult){
    die("Could not fetch latest team data ".mysqli_error($db));
}

$latestTeam = mysqli_fetch_assoc($latestResult);
$latestRegNo = $latestTeam['team_reg_no'];

//Auto generated registration number
//Will check latest registration number in the DB and increment it and provide it to the current user
function generateRegNo($latestRegNo){
    $lastFour = substr($latestRegNo,-4);
    $lastFour = (int)$lastFour;
    $lastFour ++;
    $lastFourUpdated = (string)$lastFour;
    
    return "RP19".$lastFourUpdated;
}

$password = generatePass();
$teamRegNo = generateRegNo($latestRegNo);


?>