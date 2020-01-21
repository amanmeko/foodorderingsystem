<?php
include( 'connection.php' );
session_start();
$username = $_SESSION['deliveryid'];
$foodid = $_GET['orderid'];
 if ( mysqli_query( $con, "update tblorder set set_deliverer ='$username' where fld_order_id='$foodid'" ) )
            {
                header( 'refresh:3;url=deliverydash.php' );


            } 
        else {
die('Invalid query: ' . mysqli_error($con));
echo 'failed'; 
}


?>