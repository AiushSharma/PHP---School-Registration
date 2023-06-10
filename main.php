<?php
$insert=false;


$server="localhost";
$username="root";
$password="";
$connection=mysqli_connect($server,$username,$password);
if(!$connection){
die("connection to the database failed due to ".mysqli_connect_error());
}

$Name=$_POST['Name'];
$Class=$_POST['Class'];
$Section=$_POST['Section'];
$Rollno=$_POST['Rollno'];
$Percentage=$_POST['Percentage'];
$Remarks=$_POST['Remarks'];
$sql="INSERT INTO `APS` . `APS_DATABASE` ( `Name`, `Class`, `Section`, `Rollno`, `Percentage`, `Remarks`, `DT`) VALUES ( '$Name', '$Class', '$Section', '$Rollno', '$Percentage', '$Remarks', current_timestamp());";

if($connection->query($sql) == true){


    // Flag for successful insertion 
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $connection->error";
}
$connection -> close();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>School DB</title>
    <link rel="shortcut icon" href="./nepal.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <nav>
        <div class="logo"><img src="./nepal.png" id="img" alt="" width="50px"></div>
        <div class="menu"><ul class="items">
            <li>Home</li>
            <li>Services</li>
            <li>Contact</li>
            <li>Help</li>
        </ul></div>
        </nav>
    </header>
  
  <section class="middle">
    <div class="trip-info">
    <form action="main.php" method="post">
    <fieldset>
    <?php
    if($insert==true){
    echo "<p id='po'>Updated data Successfully!!</p>";}

   else{
    echo "<p id='pio'>Some Error Occured </p>";}
    ?>
    <legend align="center">Student Details</legend>

  
   <p>   <input type="text" class="name" placeholder="Name" name="Name" required></p> <br><br>
   <p> <input type="text" class="name" placeholder="Class" name="Class" required></p><br><br> 
   <p>  <input type="text" class="name" placeholder="Section" name="Section" required></p><br><br> 
   <p>  <input type="text" class="name" placeholder="Roll no" name="Rollno" required></p><br><br> 
   <p><input type="text" class="name" placeholder="Percentage" name="Percentage" required></p><br><br> 

   <p>   <input type="text" class="name" placeholder="remarks" name="Remarks" required></p><br><br> 
   <button type="submit">Submit</button>
   <button type="submit">Delete</button>
 
</fieldset>
</form>

    </div>

  </section>  
  


    </div>
    <footer>
        
    </footer>
    <script src="./script.js"></script>
  </body>
 
</html>
