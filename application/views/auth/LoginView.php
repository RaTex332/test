<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/Bootstrap/bootstrap.min.css'); ?>">
    <title>LOGIN</title>
	<link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">

</head>
<body>




    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			</div>
			<div class="row justify-content-center">

				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(/assets/img/bg-1.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
						<img src="/assets/img/logo_plusdimmo.png">
			      	<div class="d-flex">			
			      		<div class="w-100">
			      			<h3 class="mb-4"></h3>
			      		</div>
			      	</div>
					<form class="container" action="<?php echo base_url('user/dashboard'); ?>" method="post">		
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Email</label>
			      			<input class="form-control" type="email" name="email"  id="email"  pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" title="Veuillez entrer votre adresse email"  required aria-required="true" placeholder="Entrer votre adresse email">
                              <?php echo form_error('email'); ?>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		                <input class="form-control"type="password" name="password"  id="password" minlength="8"  title="Veuillez entrer votre mot de passe" placeholder="Entrer votre Mot De Passe">
                        <?php echo form_error('password'); ?>
		            </div>
		            <div class="form-group"> 
		            	<input type="submit" class="form-control btn btn-primary rounded submit px-3" value="CONNECT">
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
    </form>



    <script src="<?php echo base_url('assets/js/Bootstrap/bootstrap.min.js'); ?>"></script>

</body>
</html>