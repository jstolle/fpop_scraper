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
      <?=$user ?>'s Freedompop Usage Stats
    </title>
  </head>

  <body>
      <h2>Freedompop usage for <?=$user ?></h2>
      <p>
        Days Left: <?=$details->days_left ?>
      </p>
      <p>
        Data Used: <?=$details->data_usage ?>
      </p>
      <p>
        Total Data Available: <?=$details->total_data ?>
      </p>
  </body>
</html>
