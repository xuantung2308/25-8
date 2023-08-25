<!DOCTYPE html>
<html lang="en">
<html lang="en">
     <head>
      <title>Xuất Excel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../../style/style.css">
        <link rel="stylesheet" type="text/css" href="../user-style/user-style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
     </head>

     <body>
        <?php
            require('header.php');
        ?>
        <div class="ex-div">
            <form action="excel.php" class="ex-form">
                <div class="row" style="font-size: 20px;">
                    <div class="col-10">
                        <label>Từ: &ensp;</label><input type="date" id="from" class="date"/> <label>&ensp; - Đến&ensp;</label><input type="date" id="to" class="date"/>
                    </div>
                    <div class="col-2">
                        <input type="submit" class="ex-btn" value="Tìm" style="color: #fff;"/>
                    </div>
                </div>
            </form>
        </div>
     </body>