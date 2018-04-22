<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" href="http://mrothbauer.centralus.cloudapp.azure.com/Module_3/Project/styles.css">
  <!-- <link rel="stylesheet" href="C:\Users\micha\Desktop\School\Mobile Web Application Development\COP1801_Javascript\Module_2\Project\styles.css"> -->
  <title>Michael JR Photography</title>
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <div class="col-8 col-sm-9">
        <img class="header-logo" src="http://mrothbauer.centralus.cloudapp.azure.com//Module_2/Project/Logo.png" alt=""/>
      </div>
      <div class="col-4 col-sm-3">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="http://mrothbauer.centralus.cloudapp.azure.com/Module_3/Project/index.html">Portfolio <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">About</a>
          <a class="nav-item nav-link active" href="http://mrothbauer.centralus.cloudapp.azure.com/Module_3/Project/contact.php">Contact</a>
          <a class="nav-item nav-link" href="#">Pricing</a>
        </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- Contact Info -->
  <div id="contact">
    <div class="contact row">
      <div class="container">
        <div class="col-sm-12">
            <?php
            include 'config.php';

            $sql= "SELECT fname, lname, email, phone FROM employees LIMIT 10";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                echo "First Name: " . $row["fname"] . "<br>";
                echo "Last Name: " . $row["lname"] . "<br>";
                echo "Email Address: " . $row["email"] . "<br>";
                echo "Phone Number: " . $row["phone"] . "<br><hr>";
              }
            } else {
                echo "0 results";
            }

            mysqli_close($conn);
            ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="row">
    <div class="container">
      <div class="footer">
        <div class="col-12">
          <p>
          &copyCopyright: Michael Rothbauer
          </p>
        </div>
      </div>
    </div>
  </div>



</body>
</html>
