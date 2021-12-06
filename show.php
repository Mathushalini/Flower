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
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float:right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
<form action="" method="POST">
  <div class="container">
    <h1>BUY A BOUQUET</h1>
   
    <hr>

    <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="Enter Your Name" name="Name" id="Name" >
    <label for="name"><b>Flower Name</b></label>
    <input type="text" placeholder="Enter Your flower name" name="fname" id="name" >

    <label for="flowerid"><b>Amount</b></label>
    <input type="text" placeholder="Enter Your amount " name="amount" id="name" >
    
    <label for="flowerid"><b>Quantity</b></label>
    <input type="text" placeholder="Enter Your flowerid " name="qua" id="name" >
    <hr>
  
    <button type="submit" class="registerbtn"name="submit">Buy</button><br><br>
   
 
    <?php
    //  include_once('dbconnection.php');
   
     if(isset($_POST["submit"])){                                                           

        $name = $_POST["Name"];
        $flowername = $_POST["fname"];
        $amount= $_POST["amount"];
        $Quantity= $_POST["qua"];

        if(Empty($name)||Empty($flowername)||Empty($amount)||Empty($Quantity)){
            echo "fill in all Fields";

        }else{
            $delevery=150;
           $total=0;
           $total=$amount*$Quantity+$delevery;

           echo"Name IS : .'$name'.<br>
                flower Name IS : .' $flowername'.<br>
                flower Amount IS : .' $amount'.<br>
                flower Quantity IS : .' $Quantity'.<br>
                flower Delivery Charge IS : .' $delevery'.<br>
                flower Total IS : .' $total'.<br><hr>
                
                THANK YOU COME AGAIN";
        }


     }
    
    
    ?>
   
  </div>
  

</form>
</body>
</html>