<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Load Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Additional CSS if needed */
    /* .login-form { ... } */
    /* .form-control { ... } */
    /* .btn { ... } */
  </style>
</head>

<body>
  <?php
  include 'koneksi.php';
  ?>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="text-center">Login</h4>
          </div>
          <div class="card-body">
            <form class="login-form" method="POST" action="logikalogin.php">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
              </div>
              <button type="submit" class="btn btn-primary btn-block">Login</button>
              <a href="index.php" class="btn btn-secondary btn-block mt-2">Back to Menu</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Load JavaScript Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>