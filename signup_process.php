<?php include 'view/header.php'; ?>


<html>
<body>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Account Information</h2><br>
      <h4>To access your account, please enter your username and password and then click on the "Login" button. If you have not registered, enter your information and click on the "Sign Up" button to create an account.</p>
      <br>
      


<div class="container">
  <h2>User Info</h2>
  <form method="post" action="createaccount.php">
    <div class="form-group">
      <label>Email:</label>
      <input type="text" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label>Password:</label>
      <input type="text" name="password" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label>First Name:</label>
      <input type="text" name="fname" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label>Last Name:</label>
      <input type="text" name="lname" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label>Phone Number:</label>
      <input type="text" name="phone" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label>Date of Birth:</label>
      <input type="text" name="birhtday" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <div class="form-group">
      <label>Gender:</label>
      <input type="text" name="gender" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <input type="submit" action="createaccount.php" value="Create Account" class="btn btn-default">
  </form>
</div><br>


<?php include 'view/footer.php'; ?>


