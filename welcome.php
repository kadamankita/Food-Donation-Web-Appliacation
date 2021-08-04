<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css\style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Welcome</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
   

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

 
 <a class="navbar-brand" href="index.php">
    <img src="images\img3.png" width="140" height="100" class="d-inline-block align-top" alt="">

  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item active">
        <a class="nav-link" href="about_us.php">    About Us <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active" >
        <a class="nav-link" href="do_your_bit.php">   Do Your Bit <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item active">
        <a class="nav-link" href="contact_us.php">Contact Us <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="our_volunteers.php">Our Volunteers <span class="sr-only">(current)</span></a>
      </li>

	  <li class="nav-item active">
        <a class="nav-link" href="donate.php">DONATE <span class="sr-only">(current)</span></a>
      </li>
	

      <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Logout
          </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
           <a class="dropdown-item" href="logout.php">Logout</a>
              <a class="dropdown-item" href="our_volunteers.php">Form for Volunteers</a>
            </div>
      </div>
      
    </ul>
  
  </div>

  </nav>

  

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>






</section>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/i5.png" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h1 ><b>200 million people</b></h1>
         <h1 > <b>go hungry everyday.</b></h1>
        <h4 >
While 1.8 million kg food is wasted daily.</h4><br></br><br></br><br></br>
      </div>   
    </div>
    </div>
  </section>


  


 



<section class="my-5">
  <div class="py-5">
    <h3 class="text-center"></h3>
  </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/i1.png" class="img-fluid ">
    </div>
    
    <div class="col-lg-6 col-md-6 col-12">
      <br></br>
      <h2 class="display-4.5" ><div class="text-primary"> What if the excess
food and empty
plates meet?</div></h2>
<h5 class="py-4">Tons of good cooked food is thrown in the dustbin every day when 1 million people including 75,000 children in Mumbai go to bed with and empty stomach</h5>
<a href="do_your_bit.php" class="btn btn-success">Book a meal</a>
<a href="donate.php" class="btn btn-success">Make a donation</a>

    </div>
  </div>
  </div>
  <br></br>


  <div class="jumbotron" >
  <h3 ><div class="text-primary"> Let’s end hunger
and wastage.
Let’s spread joy.</div></h3>
   <img src="images/im2.jpg" class="float-right">
  <p class="lead">India has a serious hunger problem and ranks 100th out of 119 countries on the global hunger index.
– International Food Policy Research Institute (IFPRI)
</p>
  <hr class="my-4"> 
</div>


   <div class="card bg-secondary text-white">
    <div class="card-body"></div>
  </div>
  <div class="card bg-secondary text-white">
    <div class="card-body"></div>
  </div>

  <br></br>

<section class="my-5">
  <div class="py-5">
    <h3 class="text-center"><div class="text-success">
   DO-NATION Impact</h3>
  </div>


  <div class="container-fluid">
    <div class="row">

      <div class="col-lg- col-md-4 col-12">
        <div class="card" >
           <img class="card-img-top" src="images/i4.jfif" alt="Card image">
             <di v class="card-body">
                  <h4 class="card-title">3000
Meals served so far</h4>
             </div>
         </div>

         <div class="col-lg- col-md-4 col-12">
        <div class="card" >
           <img class="card-img-top" src="images/i15.jpg" alt="Card image">
             <di v class="card-body">
                  <h4 class="card-title">700
Volunteer hours and counting</h4>
             </div>
         </div>

         <div class="col-lg- col-md-4 col-12">
        <div class="card" >
           <img class="card-img-top" src="images/i17.jpg" width="400" height="260" alt="Card image">
             <di v class="card-body">
                  <h4 class="card-title">1800
Meals to children served so far</h4>
             </div>
         </div>

      </div>
    
    </div>
  </div>
  <br><br><br><br>


   



  <div id="section2" class="container-fluid bg-warning" style="padding-top:70px;padding-bottom:70px">
    <img src="images/i6.jpg" class="float-left"  width="450" height="400"> 
     <div class="text-white">
    <h2><div class="float-sm-right">DO-NATION is a </div><br>
    <div class="float-md-right">non-profit, food rescue</div><br>
    <div class="float-lg-right">organisation that bridges </div><br>
    <div class="float-xl-right">the  gap between hunger</div><br>
    <div class="float-xl-right">and excess food  .</div><br></h2><br>
   <h2 class="text-right">75000 children in 1 million hungry people
</h2></div> 
</div>


<br><br>


<section class="my-5">
  <div class="py-5">
    <h1 class="text-center">Do Your Bit</h1>
  </div>

  <br><br>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/i11.png" class="img-fluid "  width="450" height="400" >
    </div>
    
    <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4.5" ><div class="text-info">Book a Meal</div></h2>
<h5 class="py-4">

You can help prevent someone from sleeping on an empty stomach. Please ffill the form or call us on our helpline number and let us know your convenient time for the pick up. We will be glad to send our dedicated vans to collect food from your location.</h5>

<h5 class="py-2">
Please make sure the food can feed at least 50 people. We need to be notified at least one day in advance. The meal should be a healthy one, suitable for children and adults.</h5>
<a href="do_your_bit.php" class="btn btn-outline-info">Book a meal</a>


    </div>
  </div>
  </div>

   <br><br>  <br><br>  <br><br>



<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/i13.png" class="img-fluid "  width="325" height="325" >
    </div>
    <br><br>
      <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4.5" ><div class="text-info">Make a Donation</div></h2>
<h5 class="py-4">
Is it your birthday, your loved one’s death anniversary or just one of the days you want to make better for someone else? No matter what the reason or even if there is none, your contribution matters. Just like every drop fills an ocean. It will help us reach out to more hungry people and make their day.</h5>
<a href="donate.php"class="btn btn-outline-info">Donate</a>
    </div>
  </div>
  </div>

   <br><br>  <br><br>    <br><br>


<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/i12.png" class="img-fluid "  width="325" height="325" >
    </div>
    
    <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4.5" ><div class="text-info">Volunteer</div></h2>
<h5 class="py-4">
They say that there’s nothing more precious than time that you can give. So if you like, do spare some time from your busy schedule and make our mission to eliminate hunger yours too.</h5>
<a href="our_volunteers.php" class="btn btn-outline-info">Volunterr now</a>
    </div>
  </div>
  </div>


   <br><br>  <br><br>  <br><br>


<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/i14.png" class="img-fluid "  width="325" height="325" >
    </div>
    
    <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4.5" ><div class="text-info">Spread the Word</div></h2>
<h5 class="py-4">
The problem of hunger is of a mind-boggling magnitude and we can do with as many helping hands as possible. If you let your friends, family, neighbours, Instagram, Facebook, Twitter, LinkedIn and WhatsApp groups know about our cause, it would enable us to tremendously expand our network of do-gooders and help fill more empty plates. You may do this by sharing our website link, helpline numbers and social media posts.</h5>
    </div>
  </div>
  </div>
</section>
  <br></br>




  
  <footer class="p-3 bg-dark text-white text-center">
    <div >
  <p >
    <div>@do-nation</div><br>
  <div>All donations are tax exempted as eligible under section 80G of the Income Tax Act, 1961.</div></p><br>
  <div>DO_NATION Food Bank is registered u/s 80 G of the Income Tax Act 1961 vide registration number Pan AADTR4438G.
</div></p><br>
  <div>The above contribution is approved by the Commissioner of Income Tax (exceptions) u/s 80 G of the Income Tax Act 1961 vide approval letter no. CIT (E) /80G/3103-B/2018-19 dated February 20, 2019.
</div></p><br>
  <div>Registered Office: D-703, Sainath Towers, Neelam Nagar, Phase -2, Mulund East, Mumbai 400081.
</div></p><br>
</div>
</footer>





</body>
</html>