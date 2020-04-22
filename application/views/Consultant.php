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
                  <a class="nav-link" href="<?= base_url('Patient/Consult')?>">Consult <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('Consultant/showConsultant')?>">Consultant <span class="sr-only">(current)</span></a>
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
          <div class="row mt-3">
              <div class="kartu m-auto">
                  <div class="card">
                      <a href="" data-toggle="modal" data-target=".bd-Doc1-modal-lg">
                          <img src="ASSET/doc1.jpg">
                          <div class="card-body">
                              <p  style="font-size: 24px;">dr.Cimoy Montox</p>
                              <p style="color: #bdbdbd;">Kids Psicologyst</p>
                              <p style="color: #bdbdbd;"><img src="<?= base_url('assets/img/BRIEFCASE ICON.png')?>" style="width:4%; margin-top: 5px; margin-right: 5px;">1 year</p>
                          </div>
                      </a>
                      
                      <div class="modal fade bd-Doc1-modal-lg" tabindex="-1" role="dialog"
                          aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                  <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                      <div class="container">
                                          <div class="col-md-6"><img src="ASSET/doc1.jpg"></div>
                                          <div class="row">
                                              <div class="col-md-7">
                                                  <p style="font-size: 32px; color: #454545; margin-top: 5px;">dr.Cimoy Montox</p>
                                                  <p>Kids Psicologyst</p>
                                                  <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;"><img src="<?= base_url('assets/img/BRIEFCASE ICON.png')?>" style="width:10%; margin-top: 5px; margin-right: 5px;">1 year</p>
                                                  <p>Work Place</p>
                                                  <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">RS.BUNDA MANIA</p>
                                                  <p>Alumni</p>
                                                  <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">Universitas Telkom</p>
                                                  <p>Nomor STR</p>
                                                  <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">0987654721</p>
                                                  <p>Email</p>
                                                  <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">Cimoymontox@gmail.com</p>
                                                  <p>Phone Number</p>
                                                  <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">0856789123</p>
                                                  <p>Work Hours</p>
                                                  <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">08:30 AM</p>
                                                  <p>Schedule Date</p>
                                                  <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">02/02/2020</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="card">
                    <a href="" data-toggle="modal" data-target=".bd-Doc2-modal-lg">
                        <img src="ASSET/doc2.jpg">
                        <div class="card-body">
                            <p  style="font-size: 24px;">dr.Kuproy</p>
                            <p style="color: #bdbdbd;">Kids Psicologyst</p>
                            <p style="color: #bdbdbd;"><img src="<?= base_url('assets/img/BRIEFCASE ICON.png')?>" style="width:4%; margin-top: 5px; margin-right: 5px;">1 year</p>
                        </div>
                    </a>
                    <div class="modal fade bd-Doc2-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                    <div class="container">
                                        <div class="col-md-6"><img src="ASSET/doc2.jpg"></div>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <p style="font-size: 32px; color: #454545; margin-top: 5px;">dr.Kuproy</p>
                                                <p>Kids Psicologyst</p>
                                                <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;"><img src="<?= base_url('assets/img/BRIEFCASE ICON.png')?>" style="width:10%; margin-top: 5px; margin-right: 5px;">1 year</p>
                                                <p>Work Place</p>
                                                <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">RS.BUNDA MANIA</p>
                                                <p>Alumni</p>
                                                <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">Universitas Telkom</p>
                                                <p>Nomor STR</p>
                                                <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">0987654721</p>
                                                <p>Email</p>
                                                <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">Cimoymontox@gmail.com</p>
                                                <p>Phone Number</p>
                                                <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">0856789123</p>
                                                <p>Work Hours</p>
                                                <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">08:30 AM</p>
                                                <p>Schedule Date</p>
                                                <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">02/02/2020</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                  <a href="" data-toggle="modal" data-target=".bd-Doc3-modal-lg">
                      <img src="ASSET/doc3.jpg">
                      <div class="card-body">
                          <p  style="font-size: 24px;">dr.Alim</p>
                          <p style="color: #bdbdbd;">Kids Psicologyst</p>
                          <p style="color: #bdbdbd;"><img src="<?= base_url('assets/img/BRIEFCASE ICON.png')?>" style="width:4%; margin-top: 5px; margin-right: 5px;">1 year</p>
                      </div>
                  </a>
                  
                  <div class="modal fade bd-Doc3-modal-lg" tabindex="-1" role="dialog"
                      aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                              <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                  <div class="container">
                                      <div class="col-md-6"><img src="ASSET/doc3.jpg"></div>
                                      <div class="row">
                                          <div class="col-md-7">
                                              <p style="font-size: 32px; color: #454545; margin-top: 5px;">dr.Alim</p>
                                              <p>Kids Psicologyst</p>
                                              <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;"><img src="<?= base_url('assets/img/BRIEFCASE ICON.png')?>" style="width:10%; margin-top: 5px; margin-right: 5px;">1 year</p>
                                              <p>Work Place</p>
                                              <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">RS.BUNDA MANIA</p>
                                              <p>Alumni</p>
                                              <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">Universitas Telkom</p>
                                              <p>Nomor STR</p>
                                              <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">0987654721</p>
                                              <p>Email</p>
                                              <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">Cimoymontox@gmail.com</p>
                                              <p>Phone Number</p>
                                              <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">0856789123</p>
                                              <p>Work Hours</p>
                                              <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">08:30 AM</p>
                                              <p>Schedule Date</p>
                                              <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">02/02/2020</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="card">
                <a href="" data-toggle="modal" data-target=".bd-Doc4-modal-lg">
                    <img src="ASSET/doc4.jpg">
                    <div class="card-body">
                        <p  style="font-size: 24px;">dr.Bowo</p>
                        <p style="color: #bdbdbd;">Kids Psicologyst</p>
                        <p style="color: #bdbdbd;"><img src="<?= base_url('assets/img/BRIEFCASE ICON.png')?>" style="width:4%; margin-top: 5px; margin-right: 5px;">1 year</p>
                    </div>
                </a>
                
                <div class="modal fade bd-Doc4-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                                <div class="container">
                                    <div class="col-md-6"><img src="ASSET/doc4.jpg"></div>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <p style="font-size: 32px; color: #454545; margin-top: 5px;">dr.Bowo</p>
                                            <p>Kids Psicologyst</p>
                                            <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;"><img src="<?= base_url('assets/img/BRIEFCASE ICON.png')?>" style="width:10%; margin-top: 5px; margin-right: 5px;">1 year</p>
                                            <p>Work Place</p>
                                            <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">RS.BUNDA MANIA</p>
                                            <p>Alumni</p>
                                            <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">Universitas Telkom</p>
                                            <p>Nomor STR</p>
                                            <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">0987654721</p>
                                            <p>Email</p>
                                            <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">Cimoymontox@gmail.com</p>
                                            <p>Phone Number</p>
                                            <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">0856789123</p>
                                            <p>Work Hours</p>
                                            <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">08:30 AM</p>
                                            <p>Schedule Date</p>
                                            <p style="color: #bdbdbd; margin-top: -20px; font-size: 23px;">02/02/2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

              </div>
          </div>
      </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

</html>