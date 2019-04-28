<?php
/*
session_start();
include('connect.php');
//Retrieve Event details
$query1 = "SELECT * FROM events where id=1";
$result1 = mysqli_query($db,$query1);
$event1 = mysqli_fetch_assoc($result1);
$query2 = "SELECT * FROM events where id=2";
$result2 = mysqli_query($db,$query2);
$event2 = mysqli_fetch_assoc($result2);
$query3 = "SELECT * FROM events where id=3";
$result3 = mysqli_query($db,$query3);
$event3 = mysqli_fetch_assoc($result3);
$query4 = "SELECT * FROM events where id=4";
$result4 = mysqli_query($db,$query4);
$event4 = mysqli_fetch_assoc($result4);

if(!$result1 || !$result2 || !$result3 || !$result4){
    die("Server error!".mysqli_error($db). "Please try again later.");
}

//On clicking register
if(isset($_POST['event1'])){
    $_SESSION['loggedin_time'] = time();
    $_SESSION['id'] = $event1['id'];
    header('location:register.php');
}


if(isset($_POST['event2'])){
    $_SESSION['loggedin_time'] = time();
    $_SESSION['id'] = $event2['id'];
    header('location:register.php');
}

if(isset($_POST['event3'])){
    $_SESSION['loggedin_time'] = time();
    $_SESSION['id'] = $event3['id'];
    header('location:register.php');
}


if(isset($_POST['event4'])){
    $_SESSION['loggedin_time'] = time();
    $_SESSION['id'] = $event4['id'];
    header('location:register.php');
}
*/

?>





<!DOCTYPE html><html lang='en' class=''>
<head>

<meta charset='UTF-8'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>RoboPrix</title>
<link rel="shortcut icon" type="favicon/icon-bar" href="img/logos/favicon.ico"/>
<link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<script src='https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js'></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<style >
body{
	font-family: sans-serif;
}
</style>
<script src="js/navbar.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/scss" href="scss/event.scss"> 
</head>
<body>
    <div id="navbaranimated">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a href="index.html"><p class="navbar-brand" >ROBOPRIX 2.0</p></a>                    
                  </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li><a style="font-size: 16px;padding-top:16px" href="about.html">About</a><span class="hover1"></span></li>
                    <li><a style="font-size: 16px;padding-top:16px" href="#">Events</a><span class="hover1"></span></li>
                    <li><a style="font-size: 16px;padding-top:16px" href="rules.html">Rules & Regulations</a><span class="hover1"></span></li>
                    <li><a style="font-size: 16px;padding-top:16px" href="contact.html">Contact</a><span class="hover1"></span></li>
                  </ul>
                </div>
            </div>
        </nav>
	</div>  
    <div style="text-align: center;padding-top:10%;" class="jumbotron">
		<h1 style="font-size:40px" class="display-4">Have a look at the events we're organising this year</h1>
      <hr>
	</div>
	<section id="team" class="pb-5">
	<div class="container">
	<div class="row">
	<!-- Event -->
	<div class="col-xs-36 col-sm-18 col-md-12">
			<div class="image-flip" >
				<div class="mainflip">
					<div id="event1" class="frontside">
						<div style=" background: url('img/bg/giphy-quad.gif'); background-position:center center;background-repeat:no-repeat;" class="card"  >
							<div class="card-body text-center">
                <!--<p><img class="image-fluid" src="img/bg/quad.jpg" alt="drone" style="border-radius:20%;height:150px;width:150px;"></p>-->
								<h2  class="card-title">Quadcopter</h2>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
                    View More
                  </button>
                  <!-- The Modal -->
  <div class="modal" id="myModal1">
      <div class="modal-dialog">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Quadcopter</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Modal body -->
          <div class="modal-body">
            <p><img class="image-fluid" src="img/events/IMG_7756.JPG" alt="quad" style="width:100%;position:center center"></p>
            Event description..
          </div>
          
          <!-- Modal footer 
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" >Register +</button>
          </div>-->
          
        </div>
      </div>
    </div>
							</div>
						</div>
          </div>
				</div>
			</div>
		</div>
    <!-- ./Event  -->
  <!-- Event -->
	<div style="margin-top:30px" class="col-xs-36 col-sm-18 col-md-12">
			<div class="image-flip" >
				<div class="mainflip">
					<div class="frontside">
						<div style=" background: url('img/bg/giphy-drag.gif'); background-position:center center;background-repeat:no-repeat;" class="card">
							<div class="card-body text-center">
                  <!--<p><img calss="image-fluid" src="img/bg/drag.png" alt="drone" style="height:150px;width:250px;"></p>-->
								<h2 class="card-title" >Drag Race</h2>
                <p class="card-text"></p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
                    View More
                  </button>
                  <!-- The Modal -->
  <div class="modal" id="myModal2">
      <div class="modal-dialog">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Drag Race</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Modal body -->
          <div style="text-align:left" class="modal-body">
          <p><img class="image-fluid" src="img/events/IMG_7539.JPG" alt="DR" style="width:100%;position:center center"><br><br>
              <strong>ARENA SPECIFICATIONS : </strong> OUTDOOR <br> 
              <strong>Three Levels : </strong><br>
              ● Level 1 : Concrete<br>
              ● Level 2 : Loose Mud<br>
              ● Level 3 : Mud<br>
              <br><br>
              <strong>REGISTRATION FEE : </strong> Rs. 1000/-<br><br>
              <strong>PRIZE MONEY : </strong> Rs. 10,000/- <br><br>
              <strong>COURSE SPECIFICATIONS:</strong> <br>50M STRAIGHT (PRELIMS) / 100M STRAIGHT (FINALS))<br><br>
              <strong>ROBOT WEIGHT RANGE : </strong>(5-15) KG - Light Weight <br> (15-30) KG - Heavy Weight<br><br>
              <strong>ROBOT DIMENSIONS : </strong>4 ft³ / 121.92 cm³<br><br>
              <strong>ROBOT CONTROL :</strong> REMOTE CONTROLLED<br><br>
              
              <strong>RULES and GUIDELINES :</strong><br>
              
              1. The car must be electric powered, have six or fewer wheels (nothing else may touch
              the ground - i.e., no rollers or slides), Tires must be rubber or foam type. The tires
              cannot be modified to improve traction, (e.g., no studs, nails, sandpaper etc.), Robots
              may use off-the-shelf motor controllers.<br><br>
              2. Each team is responsible for providing their own batteries and chargers. All vehicles
              must be fully charged prior to the competition. No recharge is allowed between runs. All vehicles
              will be inspected for conformity to the rules and collected prior to the race.<br><br>
              3. The latitude and longitude of the start, destination will be announced at the start of
              the contest along with other considerations such as safety matters and course boundaries.<br><br>
              4.Contestants will have 15 minutes to make software and hardware modifications to
              their robots before the start of contest. At the end of 15 minutes, a judge will signal the start of
              the race. Each robot will be given two chances to complete the course and 10 minutes will be
              provided between attempts for software and hardware modifications.<br><br>
              5. During the initial 15 minutes between the announcement of the course and the start
              of the contest, contestants will be given access to the track to take measurements. Acceptable
              measuring instruments include a tape measure, wheeled measuring device, etc. However, the
              actual robot will not be allowed on the course.<br><br>
              
              6. Judges will determine the maximum number of robots that can run at once. Judges
              will also designate the order in which robots will start. Consideration will be given to robot
              speed, safety features and other factors when determining the starting line-up.<br><br>
              7.Timing will begin when any part of the vehicle crosses the Start point and will end
              when the vehicle passes the Goal mark. If the vehicle runs off the track and returns back on the
              track by itself, it can continue the race. The run will be aborted if the vehicle is touched by the
              player at any time during the race.<br><br>
              8. Adjustments may be made to the vehicle between runs. Players are not allowed to
              reprogram or change any electronic parts including battery.<br><br>
              9.The vehicle is required to stay within the track during the entire race. If the vehicle
              runs off the track completely or remains unmoving for 15 seconds, the run will be terminated
              immediately. The record of this run will be aborted.<br><br>
              10. Robots must reach the destination waypoint and stop in order to complete the course.
              Robots that do not complete the course will receive no score for that round (see exception
              under Scoring).<br><br>
              11. Each attempt is scored individually. After two attempts, the best score for each robot will
              be recorded as that robots final score.<br><br>

              11. If none of the team can complete the course, the winner will be determined by the car
              which runs the longest course and in the fastest time.
              <br><br>
             
              <strong>SCORING : </strong><br>
              Robots will receive a score corresponding to the number of seconds needed to travel to the
              destination.<br>
              A robot must physically touch the finish line to receive a score.<br>
              If a robot does crash into cones or objects placed in either side of the track or onto another
              robot participating will result in demerit points. Robots that complete the course at least once will
              always place higher than robots that do not complete the course.<br>
              
              Scoring will be at the sole discretion of the judges.<br><br>
              <strong>JUDGING :</strong> <br>
              One or more judges will officiate the contest. They will ensure the spirit of these rules are
              followed and impose scoring penalties or remove a robot from competition if the robot is
              operating in an unsafe manner or not complying with the spirit of these rules. The decisions
              of the judges are final.<br><br>
              <strong>SAFETY :</strong> <br>
              Each robot must demonstrate a suitable fail-safe stop mechanism before it will be allowed to
              compete. Suitable safety stop mechanism: The robot builder is responsible for devising the
              safety stop mechanism. Some possibilities:<br>
              
              ● Kill safe switch or push button in the robot.<br>
              ● Some wireless contrivance operated by the handler.<br>
              ● Some other mechanism, with prior permission from the judges.<br>
              In any case the safety stop switch must be fail-safe: The robot handler must demonstrate
              that by dropping, or letting go of the stop mechanism the robot comes to an immediate stop
              and makes no further movement. The stop mechanism does not need to cut primary power
              as long as it can be demonstrated that the robot reliably comes to a complete halt.<br><br>
              The safety stop mechanism may be built to allow the robot to continue its run after it is re-engaged.<br><br>
              
              <strong>LIABILITY :</strong> <br>
              Each contestant is fully responsible for any damage to person or property caused
              directly or indirectly by his or her robot. The Vellore Institute of Technology, including the
              Vellore Institute of Robotics Club, is not responsible for any damages caused by any
              competing robots.<br>
              Each contestant must sign a waiver of liability prior to the competition. If the waiver is not
              signed, the robot will not be allowed to compete.<br>
          </div>
          
           <!-- Register button -->
           <div class="modal-footer">
              <div style="text-align:left">
                <input type="checkbox" id="termsChkbx " /> <strong>I agree with the terms of this event.</strong>
              </div>  
              <br>
              <div style="text-align:center">
              <input type="submit" name="event2" class="btn btn-danger" value="Register for Light Weight (5-15 KG) + " disabled="disabled"><br><br>
              <input type="submit" name="event3" class="btn btn-danger" value="Register for Heavy Weight (15-30 KG) +" disabled="disabled">
              </div>
            </div>
            
            <script>
            var checkboxes = $("input[type='checkbox']"),
                submitButt = $("input[type='submit']");
            checkboxes.click(function() {
                submitButt.attr("disabled", !checkboxes.is(":checked"));
            });
            </script>
          
        </div>
      </div>
    </div>
							</div>
						</div>
          </div>
				</div>
			</div>
		</div>
    <!-- ./Event  -->
   <!-- Event -->
	<div style="margin-top:30px" class="col-xs-36 col-sm-18 col-md-12">
			<div class="image-flip" >
				<div class="mainflip">
					<div class="frontside">
            <div style=" background: url('img/bg/giphy_obstacle.gif'); background-position:center center;background-repeat:no-repeat;" class="card">
							<div class="card-body text-center">
                  <!--<p><img calss="image-fluid" src="img/bg/OR1.jpg" alt="drone" style="border-radius:20%;height:150px;width:200px;"></p>-->
								<h2 class="card-title">Obstacle Race</h2>
                <p class="card-text"></p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">
                    View More
                  </button>
                  <!-- The Modal -->
  <div class="modal" id="myModal3">
      <div class="modal-dialog">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
      
            <h4 class="modal-title">Obstacle Race</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Modal body -->
          <div style="text-align:left" class="modal-body">
          <p><img class="image-fluid" src="img/events/IMG_7834.JPG" alt="OR" style="width:100%;position:center center"><br><br>
              <strong>ARENA SPECIFICATIONS : </strong>  (Not decided)<br><br>
              <strong>REGISTRATION FEE : </strong> (not decided)<br><br>
              <strong>PRIZE MONEY : </strong> (not decided)<br><br>
              <strong>COURSE SPECIFICATIONS:</strong> <br>The terrain may include pavement, dirt, small rocks, grass,
              hills, gullies, mud, water , trees and weeds
              (A few changes will be made depending on terrain and weather)<br><br>
              <strong>ROBOT WEIGHT RANGE : </strong>&lt; 30 KG<br><br>
              <strong>ROBOT DIMENSIONS : </strong>30 * 30 * 50 (cm)<br><br>
              <strong>ROBOT CONTROL :</strong> REMOTE CONTROLLED<br><br>
              <strong>OBJECTIVE :</strong><br>
              This competition emphasizes on autonomous/ controlled navigation and obstacle avoidance
              over varied, outdoor terrain. Robots have three opportunities to navigate from a starting point
              to an ending point and are scored on time required to complete the course.<br><br>
              <strong>ATV BOT :</strong><br>
              The robot must not be constructed in such a way as to not damage the environment or other
              robots. See &quot;Safety&quot; for other restrictions. No robot may weigh more than 30 kgs nor may it
              use an internal or external combustion engine. The robot must fit inside a 3m x 3m x 3m
              cube. The battery used cannot exceed 12 V.
              Robots can be autonomous or Remote controlled (wireless system only)<br><br>
              
              <strong>COURSE :</strong><br>
              The course will be outdoors with both natural and man made terrain and obstacles. The
              terrain may include pavement, dirt, small rocks, water, grass, hills, gullies, trees, curbs and
              weeds. This list is not exhaustive.<br>
              The contest will not necessarily be postponed in the event of inclement weather.
              Robots will be placed at a designated starting point prior to each run. The destination and
              bonus way points will be designated with latitude/longitude coordinates and marked by
              orange plastic traffic cones.<br>
              
              The total straight-line distance between the start and destination will be 300 meters however
              the route may be longer due to obstacles.<br><br>
              <strong>RULES and GUIDELINES :</strong><br>
              
              1. No participant should be in more than one team in a single event.<br><br>
              2. Robots may use off-the-shelf motor controllers, or be kits.<br><br>
              3. The bot must be electric powered, have eight or fewer wheels.<br><br>
              4. NITRO RC cars are NOT allowed and Harmful objects cannot be used as robot
              accessories<br><br>
              5. Each team is responsible for providing their own batteries and chargers. All vehicles
              must be fully charged prior to the competition. No recharge is allowed between runs.<br><br>
              All vehicles will be inspected for conformity to the rules and collected prior to the
              race.<br><br>
              
              6. The start, destination and bonus way points will be announced at the start of the
              contest along with other considerations such as safety matters and course
              boundaries.<br><br>
              7. The track course is designed with straight lines, cross roads, curves and winding
              roads of different length and radius of curvature and with different terrains.<br><br>
              8. Contestants will then have 30 minutes to make software and hardware modifications
              to their robots. At the end of 30 minutes, a judge will signal the start of the race.<br><br>
              9. Each robot will be given three chances to complete the course and 15 minutes will be
              provided between attempts for software and hardware modifications. (Each attempt
              approx. 5 mins)<br><br>
              10. During the initial 30 minutes between the announcement of the course and the start
              of the contest, contestants will be able to walk the course to take measurements.
              Acceptable measuring instruments include a hand-held GPS, tape measure, wheeled
              measuring device, etc. However, the actual robot will not be allowed on the course.<br><br>
              11. During the Rounds, only maximum of 3 team members are allowed in the arena, one
              member will control the robot and 2 others to guide it. However, teams are allowed to
              switch members in different rounds. <br><br>
              12. Judges will designate the order in which robots will start. Consideration will be given
              to robot speed, safety features and other factors when determining the starting line-
              up.<br><br>
              13. Each robot will work their way toward the destination waypoint following the course
              its operator deems appropriate. Boundaries will be set and, if a robot crosses a
              
              boundary, it will be immediately stopped and no score will be awarded for that
              attempt. Robots must touch bonus waypoint cones to score bonus points.<br><br>

              14. Timing will begin when any part of the vehicle crosses the Start point and will end
              when the vehicle passes the Goal mark. If the vehicle runs off the track and returns
              back on the track by itself, it can continue the race. The run will be aborted if the
              vehicle is touched by the player at any time during the race. Each player must finish
              the run in 5 minutes.
              <br><br>
              15. Robots must touch the destination waypoint and stop in order to complete the
              course. Robots that do not complete the course will receive no score for that round.
              <br><br>
              16. If the bot is proved to be inactive for more than 30 Seconds in the circuit, it
              is disqualified.
              <br><br>
              17. Each robot is given 15 minutes to complete the course in total of its three attempts.
              Each attempt is scored individually. After three attempts, the best score for each
              robot will be recorded as that robots final score. Decision of Judges will be final. 
              <br><br>
              18. Team can be disqualified if found using any unwanted means to win the game<br><br>
              <strong>SCORING : </strong><br>
              Robots will receive a score corresponding to the number of seconds needed to travel to the
              destination.<br>
              Bonus terrain points are assigned multipliers (between 1 and 5) prior to the start of the
              competition and will reflect the difficulty of the terrain, distance from the start/destination and
              any other factors the judges consider relevant.<br>
              If a robot successfully navigates to clear the given terrain under 30 Seconds, bonus
              multipliers will be applied.<br>
              For example,
              if a robot requires 45(x2) seconds to complete a given terrain and other terrain in 15
              seconds(x5). In total, 2 terrain and time taken to complete the course is 200 seconds, if the
              two bonus terrain points are multipliers of 5 and 2, the final score for that attempt will be 200-
              300 = (100 x 0.1) x 5 x 2 = 100 pts.<br>
              Or
              if a robot completes the course in 240 seconds with no terrain points, the final score for that
              attempt will be 200-300 = (100 x 0.1) = 10 pts.
              If a robot does not finish, it will not receive a score.
              Robots that complete the course at least once will always place higher than robots that do
              not complete the course.<br>
              
              Scoring will be at the sole discretion of the judges.<br><br>
              <strong>JUDGING :</strong> <br>
              One or more judges will officiate the contest. They will ensure the spirit of these rules are
              followed and impose scoring penalties or remove a robot from competition if the robot is
              operating in an unsafe manner or not complying with the spirit of these rules. The decisions
              of the judges are final.<br><br>
              <strong>SAFETY :</strong> <br>
              Each robot must demonstrate a suitable fail-safe stop mechanism before it will be allowed to
              compete. Suitable safety stop mechanism: The robot builder is responsible for devising the
              safety stop mechanism. Some possibilities:<br>
              
              ● Wired tether operated by the handler walking alongside the robot<br>
              ● Some wireless contrivance operated by the handler.<br>
              ● Some other mechanism, with prior permission from the Judges.<br>
              In any case the safety stop switch must be fail-safe: The robot handler must demonstrate
              that by dropping, or letting go of the stop mechanism the robot comes to an immediate stop
              and makes no further movement. The stop mechanism does not need to cut primary power
              as long as it can be demonstrated that the robot reliably comes to a complete halt.<br><br>
              
              <strong>LIABILITY :</strong> <br>
              Each contestant is fully responsible for any damage to person or property caused
              directly or indirectly by his or her robot. The Vellore Institute of Technology, including the
              Vellore Institute of Robotics Club, is not responsible for any damages caused by any
              competing robots.<br>
              Each contestant must sign a waiver of liability prior to the competition. If the waiver is not
              signed, the robot will not be allowed to compete.<br>
          </div>
          
          <!-- Register button -->
          <div class="modal-footer">
            <div style="text-align:left">
              <input type="checkbox" id="termsChkbx " onchange="isChecked(this, 'sub3')" /> <strong>I agree with the terms of this event.</strong>
            </div>  
            <button type="button" name="event3" class="btn btn-danger" id="sub3" disabled="disabled">Register + </button>
          </div>
          <script>
          function isChecked(checkbox, sub3) {
              document.getElementById(sub3).disabled = !checkbox.checked;
          }
          </script>
        </div>
      </div>
    </div>
							</div>
						</div>
          </div>
				</div>
			</div>
		</div>
    <!-- ./Event  -->
  <!-- Event -->
	<div style="margin-top:30px" class="col-xs-36 col-sm-18 col-md-12">
			<div class="image-flip" >
				<div class="mainflip">
					<div class="frontside">
						<div style=" background: url('img/bg/giphy-lf.gif'); background-position:center center;background-repeat:no-repeat;" class="card">
							<div class="card-body text-center">
								<h2 class="card-title">Line Follower</h2>
                <p class="card-text"></p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">
                    View More
                  </button>
                  <!-- The Modal -->
  <div class="modal" id="myModal4">
      <div class="modal-dialog">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Line Follower</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Modal body -->
          <div style="text-align:left;" class="modal-body">
              <strong>ARENA SPECIFICATIONS : </strong>  INDOOR<br><br>
              <strong>REGISTRATION FEE : </strong> (not decided)<br><br>
              <strong>PRIZE MONEY : </strong> (not decided)<br><br>
              <strong>RACE DIMENSIONS:</strong> 2.5 cm to 5 cm (Track will be consisting of a black line or a white line)<br><br>
              <strong>ROBOT DIMENSIONS : </strong>25cm*25cm*15cm (L*B*H) (MAX)<br><br>
              <strong>ROBOT CONTROL :</strong> AUTONOMOUS<br><br>
              
              <strong>RULES and GUIDELINES :</strong><br>
              
              1. The car must be electric powered, have 4 or fewer wheels (nothing else may touch
              the ground - i.e., no rollers or slides), Tires must be rubber or foam type. Maximum of
              3 sensors can be used on the robot. Power supply should be on-board and maximum
              voltage between any two points on the circuit at any given time should not exceed
              12V DC, 1.5A.<br><br>
              2.Each team is responsible for providing their own batteries and parts. All vehicles
              must be fully charged prior to the competition. No recharge is allowed between runs.
              All vehicles will be inspected for conformity to the rules and collected prior to the
              race.<br><br>
              3. One team member is elected as the robot handler. Only that team member is
              permitted to handle the robot during the game. All other team members must remain
              outside the game zone.<br><br>
              4.There will be one START point and one FINISH point in the entire field. The
              competition is conducted through LEAGUE stage.<br><br>
              5. The RACE CLOCK will reset to zero on every restart. The COMPETITION CLOCK
              and the TRIAL CLOCK will keep running during all restarts. We can TWO restarts
              within trial period.<br><br>
              
              6. During the initial 10 minutes between the announcement of the course and the start
              of the contest, contestants will be given access to the track for a trial run of 2 mins
              and it could restart twice during the run. (track will differ each round).<br><br>
              7. A robot must restart if:<br><br>
              ● The robot does not start after pressing the Start Button for 1 minute.<br>
              ● The robot is touched by a human.(Checkpoint)<br>
              ● The robot moves off the field.<br>
              ● The referee orders to restart.<br><br>
              8. Contestants will have 10 minutes to make software and hardware modifications to
              their robots before the start of contest. At the end of 10 minutes, a judge will signal
              the start of the race. Each robot will be given three chances in a single run to
              complete the course and 5 minutes will be provided between attempts for software
              and hardware modifications.<br><br>
              9.Timing will begin when any part of the vehicle crosses the Start point and will end
              when the vehicle reaches the Finish line. (- 5) Points: For each human touch. After
              each human touch robot will start from previous &quot;checkpoint&quot; which is there before
              each milestone. <br><br>
              10. Adjustments may be made to the vehicle between runs. Players are not allowed to
              change any electronic parts including battery in between runs.<br><br>
              11. Robots must reach the destination waypoint and stop in order to complete the
              course. If the lifo do not complete the course it will be judged by the longest distance
              travelled for that round.<br><br>

              12.Each attempt is scored individually. After two attempts, the best score for each robot
              will be recorded as that robots final score. If a tie occurs, a third run will be initiated.
              <br><br>
              13. Any damage to the arena, intentional or unintentional, will lead to direct
              disqualification. Humans that cause deliberate interference with robots or damage to
              the field will be disqualified. It is expected that the aim of all teams is to play a fair
              and clean game.
              <br><br>
              14. If none of the team can complete the course, the winner will be determined by the car
              which runs the longest course and in the fastest time.
              <br><br>
              15. track may have a ramp or flippers in between. 
              <br><br>
              <strong>Note: </strong><br>
              Team can have a coach as technical advisor. But it&#39;s not mandatory to have
              coach. The coach will be seated in a supervisory position around the competition
              area. The coach is not allowed to touch or repair the robot during the competition.
              The coach should not be involved in the programming of the robot. In case of the
              coach interference with the robot or referee decisions during the competition, the
              team will risk being disqualified.<br>
              <br><br>
              <strong>SCORING : </strong><br>
              Robots will receive a score corresponding to the number of seconds needed to travel to the
              destination.<br>
              First preference will be given to robot, reaching fastest to finish-line. 2nd criteria would be
              scoring maximum points as per following norms.<br>
              ● 10 Points: will be awarded based on each milestone. Appx. 5-10 milestone will be there at
              arena.<br>
              ● (- 5) Points: For each human touch. After each human touch robot will start from previous
              &quot;checkpoint&quot; which is there before each milestone.<br>
              Robots that complete the course at least once will always place higher than robots that do
              not complete the course.<br>
              
              Scoring will be at the sole discretion of the judges.<br><br>
              <strong>JUDGING :</strong> <br>
              One or more judges will officiate the contest. They will ensure the spirit of these rules are
              followed and impose scoring penalties or remove a robot from competition if the robot is
              operating in an unsafe manner or not complying with the spirit of these rules. The decisions
              of the judges are final.<br><br>
              
              <strong>LIABILITY :</strong> <br>
              Each contestant is fully responsible for any damage to person or property caused
              directly or indirectly by his or her robot. The Vellore Institute of Technology, including the
              Vellore Institute of Robotics Club, is not responsible for any damages caused by any
              competing robots.<br>
              Each contestant must sign a waiver of liability prior to the competition. If the waiver is not
              signed, the robot will not be allowed to compete.<br>
          
          </div>
          
         <!-- Register button -->
         <div class="modal-footer">
            <div style="text-align:left">
              <input type="checkbox" id="termsChkbx " onchange="isChecked(this, 'sub4')" /> <strong>I agree with the terms of this event.</strong>
            </div>  
            <button type="button" name="event4" class="btn btn-danger" id="sub4" disabled="disabled">Register + </button>
          </div>
          <script>
          function isChecked(checkbox, sub4) {
              document.getElementById(sub4).disabled = !checkbox.checked;
          }
          </script>
          </div>
        </div>
      </div>
    </div>
							</div>
						</div>
          </div>
				</div>
			</div>
		</div>
		<!-- ./Event  -->     
	</div>
	</div>
	</section>
    

	<script src="/js/jquery.min.js"></script>
	<script src="/js/popper.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
</body>
</html>    