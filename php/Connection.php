

<?php
$localhost="localhost";
$username="root";
$password="";
$dbname="pharmacy";
$con=mysqli_connect($localhost,$username,$password,$dbname);
if($con){
    echo "";
}
else{
    
die("connection error".mysqli_error($_GLOBALS['$con']));

}


?>
    