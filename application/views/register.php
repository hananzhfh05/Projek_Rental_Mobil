<HTML>
<HEAD>
<TITLE>User Registration</TITLE>
<link rel="stylesheet" href="<?php echo base_url('dist/css/phppot-style.css')?>">
<link rel="stylesheet" href="<?php echo base_url('dist/css/user-registration.css')?>">
<!-- register css -->
<link rel="stylesheet" href="<?php echo base_url('dist/css/register.css')?>">
</HEAD>
<BODY style="background-image:url(<?php echo base_url('dist/img/mobil_bg.jpg')?>)">	
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
                <a href="<?php echo base_url('index.php/login')?>" style="color:white;">Login</a>
			</div>
			<div class="signup-align">
					<div class="signup-heading"  style="color:white;">Registrasi</div>
			<!-- <div class=""> -->
            <?php echo form_open('register/save')?>
				<!-- <div class="error-msg" id="error-msg"></div> -->
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
								Email<span class="required error" id="email-info"></span>
							</div>
							<input class="input-box-330" type="email" name="email" id="email">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="signup-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="password1" id="signup-password">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Confirm Password<span class="required error"
									id="confirm-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="password2" id="confirm-password">
						</div>
					</div>
					<div class="row">
					<input class="btn" type="submit" onclick="return signupValidation()" name="signup-btn"
							id="signup-btn" value="Sign up">
					</div>
				    <?php echo form_close()?>
			</div>
		</div>
	</div>
<script src="<?php echo base_url('dist/js/jquery-3.3.1.js')?>"></script>
<!-- Script register -->
<script src="<?php echo base_url('dist/js/register.js')?>"></script>
</BODY>
</HTML>
