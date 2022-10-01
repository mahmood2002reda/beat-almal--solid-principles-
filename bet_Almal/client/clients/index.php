
<?php require_once '../../function/db.php'?>
<?php require_once '../../function/validate.php'?>
 <h1 style="color:red"><?php
if (isset($_POST['update']))

    { 
      
      $check=$_POST['receive'];

      $up=update("client","receive","$check");

    }