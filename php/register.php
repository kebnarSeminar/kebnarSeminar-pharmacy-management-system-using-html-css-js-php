<?php
if(isset($_POST["registerbtn"])){
$phName=$_POST["pharmaname"];
$address=$_POST["address"];
$email=$_POST["email"];
$phone=$_POST["contactnumber"];
$usernam=$_POST["username"];
$passwrd=$_POST["password"];
$confirmpassword=$_POST["confirmpassword"];
if($address !="" && $email !="" && $phone !="" && $usernam!="" && $passwrd !="" && $confirmpassword !=""){

    if($passwrd == $confirmpassword){

        include("connection.php");
        $query="SELECT `username` FROM `login` where username='$usernam'";
        $emailquery="SELECT  `EMAIL` FROM `pharmadetails` where `EMAIL`='$email'"; 
        $executeemail=mysqli_query($con,$emailquery);
        $execute=mysqli_query($con,$query);
        If((mysqli_num_rows($execute)==0) && (mysqli_num_rows($executeemail)==0)){
        $query1="INSERT INTO `pharmadetails`(`PHARMANAME`, `ADDRESS`, `EMAIL`, `CONTACT_NUMBER`, `USERNAME`, `PASSWORD`,
        `CONFIRM_PASSWORD`) VALUES ('$phName','$address','$email','$phone','$usernam','$passwrd','$confirmpassword')";
       $execute1=mysqli_query($con,$query1);
       $query2="INSERT INTO `login`(`username`, `password`) VALUES ('$usernam','$confirmpassword')";
       $execute2=mysqli_query($con,$query2);
       if($execute1 && $execute2){
           echo '<script>alert("registration successful")</script>';
           include("RegisterandLogin.html");
           }
           else{
               echo "error occured".mysqli_error($GLOBALS["$con"]);
           }
        }
           else{
            echo '<script>alert("your username or email already exist")</script>';
            echo '<script>window.location="RegisterandLogin.html"</script>';
    
        }
    }
    else{
        echo '<script>alert("password does not match")</script>';
        echo '<script>window.location="RegisterandLogin.html"</script>';
    }
}
else{
    
echo '<script>alert("there is unfilled box exist")</script>';
echo '<script>window.location="RegisterandLogin.html"</script>';
}

}







?>