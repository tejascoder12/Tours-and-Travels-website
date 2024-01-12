<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> TSSB Tourism </title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;400&display=swap" rel="stylesheet">
  
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TSSB Tourism</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="traveloffers.php">Travel offers</a>
        </li>
        <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
        <?php
        session_start();
        if (isset($_SESSION['user_id'])) {
          // User is logged in, show the "Logout" option
          echo '<li class="nav-item"><a class="nav-link" href="logout.php" >Logout</a></li>';
       
        } else {
          // User is not logged in, show the "Login" option
          echo '<li class="nav-item"><a class="nav-link" href="login.php" id="Login">Login</a></li>';
        }
        ?>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/home1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Hawaii</h3>
        <p>We had such a great time in Hawaii!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/home2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/home3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3> Philippines</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section = class="my-5">
	<div class="py-5">
		<h3 class="text-center">
			About us
		</h3>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/4.jpg" class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2 class="display-4">Love for travel</h2>
			<p class="py-3">
				 Travel gives us our greatest stories, our most cherished memories and countless irreplaceable learnings that we can choose to pay forward to others. It teaches us about ourselves and each other, it broadens our horizons and, just like a reset button, it forces us to refocus on what really matters.
				 <br>
         <br>
			<a href="about.php" class="btn btn-success"> Check More</a>
			
		</div>
	</div>
	</div>
</section>

<section  class="my-5" id="hovering">
	<div class="py-5">
		<h3 class="text-center">
			Our services
		</h3>
	</div>
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-lg-4 col-md-4 col-12">
    		<div class="card" >
  <img class="card-img-top" src="images/5.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Rajasthan</h4>
    <p class="card-text">A romantic dusty pink hue -- which has defined the city since 1876, after it was painted pink to welcome Queen Victoria's husband, Prince Albert.</p>
    <a href="#" class="btn btn-primary">Visit us</a>
  </div>
</div>	


    		</div>

    		<div class="col-lg-4 col-md-4 col-12">
    		<div class="card" >
  <img class="card-img-top" src="images/6.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Bali</h4>
    <p class="card-text">In Bali life is a rhythmic, patterned unreality of pleasant, significant movement, centered in one’s own body to which all emotions long ago withdrew.</p>
    <a href="#" class="btn btn-primary">Visit us</a>
  </div>
</div>	


    		</div>


<div class="col-lg-4 col-md-4 col-12">
    		<div class="card" >
  <img class="card-img-top" src="images/4.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Italy</h4>
    <p class="card-text">Traveling is the ruin of all happiness! There’s no looking at a building after seeing Italy,Open my heart and you will see, Graved inside of it, “Italy”</p>
    <a href="#" class="btn btn-primary">Visit us</a>
  </div>
</div>	


    		</div>


    	</div>

    </div>
    <section class="my-5">
    <div class="py-5">
        <h3 class="text-center">Our Gallery</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="gallery-item">
                    <img src="images/8.jpg" class="img-fluid pb-4" alt="Image 1">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="gallery-item">
                    <img src="images/9.jpg" class="img-fluid pb-4" alt="Image 2">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="gallery-item">
                    <img src="images/10.jpg" class="img-fluid pb-4" alt="Image 3">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="gallery-item">
                    <img src="images/11.jpg" class="img-fluid pb-4" alt="Image 4">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="gallery-item">
                    <img src="images/12.jpg" class="img-fluid pb-4" alt="Image 5">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="gallery-item">
                    <img src="images/13.jpg" class="img-fluid pb-4" alt="Image 6">
                </div>
            </div>
            <!-- Add more images here using the same structure -->
        </div>
    </div>
</section>



<section class="my-5 p-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card p-4 shadow">
                    <h3 class="text-center">Contact Us</h3>
                    <form action="userinfo.php" method="post" class="my-3">
                        <div class="form-group">
                            <label for="user">Username</label>
                            <input type="text" name="user" id="user" class="form-control" placeholder="Enter your username">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile Number</label>
                            <input type="tel" name="mobile" id="mobile" class="form-control" placeholder="Enter your mobile number">
                        </div>
                        <div class="form-group">
                            <label for="comments">Any comments</label>
                            <textarea class="form-control" name="comments" id="comments" rows="4" placeholder="Add your comments"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg btn-block mt-3" id="sub">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

  <footer>
    <p class="p-3 bg-dark text-white text-center">
      
    @MadebyTejasHedau BE-A

    </p>


  </footer>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script>alert("Welcome to our website\nGreeting from our Team");</script> -->

</body>
</html>