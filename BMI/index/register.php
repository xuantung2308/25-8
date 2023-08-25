<?php
    session_start();
    include '../conn/db_conn.php';

if(isset($_POST['register'])){
    $uname =$_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = $_POST['cfpassword'];


    $sql_u = "SELECT * FROM users WHERE user_name = '$uname'";
    $sql_e = "SELECT * FROM users WHERE email = '$email'";
    $res_u = mysqli_query($conn, $sql_u) or die(mysqli_error($conn));
    $res_e = mysqli_query($conn, $sql_e) or die(mysqli_error($conn));

    function validatePassword($pass) {
        if(strlen($pass) < 8) {
            return false;
        }
        if(!preg_match('/[A-Z]/', $pass) && !preg_match('/[0-9]/', $pass) && !preg_match('/[^a-zA-Z0-9]/', $pass)) {
            return false;
        }
        return true;
    }

    if(empty($uname) || empty($email) || empty($pass) || empty($cpass)){
        header("Location: reform.php?error=Hãy điền đầy đủ thông tin");
        exit();
    }else if(mysqli_num_rows($res_u)>0){
        header("Location: reform.php?error=Tên đăng nhập đã được sử dụng");
        exit();
    }else if(mysqli_num_rows($res_e)>0){
        header("Location: reform.php?error=Email đã được sử dụng");
        exit();
    }else{
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: reform.php?error=Email không tồn tại");
            exit();
        }elseif(validatePassword($pass)){
            $_SESSION['uname'] = $uname;
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $pass;
            $_SESSION['cpass'] = $cpass;

            $ins = "INSERT INTO users (user_name, email, password) VALUES ('$uname', '$email', '$pass')";
            $result = mysqli_query($conn, $ins) or die(mysqli_error($conn));
            echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="login.php";</script>';
        }else{
            header("Location: reform.php?error=Mật khẩu cẩn có 8 kí tự, 1 kí tự chữ số hoặc 1 kí tự hoa hoặc 1 kí tự đặc biệt");
            exit();
        }
    }
}