<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>ADMIN</title>

    <script src="signup.js">
    </script>

    <link rel="stylesheet" type="text/css" href="signup.css">
</head>

<body>
    <?php
include("connection.php");
if(isset($_POST["loginBtn"])){
$username=$_POST["username"];
$password=$_POST["password"];
$query="SELECT `user_name`, `password` FROM `admin`";
$execute=mysqli_query($con,$query);
while($num=mysqli_fetch_array($execute)){
if($username==$num[0] && $password==$num[1]){
echo'<script>window.location="sidenav.html";</script>';
}
else{

    echo '<script>alert("incorrect username or password")</script>';
    echo'<script>window.location="homepage.html";</script>';
}
}
}
else if(isset($_POST["registerbtn"])){
    echo'<script>window.location="homepage.html";</script>';

}
?>
    <form action="" method="post">
        <div class="cont1">
            <img src="prof.jpg" id="imgprof">
            <h1>ADMIN</h1>
            <div class="fname">
                <span>  <label for="fname"><h2>First<span>Name<input type="text" placeholder="firstname" id="fname" name="username"></span></h2>
                </label>
                </span>
            </div>
            <div class="password">
                <label for="pass"><h2>Password<span> <input type="password" placeholder="enteryourPassword" id="pass" name="password"></span></h2></label>
            </div>
            <div class="btn">
                <button class="loginbtn" name="loginBtn"><b>LOGIN</b></button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button class="registerbtn" name="registerbtn"><b>TRY LATER</b></button>
            </div>
        </div>
</body>
<script src="jquery.js"></script>
<script src="jqueryui.js"></script>
<script>
    $(document).ready(function() {
       

    });
</script>

</html>