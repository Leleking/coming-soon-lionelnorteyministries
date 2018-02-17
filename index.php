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

  <!--.preloader-->
 
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Welcome to <span>Lionel Nortey Ministries</span></h1>
            <p class="animated fadeInRightBig"></p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="">Coming Soon</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Worship with <span>Minister Lionel</span></h1>
            <p class="animated fadeInRightBig">By Downloading gospel music and videos for free</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#subscribe">Subscribe</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/3.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Get Your Daily Bible<span> Messages</span></h1>
            <p class="animated fadeInRightBig">Daily Bible Messages</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#subscribe">Subscribe</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

     

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">
            <h1>LionelMinistries</h1>

          </a>

        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right"> 
           
                    
                                    
            <li class="scroll active"><a href="#home">Home</a></li>   
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
 <section>

 <div class="container " id="subscribe">

 <div class="row">
 <div id="subs_msg"></div>
 <form method="post" action="subscribe.php">

 
<input type="email" style="border-color:blue;" name="email" class="form-control" placeholder="Email Address" required="required">

 <div class="">
<input type="submit" name="subscribe" id="subs" class="btn-submit" value="Subscribe">
</div>
</form>

</div>
</div>
 </section>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/subscribe.j"></script>

</body>
</html>