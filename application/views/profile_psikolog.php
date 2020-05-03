<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="<?= base_url('assets/css/profile_psikolog.css')?>">
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.4.1.js" crossorigin="anonymous"> </script>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"> </script>
	<!-- Google Font -->
	<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
	<!-- SweetAlert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<title>Profile | mentalQ</title>
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
					<a class="nav-link" href="<?= $role == 'consultants' ? 'replyConsult' : 'consultpatient' ?>">Consult <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="<?= $role == 'consultants' ? 'consultant' : 'consultant' ?>">Consultant <span class="sr-only">(current)</span></a>
				</li>
			</ul>
			<span class="navbar-text">
				<a class="nav-link <?= $logged_in ? '' : 'modal-login' ?>" href="<?=$logged_in ? ($role == 'consultants' ? 'showprofile' : 'showprofile') : '#' ?>"><?= $logged_in ? ($role == 'consultants' ? $profile->namaConsultant : $profile->namaPasien) : 'Login' ?>
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
  
  <div class="card" style="width: 50rem;">
     <br>
     <div class="patientcard">Consultant Profile</div>
     <hr>
     <br>
        <div class="row">

            <div class="col-md-4">
              <?php if($profile->photo==''){?>
                <img src="<?=base_url('assets/img/CONSULTANT-ICON.png')?>" width:200px alt="">
              <?php }else{ ?>
                <img class="photoprofile" src="<?=base_url('assets/img/Consultants/').$profile->photo?>"  width:200px>
              <?php }?>
            </div>
            <div class="col-md-8">
                <div class="textcard">Name</div>
                <div class="kontencard"><?php echo $consultants->namaConsultant?> </h3></div>
                <br>
                <div class="textcard">Gender</div>
                <div class="kontencard"><?php echo $consultants->gender?> </h3></div>
                <br>
                <div class="textcard">Psychology Type</div>
                <div class="kontencard"><?php echo $consultants->jenisPsikologi?> </h3></div>
                <br>
                <div class="textcard">Year Experience</div>
                <div class="kontencard"><?php echo $consultants->lamaPsikologi?> </h3></div>
                <br>
                <div class="textcard">Work Place</div>
                <div class="kontencard"><?php echo $consultants->tempatPraktik?> </h3></div>
                <br>
                <div class="textcard">Alumni</div>
                <div class="kontencard"><?php echo $consultants->alumni?> </h3></div>
                <br>
                <div class="textcard">Email</div>
                <div class="kontencard"><?php echo $consultants->email?> </h3></div>
                <br>
                <div class="textcard">Phone Number</div>
                <div class="kontencard"><?php echo $consultants->noHP?> </h3></div>
                <br>
                <div class="textcard">Work Hours</div>
                <div class="kontencard"><?php echo $consultants->jamKerja?> </h3></div>
                <br>
                <div class="textcard">Schedule Date</div>
                <div class="kontencard"><?php echo $consultants->schedule?> </h3></div>
                <br>
                <div class="textcard">STR Number</div>
                <div class="kontencard"><?php echo $consultants->noSTR?> </h3></div>
                <br>
                <hr>
                <form>
                <a class="btn btn-set" href="updateprofile" role="button">Edit Profile</a>
                </form>
                
            </div>
        </div>
    </div>
    <br>
    <script>
		$(document).ready(function () {    
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