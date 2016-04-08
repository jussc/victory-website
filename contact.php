<?php 
$showMessage = false;
$error = false;

  if(isset($_POST["address"]))
  {
    if(empty($_POST["name"]) || empty($_POST["subject"]) || empty($_POST["message"]))
    {
      $error = true;
    }
    else
    {
      $name = $_POST["name"];
      $subject = $_POST["subject"];
      $address = $_POST["address"];
      $message = $_POST["message"];

      $recipient = "jusschoi@gmail.com";

      $mailBody = "This mail is from $address \n $message";

      mail($recipient, $subject, $mailBody);

      $showMessage = true;
    }
  }

?>

<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Victory Counseling</title>

    <link href='https://fonts.googleapis.com/css?family=PT+Sans|Karla:400,400italic,700|Amiri|PT+Serif:400,400italic' rel='stylesheet' type='text/css'>
    <link href="_css/bootstrap.min.css" rel="stylesheet">
    <link href="_css/styles.css" rel="stylesheet">
  </head>

  <body id="contact">

    <div id="container">

      <header>
        <div class="inner">
          <div id="logo">
            <a href="index.html"><img src="_img/logo_black.png" height="83px" width="295px"></a>
          </div>

          <nav class="menu">
            <ul id="nav">
              <li><a href="about.html">About</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="community.html">Community</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </nav>

          <div id="nav-trigger">
            <span>Menu</span>
          </div>

          <nav id="nav-mobile"></nav>
        </div>
<!--           <div id="feature">
            Find Clarity, Harmony, and Truth
          </div>
        </div> -->
      </header>

<!--       <div class="divider">
        <img src="_img/divider.jpg">
      </div> -->
      <div class="col-100">

       <h2>CONTACT US</h2>
      </div>


      <div class="col-33">

          <p>Our counselors are ready at your time of need. We are fully dedicated to confidentiality and we understand your need for privacy. 
          <br>
          <br>Please give us a call at 1-888-888-1234 to schedule a consultation. You can also reach us by filling out the form.
          </p>
          <br>
      </div>

      <div class="col-33">
        <div class="emailForm">
        <form action="contact.php" method="post">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" class="form-control" name="subject">
          </div>
          <div class="form-group">
            <label for="address">Email Address:</label>
            <input type="email" class="form-control" name="address"  placeholder="you@example.com">
          </div>
          <div class="input-group">
            <label for="message">Message:</label>
            <textarea class="fieldLarge" type="text" class="form-control" name="message"></textarea>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>

       </div>
       <?php 
        if($showMessage)
        {
          echo '<h3>Thank you for your email!</h3>';
        }
        if($error)
        {
          echo '<h3>Please fill out the required information.</h3>';
        }
      ?>
      </div>

      <div class="col-33">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.925781974925!2d-118.40816904926427!3d34.02011598051961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2ba31c9b97a53%3A0x8dbcd3cf250692e8!2s10525+Venice+Blvd%2C+Los+Angeles%2C+CA+90034!5e0!3m2!1sen!2sus!4v1458546628466" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-100">
        <img src="_img/contact1.jpg">
      </div>

      <footer>
        <div class="footer">
          <div class="footer-left">
            &copy; Victory Counseling 2016. All Rights Reserved.
          </div>

          <div class="footer-right">
            <a href="http://twitter.com/CounselingViews"><img src="_img/twitter_logo.png" width="28px" height="28px"> FOLLOW US</a>
          </div>
        </div>
      </footer>

    </div>

    <script src="_js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="_js/menu.js"></script>

  </body>
</html>