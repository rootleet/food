<?php
    require '../includes/core.inc.php';
    if ($_SERVER['REQUEST_METHOD'] === "POST")
    {
        if (isset($_POST['save'])) //adding new
        {
            if ($sub === 'category')
            {
                $category = htmlentities($_POST['cat_description']);

                //check if row exist
                if (qRowCount("food_category" , "`description` = '$category'" , $route) < 1)
                {
                    //insert
                    if (insert("food_category" , "`description` , `owner`" , "'$category' , '$user'" , $route) === true)
                    {
                        notification("$category added successfully");
                        $_SESSION['view'] = 'view';
                        gb();
                    }
                    else
                    {
                        notification("Could not add category");
                        gb();
                    }
                }
                else
                {
                    notification("Category already exist");
                    gb();
                }
            }
            elseif($sub === 'menu_item')
            {
                echo 'adding menu item....';
            }
        }
    }
