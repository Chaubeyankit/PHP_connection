<?php
//Database connection
$servername = "localhost";
$database="contact"; //name of the database
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername,$username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  if(isset($_POST['submit']))
  {
         $fname=$_POST['firstname'];        //(name) given in html
         $lname=$_POST['lastname'];
         $gender=$_POST['gender'];
         $country=$_POST['country'];
         $emailaddress=$_POST['Email_Address'];
         $phone=$_POST['Mobile_No'];
         $subject=$_POST['subject'];
                                                        //table name of database
         $qer="Insert into `contact_us`(`firstname`,`lastname`,`gender`,`country`,`Email_Address`,`mobile_no`,`Subject`) values ('$fname','$lname','$gender','$country','$emailaddress','$phone','$subject')";
         $in=mysqli_query($conn,$qer);
         if($in)
         {
           echo "data Insert Successfuly..";
         }
  }
}

?>