<?php
if (isset($_POST['update']))

    { 
      
   
      $client_id =$_POST['client_id'];

      $up=update('client','receive','1',$client_id);
      
    }
    
    
if (isset($_POST['delet']))

    { 
      
   
      $client_id =$_POST['client_id'];

      $up=update('client','receive','0',$client_id);
      
    }
    
    
    
?>