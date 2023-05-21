<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Word</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <form class="insert" action="insert.php" method="post">
      <h1>Insert Word</h1><br>
      <input type="text" name="word" value="" placeholder="Enter Word..." required><br><br>
      <input type="text" name="meaning" value="" placeholder="Enter Meaning..." required><br><br>
      <input type="text" name="english_word" value="" placeholder="Enter English Word..." required><br><br>
      <input type="submit" name="insert" value="Insert Word">
    </form>
    <table>
      <tr>
        <th>Word</th>
        <th>Meaning</th>
        <th>English Word</th>
      </tr>
    <?php
        include 'dbcon.php';
        if (isset($_POST['insert'])) {
          $word=$_POST['word'];
          $meaning=$_POST['meaning'];
          $english_word=$_POST['english_word'];

          $sql="INSERT INTO dictionary(Word,Meaning,English_Word) values('$word','$meaning', '$english_word')";
          $query=mysqli_query($conn,$sql);

        }
        $sql1="SELECT * from dictionary ORDER BY word";
        $query1=mysqli_query($conn,$sql1);
        while ($info=mysqli_fetch_array($query1)) {
          ?>
          <tr>
            <td><?php echo $info['Word']; ?></td>
            <td><?php echo $info['Meaning']; ?></td>
            <td><?php echo $info['English_Word']; ?></td>
          </tr>


          <?php
        }
     ?>
     </table>
     <a class="insert-back" href="index.php">Homepage</a>
  </body>
</html>
