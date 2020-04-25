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

<body style="background-image: url('<?= base_url('assets/BG ABU.jpg')?>');">
	<nav class="navbar navbar-expand-lg">
		<a class="navbar-brand" href="<?= base_url()?>"><img width="200px"
				src="<?= base_url('assets/LOGO KECIL MENTALQ.png')?>" alt=""> </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
			aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" style="color: black">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Consult <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Consultant <span class="sr-only">(current)</span></a>
				</li>
			</ul>
			<span class="navbar-text">
				<?php 
                    $logged_in = $this->session->userdata('logged_in');
                ?>
				<a class="nav-link <?= $logged_in ? '' : 'modal-login' ?>" href="#"><?= $logged_in ? 'Nama' : 'Login' ?>
					<span class="sr-only">(current)</span></a>
			</span>
			<span>
				<a class="nav-link login" href="<?= base_url('home/logout') ?>">LogOut <span class="sr-only">(current)</span></a>
			</span>
		</div>
	</nav>

	<div class="main-content">
		<div class="tulisan">
			<h4>Got Stressed?</h4>
			<h4>Come and Consult with Us!</h4>
		</div>

		<div class="trendingtopic">
			<h4>Trending Topic</h4>
			<div class="container">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="card">
								<div class="card-body">
									This is some text within a card body.
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="card">
								<div class="card-body">
									This is some text within a card body.
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="card">
								<div class="card-body">
									This is some text within a card body.
								</div>
							</div>
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
	</div>

	<!-- Modal -->
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
					<form action="" method="post">
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

	<script>
		$(document).ready(function () {
			$('.modal-login').click(function () {
                $('#modalLogin').modal('show');
			});

            $('form').on('submit',function(e) {
                e.preventDefault();
                $.ajax({
                    url: '<?= base_url('home/login') ?>',
                    data: $('form').serialize(),
                    type: 'post',
                    dataType: 'json',
                    success: function(data) {
                        switch (data.status) {
                            case 'success':
                                window.location = '<?= base_url('home') ?>';
                                break;
                            case 'error':
                                Swal.fire({
                                    title: 'Log In Error!',
                                    text: "Email or password ain't correct!",
                                    icon: 'error',
                                })
                                break;
                            case 'validation_error':
                                $.each(data, function(key, value) {
                                    if (value) {
                                        $('.' + key).addClass('is-invalid');
                                        $('.' + key).parents('.form-group').find('#error-'+key).html(value);
                                        $('.' + key).on('keyup', function () { 
                                            $('.' + key).removeClass('is-invalid');
                                            $('.' + key).parents('.form-group').find('#error-' + key).html(" ");
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

            $('#modalLogin').on('show.bs.modal',function() {
                $('.form-control').removeClass('is-invalid');
                $('.errormess').html('');
            });
		});

	</script>
</body>

</html>
