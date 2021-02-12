<div class="container mt-3">
	<div class="card wow fadeInUp">
		<div class="card-body">
			<h3 class="card-title text-center">เข้าสู่ระบบ</h3>
		</div>
	</div>
	<div class="card mt-4 wow fadeInUp">
		<form id="send_login" method="POST">		
			<div class="card-body">
				<p class="text-center">กรุณาเข้าสู่ระบบก่อน</p>
				<div class="form-group">
					<input type="text" class="form-control text-center" id="username" placeholder="username">
				</div>
				<div class="form-group">
					<input type="password" class="form-control text-center" id="password" placeholder="password">
				</div>
				<div class="text-right">
					<div class="g-recaptcha my-2" style="display: inline-block;" data-sitekey="6Le-jLAZAAAAAM1phqSVhduUCd8KDdAmb2HM4uLk" data-theme="dark"></div>
				</div>	
				<div class="text-right mt-3">
					<a href="/home" class="my-2 btn btn-danger">กลับหน้าแรก</a>
					<a href="/register" class="my-2 btn btn-warning">สมัครสมาชิก</a>
					<button type="submit" class="my-2 btn btn-success">ตกลง</button>
				</div>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">
	$("#send_login").on("submit", function(e) {
		e.preventDefault();
		var username = $("#username").val();
		var password = $("#password").val();
		$.ajax({
			type:"POST",
			url:"/controller/api/login.php",
			data:{
				username:username,
				password:password,
				recaptcha: grecaptcha.getResponse(),
			},success:function(data){
				var obj = JSON.parse(data)
				if (obj.status=="success"){
					Swal.fire({
						icon: 'success',
						title: 'เข้าสู่ระบบ',
						text: obj.information,
						timer: 2000,
						timerProgressBar: true,
						confirmButtonColor: '#00C851',
					}).then((result) => {
						window.location.href='/home';
					})
				}else{
					Swal.fire({
						icon: 'error',
						title: 'เข้าสู่ระบบ',
						text: obj.information,
						timer: 2000,
						timerProgressBar: true,
						confirmButtonColor: '#00C851',
					})
					console.log(obj);
				}
			}
		});
	});
</script>