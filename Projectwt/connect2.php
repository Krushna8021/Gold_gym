<?php
    $get = $_REQUEST['get'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phoneno = $_REQUEST['phoneno'];
    $please = $_REQUEST['please'];
   
    $conn =mysqli_connect('localhost','root','','projectone');
    if(!$conn){
         echo "connection failed due to some reason ".mysqli_connect_error();
    } else 
         echo "connction successfull";

    $cmm="INSERT INTO projectoneone values('$get','$name','$email','$phoneno','$please')";
    if(mysqli_query($conn,$cmm)){
         echo"data stored successfully";
    }
    else
       echo"error occouredd check the query again".mysqli_error($conn);

    mysqli_close($conn);

?>