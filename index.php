<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Style.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>
            Html
        </title>
        <style>
            input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
        </style>
    </head>
    <body>
       <div class="main">

            <nav class="navbar">
                <img class="logo" src="flow12.jpg">
                <ul>
                    <li class="item"> <a href="#home">Home</a></li>
                    <li class="item"> <a href="#about">About</a></li>
                    <li class="item"> <a href="#contact">Contactus</a></li>
                </ul>
            </nav>
            <div class="content" style="margin-left:20%";>
                <h1><b>Make Your Special Day</b></h1><br>
                <p>Whatever the occation,our flowers will make it special.<br>
                    Where flowers are our inspiration to create lasting memories.
                </p>
                <button class="button1"><a href="welcome.php">WELCOME</a></button>    
            </div>
        </div>
        <section id="about"  style="text-align:center;background-color:	lightpink;height:70vh;">
            <h1 style="font-family:cursive;padding-top:5px;">About</h1><hr>
            <p style="font-size:1.5rem;padding:5px 5px;"><p>A flower bouquet is a collection of flowers in a creative arrangement. Flower bouquets can be arranged for the decor of homes or public buildings, or may be handheld. Handheld bouquets are classified by several different popular shapes and styles, including nosegay, crescent, and cascading bouquets. Flower bouquets are often given for special occasions such as birthdays, anniversaries or funerals. They are also used extensively in weddings as well as Olympics Medal Ceremonies. Bouquets arranged in vases or planters for home decor can be arranged in either traditional or modern styles. Symbolism may be attached to the types of flowers used, according to the culture.</p>
        </section>
        <section id="contact">
        <div style=" border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;">
  <form action="">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="lname">Phone Number</label>
    <input type="text" id="lname" name="lastname" placeholder="Your phone no..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="india">India</option>
      <option value="america">America</option>
    </select>
  
    <input type="submit" value="Contact US">
  </form>
</div>
        </section>
      </body>
</html>




