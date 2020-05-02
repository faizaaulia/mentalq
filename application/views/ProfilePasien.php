<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/ProfilePasien.css')?>">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <title>My Profile</title>
  </head>
  <body style="background-image: url('<?= base_url('assets/BG ABU.jpg')?>');">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="<?= base_url('tes/home')?>"><img width="200px" src="<?= base_url('assets/LOGO KECIL MENTALQ.png')?>" alt=""> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
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
            <!-- <a class="nav-link profile" href="#">Nama <span class="sr-only">(current)</span></a> -->
            <a class="nav-link profile" href="#"><?php echo $patients->namaPasien?> <span class="sr-only">(current)</span></a>
          </span>
          <span>
            <a class="nav-link login" href="#">LogOut <span class="sr-only">(current)</span></a>
          </span>
        </div>
    </nav>

    <div class="kotakprofile">
        <div class="row">
            <div class="col-md-4">
                <img src="<?= base_url('assets/PATIENT ICON.png')?>" alt="">
            </div>
            <div class="col-md-8">
                
                <!-- <h3 class="namapasien">Masruru Farud</h3> -->
                <h3 class="namapasien"><?php echo $patients->namaPasien?> </h3>
                <br>
                <h6>Gender</h6>
                <!-- <h5>Male</h5> -->
                <h5><?php echo $patients->gender?></h5>
                <br>
                <h6>Email</h6>
                <!-- <h5>blablablablabla@gmail.com</h5> -->
                <h5><?php echo $patients->email?></h5>
                <br>
                <h6>Address</h6>
                <!-- <h5>Jalan Telekomunikasi</h5> -->
                <h5><?php echo $patients->alamat?></h5>
                <br>
                <h6>Phone Number</h6>
                <!-- <h5>088812345678</h5> -->
                <h5><?php echo $patients->noHP?></h5>
                <br>
                <h6>Age</h6>
                <!-- <h5>29 Years Old</h5> -->
                <h5><?php echo $patients->umur?> Years Old</h5>
                
            </div>
        </div>
    </div>
    
    <form>
        <a class="btn btn-primary" href="#" role="button">Edit Profile</a>
        <a class="btn btn-primary" href="#" role="button">Delete Profile</a>
    </form>
    
    <section class="consultset">
        <div class="tulisanconsult">
            <h3>Consult Set</h3>
        </div>
        <?php foreach($consult->result() as $cs): ?>
          <div class="kotakconsult">
            <div class="isikotak">
                <h6>To</h6>
                <h5 class="dokter"><?php echo $cs->namaConsultant?></h5>
                <h6><?php echo $cs->keluhan?></h5>
                <div class="container">
                    <div class="row">
                        <h6>Status: </h6>
                        <h6 class="status"> <?php echo $cs->status?></h6>    
                    </div>
                <div class="row">
                    <h6>Solusi: </h6>
                    <h6> <?php echo $cs->solusi?></h6>
                </div>
            </div>
        </div>    
        </div>
        <?php endforeach ?>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>