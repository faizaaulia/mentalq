<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootsrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url('assets/css/profile_psikolog.css') ?>">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <title>Profile Psikolog | MentalQ</title>
</head>
<body style="background-image: url('<?= base_url('assets/img/BG ABU.jpg')?>');">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="home.html"><img width="200px" src="<?=base_url('assets/img/LOGO KECIL MENTALQ.png') ?>" alt=""> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link consult" href="<?= base_url('Consultant/replyConsult')?>" >Consult <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('Consultant/Consultant')?>">Consultant <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <span class="navbar-text">
            <a class="nav-link profile" href="<?= base_url('Consultant/showProfile')?>" >Nama <span class="sr-only">(current)</span></a>
          </span>
          <span>
            <a class="nav-link login" href="<?= base_url('Home/logout')?>">LogOut <span class="sr-only">(current)</span></a>
          </span>
        </div>
      </nav>
      <div class="kotakprofile">
            <div class="row">
               
                <div class="col-md-4">
                <img src="<?=base_url('assets/img/CONSULTANT-ICON.png') ?>" alt="">
                </div>
                    <div class="col-md-8">
                     
                            <h3 class="namaconsultant"><?=$consultants->namaConsultant?></h3>
                            <br>
                                <h6><?=$consultants->jenisPsikologi?></h6>
                                <h5><?=$consultants->lamaPsikologi?> Tahun</h5>
                            <br>
                                <h6>Work Place</h6>
                                <h5><?=$consultants->tempatPraktik?></h5>
                            <br>
                                <h6>Alumni</h6>
                                <h5><?=$consultants->alumni?></h5>
                            <br>
                                <h6>Nomor STR</h6>
                                <h5><?=$consultants->noSTR?></h5>
                            <br>
                                <h6>Email</h6>
                                <h5><?=$consultants->email?></h5>
                            <br>
                                <h6>Phone Number</h6>
                                <h5><?=$consultants->noHP?></h5>
                            <br>
                                <h6>Work Hours</h6>
                                <h5><?=$consultants->jamKerja?> Hours</h5>
                            <br>
                                <h6>Schedule Date</h6>
                                <h5><?=$consultants->schedule?></h5> 
                    </div>
            </div>
    </div>      
        <form>
            <br>
        <a class="btn btn-primary" href="#" role="button">Edit Profile</a>
        <a class="btn btn-primary" href="#" role="button">Delete Account</a>
        </form>
</body>
</html>