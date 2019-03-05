<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
              <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
                  <p>Name:</p> <input type="text" name="name"><br>
                  <p>Email:</p> <input type="text" name="email"><br>
<!--             <select name="cars">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
  </select> -->
                  <p>img:</p> <input type = "file" multiple = "false" name="img"
   accept= "image/*"  id="finput">
            <input type="submit">
        </form>
        <?php
        if (!empty($_POST)) {
            $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
            $br = "\r\n";
                      
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
//            $cars = htmlspecialchars($_POST["cars"]);
              $img = htmlspecialchars($_POST["img"]);
            fwrite($myfile, date('Y-m-d H:i:s') . $br);
            fwrite($myfile, $name . ": " . $email . ": " . $img .  $br);
    
          
            fclose($myfile);
        }
        ?>
        <?php
        // put your code here
        ?>
        
        <script>
            function upload() {
  
  var fileinput = 
  document.getElementById("finput");
  var filename = fileinput.value;
  
  alert("You chose" + filename);
}
</script>
    </body>
</html>


   z-index: -1;