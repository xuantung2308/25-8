<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lịch sử</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <link rel="stylesheet" type="text/css" href="../user-style/user-style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php
            require('../../conn/db_conn.php');
            session_start();
        ?>
    </head>

    <?php
        $data = array();
        $sql = "SELECT * FROM bmidata WHERE user_id = '$_SESSION[id]'";
        $result = mysqli_query($conn, $sql);
        $count = 0;

        while($row = mysqli_fetch_array($result)){
            $data[$count]["x"] = $row["day"];
            $data[$count]["y"] = $row["bmi"];
            $count++;
        }
    ?>

    <body>
        <?php
            require('header.php');
        ?>
        <?php
            $h_sql = "SELECT * FROM bmidata WHERE user_id = '$_SESSION[id]'";
            $h_result = mysqli_query($conn, $h_sql)
        ?>
        <h1 style="margin-top: 30px; margin-bottom: 20px">Thông tin chỉ số BMI của bạn</h1>
        <table>
            <tr>
                <th>STT</th>
                <th>Ngày đo</th>
                <th>Chiều cao (cm)</th>
                <th>Cân nặng (kg)</th>
                <th>Chỉ số BMI</th>
                <th>Nhận xét</th>
            </tr>

            <?php
                if(mysqli_num_rows($h_result)>0){
                    $stt=1;
                    while($row = mysqli_fetch_assoc($h_result)){?>

                <tr>
                    <td><?php echo $stt; ?></td>
                    <td><?php echo $row['day']; ?></td>
                    <td><?php echo $row['height']; ?></td>
                    <td><?php echo $row['weight']; ?></td>
                    <td><?php echo $row['bmi']; ?></td>
                    <td><?php if($row['bmi'] <= 18.5){ echo 'Thiếu cân';
                        }elseif($row['bmi'] > 18.5 && $row['bmi'] <= 24.9){ echo 'Bình thường';
                        }elseif($row['bmi'] > 24.9 && $row['bmi'] <= 29.9){ echo 'Tiền béo phì';
                        }elseif($row['bmi'] > 29.9 && $row['bmi'] <= 34.9){ echo 'Béo phì độ I';
                        }elseif($row['bmi'] > 34.5 && $row['bmi'] <= 39.9){ echo 'Béo phì độ II';
                        }elseif($row['bmi'] > 39.9){ echo 'Béo phì độ III';} ?></td>
                </tr>
                <?php $stt++;}}else{ ?>
                    <tr>
                        <td colspan="8">No data found</td>
                    </tr>
                <?php }?>
            </table>   

            <div id="chartContainer" style="display: none; margin-top: 30px; width: 70%; text-align: center; height: 400px;">
                <script src="https://cdn.canvasjs.com/canvasjs.min.js" style="width: 100% !important;"></script>
            </div>
            
            <button type="button" style="position: fixed; bottom: 20px; right: 20px;" class="chart-btn" id="chart-btn">
                    Biểu đồ theo dõi
            </button>

            <script>
                window.onload = function(){
                    var chart = new CanvasJS.Chart("chartContainer", {
                        responsive: false,
                        maintainAspectRatio: true,
                        animationEnabled: true,
                        title:{
                            text: "BMI"
                        },
                        axisY:{
                            includeZero: true,
                        },
                        data: [{
                            type: "spline",
                            xValueType: "dateTime",
                            markerSize: 5,
                            dataPoints: 
                            <?php
                                foreach ($data as &$point) {
                                    $point["x"] = strtotime($point["x"]) * 1000; // Convert to milliseconds
                                }
                                echo json_encode($data, JSON_NUMERIC_CHECK); 
                            ?>
                        }]
                    }); 
                    chart.render();   
                }

                  var chart = document.getElementById("chartContainer");
                    var chart_btn = document.getElementById("chart-btn");
                    var count = 0;
                    chart_btn.onclick = function(){
                        if(count == 0){
                            chart.style.display = "block";
                            count = 1;
                            return count;
                        }else if(count == 1){
                            chart.style.display = "none";
                            count = 0;
                            return count;
                        }
                    }
            </script>
    </body>