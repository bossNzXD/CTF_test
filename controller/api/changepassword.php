<?php 
include '../system/system.class.php';
if (empty($_POST['oldpassword'])) {
	$message['status'] = "error";
	$message['information'] = "กรุณากรอกรหัสผ่านเก่าด้วยค่ะ";
}elseif (empty($_POST['password'])) {
	$message['status'] = "error";
	$message['information'] = "กรุณากรอกรหัสผ่านใหม่ด้วยค่ะ";
}elseif (empty($_SESSION['user_id'])) {
	$message['status'] = "error";
	$message['information'] = "กรุณาเข้าสู่ระบบก่อนใช้งานค่ะ";
}else{
	$hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$class = new system;
	$message = $class->changepassword($_POST['oldpassword'],$hash);
}
echo json_encode($message);
?>