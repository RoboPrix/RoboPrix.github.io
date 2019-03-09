<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include('connect.php');

//--------------------------------------------
//          Team login
//---------------------------------------------

$teamRegNo = "";
$password = "";
$errors = array();
//Once user submits/her details [must match to those sent to them via email], perform login 
if(isset($_POST['login'])){
    $teamRegNo = mysqli_real_escape_string($db,$_POST['teamRegNo']);
    $password = mysqli_real_escape_string($db,$_POST['password']);

    /*************   if user is admin *******************/
    //Admin credentials =>  
    //Registration number : Admin
    //password            : RoboPrix2019@2.0  
    if($teamRegNo == "Admin" && $password == "RoboPrix2019@2.0"){
        header('location:admin.php');
    }

    // If user is not an admin
    else{
        $password = md5($password);
        $loginQuery = "SELECT * FROM teams WHERE team_reg_no='$teamRegNo' AND password='$password' ";
        $result = mysqli_query($db,$loginQuery);
        if(!$result){
            die("Error : Could not fetch data ! ".mysqli_error($db));
        }
        if(mysqli_num_rows($result)==1){
            $_SESSION['teamRegNo'] = $teamRegNo;
            header('location:dashboard.php');
        }    
        else{
            //echo "<script type='text/javascript'>alert('Incorrect combination of Team registration number and password!')</script>";
            array_push($errors , "Incorrect combination of username and password");
            //Come up with a better error handling method, 
            //probably a box displaying what went wrong by dsiplaying contents from the array of errors
    
        }
    }    
}

/*          LOG OUT         */
if(isset($_POST['logout'])){
    session_destroy();
    header('location:index.html');
}

?>
