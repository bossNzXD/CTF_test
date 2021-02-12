<?php 
include 'connect.class.php';
class system extends pdo_mysql{
	function __construct(){
		$this->db = $this->DB_PDO();
		$this->user_id = (!empty($_SESSION['user_id'])) ? $_SESSION['user_id'] : NULL;
		$this->username = (!empty($_SESSION['username'])) ? $_SESSION['username'] : NULL;
	}
	public function fitter($text){
		$pattern_eng = "/^[a-zA-Z0-9ก-๙เ]{1,}$/";
		if (preg_match($pattern_eng,$text)) {
			return 0;
		}else{
			return 1;
		}
	}
	public function get_client_ip() {
		$ipaddress = NULL;
		if(isset($_SERVER['HTTP_CLIENT_IP'])){
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		}elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}elseif(isset($_SERVER['HTTP_X_FORWARDED'])){
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		}elseif(isset($_SERVER['HTTP_FORWARDED_FOR'])){
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		}elseif(isset($_SERVER['HTTP_FORWARDED'])){
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		}elseif(isset($_SERVER['REMOTE_ADDR'])){
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		}else{
			$ipaddress = 1;
		}
		return $ipaddress;
	}
	public function register($username,$team,$password){
		$ip = $this->get_client_ip();
		$checkxssuser = $this->fitter($username);
		$checkxssteam = $this->fitter($team);
		if ($checkxssuser==1) {
			$message['status'] = "error";
			$message['information'] = "ไม่สามารถใช้อักษรพิเศษได้ ใช้ได้เฉพาะ A-Z,ก-ฮ เท่านั้นค่ะ";
		}elseif($checkxssteam==1){
			$message['status'] = "error";
			$message['information'] = "ไม่สามารถใช้อักษรพิเศษได้ ใช้ได้เฉพาะ A-Z,ก-ฮ เท่านั้นค่ะ";
		}else{
			$checkuser = $this->db->prepare("SELECT * FROM member WHERE username = :username");
			$checkuser->execute([':username'=>$username]);
			$checkip = $this->db->prepare("SELECT * FROM member WHERE ip = :ip");
			$checkip->execute([':ip'=>$ip]);
			$checkteam = $this->db->prepare("SELECT * FROM member WHERE team = :team");
			$checkteam->execute([':team'=>$team]);
			if ($checkuser->rowcount() > 0){
				$message['status'] = "error";
				$message['information'] = "มีusernameนี้อยู่ในระบบอยู่แล้วค่ะ";
			}elseif ($checkip->rowcount() > 0){
				$message['status'] = "error";
				$message['information'] = "มีการสมัครด้วยIP: ".$ip." นี้อยู่ในระบบอยู่แล้วค่ะ";
			}elseif ($checkteam->rowcount() > 0){
				$message['status'] = "error";
				$message['information'] = "มีชื่อทีม ".$team." อยู่ในระบบแล้วค่ะ";
			}elseif($ip==1){
				$message['status'] = "error";
				$message['information'] = "No found IP!";
			}else{
				$adduser = $this->db->prepare("INSERT INTO member(username, ip, password,team) VALUES (:username,:ip,:password,:team)");
				try {
					$adduser->execute([
						':username'=>$username,
						':ip'=>$ip,
						':password'=>$password,
						':team'=>$team,
					]);
					$message['status'] = "success";
					$message['information'] = 'สมัครสมาชิกสำเร็จแล้วค่ะ!!';
				} catch (Exception $e) {
					$message['status'] = "error";
					$message['information'] = $e->getmessage();
				}
			}
		}
		return $message;
	}
	public function login($username,$password){
		$stmt = $this->db->prepare("SELECT * FROM member WHERE username = :username");
		$stmt->execute([':username'=>$username]);
		if ($stmt->rowcount() > 0) {
			$result = $stmt->fetch();
			if (password_verify($password, $result->password)) {
				$_SESSION['user_id'] = $result->id;
				$_SESSION['username'] = $result->username;
				$message['status'] = "success";
				$message['information'] = "เข้าสู่ระบบสำเร็จ";
			}else{
				$message['status'] = "error";
				$message['information'] = "รหัสผ่านไม่ถูกต้อง";
			}
		}else{
			$message['status'] = "error";
			$message['information'] = "ไม่พบชื่อผู้ใช้งาน ".$username." อยู่ในระบบ";
		}
		return $message;
	}
	public function getprofile(){
		$stmt = $this->db->prepare("SELECT * FROM member WHERE id = :user_id");
		$stmt->execute([':user_id'=>$this->user_id]);
		$result = $stmt->fetch();
		return $result;
	}
	public function changepassword($oldpassword,$password){
		$check = $this->db->prepare("SELECT password FROM member WHERE id = :user_id");
		$check->execute([':user_id'=>$this->user_id]);
		if (password_verify($oldpassword, $check->fetch()->password)){
			$stmt = $this->db->prepare("UPDATE member SET password = :password WHERE id = :user_id");
			try {
				$stmt->execute([':password'=>$password,':user_id'=>$this->user_id]);
				$message['status'] = "success";
				$message['information'] = "เปลื่ยนรหัสผ่านสำเร็จแล้ว";		
			} catch (Exception $e) {
				$message['status'] = "error";
				$message['information'] = $e->getmessage();
			}
		}else{
			$message['status'] = "error";
			$message['information'] = "รหัสผ่านเดิมไม่ถูกต้องค่ะ";
		}
		return $message;
	}
	public function getlevelshow(){
		$stmt = $this->db->prepare("SELECT * FROM level");
		$stmt->execute();
		if ($stmt->rowCount() > 0) {
			while($rows = $stmt->fetch()){
				$result[] = $rows;
			}
			return $result;
		}else{
			return 0;
		}
	}
	public function checksuccesslevel($id){
		$stmt = $this->db->prepare("SELECT * FROM history_level WHERE id_level = :id_level AND user_id = :user_id");
		$stmt->execute([':id_level'=>$id,':user_id'=>$this->user_id]);
		if ($stmt->rowCount() > 0) {
			return 1;
		}else{
			return 0;
		}
	}
	public function countlevelsuccess(){
		$stmt = $this->db->prepare("SELECT COUNT(id) as result FROM history_level WHERE user_id = :user_id");
		$stmt->execute([':user_id'=>$this->user_id]);
		return $stmt->fetch()->result;
	}
	public function countlevelall(){
		$stmt = $this->db->prepare("SELECT COUNT(id) as result FROM level");
		$stmt->execute();
		return $stmt->fetch()->result;
	}
	public function checklevelid($id){
		$stmt = $this->db->prepare("SELECT id FROM level WHERE id = :id");
		$stmt->execute([':id'=>$id]);
		if ($stmt->rowCount() > 0) {
			return 1;
		}else{
			return 0;
		}
	}
	public function countteamall(){
		$stmt = $this->db->prepare("SELECT COUNT(id) as result FROM member");
		$stmt->execute();
		return $stmt->fetch()->result;
	}
	public function loaddatalevel($id){
		$stmt = $this->db->prepare("SELECT * FROM level WHERE id = :id");
		$stmt->execute([':id'=>$id]);
		return $stmt->fetch();
	}
	public function sendanswer($answer,$level){
		if ($this->checklevelid($level)==0){
			$message['status'] = "error";
			$message['information'] = "NO FOUND ID LEVEL!";
		}elseif ($answer!==$this->loaddatalevel($level)->answer) {
			$message['status'] = "error";
			$message['information'] = "คำตอบไม่ถูกต้องน้าาลองดูอีกทีค่ะ";
		}elseif($this->checksuccesslevel($level)==1){
			$message['status'] = "success";
			$message['information'] = "เย้ๆตอบถูกแล้ว!! แต่เราเคยเล่นข้อนี้ไปแล้วนิ=.=";
		}else{
			$addpoint = $this->db->prepare("UPDATE member SET point = point+:reward WHERE id = :user_id");
			$addhistory = $this->db->prepare("INSERT INTO history_level(id_level, user_id) VALUES (:level,:user_id)");
			try {
				$addpoint->execute([':reward'=>$this->loaddatalevel($level)->reward,':user_id'=>$this->user_id]);
				$addhistory->execute([':level'=>$level,':user_id'=>$this->user_id]);
				$message['status'] = "success";
				$message['information'] = "เย้ๆตอบถูกแล้ว!! ได้รับคะแนนไปเลย ".$this->loaddatalevel($level)->reward." คะแนน!!";
			} catch (Exception $e) {
				$message['status'] = "error";
				$message['information'] = $e->getmessage();
			}
		}
		return $message;
	}
	public function ranking(){
		$stmt = $this->db->prepare("SELECT * FROM `member` ORDER BY `member`.`point` DESC");
		$stmt->execute();
		$response = array();
		$rank = 0;
		while ($row = $stmt->fetch()) {
			$rank++;
			$response[] = [
				'rank' => $rank,
				'team_info' => $row
			];
		}
		return $response;
	}
	public function scoreboard(){
		$stmt = $this->db->prepare("SELECT * FROM member ORDER BY point DESC limit 8");
		$stmt->execute();
		while ($row = $stmt->fetch()) {
			$response[] = $row;
		}
		return $response;
	}
}

?>