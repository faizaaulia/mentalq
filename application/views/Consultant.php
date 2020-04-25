<html>
    <head>
        <title>Mentalq</title>
        <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/Consultant.css')?>">

        <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
        crossorigin="anonymous">
    </head>
    <body style="background-image: url('<?= base_url('assets/img/BG ABU.jpg')?>');"> 
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="home.html"><img width="200px" src="<?= base_url('assets/img/LOGO KECIL MENTALQ.png')?>"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="<?= base_url('Patient/ConsultPatient')?>">Consult <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('Consultant/Consultant')?>">Consultant <span class="sr-only">(current)</span></a>
                </li>
              </ul>
              <span class="navbar-text">
                <a class="nav-link profile" href="#">Nama <span class="sr-only">(current)</span></a>
              </span>
              <span>
                <a class="nav-link login" href="#">LogOut <span class="sr-only">(current)</span></a>
              </span>
            </div>
        </nav>

        <h1>Consultant</h1>
        <!-- Search form -->
        <input class="form-control active-cyan-4" type="text" placeholder="Search" aria-label="Search" style="width:300px; margin: auto; text-align: center;">

     <div class="container mt-4">
            <?php foreach ($consultants as $consultant): ?>
                <div class="row mt-3">
                    <div class="kartu m-auto">
                        <div class="card">
                            <a class="showModal" href="<?= base_url('Consultant/showConsultant/').$consultant->noSTR?>" data-toggle="modal">
                                <img src="<?= base_url('assets/img/Consultants/').$consultant->photo?>">
                                <div class="card-body">
                                    <p style="font-size: 24px;"><?= $consultant->namaConsultant ?></p>
                                    <p style="color: #bdbdbd;"><?= $consultant->jenisPsikologi ?></p>
                                    <p style="color: #bdbdbd;"><img src="<?= base_url('assets/img/BRIEFCASE ICON.png')?>" style="width:4%; margin-top: 5px; margin-right: 5px;"><?= $consultant->lamaPsikologi ?></p>
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
                                      <div class="container">
                                          <div class="col-md-6 "><img class="ProfilePhoto" src=""></div>
                                          <div class="row">
                                              <div class="col-md-7">

                                                    <p class="namaConsultant" style="font-size: 32px; color: #454545; margin-top: 5px;"></p>
                                                    <p class="jenisPsikologi" ></p>
                                                    <p class="lamaPsikologi" style="color: #bdbdbd; margin-top: -20px; font-size: 23px;"><img src="<?= base_url('assets/img/BRIEFCASE ICON.png')?>" style="width:10%; margin-top: 5px; margin-right: 5px;"></p>
                                                    <p>Work Place</p>
                                                    <p class="tempatPraktik" style="color: #bdbdbd; margin-top: -20px; font-size: 23px;"></p>
                                                    <p>Alumni</p>
                                                    <p class="alumni" style="color: #bdbdbd; margin-top: -20px; font-size: 23px;"></p>
                                                    <p>Nomor STR</p>
                                                    <p class="noSTR" style="color: #bdbdbd; margin-top: -20px; font-size: 23px;"></p>
                                                    <p>Email</p>
                                                    <p class="email" style="color: #bdbdbd; margin-top: -20px; font-size: 23px;"></p>
                                                    <p>Phone Number</p>
                                                    <p class="noHP" style="color: #bdbdbd; margin-top: -20px; font-size: 23px;"></p>
                                                    <p>Work Hours</p>
                                                    <p class="jamKerja" style="color: #bdbdbd; margin-top: -20px; font-size: 23px;"></p>
                                                    <p>Schedule Date</p>
                                                    <p class="schedule" style="color: #bdbdbd; margin-top: -20px; font-size: 23px;"></p>
                                          
                                              </div>
                                          </div>
                                      </div>
                                  </div>
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
                })
            })
        </script>
    </body>

</html>