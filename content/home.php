<div class="container">
	<div class="page-header">
  		<h1>SELAMAT DATANG DI Aplikasi Go Clean | Laundry</h1>
	</div>
	<div class="row">
	<!--  -->
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="text-center">
					<p><img src="assets/dropper/img/avatar.png" class="img-circle img-thumbnail img-responsive" alt=""></p>
					<h3><?php echo $dq['nm_karyawan'] ?></h3>
					<h4 class="text-muted"><strong><?php echo $dq['username']; ?></strong></h4>
					<br>
					<!-- <div class="row">
						<div class="col-md-6 col-sm-6">
							<a href="#foto" data-toggle="modal"
							class="btn btn-block btn-facebook">Ganti Foto</a>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<a href="#sampul" data-toggle="modal" class="btn btn-block btn-twitter">Ganti Sampul</a>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<!--  -->
	<div class="col-md-9">
		<img src="assets/img/laundry1.jpg" class="img-responsive img-thumbnail">
	</div>
	</div>
</div>
<?php 
include 'widget/home-foto.php';
include 'widget/home-sampul.php';
?>