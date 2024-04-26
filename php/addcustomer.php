

<?php
include("connection.php");
if(isset($_POST["btn"])){
$customername=$_POST["customername"];
$contactnumber=$_POST["contactnumber"];
$address=$_POST["address"];
$doctorname=$_POST["doctorname"];
$doctoraddress=$_POST["doctoraddress"];
$regex2="^[0]{1}[9]{1}[0-9]{8}$^";
if($customername !="" && $contactnumber !="" && $address !="" && $doctorname  !="" && $doctoraddress  !="" ){
    if(preg_match($regex2,$contactnumber) ){
$query="INSERT INTO `customer`(`customer_name`, `contact_number`, `address`, `doctor_name`, `doctor_address`) VALUES ('$customername','$contactnumber','$address','$doctorname','$doctoraddress')";
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
    include("addcustomer.html");
}

}
else{
    echo '<script>alert("empty field exist");</script>';
    include("addcustomer.html");
}
}
else if(isset($_POST["backbtn"])){
include("sidenav.html");

}
?>