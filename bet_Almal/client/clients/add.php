
<?php
if (isset($_POST['submit']))

    { 
      
      $client_id =$_POST['client_id'];

      $client_name =$_POST['client_name'];
     
      $client_address =$_POST['client_address'];
      $client_deal =$_POST['client_deal'];
      $client_mobile =$_POST['client_mobile'];

   
      


      if (checkEmpty($client_id) AND checkEmpty($client_name) AND  checkEmpty($client_address)AND checkEmpty($client_deal)AND checkEmpty($client_mobile)){
        if(checkless($_POST['client_id'])){
                  $check=getRow("client","client_id",$client_id);// لا تحتاج للتحقق من شرط مطابقة الرقم الذي ادخله المستخدم و الموجود لان الدالة قامت بارجاع قيم من القاعدة وهذا يعني اان الرقم موجود

if(!$check){
         $sql = "INSERT INTO  `client`(`client_id`, `client_name`, `client_address`, `client_deal`, `client_mobile`) /* query Sentence  will be paramter in db_insert  */
                VALUES ('$client_id','$client_name','$client_address','$client_deal','$client_mobile') ";
                            $success_message = db_insert($sql); // function in db.php
                          }  
                          else{
                            $error_message= "الرقم القومي مستخدم";
                        }}
else{
            $error_message= "الرقم القومي غير صالح";
        }  
      }
      else{
        $error_message= "please fill all filde";
      }
      require_once '../function/messages.php' ;
    }
    
      
?>

<?php

    
