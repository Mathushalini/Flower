<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 25%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<form action="" method="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this register form </p>
    <hr>

    <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="Enter Your Name" name="Name" id="Name" required>

    <label for="number"><b>Telephone No</b></label>
    <input type="text" placeholder="Enter Your phone no" name="number" id="number" required>

    <label for="Address"><b>Enter Your Address</b></label>
    <input type="text" placeholder="Enter Your Address" name="address" id="address" required>

    <label for="Order Name"><b>Order Name</b></label>
    <input type="text" placeholder="Enter Your Order name" name="name" id="name" required>
    <hr>
  
    <button type="submit" class="registerbtn"name="submit">Register</button>
    <a href="show.php">Go To Buy page?</a><br><br>
    <?php
    //  include_once('dbconnection.php');
   
     if(isset($_POST["submit"])){

        $name = $_POST["Name"];
        $telephoneno = $_POST["number"];
        $address = $_POST["address"];
        $ordername= $_POST["name"];

         error_reporting(0);
         $connection=new mysqli('localhost','root','','flowershop');
         if($connection->connect_errno){
           echo $connection->connect_error;
           die();
         }
         else{
           $sql="INSERT INTO bouquet(names,telephoneno,addresses,ordername)VALUES('$name','$telephoneno','$address','$ordername')";
           if($connection->query($sql)){
             echo 'added succesfully ';
           }
           else{
             echo 'error';
           }
         }

     }
    
    ?>
  </div>
  

</form>
</body>
</html>