<html>
    <head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="<?= base_url('assets/css/consultant.css')?>">
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.4.1.js" crossorigin="anonymous"> </script>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"> </script>
	<!-- Google Font -->
	<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
	<!-- SweetAlert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<title>List Consultant | mentalQ</title>
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

	<div class="listconsultant">List of Consultants</div>
        <hr>
     <div class="container mt-4">
            <?php foreach ($consultants as $consultant): ?>
                <div class="row mt-3">
                    <div class="kartu m-auto">
                        <div class="card">
                            <a class="showModal" href="<?= base_url('Consultant/showConsultant/').$consultant->noSTR?>" data-toggle="modal">
                            <?php if($consultant->photo==''){?>
                                <img src="<?=base_url('assets/img/CONSULTANT-ICON.png')?>" width:200px alt="">
                            <?php }else{ ?>
                                <img class="photoprofile" src="<?=base_url('assets/img/Consultants/').$consultant->photo?>" width:300px alt="">
                            <?php }?>
                                <div class="card-body">
                                    <p style="font-size: 24px;"><?= $consultant->namaConsultant ?></p>
                                    <p style="color: #bdbdbd;"><?= $consultant->jenisPsikologi ?></p>
                                    <p style="color: #bdbdbd;"><img src="<?= base_url('assets/img/BRIEFCASE ICON.png')?>" style="width:4%; margin-top: 2px; margin-right: 10px;"><?= $consultant->lamaPsikologi ?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

            <div class="modal fade bd-Doc1-modal-lg" tabindex="-1" role="dialog"
                          aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                  <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                            <div class="listconsultant">Consultant Profile</div><hr>
                                            <img src="" class="thumbnail ProfilePhoto" alt="...">
                                            <br>
                                            <div class="namacard namaConsultant"></div>
                                            <div class="typecard jenisPsikologi"></div>
                                            <hr>
                                            <div class="textcard ">Year Experience </div>
                                            <div class="typecard lamaPsikologi"></div>
                                            <br>
                                            <div class="textcard ">Tempat Praktik </div>
                                            <div class="kontencard tempatPraktik"></div>
                                            <br>
                                            <div class="textcard ">Alumni</div>
                                            <div class="kontencard alumni"></div>
                                            <br>
                                            <div class="textcard ">E-mail</div>
                                            <div class="kontencard email"></div>
                                            <br>
                                            <div class="textcard ">Phone Number</div>
                                            <div class="kontencard noHP"></div>
                                            <br>
                                            <div class="textcard ">Work Hours</div>
                                            <div class="kontencard jamKerja"></div>
                                            <br>
                                            <div class="textcard ">Schedule Date</div>
                                            <div class="kontencard schedule"></div>
                                            <br>
                                            <div class="textcard ">STR Number</div>
                                            <div class="kontencard noSTR"></div>
                                            <br>
                              </div>
                          </div>
                      </div>
    
     </div>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('.showModal').on('click', function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: this.href,
                        dataType: 'json',
                        success: function (res) {
                            console.log(res.profile);
                            $('.bd-Doc1-modal-lg').modal('show');
                            $('.namaConsultant').html(res.profile.namaConsultant);
                            $('.jenisPsikologi').html(res.profile.jenisPsikologi);
                            $('.lamaPsikologi').html(res.profile.lamaPsikologi);
                            $('.tempatPraktik').html(res.profile.tempatPraktik);
                            $('.alumni').html(res.profile.alumni);
                            $('.noSTR').html(res.profile.noSTR);
                            $('.email').html(res.profile.email);
                            $('.noHP').html(res.profile.noHP);
                            $('.jamKerja').html(res.profile.jamKerja);
                            $('.schedule').html(res.profile.schedule);
                            $('.profilePhoto').attr('src',res.baseURL + res.profile.photo);
                        }
                    });
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