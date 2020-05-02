
<html>
    <head>
        <title>Mentalq</title>
        <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/ConsultPasien.css')?>">

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
                    <a class="nav-link" href="<?= base_url('patient/Consultant')?>">Consultant <span class="sr-only">(current)</span></a>
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
        <h1>Consult</h1>
        <p class="p1">What's Happen?</p>
        <form id="consult" action="<?= base_url('Patient/inputKeluhan')?>" method='post'>
            <textarea rows="7" cols="70" id="keluhan"name="keluhan" form="consult" style="margin-left: 343px;"></textarea>

        <p class="p1">Select Consultant</p>
        <select name="ConsultantList" style="margin-left: 343px;">
          <?php foreach ($consultants as $consultant): ?>
            <option value="<?= $consultant->noSTR ?>"><?= $consultant->namaConsultant ?> ( <?= $consultant->jamKerja ?>, <?= $consultant->schedule ?>, <?= $consultant->tempatPraktik ?> )</option>
          <?php endforeach ?>
        </select>
        <br>
        <input type="submit" class="button" value="Set" >
        </form>
        
    </body>
</html>