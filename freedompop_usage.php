<!DOCTYPE html>
<html>
  <?php
    // Basic variables
    $user = "my";

    require('./FpopDetails.php');
    // Populate the constructor!!!!
    $details = new FpopDetails("me@mydomain.com", "my_password");
  ?>
  
  <head>
    <title>
      <?php $user ?>'s Freedompop Usage Stats
    </title>
  </head>

  <body>
    <h2>Freedompop usage for <?php $user ?></h2>
    <p>
      Days Left:
      <?php
        $details->days_left;
      ?>
    </p>
    <p>
      Data Used:
      <?php
        $details->data_used;
      ?>
    </p>
    <p>
      Total Data Available:
      <?php
        $details->total_data;
      ?>
    </p>
  </body>
</html>
