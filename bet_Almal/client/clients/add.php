
<?php require_once '../../function/db.php'?>
<?php require_once '../../function/validate.php'?>
<?php require_once 'dataShow.php'?>

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
      require_once '../../function/messages.php' ;
    }
    
      
?>

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
    
    if (isset($_POST['delet-client']))

    { 
      
   
      $client_id =$_POST['client_id'];

      $up=delete('client',$client_id);
      
    }
    
    
?>
    
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://localhost/m25r/bet_Almal/assets/js/bootstrap.min.js" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=C:\wamp64\www\m25r\bet_Almal\assets\css\style.css >

    <title>Dashboard | Home Page</title>
    <style>
body {
  
  background-repeat: repeat;
  background-size: auto;
  background-position: center;

  
}
label{
  color: yellow;
  text-align: center;
  class=text-center
}
h3{

  margin-top: 40px ;
}
</style>
  </head>
    
  <body style= "background-image: url(<?php echo "../../assets/images/modern-gold-background-free-vector.jpg"  ;?>) " >


  
<div class="col-sm-6 offset-sm-3 " >
        <h3 class="text-center p-3  text-warning"  >بــېْۧــټ مۘــٰا̍ڷ ا̍ڵــمۘــڛۣــڶــمۘــٻۧــنۨ </h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
           

            <div class="form-group ">
                <label class="text-center">client_id </label>
                <input type="text" name="client_id" class="form-control" >
            </div>
 <div class="form-group">
                <label >Name :</label>
                <input type="text" name="client_name" class="form-control" >
            </div>
            <div class="form-group">
                <label >Address : </label>
                <input type="text" name="client_address" class="form-control" >
            </div>

            <div class="form-group">
                <label >type :</label>
              
                <select  name="client_deal" class="form-control" >
                <option >sadqa </option>
    <option > "zakat fetr"</option>
    <option > kfalt ytem</option>
    <option >" kfalt mred"</option>
  </select> 
            </div>
            
            <div class="form-group">
                <label >mobile</label>
                <input type="text" name="client_mobile" class="form-control" >
            </div>
            <div class="d-grid gap-2 d-md-block"style=" text-align:center" >
            <button   type="submit" name="submit"  class="btn btn-primary" 
           style=" color:yellow;background-color:grey">Login</button>
           <button   type="submit" name="submit-show"  class="btn btn-primary" 
           style=" color:yellow;background-color:grey">data show</button>
           <button   type="submit" name="update"  class="btn btn-primary" 
           style=" color:yellow;background-color:grey">receive</button>
           <button   type="submit" name="delet"  class="btn btn-primary" 
           style=" color:yellow;background-color:grey">delet</button>
           <button   type="submit" name="delet-client"  class="btn btn-primary" 
           style=" color:yellow;background-color:grey">delet-client</button>
           </div>
        </form>`
      
    </div>



  </body>