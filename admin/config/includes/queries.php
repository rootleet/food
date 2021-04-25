<?php
    //    This file containes all queries
    if (isset($_SESSION['display']))
    {
        if ($_SESSION['display'] === 'dashboard')
        {
            ## Dashboard queries

            //get sum of total paid today
            $totalPayment = sum("payment" , "amount_paid" , "`date_paid` = '$today'" , $route);
            //total order
            if (qRowCount('food_order' , "`date_placed` = $today" , $route) > 0)
            {
                $totalOrder = qRowCount('food_order' , "`date_placed` = $today" , $route);
            }
            else
            {
                $totalOrder = 0;
            }

        }
    }