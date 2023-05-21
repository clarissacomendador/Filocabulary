<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Navigation Bar</title>
    <!-- Font Awesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css" />
  </head>
    <header>
      <nav>
        <a href="#home" id="logo">FiloCabulary Logo</a>
        <i class="fas fa-bars" id="ham-menu"></i>
        <ul id="nav-bar">
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="quiz.php">Mini Quiz</a>
          </li>
          <li>
            <a href="about.php">About Us</a>
          </li>
          <li>
            <a href="#help">Help</a>
          </li>
        </ul>
      </nav>
    </header>
    
  <body>
    <div class="wrapper">
      <div id="div1">
        <form class="form1" action="index.php" method="post">
          <input type="text" name="word" value="" placeholder="Search Word..."><br>
          <input type="submit" name="search" value="Search">
        </form>

          <?php
             include 'dbcon.php';
             if (isset($_POST['search'])) {
               $word=$_POST['word'];
  
               $sql1="SELECT * from dictionary where Word='$word'";
               $query1=mysqli_query($conn,$sql1);
               while ($info=mysqli_fetch_array($query1)) {
                 ?>
                 <div class="ans">
                   <h2 class="word"><?php echo $info['Word']; ?><p class="eng"><q><?php echo $info['English_Word'];?></q></p></h2><br>
                   <h2>Definition:</h2>
                   <h2 class="def"><?php echo $info['Meaning']; ?></h2>
                   </div>
  
                 <?php
                 // code...
               }
             }
  
           ?>
  <a href="insert.php">INSERT WORDS</a>
      </div>
            </div>
    

      

    <!-- Script -->
    <script src="js/script.js"></script>
  </body>
</html>
