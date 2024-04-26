<?php
include("connection.php");
if(isset($_POST["removebtn"])){
$customer=$_POST["search"];
if($customer !=""){
$query="DELETE FROM `customer` WHERE customer_name='$customer'";
$execute=mysqli_query($con,$query);
if($execute){
include("manageCustomer.php");
}
else{
    echo'<script>alert("error occured");</script>';
    include("manageCustomer.php");
}
}
else{
    echo '<script>alert("empty search is not allowed");</script>';
    include("manageCustomer.php");
}
}
else if(isset($_POST["addbtn"])){
include("addcustomer.html");

}

?>