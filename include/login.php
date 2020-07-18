<div class="container">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-danger" style="margin-top:50px;margin-bottom:100px;">
		<!--  -->
			<div class="panel-heading">
				<h4 style="margin:0px;"><b>Login Admin | Go Clean</b></h4>
			</div>
		<!--  -->
		<form class="form-horizontal" method="post">
			<div class="panel-body">
				<!--  -->
					<div class="form-group">
						<div class="col-md-4">
							<label class="control-label">Username</label>
						</div>
						<div class="col-md-8">
							<input type="text" name="user" class="form-control" placeholder="Masukkan Username">
						</div>
					</div>
				<!--  -->
					<div class="form-group">
						<div class="col-md-4">
							<label class="control-label">Password</label>
						</div>
						<div class="col-md-8">
							<input type="password" name="pass" class="form-control" placeholder="Masukkan Password">
						</div>
					</div>
				<!--  -->
					<div class="form-group">
						<div class="col-md-4">
							<label class="control-label">Captcha</label>
						</div>
						<?php 
						$a = rand(1,10);
						$b = rand(1,10);
						$_SESSION['c'] = ($a + $b);
						?>
						<div class="col-md-8">
							<input type="text" name="capt" class="form-control"
							placeholder="<?php echo "$a"." + "."$b"; ?>">
						</div>
					</div>
				<!--  -->
					<div class="col-md-8 col-md-offset-4">
						<input type="submit" name="login" value="Login" class="btn btn-info">
					</div>
			</div>
		</form>
		<!--  -->
		</div>
	</div>
</div>