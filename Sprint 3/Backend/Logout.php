<?php session_start();
if(empty($_SESSION['ID'])):
    header('Location:SignIn.php');
endif;
?>
<!DOCTYPE html>
<html>
<body>
    <div style="width:150px;margin:auto;height:500px;margin-top:300px">

    <?php
     //include 'Logout-delete.php';
	 header('Location:SignIn.php');
     session_destroy();

    ?>
    </div>

</body>
</html>