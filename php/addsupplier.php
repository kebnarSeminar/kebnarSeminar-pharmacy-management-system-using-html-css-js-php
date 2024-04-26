<?php
include("connection.php");
if(isset($_POST["btn"])){
$suppliername=$_POST["suppliername"];
$email=$_POST["email"];
$phone=$_POST["contactnumber"];
$address=$_POST["address"];
$regex="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
$regex2="^[0]{1}[9]{1}[0-9]{8}$^";
if($suppliername !="" && $email !="" && $phone !="" && $address  !="" ){
    if((preg_match($regex,$email)) &&(preg_match($regex2,$phone)) ){
    $query="INSERT INTO `supplier`(`supplier_name`, `email`, `phone`, `address`) VALUES ('$suppliername','$email','$phone','$address')";
    $execute=mysqli_query($con,$query);
    if($execute){
    include("sidenav.html");
    }
    else{
    
    echo '<script>alert("error occurred")</script>';
    echo '<script>window.location="sidenav.html";</script>';
    }
    } 
    else{
        echo '<script>alert("invalid email address or phone number")</script>';
        include("addsupplier.html");
}
    

    }
else{
    echo '<script>alert("empty field exist");</script>';
    include("addsupplier.html");
}}

else if(isset($_POST["backbtn"])){
    include("sidenav.html");
    
    }

?>