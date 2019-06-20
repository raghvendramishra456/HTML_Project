<?php

session_start();

if($_SESSION['insert1']){
    

require 'db.php';

$st = $con->prepare("select * from city");
 
$st->execute();

$row = $st->fetchAll(PDO::FETCH_OBJ);

?>



<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <!--<script src="boorstrap/jquery-3.3.1.min.js" type="text/javascript"></script>-->
        <script src="boorstrap/jquery-3.3.1.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="home.css">
        
        <script src="home.js" type="text/javascript"></script>
        <script src="login.js" type="text/javascript"></script>
    </head>

     <style>
            
            body{
                
                background-image: url("images/backgroun.jpg");
                background-repeat: no-repeat;
/*              background-attachment: fixed;*/
                background-size: cover;
                height:110vh;
                width:80px;
                
                
                
/*                background-image: absolute;*/
                
            }
    
            .form-box{
                margin-top: 200px;
                margin-left: 100px;
                background-color: transparent;
                box-shadow:40px; 
                height: 20px;
            }
            
            .form-box input[type=date]{
                
                background-color:lightgray;
                
        }
        .abc{
            
            margin-top:  -140px;
            
        }

    #id2{
            
            height: 35px;
            
        }
        
        #abcd{
            width: 200px;
        }
     
        
         </style>
            
           
   </head>
   <body>
        
        
        <br><br><br>
         <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
              
                    <a class="navbar-brand" href="#">
                          
                          <img src="images/logonew.jpg"style="width:50px;height:40px" alt=""/>
                        
                        WonderVillaz</a>
                         
               <ul class="navbar-nav mr-auto">
                   &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; 
                <li class="nav-item">
                    <a href="#" class="nav-link active"><i class="fas fa-home"></i>Home</a>   
                </li>
                     &ensp;&ensp;&ensp;&ensp;
                 <li class="nav-item dropdown">
                    <a  class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target">
                        <i class="fas fa-city"></i>Cities
        
                    </a>   
             
                     <div class="dropdown-menu" aria-labelledby="dropdown_target">
                 <?php 
                 foreach($row as $r){
                     
                     ?>
                 
                         <a href="goa_villa.php?cid=<?php echo $r->id; ?>" class="dropdown-item" name="logout"><?= $r->cname; ?></a>
                 <?php
                 
                 } ?>
                    </div>
                </li>
                   &ensp;&ensp;&ensp;&ensp;               
                   
                 <li class="nav-item">
                    <a href="contactUs.html" class="nav-link">Contact</a> 
                   </li></ul>
               
                    <form>
                        <div class="input-group">
                        <input type="text" id="abcd">
                        <div class="input-group-append">
                        <input type="button" value="search" class="btn btn-success "  style="background-color: green">
                        </div>
                        </div>
                    </form>  
                    
<!--             <button type="button" class="btn btn-dark float-right offset-1" data-toggle="modal" data-target="#model1" style="background-color:blue" ><a href="#"></a>Sign Up</button>-->
            
         <h3 style="color:burlywood"><?= $_SESSION['insert1']; ?></h3>
            <a href="LogoutHome.php" class="btn btn-dark float-right" name="logout" style="background-color:blue">LogOut</a>
             

                    
            </nav>

            <br>
            <br>
            <br>
           
            <font size="5px"><marquee style="color:brown" >Book Now and Get Exclusive 40% Off on Each Villa Booking....</marquee></font>

            


<div class="conntainer mt-5">
            
            <div class="modal fade" id="model2" data-backdrop="static">
                <div class="modal-dialog model-sm modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            
                            <h2>Login</h2>
                            <span class="close" data-dismiss="modal">&times;</span>
                        </div>
                        
                    </div>
                </div> 
            </div>
                    
        </div>
        </div>

    </body>
</html>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>><br><br><br><br><br><br><br>

<?php 
}
else{
    header('location:LoginHome.php');
}
    
?>