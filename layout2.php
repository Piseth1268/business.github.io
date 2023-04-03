<style>
     .con-3 .col-3 .card1 img{
            height: 55%;
        }

        .con-3 .col-3 .card1 .box-title{
            height: 45%;
            margin-top: 0px;
        }
      
</style>
<div >
            <p class="pt-4" style="font-size:22px ; font-weight: bold;">ចាប់ផ្តើមអាជីវកម្ម</p>
            <span style="float: right;color:red ;">   មើល​បន្ថែម</span>
        </div>



        <!--Content card-->
        <div class="container-fluid mt-5 con-3" >
            <div class="row">

              <?php 
                $sql = "SELECT * FROM `tb_news` WHERE type = 'ចាប់ផ្តើមអាជីវកម្ម' LIMIT 4 ";
                $res = $con->query($sql);

                if($res->num_rows>0){
                     while($row=$res->fetch_assoc()){
                        echo '
                        <div class="col-3 mt-4" style=" height: 300px;padding-left: 0;">
                        <a href="../html/box-detail.php?url='.$row['id'].'">
                        <div class="card1">
                           <img src="../upload/'.$row['thumbnail_card'].'" alt="">
                           <div class="box-title">
                               <div class="box-decription">
                                   <span >'.$row['date'].'</span>
                                   <strong><p>'.$row['title'].'</p></strong>
                                   <div class="left-right">
                                       <small style="margin-top: -2px; position: absolute;">'.$row['publisher'].'</small>
                                       
                                       <small style="float: right; padding-left: 5px;margin-top: -2px;">'.$row['viewer'].'</small>
                                       <i  style="float: right; opacity: 0.8;font-size: 14px ;" class="fa-solid fa-eye"></i>
                                   </div>
                               </div>
                           </div>
                        </div>
                        </a>
                       </div>
                        
                        
                        
                        ';
                     }
                }
              
              
              
              ?>
              

                   
                 
            </div>
           
           
           
          
          
        </div>