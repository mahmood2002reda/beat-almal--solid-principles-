<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "bta";   

$conn = mysqli_connect($server,$username,$password,$db); /// connection way

if(!$conn)
{
    die ( "Error In Connection : " . mysqli_connect_error());
    
}

function db_insert($sql)
{
    global $conn;
    $result = mysqli_query($conn,$sql); // function to use to send query to database
    if($result)
    {
        return "Added Success";
    }
    return false;
}

//get row from database // check email is found or not in database

function getRow($table,$field,$value){

global $conn ;
$sql="SELECT * FROM `$table` WHERE `$field`='$value' ";


$result=mysqli_query($conn,$sql);
if ($result){


    $rows=[];
    if (mysqli_num_rows($result)>0) { // (عدد الصفوف )result تحقق من ان  بها بيانات
        $rows[]= mysqli_fetch_assoc($result); // في المصفوفة result رجع القيم الي جاية من 
    return $rows[0];
    }

}

return false ;
}
/*
function getRows($table){

    global $conn ;
    $sql="SELECT * FROM `$table`";
    
    $result =mysqli_query($conn,$sql);
    if ($result){
    
    
        $rows=[];
        if (mysqli_num_rows($result)>0) { 
        while($row=mysqli_fetch_assoc($result)) {

            $rows[]=$row;
    }
        
        }
    }
    
    return $rows ;
    }


*/
    function show($table,$feild,$value){
        global $conn ;
        $sql = "SELECT * FROM `$table` WHERE `$feild`='$value'";

        $result= mysqli_query( $conn, $sql);
        if ($result){


            $rows=[];
            if (mysqli_num_rows($result)>0) { // (عدد الصفوف )result تحقق من ان  بها بيانات
                $rows[]= mysqli_fetch_assoc($result); // في المصفوفة result رجع القيم الي جاية من 
            print_r($rows[0]) ;
            }




        }
        

        
    }
    function update($table,$feild,$bool,$client_id){
        global $conn ;
              $sql = "UPDATE `$table` SET `$feild`='$bool' WHERE `client_id`=$client_id " ;
        
        $result= mysqli_query( $conn, $sql);

    }
    function delete($table,$client_id){
        global $conn ;
        $sql="DELETE FROM `$table` WHERE `client_id`=$client_id";
        $result= mysqli_query( $conn, $sql);
    }