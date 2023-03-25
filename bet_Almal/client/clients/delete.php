<?php 
if (isset($_POST['delet-client']))

    { 
      
   
      $client_id =$_POST['client_id'];

      $up=delete('client',$client_id);
      
    }
    ?>