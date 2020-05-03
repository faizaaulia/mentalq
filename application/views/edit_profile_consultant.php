<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="<?= base_url('assets/css/edit_profile_consultant.css')?>">
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.4.1.js" crossorigin="anonymous"> </script>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"> </script>
	<!-- Google Font -->
	<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
	<!-- SweetAlert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<title>Edit Profile | mentalQ</title>
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
     <div class="patientcard">Edit Profile</div>
     <hr>

    <div class="kotakprofile">
		<?php
			$notifsukses = $this->session->flashdata('notifsukses');
			$notiferror = $this->session->flashdata('notiferror');

			if (!empty($notifsukses)) 
				echo "<div class='alert alert-success'>$notifsukses</div>";
			if (!empty($notiferror)) 
				echo "<div class='alert alert-danger'>$notiferror</div>";
		?>
        <form action="<?=base_url('Consultant/setUpdateProfile')?>" method="POST" enctype='multipart/form-data'>
        <div class="row">
            <div class="col-md-4">

              <?php if($profile->photo==''){?>
                <img src="<?=base_url('assets/img/CONSULTANT-ICON.png')?>" width:200px alt="">
              <?php }else{ ?>
                <img class="photoprofile" src="<?=base_url('assets/img/Consultants/').$profile->photo?>" width:200px alt="">
              <?php }?>
			  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="photo">
                    <label class="custom-file-label" for="customFile">Update Photo</label>
                  </div>

            </div>
            <div class="col-md-8">
                <p class="namaconsultant"><?=$profile->namaConsultant ?></p>
                <hr>
                <p class="kotaktext">Consultant Type</p>
                <input type="text" name="jenisPsikologi" class="form_edit_profile_consultant" value="<?=$profile->jenisPsikologi ?>"> 
                <br>
                <p class="kotaktext">Year Experience</p>
                <input type="text" name="lamaPsikologi" class="form_edit_profile_consultant" value="<?=$profile->lamaPsikologi ?>">
                <p class="kotaktext">Work Place</p>
                <input type="text" name="tempatPraktik" class="form_edit_profile_consultant" value="<?=$profile->tempatPraktik ?>">
                <p class="kotaktext">Email</p>
                <input type="text" name="email" class="form_edit_profile_consultant" value="<?=$profile->email ?>">
                <p class="kotaktext">Phone Number</p>
                <input type="text" name="noHP" class="form_edit_profile_consultant" value="<?=$profile->noHP ?>">
                <p class="kotaktext">Work Hours</p>
                <input type="text" name="jamKerja" class="form_edit_profile_consultant" value="<?=$profile->jamKerja ?>">
                <p class="kotaktext">Schedule Date</p>
                <input type="date" name="schedule" class="form_edit_profile_consultant" value="<?=$profile->schedule?>">
                <hr>
                <input type="submit" class="btn btn-set" role="button" value="Save">
            </div>
        </div>
    </form>
    </div>



  </body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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