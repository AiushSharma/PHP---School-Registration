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
    <legend align="center">Student Details</legend>
    
   <p>   <input type="text" class="name" placeholder="Name" name="Name"></p> <br><br>
   <p> <input type="text" class="name" placeholder="Class" name="Class" ></p><br><br> 
   <p>  <input type="text" class="name" placeholder="Section" name="Section"></p><br><br> 
   <p>  <input type="text" class="name" placeholder="Roll no" name="Rollno"></p><br><br> 
   <p><input type="text" class="name" placeholder="Percentage" name="Percentage"></p><br><br> 

   <p>   <input type="text" class="name" placeholder="remarks" name="Remarks"></p><br><br> 
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
