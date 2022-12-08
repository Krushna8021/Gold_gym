<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <style>
body{
    margin: 0px;
    padding: 0px;

}
div{

    top: 50px;
    left: 138px;
    position: absolute;
    padding: 10px;
    border: 2px solid white;
    background-color: #3423239e;
}
label{
    height: 0px;
    width: 70px;
    padding: 25px;
    color: white;
   display: inline-block;
}

#submit{
    position: relative;
    top: 6px;
    left: 124px;
    width: 73px;
}

input{
    width: 250px;
}

#select1{
    position: relative;
    width: 258px;
    height: 24px;
    left: -2px;
}

#registrationjpg{
    position: absolute;
    height: 755px;
    width: 100%;
}
#heding{
    color: white;
}
    </style>
</head>
<body>
<img src="registrationform.png" id="registrationjpg">
    <div>
        <form action="connect.php" method="post">
       <center>
          <h1 id="heding">Registration form</h1>

        </center>

            <label class="style1" id="a">Name</label>
            <input type="text" name="fname" class="css"><br>


            <label class="style1">gender</label>
            <input type="text" name="mname" class="css"><br>

            <label class="style1">weight</label>
            <input type="text" name="lname" class="css"><br>
           
            <label class="style1">course</label>

            <select id="select1" name="rollno">
			<option class="optionone">GET A FREE TRAINING SESSION</option>
			<option class="optionone">JOIN THE GYM</option>
			<option class="optionone">APPLY FOR JOB</option>
			<option class="optionone">INTEREESTED IN THE MONTHLY PROMO</option>
			<option class="optionone">WRITE US A TESTIMONIAL</option>
			<option class="optionone">ADVERTISE WITH US</option>
			<option class="optionone">CONTACT US</option>
			<option class="optionone">SUBSCRIBE TO OUR NEWSLETTER</option>
		 </select><br>

            <label class="style1">Payment</label>
            <input type="text" name="prnno" class="css"><br>
            
            <label class="style1">Batch</label>
            <input type="text" name="seatno" class="css"><br>
            
            <label class="style1">Email</label>
            <input type="text" name="email" class="css"><br>
            
            <label class="style1">Mobile No</label>
            <input type="text" name="mobailno" class="css"><br>

            <label class="style1">Address</label>
            <input type="text" name="address" class="css"><br>
            
            <input type="submit" value="submit" id="submit">

        </form>
    </div>





</body>
</html>