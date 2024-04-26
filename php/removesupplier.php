<?php
include("connection.php");
if(isset($_POST["removebtn"])){
$supplier=$_POST["search"];
if($supplier !=""){
$query="DELETE FROM `supplier` WHERE supplier_name='$supplier'";
$execute=mysqli_query($con,$query);
if($execute){
include("managesupplier.php");
}
else{
    echo'<script>alert("error occured");</script>';
    include("managesupplier.php");
}
}
else{
    echo '<script>alert("empty search is not allowed");</script>';
    include("managesupplier.php");
}
}
else if(isset($_POST["addbtn"])){
include("addsupplier.html");

}

?>