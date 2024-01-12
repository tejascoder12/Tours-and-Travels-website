<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TSSB Tourism</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;400&display=swap" rel="stylesheet">
  <style>
    /* Custom CSS for the background image */
    body {
      background: url('images/R.jpeg') no-repeat center center fixed;
      background-size: cover;
      color: #fff;
      position: relative;
      height: 100vh;
    }
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .card {
      background-color: rgba(255, 255, 255, 0.9);
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .form-container {
      max-width: 500px; /* Increased form width to 500px */
    }
    .card-header {
      background-color: #007bff;
      color: #fff;
      text-align: center;
      border: none;
      border-radius: 15px 15px 0 0;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-control {
      border: 1px solid #ccc;
      border-radius: 15px;
      padding: 15px;
    }
    .form-control:focus {
      border-color: #007bff;
    }
    .btn-success {
      background: linear-gradient(45deg, #4CAF50, #007bff);
      border: none;
      color: #fff;
      border-radius: 15px;
      padding: 15px;
      width: 100%;
      cursor: pointer;
    }
    .btn-success:hover {
      background: linear-gradient(45deg, #007bff, #4CAF50);
    }
  </style>
</head>
<body>
  <?php include 'navbar.php'; ?>

  <div class="jumbotron">
  </div>

  <section class="my-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
        </div>
      </div>
    </div>
  </section>

  <div class="container">
    <div class="form-container">
      <div class="card p-4 shadow">
        <h3 class="card-header">Contact Us</h3>
        <form action="userinfo.php" method="post" class="my-3">
          <div class="form-group">
            <input type="text" name="user" id="user" class="form-control" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="tel" name="mobile" id="mobile" class="form-control" placeholder="Mobile Number">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="comments" id="comments" rows="4" placeholder="Any comments"></textarea>
          </div>
          <button type="submit" class="btn btn-success btn-lg" id="sub">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <footer>
    <p class="p-3 bg-dark text-white text-center">
      @MadebyTejasHedau BE-A
    </p>
  </footer>
</body>
</html>
