<?php session_start();
if(empty($_SESSION['id'])):

  header('location:login.php');
endif;

?>

<!DOCTYPE html>
<html>
    <body>
        <div style="width: 150px; margin:auto; height: 150px; margin-top:300px">

        <?php
include('_databaseconnectiion.php');
  session_destroy();



  echo'<meta http-equiv="refresh"  content="2;url=login.php">';
  echo '<progress max=100><strong>Progress:60% 
          done.</strong></progress><br>';

  echo'<span class="itext">Logging out please wait!.......</span>';
        ?>

        </div>
    </body>
</html>