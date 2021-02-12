<?php 
if ($class->checklevelid($id)==0) {
	header("Location: /lobby"); 
}else{
	$loaddatalevel = $class->loaddatalevel($id);
	$checksuccess = $class->checksuccesslevel($loaddatalevel->id);
	?>
	<div class="container mt-4">
		<?php if ($checksuccess == 1) { ?>
			<div class="ht-tm-element my-3 alert alert-dismissible fade show alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<strong>คุณทำข้อนี้เสร็จแล้วนะ</strong> ต้องการทำอีกรอบใช่ไหม?
			</div>
		<?php } ?>
		<div class="card">
			<div class="card-body ml-3">
				<h2 class="d-inline">เรื่อง <?= $loaddatalevel->title; ?></h2> <?php if ($checksuccess == 1) { ?>
					<p class="d-inline" style="color: #00C851;">( ผ่านแล้ว )</p>
				<?php }else{ ?>
					<p class="d-inline" style="color: #ff4444;">( ยังไม่ผ่าน )</p>

				<?php } ?>
				<br>
				<a href="/lobby" class="text-decoration-none text-light ml-3">( กลับหน้าแรก )</a>
			</div>	
		</div>
		<div class="card my-3">
			<div class="card-body ml-3">
				<form id="sendanswer" method="POST">
					<hr class="mt-4">
					<p style="text-indent: 70px;"><?php echo htmlspecialchars($loaddatalevel->proposition); ?></p>
					<?php if ($loaddatalevel->proposition_image !== '0') { ?>
						<hr>
						<div class="text-center my-3">
							<img src="<?php echo htmlspecialchars($loaddatalevel->proposition_image) ?>" class="img-fluid">
						</div>
					<?php } ?>
						<hr>
					<div class="ht-tm-element input-group mb-3">
						<input type="text" class="form-control" placeholder="คำตอบ" id="answer" id_level="<?php echo $loaddatalevel->id; ?>">
						<div class="input-group-append">
							<button class="btn btn-success" type="submit">ตกลง</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$("#sendanswer").on("submit", function(e){
			e.preventDefault();
			var answer = $("#answer").val();
			var level = $("#answer").attr('id_level');
			$.ajax({
				type:"POST",
				url:"/controller/api/sendanswer.php",
				data:{answer:answer,level:level},
				success:function(data){
					var obj = JSON.parse(data);
					if (obj.status=="success"){
						Swal.fire({
							icon: 'success',
							title: 'ส่งคำตอบ',
							text: obj.information,
							timer: 2000,
							timerProgressBar: true,
							confirmButtonColor: '#00C851',
						}).then((result) => {
							window.location.href='/lobby';
						})
					}else{
						Swal.fire({
							icon: 'error',
							title: 'ส่งคำตอบ',
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











<?php } ?>
