<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Creativora Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body class="gradient-b">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-4">
				<div class="px-5">
					<div class="card blue-shadow border-0 border-radius-2 login-wrap">
						<?php
							if (isset($_GET['pesan'])) {
								if($_GET['pesan'] == "gagal"){
						?>
						<div class="card-header">
							<p class="text-danger d-table mx-auto mb-0 text-uppercase ls-1 font-weight-bold font-14"><?php echo "GAGAL LOGIN"; ?></p>
						</div>
						<?php
								} else if($_GET['pesan'] == "belum_login"){
									?>
									
									<div class="card-header">
										<p class="text-danger d-table mx-auto mb-0 text-uppercase ls-1 font-weight-bold font-14"><?php echo "SILAHKAN LOGIN TERLEBIH DAHULU"; ?></p>
									</div>

									<?php
								}
							}
						?>
						<div class="card-body text-center py-5 px-4">
							<div class="w-100 text-center mb-4">
								<p class="d-table mx-auto mb-0 text-uppercase ls-1 font-weight-bold pb-2 border-b-blue font-14">Sign In</p>
							</div>
							<img src="assets/img/login.jpg" height="150" class="mb-2">
							<form action="auth.php" method="POST">
								<div class="login-form mb-2">
									<input type="text" name="username" placeholder="User Name" class="text-center w-100 px-2 border-radius-1 font-14 ls-1">
								</div>
								<div class="login-form mb-2">
									<input type="password" name="password" placeholder="Password" class="text-center w-100 px-2 border-radius-1 font-14 ls-1">
								</div>
								<div class="login-button">
									<input type="submit" value="Login" class="text-uppercase text-white border-0 border-radius-1 w-100 font-14"> 
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>