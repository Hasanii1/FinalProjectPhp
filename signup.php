<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>




<style>
   
  body {
   background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .card {
    border: none;
    border-radius: 10px;
    padding: 1.5rem;
  }

  .card-title {
    font-size: 1.8rem;
    font-weight: 600;
    color: #343a40;
  }

  .form-label {
    font-weight: 500;
  }

  .form-control {
    border-radius: 8px;
    box-shadow: none;
    border: 1px solid #ced4da;
  }

  .form-control:focus {
    border-color:#6a11cb;
    box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
  }

  .btn-primary {
    background-color: #6a11cb;
    border-color: #6a11cb;
    border-radius: 8px;
    font-weight: 600;
    transition: background-color 0.3s ease;
  }

  .btn-primary:hover {
    background-color: #6a11cb;
    border-color:#6a11cb;
  }

  .text-center a {
    color:#6a11cb;
    text-decoration: none;
  }

  .text-center a:hover {
    text-decoration: underline;
  }


</style>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
      <div class="card shadow-sm">
        <div class="card-body">
          <h3 class="card-title text-center mb-4">Sign Up</h3>
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"  required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name="email"  placeholder="Enter your email"  required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password"  placeholder="Enter password"  required>
            </div>
            <div class="mb-3">
              <label for="confirmPassword" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"  placeholder="Confirm password" required>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Sign Up</button>
            </div>
          </form>
          <p class="text-center mt-3 mb-0">Already have an account? <a href="login.php">Login</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
