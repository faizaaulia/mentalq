<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="<?= base_url('assets/css/home.css')?>">
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.4.1.js" crossorigin="anonymous"> </script>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"> </script>
	<!-- Google Font -->
	<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
	<!-- SweetAlert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<title>mentalQ</title>
</head>

<body style="background-image: url('<?= base_url('assets/img/BG ABU.jpg')?>');">
	<nav class="navbar navbar-expand-lg">
		<a class="navbar-brand" href="<?= base_url()?>"><img width="200px" src="<?= base_url('assets/img/LOGO KECIL MENTALQ.png')?>" alt=""> </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" style="color: black">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<?php 
				$logged_in = $this->session->userdata('logged_in'); 
				$role = $this->session->userdata('role');
			?>
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<!-- <a class="nav-link" href="<?= $role == 'consultants' ? 'consultant/replyConsult' : 'patient/consultpatient' ?>">Consult <span class="sr-only">(current)</span></a> -->
				</li>
				<li class="nav-item active">
					<!-- <a class="nav-link" href="<?= $role == 'consultants' ? 'consultant/consultant' : 'patient/consultant' ?>">Consultant <span class="sr-only">(current)</span></a> -->
				</li>
			</ul>
			<span class="navbar-text">
				<a class="nav-link <?= $logged_in ? '' : 'modal-login' ?>" href="<?=$logged_in ? ($role == 'consultants' ? 'consultant/showprofile' : 'patient/showprofile') : '#' ?>"><?= $logged_in ? ($role == 'consultants' ? $profile->namaConsultant : $profile->namaPasien) : 'Login' ?>
					<span class="sr-only">(current)</span>
				</a>
			</span>
			<span>
				<a class="nav-link login <?= $logged_in ? 'modal-logout' : 'modal-regist' ?>" href="<?= $logged_in ? base_url('home/logout') : '#' ?>"><?= $this->session->userdata('logged_in') ? 'Logout' : 'Register' ?> 
					<span class="sr-only">(current)</span>
				</a>
			</span>
		</div>
	</nav>

	<div class="main-content">
		<div class="trendingtopic">
			<div class="container">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img width="60%" src="<?= base_url('assets/img/bullying.png')?>">
						</div>
						<div class="carousel-item">
							<img width="60%" src="<?= base_url('assets/img/stressed.png')?>">
						</div>
						<div class="carousel-item">
							<img width="60%" src="<?= base_url('assets/img/under_pressure.png')?>">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
		<div class="tulisan">
			<p>A lot of things in your mind ?</p>
			<p>Come and Consult with Us !</p>
		</div>
		<div class="lore pt-2 pb-5">
			A mental disorder, also called a mental illness or psychiatric disorder, is a behavioral or mental pattern that causes significant distress or impairment of personal functioning. Such features may be persistent, relapsing and remitting, or occur as a single episode. Many disorders have been described, with signs and symptoms that vary widely between specific disorders. Such disorders may be diagnosed by a mental health professional.
			The causes of mental disorders are often unclear. Theories may incorporate findings from a range of fields. Mental disorders are usually defined by a combination of how a person behaves, feels, perceives, or thinks. This may be associated with particular regions or functions of the brain, often in a social context. A mental disorder is one aspect of mental health. Cultural and religious beliefs, as well as social norms, should be taken into account when making a diagnosis.
		</div>
	</div>
	<!-- Modal Login -->
	<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" style="font-weight: 600;">Login</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('home/login') ?>" method="post">
						<div class="form-group">
							<label class="email">Email</label>
							<input type="text" class="form-control email" name="email" placeholder="Email">
							<div id="error-email" class="errormess"></div>
						</div>
						<div class="form-group">
							<label class="password">Password</label>
							<input type="password" class="form-control password" name="password" placeholder="Password">
							<div id="error-password" class="errormess"></div>
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<input type="submit" class="btn btn-login btn-modal" value="Login">
				</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal Register -->
	<div class="modal fade" id="modalRegist" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" style="font-weight: 600;">Register</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('home/register') ?>" method="post">
						<div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control name" name="name" placeholder="Name">
                            <div id="error-name" class="errormess"></div>
                    	</div>
                        <div class="form-group">
                        	<label>Gender</label>
                            <div class="radio-container custom-control custom-control-inline">
                            	<div class="custom-control custom-radio custom-control-inline">
                                	<input type="radio" class="custom-control-input gender" name="gender" id="male" value="male">
                                    <label class="custom-control-label" for="male">Male</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input gender" name="gender" id="female" value="female">
                                    <label class="custom-control-label" for="female">Female</label>
                            	</div>
                        	</div>
							<div id="error-gender" class="errormess"></div>
						</div>
						<div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control address" name="address" placeholder="Address">
                            <div id="error-address" class="errormess"></div>
                    	</div>
						<div class="form-group">
                            <label>Phone Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">+62</span>
                                </div>
                                <input type="number" class="form-control phone" name="phone" placeholder="Phone Number">
        						</div>
                            <div id="error-phone" class="errormess"></div>
						</div>
						<div class="form-group">
							<label>Age</label>
							<input type="number" class="form-control age" name="age" placeholder="Age">
                            <div id="error-age" class="errormess"></div>
                        </div>
						<div class="form-group">
							<label class="email">Email</label>
							<input type="text" class="form-control email" name="email-regist" placeholder="Email">
							<div id="error-email" class="errormess"></div>
						</div>
						<div class="form-group">
							<label class="password">Password</label>
							<input type="password" class="form-control password" name="password-regist" placeholder="Password">
							<div id="error-password" class="errormess"></div>
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<input type="submit" class="btn btn-login btn-modal" value="Register">
				</div>
				</form>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function () {
			$('.modal-login').click(function () {
				$('#modalLogin').modal('show');
			});

			$('.modal-logout').click(function(e) {
				e.preventDefault();
				Swal.fire({
                    title: 'Logging Out',
                    text: 'Are you sure you want to logout?',
                    icon: 'warning',
                    showCancelButton: true,
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, logout'
                }).then((result) => {
					if (result.value)
						window.location.replace('<?= base_url('home/logout') ?>');
				});
			});

			$('.modal-regist').click(function(e) {
				e.preventDefault();
				$('#modalRegist').modal('show');
			});

			$('form').on('submit', function (e) {
				e.preventDefault();
				const URL = this.action;
				$.ajax({
					url: URL,
					data: $('form').serialize(),
					type: 'post',
					dataType: 'json',
					success: function (data) {
						switch (data.status) {
							case 'success-login':
								window.location = '<?= base_url('home') ?>';
								break;
							case 'success-regist':
								Swal.fire(
                                    'Success!',
                                    'Register succeed!',
                                    'success'
                                );
								$('#modalRegist').modal('hide');
								$('#modalLogin').modal('show');
							break;
							case 'error':
								Swal.fire({
									title: 'Log In Error!',
									text: "Email or password ain't correct!",
									icon: 'error',
								})
								break;
							case 'validation_error':
								var loginModal = $('#modalLogin').hasClass('show');
								Swal.fire({
									title: loginModal ? 'Log In Error!' : 'Register Error!',
									text: "Something went wrong!",
									icon: 'error',
								})
								$.each(data, function (key, value) {
									if (value) {
										$('.' + key).addClass('is-invalid');
										$('.' + key).parents('.form-group').find('#error-' + key).html(value);
										$('.' + key).on('keyup', function () {
											$('.' + key).removeClass('is-invalid');
											$('.' + key).parents('.form-group').find('#error-' + key).html(" ");
										});
										$('.gender').click(function() {
                                            $('.gender').removeClass('is-invalid');
                                            $('.gender').parents('.form-group').find('#error-' + key).html(" ");
                                        });
									}
								});
								break;
							default:
								break;
						}
					}
				});
			})

			$('.modal').on('show.bs.modal', function () {
				$('.form-control').removeClass('is-invalid');
				$('.errormess').html('');
			});
		});

	</script>
	<style>
		/* remove input type number arrow */
        /* Chrome, Safari, Edge, Opera */
		::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        	-webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        	input[type=number] {
            -moz-appearance: textfield;
        }
	</style>
</body>

</html>