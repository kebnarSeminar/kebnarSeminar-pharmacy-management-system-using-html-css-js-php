<?php
include("connection.php");
if(isset($_POST["removebtn"])){
$medicine=$_POST["search"];
if($medicine !=""){
$query="DELETE FROM `medicine` WHERE medicine_name='$medicine'";
$execute=mysqli_query($con,$query);
if($execute){
include("managemedicine.php");
}
else{
    echo'<script>alert("error occured");</script>';
    include("managemedicine.php");
}
}
else{
    echo '<script>alert("empty search is not allowed");</script>';
    include("managemedicine.php");
}
}
else if(isset($_POST["addbtn"])){
include("addmedicine.html");

}

?>