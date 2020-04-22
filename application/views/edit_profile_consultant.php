<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url('assets/css/edit_profile_consultant.css')?>">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <title>Edit Profile</title>
  </head>
  <body style="background-image: url('<?= base_url('assets/img/BG ABU.jpg')?>');">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="home.html"><img width="200px" src="<?=base_url('assets/img/LOGO KECIL MENTALQ.png')?>" alt=""> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link consult" href="#" >Consult <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
              <a class="nav-link" href="#">Consultant <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <span class="navbar-text">
          <a class="nav-link profile" href="#" >Nama <span class="sr-only">(current)</span></a>
        </span>
        <span>
          <a class="nav-link login" href="#">LogOut <span class="sr-only">(current)</span></a>
        </span>
      </div>
    </nav>

    <div class="kotakprofile">
        <form action="">
        <div class="row">
            <div class="col-md-4">
                <img src="<?=base_url('assets/img/CONSULTANT-ICON.png')?>" width:200px alt="">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose Photo</label>
                  </div>
            </div>
            <div class="col-md-8">
                <p class="namaconsultant">dr. Cimoy Montox</p>
                <hr>
                <p class="kotaktext">Consultant Type</p>
                <input type="text" name="consultant_type" class="form_edit_profile_consultant" placeholder="Kids Psychologyst">
                <br>
                <p class="kotaktext">Year Experience</p>
                <input type="text" name="year_experience" class="form_edit_profile_consultant" placeholder="1 year">
                <p class="kotaktext">Work Place</p>
                <input type="text" name="work_place" class="form_edit_profile_consultant" placeholder="RS. BUNDA MANIA">
                <p class="kotaktext">Email</p>
                <input type="text" name="email" class="form_edit_profile_consultant" placeholder="cimoymontox@gmail.com">
                <p class="kotaktext">Phone Number</p>
                <input type="text" name="phonenumber" class="form_edit_profile_consultant" placeholder="082328930989">
                <p class="kotaktext">Work Hours</p>
                <input type="text" name="workhours" class="form_edit_profile_consultant" placeholder="08.30 am">
                <p class="kotaktext">Schedule Date</p>
                <input type="date" name="scheduledate" class="form_edit_profile_consultant">
                <a class="btn btn-primary" href="#" role="button">Save</a>
            
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
  </body>
</html>