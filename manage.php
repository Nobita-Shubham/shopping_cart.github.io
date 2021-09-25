<?php
session_start();
// session_destroy();
    if(isset($_POST['add_to_cart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems = array_column($_SESSION['cart'], 'Item_Name');
            if(in_array($_POST['Item_Name'],$myitems))
            {
                echo "<script>
                            alert('Item Already Added');
                            window.location.href='index.php';
                    </script>";
            }
            else
            {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('Item_Name'=>$_POST['Item_Name'], 'Item_price'=>$_POST['Item_price'], 'Quantity'=>1);
                echo "<pre>";
                print_r($_SESSION['cart']);
                echo "<script>
                            alert('Item Added');
                            window.location.href='index.php';
                    </script>";
            }
        } 
        else 
        {
                $_SESSION['cart'][0] = array('Item_Name'=>$_POST['Item_Name'], 'Item_price'=>$_POST['Item_price'], 'Quantity'=>1);
                echo "<script>
                            alert('Item Added');
                            window.location.href='index.php';
                    </script>";
        }
    }

    if(isset($_POST['delete']))
    {
        foreach ($_SESSION['cart'] as $key => $value) 
        {
            if($value['Item_Name'] == $_POST['Item_Name']){
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo "<script>
                alert('Item Removed From Cart');
                window.location.href='mycart.php';
                </script>";
            }
        }
    }