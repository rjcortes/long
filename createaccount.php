<?php

include_once 'pdoConnect.php';

  $uname = $_REQUEST['email'];
  $password = $_REQUEST['password'];
  $fname = $_REQUEST['fname'];
  $lname = $_REQUEST['lname'];
  $birthday = $_REQUEST['birthday'];
  $num = $_REQUEST['phone'];
  $gender = $_REQUEST['gender'];

$sql = 'INSERT INTO accounts (`email`, `password`, `fname`, `lname`, `birthday`, `gender`, `phone`) VALUES ("'.$uname.'", "'.$password.'", "'.$fname.'", "'.$lname.'", "'.$birthday.'", "'.$gender.'", "'.$num.'")';

$result = runQuery($sql);

// $params = array(  
//       ":email" => $_REQUEST['email'],
//       ":fname" => $_REQUEST['fname'],
//       ":lname" => $_REQUEST['lname'],
//       ":phone" => $_REQUEST['phone'],
//       ":birthday" => $_REQUEST['birthday'],
//       ":birthday" => $_REQUEST['birthday'],
//       ":password" => $_REQUEST['password']
// );

// $results = prepareAndExecute('INSERT INTO accounts (email, fname, lname, phone, birthday, gender, password)
//               VALUES (:email, :password, :fname, :lname, :phone, :birthday, :gender)', $params);

// if ($results == NULL || !is_numeric($results)) {
//   header('HTTO/1.1 500 Internal Server Error');
//   exit("ERROR: There was an error writing to the database.");
// }

//echo $results

?>







<?php include 'view/header.php'; ?>

<html>
<body>

<!-- Container (About Section) -->
<div id="about" class="container-fluid" style="color:black">
  <div class="row">
    <div class="col-sm-8">
      <h2>Congratulations!</h2><br>
      <h4>Your account has been created. Login to access your task list.</h4>
      <br>
      <form method="post" action="index.php" name="loginform" id="loginform">
        <input type="submit" name="login" value="Login" class="btn btn-default">
      </form>
    </div>
  </div>
</div>


<script>
  $(document).ready(function(){
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function(){
     
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
    
    $(window).scroll(function() {
      $(".slideanim").each(function(){
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
            $(this).addClass("slide");
          }
      });
    });
  })
</script>


<?php include 'view/footer.php'; ?>