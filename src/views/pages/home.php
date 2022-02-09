<!DOCTYPE html>
<html lang="pt">
<head>
	<title>Login | Estacionamento rotativo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="<?php echo _BASE_ASS_; ?>images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?php echo _BASE_ASS_; ?>vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo _BASE_ASS_; ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo _BASE_ASS_; ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo _BASE_ASS_; ?>vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo _BASE_ASS_; ?>vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo _BASE_ASS_; ?>vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo _BASE_ASS_; ?>vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo _BASE_ASS_; ?>vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo _BASE_ASS_; ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo _BASE_ASS_; ?>css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/img/wp.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Login no sistema
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="<?php echo _BASE_END_ ?>login">

					<div class="wrap-input100 validate-input" data-validate = "Informe o usuário">
						<input class="input100" type="text" name="usuario" placeholder="Usuário">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Informe a senha">
						<input class="input100" type="password" name="senha" placeholder="Senha">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<?php 
						if(isset($_SESSION['message'])){
							echo '<br>'.$_SESSION['message'];
							unset($_SESSION['message']);
						}
					?>
				</form>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>
	
	<script src="<?php echo _BASE_ASS_; ?>vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo _BASE_ASS_; ?>vendor/animsition/js/animsition.min.js"></script>
	<script src="<?php echo _BASE_ASS_; ?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo _BASE_ASS_; ?>vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo _BASE_ASS_; ?>vendor/select2/select2.min.js"></script>
	<script src="<?php echo _BASE_ASS_; ?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo _BASE_ASS_; ?>vendor/daterangepicker/daterangepicker.js"></script>
	<script src="<?php echo _BASE_ASS_; ?>vendor/countdowntime/countdowntime.js"></script>
	<script src="<?php echo _BASE_ASS_; ?>js/main.js"></script>

</body>
</html>