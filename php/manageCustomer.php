<!DOCTYPE html>
<html lan="en">
<head>
    <meta charset="utf-8">
    <title>Customer Details</title>
    <style>
       body{
        background-image: url("patient1.jfif");
       }
        .customergradient {
            background: linear-gradient(100deg, #200c32, #ff6b16, #68605e);
            background-size: 180% 180%;
            animation: gradient-animation 10s ease-in-out infinite;
        }
        
        @keyframes gradient-animation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        .save {  
  display: none;  
  background: #32AD60;  
  color: #ffffff;  
 
}  
.edit {  
  background: #2199e8;  
  color: #ffffff;  
  
}  
.delete {  
  background: #EC5840;  
  color: white;  
   
}  
        
    </style>
    </head>
    <body class="customergradient">
<div class="box-body table-responsive no-padding">
    <table class="table table-hover" border="5" bgcolor="blue" style="color:white;" contenteditable="true">
        <tr>
            <th>CustomerName</th>
            <th>PhoneNo</th>
            <th>CustomerAddress</th>
            <th>doctorName</th>
            <th>DoctorAddress</th>
        </tr>
       
            <?php
                  include("connection.php");
                  $query="SELECT * FROM `customer`";
                  $execute=mysqli_query($con,$query);
                   If(mysqli_num_rows($execute)>0)
                   {
                     while($row=mysqli_fetch_array($execute))
                     {  

                ?>
                <tr>
                <td  class="data">
                    <?php echo $row['customer_name']; ?>
                </td>
                <td  class="data">
                    <?php echo $row['contact_number']; ?>
                </td>
                <td  class="data">
                    <?php echo $row['address']; ?>
                </td>
                <td  class="data">
                    <?php echo $row['doctor_name']; ?>
                </td>
                <td  class="data">
                    <?php echo $row['doctor_address']; ?>
                </td>
                </tr>
                <?php

                }
                }
                 ?>

      
    </table><br><br>
<form action="removecustomer.php" method="post" style="color:white;font-weight:bolder">
  Search:<input type="search" name="search" placeholder="enter customer name to remove" style="width:300px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="removebtn" style="color:red">REMOVE</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="addbtn">ADD CUSTOMER</button>
</form>

</div>

    </body>
</html>