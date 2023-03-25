<body style= "background-image: url(<?php echo "../assets/images/modern-gold-background-free-vector.jpg"  ;?>) " >


  
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
                <option >صدقة </option>
    <option > "زكاة الفطر"</option>
    <option > كفالة اليتيم</option>
    <option >كفالة مريض</option>
  </select> 
            </div>
            
            <div class="form-group">
                <label >mobile</label>
                <input type="text" name="client_mobile" class="form-control" >
            </div>
            <div class="d-grid gap-2 d-md-block"style=" text-align:center" >
            <button   type="submit" name="submit"  class="btn btn-primary" 
           style=" color:yellow;background-color:grey">add</button>
           <button   type="submit" name="submit-show"  class="btn btn-primary" 
           style=" color:yellow;background-color:grey">data show</button>
           <button   type="submit" name="update"  class="btn btn-primary" 
           style=" color:yellow;background-color:grey">receive</button>
           <button   type="submit" name="delet"  class="btn btn-primary" 
           style=" color:yellow;background-color:grey">delet</button>
           <button   type="submit" name="delet-client"  class="btn btn-primary" 
           style=" color:yellow;background-color:grey">delet-client</button>
           <a href="clients/all.php" class="btn btn-info">all</a>
           </div>
        </form>`
      
    </div>



  </body>