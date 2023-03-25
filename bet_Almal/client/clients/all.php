<?php require_once '../../function/db.php'?>
    
<?php require_once '../inc/header.php'?>

<div class="col-sm-12">
<a href="../index.php" class="btn btn-info"style="position: absolute;" >الصفحة الرئيسية</a>
        <h3 class="text-center p-3 bg-primary text-white">بيانات العملاء</h3>
        <table class="table table-dark table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    
                    <th scope="col">الرقم القومي</th>
                    <th scope="col">الاسم</th>
                    <th scope="col">العنوان</th>
                    <th scope="col">الاستحقاق</th>
                    
                    
                    <th scope="col">رقم الهاتف</th>
                    
                    <th scope="col">استلم </th>
                    <th scope="col">تاريخ التسجيل</th>
                  
       
                </tr>
            </thead>
            <tbody>
                <?php $data = getRows('client');  $x=1; ?>
                <?php foreach($data as $row){   ?>
                
                   
                    <tr class="text-center">
                    <td scope="row"><?php echo $x; ?></td>
                    <td class="text-center"><?php echo $row['client_id']; ?></td>
                    <td class="text-center"><?php echo $row['client_name']; ?></td>

                    <td class="text-center"><?php echo $row['client_address']; ?></td>
                    <td class="text-center"><?php echo $row['client_deal']; ?></td>
                    <td class="text-center"><?php echo  $row['client_mobile']; ?></td>
                    <td class="text-center"><?php echo $row['receive']; ?></td>
                    <td class="text-center"><?php echo $row['client_created_at']; ?></td>
                    <td class="text-center">
                    </td>
                </tr>
                <?php $x++; } ?>
               
            </tbody>
        </table>
    </div>

<?php require '../inc/footer.php';  ?>

</body>