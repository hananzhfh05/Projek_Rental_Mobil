<HTML>
<HEAD>
<TITLE>Login</TITLE>
<link rel="stylesheet" href="<?php echo base_url('dist/css/phppot-style.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('dist/css/user-registration.css')?>">
<link rel="stylesheet" href="<?php echo base_url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')?>"
 integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- register css -->
<link rel="stylesheet" href="<?php echo base_url('dist/css/login.css')?>">
</HEAD>
<BODY style="background-image:url(<?php echo base_url('dist/img/mobil_bg.jpg')?>)">
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
            <a href="<?php echo base_url('index.php/register')?>" style="color:white;">Sign Up</a>
			</div>
			<div class="signup-align">
					<div class="signup-heading"  style="color:white;">Login</div>
                <?php echo form_open('login/otentikasi')?>
				<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username"
								id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="login-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="password" id="login-password">
						</div>
					</div>
					<div class="row">
                    <input class="btn btn-dark" type="submit" onclick="return loginValidation()" name="login-btn"
							id="login-btn" value="Login Now">
					</div>
                    <?php echo form_close()?>
			</div>
		</div>
	</div>
<script src="<?php echo base_url('dist/js/jquery-3.3.1.js')?>"></script>
<!-- Script login -->
<script src="<?php echo base_url('dist/js/login.js')?>"></script>
</BODY>
</HTML>
