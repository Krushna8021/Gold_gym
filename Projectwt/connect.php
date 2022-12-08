<?php
    $fname = $_REQUEST['fname'];
    $rollno = $_REQUEST['rollno'];
    $lname = $_REQUEST['lname'];
    $mname = $_REQUEST['mname'];
    $prnno = $_REQUEST['prnno'];
    $seatno = $_REQUEST['seatno'];
    $email = $_REQUEST['email'];
    $mobailno = $_REQUEST['mobailno'];
    $address = $_REQUEST['address'];

    $conn =mysqli_connect('localhost','root','','project');
    if(!$conn){
         echo "connection failed due to some reason ".mysqli_connect_error();
    } else 
         echo "connction successfull";

    $cmm="INSERT INTO projectform values('$fname','$rollno','$lname','$mname','$prnno','$seatno','$email','$mobailno','$address')";
    if(mysqli_query($conn,$cmm)){
         echo"data stored successfully";
    }
    else
       echo"error occouredd check the query again".mysqli_error($conn);

    mysqli_close($conn);

?>