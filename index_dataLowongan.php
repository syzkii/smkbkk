<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" type="text/css">

    <title>Hello, world!</title>
  </head>
  <body>

  <script>
    $(document).ready(function() {
        $( ".mr-auto .nav-item" ).bind( "click", function(event) {
            event.preventDefault();
            var clickedItem = $( this );
            $( ".mr-auto .nav-item" ).each( function() {
                $( this ).removeClass( "active" );
            });
            clickedItem.addClass( "active" );
        });
    });
  </script>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand font-weight-bold" href="index.php">BKK SMK Semen Gresik</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto mx-auto">
        <ul class="navbar-nav mr-auto">
            <a class="nav-item nav-link" href="index.php">Beranda<span class="sr-only">(current)</span></a>
        <li class="nav-item active">
            <a class="nav-item nav-link" href="index_dataLowongan.php">Data Lowongan</a>
        </li>
          <a class="nav-item nav-link" href="index_dataPelamar.php">Data Pelamar</a>
          <a class="nav-item nav-link" href="index_dataLamaran.php">Data Lamaran</a>
      </div>
    </div>
  </nav>
	

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>