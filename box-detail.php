<?php include("../admin2/config/connection.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/photo/logo.png" type="image/gif" sizes="16x16"> 
    <title>Business Cambodia</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Link FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!--Link Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Exo+2&family=Hanuman&display=swap" rel="stylesheet"> 
    <!--Link Style CSS-->
    
</head>
<style>
    .box-add1{
           width: 60%;
           height: 100px;
           background: red;
           margin-top:10px;
           border-radius: 10px;
           overflow: hidden;

    }
    .box-add1 img{
        width: 100%;
        height: 100%;

    }

    .box-card1{
        width: 60%;
        height: 400px;
        background: gray;
        margin-top: 10px;
        border-radius: 10px;
        overflow : hidden;

    }

    .box-card1 img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

  
    .box-title1{
        width: 60%;
        height: 100px;
        margin-top: 10px;
    }
   

    .con-3 .col-3 .card1 img{
            height: 50%;
        }

        

        .con-3 .col-3 .card1 .box-title{
            height: 50%;
            margin-top: 10px;
        }

      
</style>
<body>
    
    <!-- @@@@ RESPONSIVE @@@@ -->
    <div class="res-menu">
            <img src="https://via.placeholder.com/255x200" alt="">
       
            <i class="fa-solid fa-magnifying-glass"></i>
            <i class="fa-solid fa-bars"></i>

    </div>
     


    <!-- @@@@ RESPONSIVE @@@@ -->
   <div class="main">
     
       <!--@@@@ MENU LEFT @@@@-->
        <?php include('../include/sidebar.php') ?>
       <!--@@@@ MENU LEFT @@@@-->

    <!--@@@@ CONTENT RIGHT @@@@-->
    <div class="content-right">

          
           <div class="box-add1">
            <img src="../photo/ads1.jpg" alt="">
           </div>
           <div class="box-add1">
           <img src="../photo/ads2.png" alt="">
           </div>
            <?php 
               $id  = $_GET['url'];
               $sql = "SELECT * FROM `tb_news` WHERE id =$id";
                $res = $con->query($sql);

               $sql_viewer = "SELECT * FROM `tb_news` WHERE id =$id";
               $res_viewer = $con->query($sql_viewer);

               $row_viewers = mysqli_fetch_assoc($res_viewer);
               $viewers     = $row_viewers['viewer'];

               $sql_update  = "UPDATE `tb_news` SET `viewer`= $viewers+1 WHERE id=$id";
               $result      = $con->query($sql_update);

                 if($res->num_rows>0){
                     while($row=$res->fetch_assoc()){
                     echo '
                         <div class="box-card1">
                         <img src="../upload/'.$row['thumbnail_detail1'].'" alt="">
                         </div>
          
                         <div class="box-title1">
                            <p>'.$row['title_detail1'].'</p>
                         </div>
     
                         <div class="box-card1">
                         <img src="../upload/'.$row['thumbnail_detail2'].'" alt="">
                         </div>
           
                         <div class="box-title1">
                            <p>'.$row['title_detail2'].'</p>
                         </div>
     
                         <div class="box-card1">
                         <img src="../upload/'.$row['thumbnail_detail3'].'" alt="">
                         </div>
              
                         <div class="box-card1">
                         <img src="../upload/'.$row['thumbnail_detail4'].'" alt="">
                         </div>
                         ';
                       }
                    }
            
           
           ?> 
           
        
            
            <!--Content card-->
        <div class="container-fluid mt-5 con-3" >
            <div class="row">
            <?php 
            $id  = $_GET['url'];
            $sql = "SELECT * FROM `tb_news` WHERE id>$id LIMIT 4 ";
            $res = $con->query($sql);

            if($res->num_rows>0){
                 while($row=$res->fetch_assoc()){
                 echo '
                 <div class="col-3 mt-4" style=" height: 300px;padding-left: 0;">
                 <a style="color:black" href="../html/box-detail.php?url='.$row['id'].'">
                 
                   
                    <div class="card1">
                     <img  src="../upload/'.$row['thumbnail_card'].'" alt="">
                 
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
    </div>

    <!--@@@@ CONTENT RIGHT @@@@-->


    <!-- @@@@ Footer @@@@ -->
    </div>


    <?php include('../include/footer.php') ?>


    <!-- @@@@ Footer @@@@ -->

</body>
</html>