
<?php
  // To make sure we don't need to create the header section of the website on multiple pages, we instead create the header HTML markup in a separate file which we then attach to the top of every HTML page on our website. In this way if we need to make a small change to our header we just need to do it in one place. This is a VERY cool feature in PHP!
  require "header.php";
?>


<div class="about" id="about">

<h2>Dit zijn mijn skills en hobby's</h2>

<div class ="container-skill" id="double-border">

<style>
.checked {
  color: rgb(255, 117, 4);
}
</style>
<ul style="list-style-type:none"><p>
<b>Programmeertalen en Frameworks</b><br><br>
<li>HTML &nbsp;&nbsp;<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star-half-full" style="color:rgb(255, 117, 4)"></li><br> 
<li>CSS  &nbsp;&nbsp;&nbsp;&nbsp; <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked">
<span class="fa fa-star checked"></span></li><br>
<li>PHP   &nbsp;&nbsp;&nbsp;&nbsp;   <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></li><br>
<li>JavaScript  &nbsp;&nbsp;  <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></li><br>
<li>Laravel  &nbsp;&nbsp;  <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star-half-full" style="color:rgb(255, 117, 4)"></li><br>
<li>C#  &nbsp;&nbsp;  <span class="fa fa-star checked"></span></li><br>
<li>Python  &nbsp;&nbsp;  <span class="fa fa-star checked"></span></li><br>
</p></ul>
    </div>

<div class ="container-skill" id="double-border"><p>
 <b>Onderwijs en opleidingen</b><br><br>
 <b>2018</b><br>
 <a href="https://www.codegorilla.nl/" style="color:black;"> Bootcamp Codegorilla : Junior Webdeveloper.</a><br><br>
 <b>2010-2012</b><br>
 MBA : cursus moderne bedrijfsadministratie.<br><br>
 <b>2004-2010</b><br>
 MBO : Administrateur niveau 4.<br><br>
 <b>2001-2003</b><br>
 MBO : Financiële Dienstverlening niveau 4.<br><br>
 <b>1995-2000</b><br>
 MAVO : met ( Nederlands, Engels, Duits,<br> Wiskunde, Economie, Geschiedenis,
 Aardrijkskunde.)</p>
</div>

<div class ="container-skill" id="hobby">
  <p><b>Mijn hobby's</b>
    <dl class="lijst-hobby">
      <dt><b>Surfen</b></dt>
      <dd>- dit probeer ik te doen als ik op vakantie ga.</dd>
      <dt><b>voetbal</b></dt>
      <dd>- 1 x per week gezellig met de jongens</dd>
      <dt><b>Yoga</b></dt>
      <dd>- Na dit gedaan te hebben voel ik me altijd heerlijk soepel.</dd>
      <dt><b>Fitness</b></dt>
      <dd>-Doe ik om in form te blijven.</dd>
  </dl></p>
</div>

</div>





<!-- dit is mijn project div -->
<div class="project" id="projecten">

<h2>Mijn game-projecten</h2>

<div class="project1" id="double-border2">
<h3>Dit is een game waar ik mee bezig ben</h3>
<a href="gameProjecten/game.php"><img src="img/main/spel.PNG" style="max-width: 100%; border:0"/>
</a></div>

<div class="project1"><h3>Dit is een game met mijn hond in de hoofdrol!<h3>
<a href="gameProjecten/index.html"><img src="img/main/gameLexje.PNG" style="max-width: 100%; border:0"/></a>
<!-- <iframe id="myFrame" src="https://lootgames.nl/" style="height:380px;width:100%"></iframe> -->

<!-- <button onclick="myFunction()">Try it</button> -->

</div>

</div>



<div class="news" id="leuk">


<section class="gallery-links">
        
          <h2>Gallery</h2>

          <div class="gallery-container">
            <?php
            include_once 'includes/dbh.inc.php';

            $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL statement failed!";
            } else {
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);

              while ($row = mysqli_fetch_assoc($result)) {
                echo '<a href="#leuk">
                  <div style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].');"></div>
                  <h3>'.$row["titleGallery"].'</h3>
                  <p>'.$row["descGallery"].'</p>
                </a>';
              }
            }
            ?>
          </div>

          <?php
          if (isset($_SESSION['username'])) {
            echo '<div class="gallery-upload">
              <h2>Upload</h2>
              <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
                <input type="text" name="filename" placeholder="File name...">
                <input type="text" name="filetitle" placeholder="Image title...">
                <input type="text" name="filedesc" placeholder="Image description...">
                <input type="file" name="file">
                <button type="submit" name="submit">UPLOAD</button>
              </form>
            </div>';
          }
          ?>

        </div>
      </section>

        

   
     

      

<div class="form" id="contact">
<!--    <div class="form-container">-->
        <h2>Neem hier contact met mij op:</h2>
        <div class="contact"></div>
        <div class="row">
            <div class="verplaats">
        <form class="phpform" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
            Naam:<br> <input class="phpform2" type="text" name="naam"><br></br>
            Email:<br> <input class="phpform2" type="text" name="email"><br></br>
            Tel:<br> <input class="phpform2" type="text" name="tel"><br></br>
            Comment:<br> <textarea class="phpform2" name="comment" rows="5" cols="40"></textarea><br></br>
            Geslacht: <input type="radio" name="geslacht" value="vrouw">Vrouw
            <input type="radio" name="geslacht" value="man">Man
            <input type="radio" name="geslacht" value="other">Anders
            <br><br/>
            <input type="submit">
        </form></div></div>
        <?php
        if (!empty($_POST)) {
            $br = "\r\n";

            $naam = htmlspecialchars($_POST["naam"]);
            $email = htmlspecialchars($_POST["email"]);
            $tel = htmlspecialchars($_POST["tel"]);
            $comment = htmlspecialchars($_POST["comment"]);
            $geslacht = htmlspecialchars($_POST["geslacht"]);

            //Dit is het bericht dat je ontvangt.
            $msg = date('Y-m-d H:i:s') . $br;
            $msg .= "Naam: " . $naam . $br;
            $msg .= "Email: " .$email . $br;
            $msg .= "Tel: " .$tel . $br;
            $msg .= "Comment: " .$comment . $br;
            $msg .= "Geslacht: " .$geslacht;

            mail("marten@lootgames.nl", "Contact from " . $name, $msg);
        }
        ?>
<!--</div>-->
</div>

 </div>

 <?php
  // And just like we include the header from a separate file, we do the same with the footer.
  require "footer.php";
?>

