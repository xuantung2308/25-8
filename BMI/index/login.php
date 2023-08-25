<?php 
session_start(); 
include "../conn/db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);	

	if (empty($uname)) {
		header("Location: index.php?error=Hãy điền tên đăng nhập");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Hãy điền mật khẩu");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
				$_SESSION['role'] = $row['role'];

				if($row['role'] == '0'){
					header("Location: ../user/UserPhp/home.php");
					exit();
				}else{
					header("Location: ../admin/header-ad.php");
					exit();
				}
            }else{
				header("Location: index.php?error=Tên đăng nhập hoặc mật khẩu không đúng");
		        exit();
			}
		}else{
			header("Location: index.php?error=Tên đăng nhập hoặc mật khẩu không đúng");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}

?>