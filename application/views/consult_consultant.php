<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url('assets/css/consult_consultant.css')?>">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <title>Consult</title>
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

    <div class="card" style="width: 50rem;">
      <div class="card-body">
        <p class="card-text">From</p>
        <p class="card-text name">Masruru Farud</p>
        <hr>
        <p class="card-text">Saya Stres Banyak Tugas aahhh unchhh unch Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <hr>
        <form action="">
          <label for="status">Status : </label>
          <select id="status">
            <option value="Belum Selesai">Belum Selesai</option>
            <option value="Selesai">Selesai</option>
          </select>
          <hr>
          <p class="card-text">Solusi</p>
          <textarea id="solusi" rows="3" cols="83"></textarea>
          <input type="submit" class="tombol_set" value="Set">
        </form>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>