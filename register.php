<?php 

include 'userinfo.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				header("Location: login.php");
			}
			 else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  

	<title>home page</title>
</head>

<body>
	 


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

 
 <a class="navbar-brand" href="welcome.php">
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
   


	<section class="my-5">
		 <div class="register-inner">
	<div class="py-5">
		<h3 class="text-center">SignUp</h3>
	</div>

	 <div>

		<div class="w-50 m-auto">
		<form action="" method="POST" class="login-email">
			<div class="form-group">
				<label>Full Name</label>
				<input type="text" placeholder="Full Name" class="form-control" name="username" value="<?php echo $username; ?>" required>
			</div>

			<div class="form-group">
				<label>Email</label>
				<input type="email" placeholder="Email" class="form-control" name="email" value="<?php echo $email; ?>" required>
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="password" placeholder="Password" class="form-control" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>

			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" placeholder="Confirm Password" class="form-control" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
				<br></br>

			<div>
				<button name="submit" class="btn btn-success">Register</button>
			</div>
				<br></br>

			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>



		</div>
		</form>
	</div>
	</div>
	</div>
	</setion>

	<br></br>


  

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