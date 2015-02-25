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
           //Read in the entire file.
           //Each order becomes an element in the array
           $orders=file("$DOCUMENT_ROOT/bob/orders/orders.txt");


           // count the number of orders om the array
            $number_of_orders=count($orders);

        if ($number_of_orders==0) {
                echo "<p><strong>No orders pending.
                      please try again later.</strong></p>";
        }
                echo "<table border=\"1\">\n";
                echo "<tr><th bgcolor=\"#ccccff\">Order Date</th>
                          <th bgcolor=\"#ccccff\">Tires</th>
                          <th bgcolor=\"#ccccff\">Oil</th>
                          <th bgcolor=\"#ccccff\">Spark Plugs</th>
                          <th bgcolor=\"#ccccff\">Total</th>
                          <th bgcolor=\"#ccccff\">Address</th>
                      </tr>";
        for ($i=0; $i<$number_of_orders; $i++) {
                 //split up each line
                 $line=explode("\t", $orders[$i]);

                 // keep only the number of items ordered
                 $line[1]=intval($line[1]);
                 $line[2]=intval($line[2]);
                 $line[3]=intval($line[3]);

                 // output each order
                 echo "<tr>
                         <td>".$line[0]."</td>
                         <td align=\"right>\">".$line[1]."</td>
                         <td align=\"right>\">".$line[2]."</td>
                         <td align=\"right>\">".$line[3]."</td>
                         <td align=\"right>\">".$line[4]."</td>
                         <td>".$line[5]."</td>
                        </tr>";
        }
             echo "</table>";
       ?>
    </body>
</html>
