<?php
include("connection.php");
if(isset($_POST["removebtn"])){
$nm=$_POST["search"];
if($nm !=""){
$query="DELETE FROM `pharmadetails` WHERE PHARMANAME='$nm'";
$execute=mysqli_query($con,$query);
if($execute){
include("managepharmacy.php");
}
else{
    echo'<script>alert("error occured");</script>';
    echo '<script>window.location="sidenav.html";</script>';
}
}
else{
    echo '<script>alert("empty search is not allowed");</script>';
    include("managepharmacy.php");
}
}
else if(isset($_POST["addbtn"])){
include("RegisterandLogin.html");

}

?>