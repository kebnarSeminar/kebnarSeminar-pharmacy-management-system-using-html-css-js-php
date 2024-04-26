<?php
include("connection.php");
if(isset($_POST["btn"])){
$medicinename=$_POST["medicinename"];
$packing=$_POST["packing"];
$generiname=$_POST["genericname"];
$suppliername=$_POST["suppliername"];
if($medicinename !="" && $packing !="" && $generiname !="" && $suppliername  !="" ){
$query="INSERT INTO `medicine`(`medicine_name`, `packing`, `generic_name`, `supplier_name`) VALUES ('$medicinename','$packing','$generiname','$suppliername')";
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
    echo '<script>alert("empty field exist");</script>';
    include("addmedicine.html");
}

}
else if(isset($_POST["backbtn"])){
    include("sidenav.html");
    
    }

?>