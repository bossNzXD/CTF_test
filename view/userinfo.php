<?php 
$profile = $class->getprofile();
$ranking = $class->ranking();
foreach ($ranking as $data) {
	if($data['team_info']->username == $profile->username){
		$response = $data;
	}
}
// print_r($ranking);
// exit();
?>
<div class="container mt-5">
	<div class="card wow fadeInUp">
		<div class="card-body">
			<div class="">
				<h3 class="card-title ">ข้อมูลส่วนตัว</h3>
				<a href="/home" class="text-decoration-none text-light"><small>( กลับหน้าแรก )</small></a>
				<hr color="white">
				<div class="row">
					<div class="col-lg-5 my-3 hvr-float">
						<div class="card wow fadeInUp">
							<div class="card-body">
								<p>- ชื่อผู้ใช้งาน : <?php echo htmlspecialchars($profile->username); ?></p>
								<p>- ชื่อทีม : <?php echo htmlspecialchars($profile->team); ?></p>
								<p>- คะแนนรวมในทีม : <?php echo htmlspecialchars($profile->point); ?> POINT</p>
								<p>- จำนวนข้อที่ผ่าน : <?php echo $class->countlevelsuccess(); ?>/<?php echo $class->countlevelall(); ?> level</p>
								<p>- จัดอันดับ : <?php echo $response['rank']; ?>/<?php echo $class->countteamall(); ?> ทีม</p>
								<div class="text-right mr-4 my-2">	
								<p id="date" class="d-inline"></p> | 
								<p class="d-inline" id="time">00:00:00</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-7 my-3 hvr-float">
						<div class="card  wow fadeInUp">
							<div class="card-body">
								<form id="resetpassword" method="POST">
									<h5 class="card-title">เปลื่ยนรหัสผ่าน</h5>
									<div class="form-group">
										<input type="password" class="form-control text-center" id="oldpassword" placeholder="รหัสผ่านเดิม">
									</div>
									<div class="form-group">
										<input type="password" class="form-control text-center" id="password" placeholder="รหัสผ่านใหม่">
									</div>
									<div class="form-group">
										<input type="password" class="form-control text-center" id="repassword" placeholder="ยืนยันรหัสผ่านใหม่">
									</div>
									<div class="text-right">
										<button type="submit" class="btn btn-success">ตกลง</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
					var today = new Date();
			var dd = today.getDate();
		var mm = today.getMonth()+1;
		var yyyy = today.getFullYear();
		if(dd<10) {
			dd='0'+dd
		} 

		if(mm<10) {
			mm='0'+mm
		} 

		today = mm+'/'+dd+'/'+yyyy;
		document.getElementById("date").innerHTML = today;
		var myVar=setInterval(function(){myTimer()},1000);

		function myTimer() {
			var d = new Date();
			document.getElementById("time").innerHTML = d.toLocaleTimeString();
		}
		$("#resetpassword").on("submit",function(e){
			e.preventDefault();
			var oldpassword = $("#oldpassword").val();
			var password = $("#password").val();
			var repassword = $("#repassword").val();
			if (password==repassword){
				$.ajax({
					type:"POST",
					url:"controller/api/changepassword.php",
					data:{
						oldpassword:oldpassword,
						password:password
					},success:function(data){
						var obj = JSON.parse(data);
						if (obj.status=="success"){
							Swal.fire({
								icon: 'success',
								title: 'เปลื่ยนรหัสผ่าน',
								text: obj.information,
								timer: 2000,
								timerProgressBar: true,
								confirmButtonColor: '#00C851',
							})
						}else{
							Swal.fire({
								icon: 'error',
								title: 'เปลื่ยนรหัสผ่าน',
								text: obj.information,
								timer: 2000,
								timerProgressBar: true,
								confirmButtonColor: '#00C851',
							})
						}
					}
				});
			}else{
				Swal.fire({
					icon: 'error',
					title: 'เปลื่ยนรหัสผ่าน',
					text: "รหัสผ่านยืนยันไม่ถูกต้อง",
					timer: 2000,
					timerProgressBar: true,
					confirmButtonColor: '#00C851',
				})
			}
		});
	</script>