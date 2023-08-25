<!DOCTYPE html>
<html lang="en">
     <head>
          <title>Thông tin cá nhân</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../../style/style.css">
        <link rel="stylesheet" type="text/css" href="../user-style/user-style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php
            session_start();
        ?>
     </head>  

     <body>
        <?php
            require('header.php')
        ?>    
        <div class="if-div">
            <div class="row">
                <div class="col-lg-2 col-md-2"></div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12" >
                    <h2>Thông tin cá nhân</h2>
                     
                     <div class="ch-div"> 
                        <label>Họ tên</label>
                        <input type="text" disabled class="if-input"/>
                        <button class="ch-btn"><img src="../admin/change.jpg" class="ch-img"/></button>
                    </div>
                            
                    <div class="ch-div">
                        <label>Ngày sinh</label>
                        <input type="date" disabled class="if-input"/>
                        <button class="ch-btn"><img src="../admin/change.jpg" class="ch-img"/></button>
                    </div>
                            
                    <div class="ch-div">
                        <label>Giới tính</label>
                        <input type="text" disabled class="if-input"/>
                        <button class="ch-btn"><img src="../admin/change.jpg" class="ch-img"/></button>
                    </div>

                    
                     <div class="ch-div"> 
                        <label>Email</label> 
                        <input type="text" disabled class="if-input"/>
                        <button class="ch-btn"><img src="../admin/change.jpg" class="ch-img"/></button>
                    </div>
                 
                    <div class="ch-div">
                        <label>Cân nặng </label>
                        <input type="text" disabled class="if-input"/>
                        <button class="ch-btn"><img src="../admin/change.jpg" class="ch-img"/></button>
                    </div>    
                    
                    <div class="ch-div">
                        <label>Chiều cao</label>
                        <input type="text" disabled class="if-input"/>
                        <button class="ch-btn"><img src="../admin/change.jpg" class="ch-img"/></button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2"></div>
            </div>
        </div>
     </body>