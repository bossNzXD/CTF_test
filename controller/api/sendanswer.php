<?php 
if (empty($_POST['answer'])) {
	$message['status'] = "error";
	$message['information'] = "กรุณากรอกคำตอบก่อนค่ะ";
}elseif (empty($_POST['level'])) {
	$message['status'] = "error";
	$message['information'] = "LEVEL NULL?";
}else{
	include '../system/system.class.php';
	$class = new system;
	$message = $class->sendanswer($_POST['answer'],$_POST['level']);
}
echo json_encode($message);
 ?>