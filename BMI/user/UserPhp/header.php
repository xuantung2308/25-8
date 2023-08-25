<!DOCTYPE html>
<head>
  <html lang="en">
     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../../style/style.css">
        <link rel="stylesheet" type="text/css" href="../user-style/user-style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     </head>

     <body>
    <div class="header">
      <div class="header1st" >
        <div class="div_logo" style="display: inline;">
          <a href="home.php" class="a_logo">
            <img src="../../img/akb-software-logo.png" class="logo" style="display: inline; float: left"/>&ensp;
            <span class="hidden">
              Công ty TNHH Liên doanh<br> Phần mềm AKB Software
            </span>
          </a>
        </div>      
      </div>
        
      <div class="header2nd">
        <div style="display: inline; float: right" class="div_icon">
          <button class="icon_btn hid_icon" id="btn-bar">
            <i class="fa fa-bars fa-2x " ></i>
          </button>

          <button class="icon-btn" id="u_icon">
            <i class="fa fa-user fa-2x "></i>
          </button>
        </div>

        <div id="menu_bar" class="menu_bar">
          <a href="home.php">Trang chủ</a>
          <a href="about.php">Về chỉ số BMI (WHO)</a>
          <a href="history.php">Lịch sử</a>
          <a href="excel.php">Xuất Excel</a>
        </div>
      </div>          
    </div>
            
        <div class="u_modal" id="myModal">
            <div class="modal-content" style="background-color: #d1e7dd;">
              <i class="fa fa-user fa-5x"></i>
              <a href="info.php"><i class="fa fa-info"></i> &ensp;Thông tin tài khoản</a>
              <a href="change-password.php">Đổi mật khẩu</a>
              <a href="../../index/logout.php"></i> &ensp;Đăng xuất</a>
            </div>
        </div>
      
      <script>
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("u_icon");
        btn.onclick = function(){
          modal.style.display = "block";
        } 
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }

        var menu = document.getElementById("menu_bar")
        var btn_bar = document.getElementById("btn-bar");
        var count = 0;
        btn_bar.onclick = function(){
          if(count == 0){
            menu.style.display = "block";
            count = 1;
          }else if(count == 1){
            menu.style.display = "none";
            count = 0;
          }
        }
     </script>
    </body>
     