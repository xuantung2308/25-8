                                        <?php 
                                             include('../../conn/db_conn.php');
                                                  if(isset($_POST['hnumber']) && isset($_POST['wnumber'])){
                                                       $hnumber = $_POST['hnumber'];
                                                       $wnumber = $_POST['wnumber'];
                                                  
                                                       if( empty($hnumber) || empty($wnumber)){
                                                            echo '<script language="javascript">alert("Hãy điền đẩy đủ thông tin"); window.location="home.php";</script>';
                                                       }else{
                                                            $Mweight = ($hnumber-100);
                                                            $mweight = ($hnumber-100)*0.8;
                                                            $iweight = ($hnumber-100)*0.9; 
                                                            $bmi = round($wnumber/($hnumber/100 * $hnumber/100) ,2);
                                                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                                                            $date = date('Y-m-d H:i:s');

                                                            $ins = "INSERT INTO bmidata (day, height, weight, bmi, user_id) VALUES ('$date', '$hnumber', '$wnumber', '$bmi', '$_SESSION[id]')"; 
                                                            $i_result = mysqli_query($conn, $ins) or die(mysqli_error($conn));                                               

                                                            ?> <div class="bmi-modal" id="bmi-modal">
                                            <div class="b-content">
                                                <div style="margin-top: 20px;">
                                                    Chỉ số BMI của bạn là:
                                                    <div class="bmi">
                                                        <?php echo $bmi;?>
                                                    </div>
                                                    <?php if($bmi <= 18.5){ ?><p class="cmt">Thiếu cân</p>
                                                    <?php }elseif($bmi > 18.5 && $bmi <= 24.9){ ?><p class="cmt">Bình
                                                        thường</p>
                                                    <?php }elseif($bmi > 24.9 && $bmi <= 29.9){ ?><p class="cmt">Tiền
                                                        béo phì</p>
                                                    <?php }elseif($bmi > 29.9 && $bmi <= 34.9){ ?><p class="cmt">Béo phì
                                                        độ I</p>
                                                    <?php }elseif($bmi > 34.5 && $bmi <= 39.9){ ?><p class="cmt">Béo phì
                                                        độ II</p>
                                                    <?php }elseif($bmi > 39.9){ ?><p class="cmt">Béo phì độ III</p>
                                                    <?php } ?>
                                                </div>

                                                <div style="margin-top: 2px;">
                                                    Cân nặng lý tưởng của bạn là:
                                                    <div class="bmi">
                                                        <?php echo $iweight;?>
                                                    </div>
                                                    <p class="cmt">Kilogram</p>
                                                </div>

                                                <div style="margin-top: 2px;">
                                                    Cân nặng tối đa của bạn là:
                                                    <div class="bmi">
                                                        <?php echo $Mweight;?>
                                                    </div>
                                                    <p class="cmt">Kilogram</p>
                                                </div>

                                                <div style="margin-top: 2px;">
                                                    Cân nặng tối thiểu của bạn là:
                                                    <div class="bmi">
                                                        <?php echo $mweight;?>
                                                    </div>
                                                    <p class="cmt">Kilogram</p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                                       }
                                                  } 
                                                ?>