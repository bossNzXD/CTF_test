<?php 
$levelshow = $class->getlevelshow();
?>
<div class="container mt-5">
	<div class="ht-tm-cat ht-tm-btn-replaceable wow fadeInUp">
		<h3 class="ht-tm-cat-title">โจทย์ทั้งหมด</h3> <a href="/home" class="text-decoration-none text-light">( กลับหน้าแรก )</a>
		<div class="ht-tm-codeblock">
			<?php 
			if ($levelshow==0) {
				?>
				<style type="text/css">
					.pd-products {
						min-height: 300px;
					}
				</style>
				<a href="/home">
					<div class="mt-5 pd-products hvr-bob uc-shadow-none" style="background-image: url('https://edsurge.imgix.net/uploads/post/image/11914/teaching-1552092162.jpg')">
						<div class="products-info">
							<h5 class="products-title text-center">ไม่มีข้อสอบเลยสักข้อ กลับหน้าแรกกัน</h5>
						</div>
					</div>
				</a>
				<?php
			}else{
				?>
				<style type="text/css">
					.pd-products {
						min-height: 150px;
					}
				</style>
				<div class="row">
					<?php $i = 1;
					foreach ($levelshow as $data) { ?>
						<div class="col-lg-3 mb-4" style="padding-top: 10px;">
							<a href="/level/<?= $data->id; ?>">
								<div class="pd-products hvr-bob uc-shadow-none" style="background-image: url('<?php echo $data->title_image; ?>')">
									<div class="products-info">
										<h5 class="products-title">ข้อ<?php echo $i++; echo " ".$data->title;?></h5>
										<?php if ($class->checksuccesslevel($data->id) == 1) { ?>
											<p class="products-check" style="color: #00C851;">( ผ่านแล้ว )</p>
										<?php }else{ ?>
											<p class="products-check" style="color: #ff4444;">( ยังไม่ผ่าน )</p>
										<?php } ?>
										<p class="products-text"><?php echo $data->reward;?> คะแนน</p>
									</div>
								</div>
							</a>
						</div>
					<?php } ?>

				</div>
			<?php } ?>
		</div>
	</div>
</div>