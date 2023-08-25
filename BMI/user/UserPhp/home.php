<!DOCTYPE html>
<html lang="en">
     <head>
          <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../../style/style.css">
        <link rel="stylesheet" type="text/css" href="../user-style/user-style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php 
          require('../../conn/db_conn.php');
          session_start();
        ?>
     </head> 
     
     <script src="../JS/function.js"></script>

     <body>
          <?php
            require('header.php')
          ?>
               <div class="row justify-content-center content">
                    <h1 style="font-size: 30px; margin-top: 50px;color: #097770; font-weight: bold">Công cụ tính BMI</h1>
                    <div class="sub-heading" style="text-align: center; font-size: 15px; margin-bottom: 30px;color: #097770">Tính chỉ số BMI để biết tình trạng sức khỏe của bạn</div><br>
                    
                    <div class="row" style="text-align: center;">
                         <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                              <form action="home.php" method="post" style="text-align: center; margin: 0; padding: 0; border: none; width: 100%">
                                   <div style="margin: 10px;">
                                        <p class="title" style="color: #097770;">Chiều cao (cm)</p>
                                        <div class="div_inum">
                                             <div class="value-button" id="decrease" onclick="decreaseValue('hnumber')" value="Decrease Value">-</div>
                                             <input class="innum" type="number" id="hnumber" name="hnumber" min="100" max="251" value="" placeholder="0"/>
                                             <div class="value-button" id="increase" onclick="increaseValue('hnumber')" value="Increase Value">+</div> 
                                        </div>
                                   </div>
                                   
                                   <div style="margin: 10px;" >
                                        <p class="title" style="color: #097770">Cân nặng (kg)</p>
                                        <div class="div_inum">
                                             <div class="value-button" id="decrease" onclick="decreaseValue('wnumber')" value="Decrease Value">-</div>
                                             <input class="innum" type="number" id="wnumber" name="wnumber"  value="" placeholder="0"/>
                                             <div class="value-button" id="increase" onclick="increaseValue('wnumber')" value="Increase Value">+</div>
                                        </div> 
                                   </div>
                                   <div style="width: 100%;">
                                        <div>
                                             <button type="submit" class="cal-btn" name="calculate" id="cal">Tính toán</button>
                                        </div>
                                   </div>
                              </form>
                         </div>
                              <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                   <form style="width: 100%; border: 0; padding: 0; outline: 0">
                                        <?php require('cal.php'); ?>
                                   </form>   
                              </div>
                         </div>
                    </div>
     </body>
</html>

