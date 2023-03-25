

<h1 style="color:yellow ;margin-left:150px;"><?php
if (isset($_POST['submit-show'])){
$client_id =$_POST['client_id'];
    
        if (checkEmpty($client_id) ){
            if(checkless($_POST['client_id'])){
      
      $show=show("client",'client_id', $client_id);
      
      


            }
            else{
                $error_message= "الرقم القومي غير صالح";
            }

        }
        else{
            $error_message='اضف الرقم القومي';
        }
        require_once '../function/messages.php' ;

}

 
?></h1>





   

