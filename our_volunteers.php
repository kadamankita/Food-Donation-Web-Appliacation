 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Our volunteers</title>
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

<br><br>

<div class="container" >

<h3 class="text-info">
  <br>
  <div class="text-center">
"WE CAN'T HELP</div><br>
<div class="text-center">
EVERYONE, </div><br></h3>

<h1>
   <div class="text-center text-dark">
but...</div><br></h1>

 <h3 class="text-info"> <div class="text-center ">
EVERYONE </div><br>
<div class="text-center">
CAN HELP </div><br>
<div class="text-center">
SOMEONE." </div><br>
<div class="text-center">
-Dr. Loretta Scott </div></h3><br>

</div>

<section class="my-5">
  <div class="py-5">
    <h3 class="text-center">Fill The Form For Volunteering</h3>
  </div>

  <div class="bg-info">
    <div class="w-50 m-auto">
    <form action="volinfo.php" method="POST" >
      <div class="form-group">
        <label>Full Name</label>
        <input type="text"  class="form-control" name="name" >
      </div>

      

      <div class="form-group">
        <label>Email</label>
        <input type="email"  class="form-control" name="email" required>
      </div>

       <div class="form-group">
        <label>Age</label>
        <input type="text" class="form-control" name="age" required>
      </div>

       <div class="form-group">
        <label>Phone number</label>
        <input type="Phone" class="form-control" name="phone" required>
      </div>

      

       <div class="form-group">
        <label>Address</label>
        <textarea class="form-control" name="address"  rows="4" required></textarea>
      </div> 

      <div class="form-group">
        <label>Have You Ever Worked For The Charity before?</label>
       <textarea class="form-control" rows="7" name="que1" required autocomplete="off"></textarea>
      </div>

       <div class="form-group">
        <label>Why You Want To Become Volunteer Of Our Charity??</label>
        <textarea class="form-control" rows="7" name="que2" required autocomplete="off"></textarea>
      </div>

      <div>
        <button name="submit" class="btn btn-success">Sumbit</button>
      </div><br></br>
   

       <p>You'll get response on your mail after 2-3 days.</p>

  


    </form>
  </div>
</div>
  </setion>  
<div class="container">
  <img src="images/i22.jpg" width="900" class="mx-auto d-block">
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