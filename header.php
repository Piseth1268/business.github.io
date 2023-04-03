    <style>
     
    </style>
    <p class="mt-4">អត្ថបទប្រចាំថ្ងៃថ្មីៗ </p>
       <h3>ដើម្បីបង្កើនចំណេះដឹងក្នុងការធ្វើអាជីវកម្ម</h3>
        <?php 
         
         $sql  = "SELECT * FROM `tb_banner`";

         $res  = $con->query($sql);

         if($res->num_rows>0){
            while($row=$res->fetch_assoc()){
               echo '

               <div class="big-photo">
                  <img src="../upload/'.$row['photo'].'" alt="">
          
                  <small class="pl-5">'.$row['date'].'</small>
   
                  <h2 class="pl-5">'.$row['title'].' </h2>
   
                  <button class="p-2">'.$row['btn_title'].'</button>
               </div>
               
               ';
            }
         }
        
        
        
        
        ?>

     


        <p class="mt-3">ពាណិជ្ជកម្ម</p>
        <!-- <img class="small-photo" src="https://via.placeholder.com/255x200" alt=""> -->
        <?php 
                
                  $sql  = "SELECT * FROM `tb_types_photo` WHERE type='ads'";
                  $res  = $con->query($sql);
                  if($res->num_rows>0){
                       while($row=$res->fetch_assoc()){
                            echo'

                            <img class="small-photo" src="../upload/'.$row['photo'].'" alt="">
                            
                            ';
                       }
                  }
                ?>
        