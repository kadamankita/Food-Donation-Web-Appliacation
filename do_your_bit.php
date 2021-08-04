 <!DOCTYPE html>
<html lang="en">
<head>
  <title>home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css\style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>

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
           SignUp/Login
          </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="register.php">SignUp</a>
              <a class="dropdown-item" href="login.php">Login</a>
            </div>
      </div>
      
    </ul>
  
  </div>

</nav>

 <div id="section2" class="container-fluid bg-info" style="padding-top:70px;padding-bottom:70px">
    
     <div class="text-white">

</div><br>
<h4 style="padding-left:  80px;padding-right: 80px">
   <div class="float-left" >“I have seen that hunger</div><br>
    <div class="float-left">can drive people to extremes</div><br>
    <div class="float-left">and even get into unlawful</div><br>
    <div class="float-left">activities. If we take care </div><br>
    <img src="images/i33.jpg" class="float-right"  width="550" height="500"> 
    <div class="float-left"> of their basic necessity of</div><br>
    <div class="float-left"> a wholesome meal, we may</div><br>
    <div class="float-left"> just give them a chance to </div><br>
    <div class="float-left"> shape a better future for</div><br>
    <div class="float-left"> themselves.”</div><br></h4>
    <h3 style="padding-left:  80px;padding-right: 80px">
    <div class="float-left"><b>Mr. D Sivanandhan</b></div><br></h3>
    <h5 style="padding-left:  80px;padding-right: 80px">
    <div class="float-left"> Former Police Commissioner Mumbai </div><br>
   </h5><br>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="container">
<h2 class="text-center text-secondary"><strong>
Note:</strong><br></h2>
<h5>
  <br>
  <div class="text-center">
– Please make sure the food can feed at least 20 people.</div><br>
  <div class="text-center">
– We need to be notified at least one day in advance.</div><br>
   <div class="text-center">
– The meal should be a healthy one, suitable for children and adults.</div><br>
  <div class="text-center">
– Our helplines operate between 10 am to 9:30 pm.</div><br>
<div class="text-center">
– Unfortunately we do not collect food that has been stored overnight due to food safety concerns</div><br>
</h5>
</div>

<section class="my-5" >
  <div class="py-5">
    <h2 class="text-center"><b>Do your bit.
Let’s end hunger and wastage.</b></h>
  </div>

  <div class="bg-secondary">
    <div class="w-50 m-auto">
    <form action="donationinfo.php" method="POST" >
      <div class="form-group">
        <label>Full Name</label>
        <input type="text"  class="form-control" name="name" >
      </div>

      

      <div class="form-group">
        <label>Email</label>
        <input type="email"  class="form-control" name="email" required>
      </div>


       <div class="form-group">
        <label>Phone number</label>
        <input type="Phone" class="form-control" name="phone" required >
      </div>

      

       <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" name="address" required>
      </div> 

      <div class="form-group">
        <label>Is Food Raw or Cooked??</label>
        <textarea class="form-control" name="que1" rows="2" required autocomplete="off"></textarea>
      </div>


       <div class="form-group">
        <label>How much food you want to donate??(Please mention the name and quantity)</label>
        <textarea class="form-control" name="que2" rows="4" required autocomplete="off"></textarea> 
      </div>

      <div>
        <button name="submit" class="btn btn-success">Sumbit</button>
      </div><br></br>
   

       <p>You'll get response within 10-20 minutes</p>

  


    </form>
  </div>
  </setion>

<div class="container">
  <img src="images/i34.jpg">
</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




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