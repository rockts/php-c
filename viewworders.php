<?php
//create short variable name
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
<html>
    <head>
        <title>Bob's Auto Parts - Customer Orders</title>
    </head>
    <body>
        <h1>Bob 's Auto Parts</h1>
        <h2>Customer Orders</h2>
        <?php
           @$fp = fopen("$DOCUMENT_ROOT/orders/orders.txt", 'rb');
            flock($fp, LOCK_SH); // lock file for reading
            // read from the file
           if (!$fp) {
               echo "<p><strong>No orders pending.
                     please try again later.</strong></p>";
               exit;
           }
          while (!feof($fp)) {
              $orders= fgets($fp, 999);
              echo $orders."<br />";
          }
            flock($fp, LOCK_UN); // release read lock
            fclose($fp);
       ?>
    </body>
</html>
