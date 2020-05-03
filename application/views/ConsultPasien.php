
<html>
    <head>
	  <!-- Required meta tags -->
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	  <link rel="stylesheet" href="<?= base_url('assets/css/ConsultPasien.css')?>">
  		<!-- jQuery -->
  		<script src="https://code.jquery.com/jquery-3.4.1.js" crossorigin="anonymous"> </script>
  		<!-- Bootstrap -->
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"> </script>
	  <!-- Google Font -->
	  <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
	  <!-- SweetAlert -->
	  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	  <title>Get Consultation | mentalQ</title>
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
				<a class="nav-link" href="<?='showprofile'?>"><?=$profile->namaPasien?>
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
    <br>
    <div class="setconsult">Get Consultation</div>
	  <div class="setconsult-caption">what's happen ?</div>
    <hr>
    <br>
        <p class="p1">Describe your Problem</p>
        <form id="consult" action="<?= base_url('Patient/inputKeluhan')?>" method='post'>
            <textarea rows="7" id="keluhan"name="keluhan" form="consult" style="margin-left: 220px"></textarea>
        <br>
        <p class="p1">Select your Consultant</p>
        <select name="ConsultantList" style="margin-left: 425px">
          <?php foreach ($consultants as $consultant): ?>
            <option value="<?= $consultant->noSTR ?>"><?= $consultant->namaConsultant ?> ( <?= $consultant->jamKerja ?>, <?= $consultant->schedule ?>, <?= $consultant->tempatPraktik ?> )</option>
          <?php endforeach ?>
        </select>
        <br>
        <input type="submit" class="btn btn-set" value="Send" >
        </form>
        

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