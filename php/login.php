<?php
include("connection.php");
if(isset($_POST["loginbtn"])){
$usernm=$_POST["username"];
$passwrd=$_POST["password"];
if($usernm !="" && $passwrd!=""){
$query="SELECT `username`, `password` FROM `login` where username='$usernm'";
$execute=mysqli_query($con,$query);
while($num=mysqli_fetch_array($execute)){
if($usernm==$num[0] && $passwrd==$num[1]){
include("homepage.html");
}


else if(!($usernm==$num[0] && $passwrd==$num[1])){
    echo '<script>alert("incorrect username or password")</script>';
    echo '<script>window.location="RegisterandLogin.html"</script>';
    
}
}
}
else{
    echo '<script>alert("empty field doesnot allowable")</script>';
    include("RegisterandLogin.html");
}

}

else if(isset($_POST["registerbtn"])){
include("RegisterandLogin.html");

}
if(isset($_POST["loginbtn2"])){

    include("sidenav.html");
}
?>