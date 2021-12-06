<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

    <form action="show.php" method="post">
      <button type="submit" name="views">View registerdetails</button><br><br>
     </form>
 <?php
   include_once('view.php');
   if(isset($_POST['views'])){
     
    $userobj = new Dbaction();
    $userobj->getAlldata(); 
  
 
 }
 
   ?>
     
</body>
</html>