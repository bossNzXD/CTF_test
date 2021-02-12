<?php 
if (empty($_POST['username'])) {
	$message['status'] = "error";
	$message['information'] = "กรุณากรอกชื่อผู้ใช้งานค่ะ";
}elseif (empty($_POST['team'])) {
	$message['status'] = "error";
	$message['information'] = "กรุณากรอกชื่อทีมค่ะ";
}elseif (empty($_POST['password'])) {
	$message['status'] = "error";
	$message['information'] = "กรุณากรอกรหัสผ่านค่ะ";
}elseif (empty($_POST['repassword'])) {
	$message['status'] = "error";
	$message['information'] = "กรุณากรอกยืนยันรหัสผ่านค่ะ";
}elseif (empty($_POST['recaptcha'])) {
	$message['status'] = "error";
	$message['information'] = "กรุณายืนยันRECAPTCHAด้วยค่ะ";
}elseif ($_POST['password']!==$_POST['repassword']) {
	$message['status'] = "error";
	$message['information'] = "รหัสผ่านยืนยันไม่ถูกต้องค่ะ";
}else{
	$keysecret="6Le-jLAZAAAAAIjYBffT5l3s9bIKNt8unRC-77-s";
	$checkbot = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$keysecret}&response={$_POST['recaptcha']}");
	$captcha_status = json_decode($checkbot);
	if ($captcha_status->success=="true") {
		include '../system/system.class.php';
		$class = new system;
		$message = $class->register($_POST['username'],$_POST['team'],password_hash($_POST['password'], PASSWORD_DEFAULT));
	}else{
		$message['status'] = "error";
		$message['information'] = "Recaptchaหมดอายุค่ะ";
	}
}
echo json_encode($message);
?>