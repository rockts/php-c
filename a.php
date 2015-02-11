      if（$totalqty == 0）{
           echo "You did not order anything on the previous page!<br />";
        } else {
            if ($tireqty>0)
                echo $tireqty." tires<br />";
            if ($oilqty>0)
                echo $oilqty." bottles of oil<br />";
            if ($sparkqty>0)
                echo $sparkqty." spark plugs<br />";
                }
