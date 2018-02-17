<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>LionelMinistries</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
 
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
 
</head><!--/head-->

<body>
 <section id="twitter" class="parallax"  style="background-image: url(images/4.jpg)">
    <div >
      </a>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class=" text-center">
              <div class="social-icons">
          <ul>
            <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
          </ul>
        </div>
              <h4>Lionel NORTEY Ministries</h4>
            </div>
            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <p>
                  		<?php
require_once('setup.php');
if(isset($_POST['subscribe'])){
	$email = $_POST['email'];
	$stmt = $db->prepare("SELECT * from subscriber where email = (?)");
	$stmt->bind_param('s',$email);
	$stmt->execute();
	$result=$stmt->get_result();
	$stmt->close();
	$row = $result->fetch_assoc();
	if(empty($row['email'])){
				$stmt = $db->prepare("INSERT into subscriber(email) values (?)");
				$stmt->bind_param("s",$email);

				if($stmt->execute() === false){
					echo"
					<
					<div class='alert alert-warning'>
			<a href='#' class='close' data-dismiss='alert'
			aria-label='close'>&times;</a><b>Eroor =></b></div>".$stmt->error;
		
					
				}else
				{	
				
				$from       = 'lionelnorteyministries@marcosimeony.com'; 
				$subject    =  "lionelMinistries.com";
				$message    = 'Thank You for Subscribing to LionelMinistries.com . You will get updates on our gospel music and videos and also daily messages.';
				$to   		= $email;

				
				$headers = "MIME-Version: 1.0";
				$headers .= "Content-type: text/plain; charset=iso-8859-1";
				$headers .= "From: <{$from}>";
				$headers .= "Reply-To: <{$from}>";
				$headers .= "Subject: {$subject}";
				$headers .= "X-Mailer: PHP/".phpversion();

				mail($to, $subject, $message, $headers);
		
					echo "
				<div class='btn btn-start animated fadeInUpBig'><div class='alert alert-warning'>
			<b>Thank You for subscribing</b></div></div>";
			exit();
		
					

					
				}
			}else {
				echo "
				<div class='btn btn-start animated fadeInUpBig' ><div class='alert alert-warning'>
			<a href='#' class='close' data-dismiss='alert'
			aria-label='close'>&times;</a><b>You have already subscibed</b></div></div>";
			exit();
		
					
			}
}
?>
                 
                </div>

               
              </div>                        
            </div>                    
          </div>
        </div>
      </div>
    </div>
  </section><!--/#twitter-->



  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  

</body>
</html>