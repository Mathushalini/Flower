<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>.box{
    float: left;
    display: block;
    flex-direction: column;
    border: 2px solid brown;
    padding: 34px;
    margin: 2px 55px;
    border-radius: 28px;
    background: aqua;
    margin-bottom: 20px;
    height: 300px;
    width: 200px;
    background-image: linear-gradient( rgba(148, 112, 112, 0.6), rgba(78, 75, 122, 0.7)),
    url(flow13.jpg);
}
.box img{
    height: 100px;
    width: 100px;
    margin: auto;
    display: block;
}
.box img p{
    font-family:"Bree Serief",serif;
}
body{
    background:url("flow5.jpg");
}
button{
    background-color:	indianred;
    width:170px;
    border-radius:5px ;
}
</style>
</head>
<body>
    <h1 align="center">PICK YOUR BOUQUET</h1><hr>
        <div class="box">
            <h2 align="center">Birthday occations</h2>
                <img src="birthday/flow1.jpg"alt="flower">
            <p><b> Birthday with flower bouquet makes happiness</p>
            <button type="submit"><a href="birthday.php">Click</a></button>
        </div>

<div class="box"> 
<h2 align="center">Wedding occations</h2>
    <img src="wedding/flow2.jpg"alt="flower">
   <p> Wedding never designs without flower bouquet</p>
   <button type="submit"><a href="wedding.php">Click</a></button></div>

<div class="box">
     <h2 align="center">Other occations</h2>
    <img src="other/flow5.jpg"alt="flower">
   <p> Flower bouquet makes special  in occations</p>
   <button type="submit"><a href="other.php">Click</a></button></div>
</body>
</html>