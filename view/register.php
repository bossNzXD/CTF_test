<div class="container mt-3">
	<div class="card wow fadeInUp">
		<div class="card-body">
			<h3 class="card-title text-center">สมัครสมาชิก</h3>
		</div>
	</div>
	<div class="card mt-4 wow fadeInUp">
		<form id="send_register" method="POST">
			<div class="card-body">
				<p class="text-center">สมัครได้แค่ 1user/IP เท่านั้น</p>
				<div class="form-group">
					<input type="text" class="form-control text-center" id="username" placeholder="username">
				</div>
				<div class="form-group">
					<input type="text" class="form-control text-center" id="team" placeholder="team name">
				</div>
				<div class="form-group">
					<input type="password" class="form-control text-center" id="password" placeholder="password">
				</div>
				<div class="form-group">
					<input type="password" class="form-control text-center" id="repassword" placeholder="re password">
				</div>
				<div class="text-right">
					<div class="g-recaptcha my-2" style="display: inline-block;" data-sitekey="6Le-jLAZAAAAAM1phqSVhduUCd8KDdAmb2HM4uLk" data-theme="dark"></div>
				</div>	
				<div class="text-right mt-3">
					<a href="/home" class="my-2 btn btn-danger">กลับหน้าแรก</a>
					<a href="/login" class="my-2 btn btn-warning">เข้าสู่ระบบ</a>
					<button type="submit" class="my-2 btn btn-success">ตกลง</button>
				</div>
			</div>
		</form>
	</div>
</div> 
<script type="text/javascript">
	$("#send_register").on("submit", function(e) {
		e.preventDefault();
		var username = $("#username").val();
		var team = $("#team").val();
		var password = $("#password").val();
		var repassword = $("#repassword").val();
		$.ajax({
			type:"POST",
			url:"/controller/api/register.php",
			data:{
				username:username,
				password:password,
				team:team,
				repassword:repassword,
				recaptcha: grecaptcha.getResponse(),
			},success:function(data){
				var obj = JSON.parse(data)
				if (obj.status=="success"){
					Swal.fire({
						icon: 'success',
						title: 'สมัครสมาชิก',
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
						title: 'สมัครสมาชิก',
						text: obj.information,
						timer: 2000,
						timerProgressBar: true,
						confirmButtonColor: '#00C851',
					})
				}
			}
		});
	});
</script>