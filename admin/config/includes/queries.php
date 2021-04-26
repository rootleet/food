<?php
    //    This file containes all queries
    if (isset($_SESSION['display']))
    {
        if ($_SESSION['display'] === 'dashboard')
        {
            ## Dashboard queries

            //get sum of total paid today


            if (sum("payment" , "amount_paid" , "`date_paid` = '$today'" , $route) > 0)
            {
                $totalPayment = '$'.sum("payment" , "amount_paid" , "`date_paid` = '$today'" , $route);
            }
            else
            {
                $totalPayment = '$ 0.00';
            }
            //total order
            if (qRowCount('food_order' , "`date_placed` = '$today'" , $route) > 0)
            {
                $totalOrder = qRowCount('food_order' , "`date_placed` = '$today'" , $route);
            }
            else
            {
                $totalOrder = 0;
            }

            //get delivered
            if (qRowCount('food_order' , "`stat` = 'delivered'" , $route) > 0)
            {
                $delivered = qRowCount('food_order' , "`stat` = 'delivered'" , $route);
            }
            else
            {
                $delivered = 0;
            }


        }

        elseif ($_SESSION['display'] === 'menu_master')
        {
            $sub = $_SESSION['sub'];

            if ($sub === 'category')
            {
                $count = qRowCount("food_category" , "none" , $route);
            }
            elseif ($sub === 'menu_item')
            {
                $count = qRowCount("menu_items" , "none" , $route);
            }
        }
    }