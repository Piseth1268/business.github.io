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

<body>
    
    <!-- @@@@ RESPONSIVE @@@@ -->
    <div class="res-menu">
            <img src="https://via.placeholder.com/255x200" alt="">
       
            <i class="fa-solid fa-magnifying-glass"></i>
            <i class="fa-solid fa-bars"></i>

    </div>
     


    <!-- @@@@ RESPONSIVE @@@@ -->
   <div class="main">
    
       <?php include('../include/sidebar.php') ?>

    <!--@@@@ CONTENT RIGHT @@@@-->
    <div class="content-right">
        <!-- search -->

        <style>
        a{
            color:black;
        }

        .con-3 .col-3 .card1 img{
            height: 55%;
        }

        .con-3 .col-3 .card1 .box-title{
            height: 45%;
            margin-top: 0px;
        }
     </style>
      


        <!--Content card-->
        <div class="container-fluid mt-5 con-3" >
        <div class="row">
            <!-- ==>LIMIT 4 ប្រើអោយចង់ចេញតែបួនកាត​​ <== -->
            <?php 
                  $title_search = $_GET['result_search'];
                  $sql = "SELECT * FROM `tb_news` WHERE title LIKE '%".$title_search."%' ";
                  $res = $con->query($sql);

                  if($res->num_rows>0){
                       while($row=$res->fetch_assoc()){
                       echo '
                       <div class="col-3 mt-4" style=" height: 300px;padding-left: 0;">
                       <a href="../html/box-detail.php?url='.$row['id'].'">
                       
                         
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
    
   </div>

   <!-- @@@@ Footer @@@@ -->

   <?php include('../include/footer.php') ?>

    <!-- @@@@ Footer @@@@ -->

</body>
</html>