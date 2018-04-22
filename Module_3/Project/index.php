<html>
  <head>
    <title>PHP Test</title>
  </head>

  <body>
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
  </body>
</html>
