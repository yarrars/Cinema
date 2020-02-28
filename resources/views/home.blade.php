@extends('layouts.main')

@section('content')
<title>Animaxx | Dashboard</title>
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container">
        <h3 align="center">Sedang Tayang</h3>
        <br>
        <div class="row" id="load_data">
          <?php
            $con = mysqli_connect("localhost", "root","", "bioskop");
            $query = "SELECT * FROM films ORDER BY filmID ASC";
            $dewan1 = $con->prepare($query);
            $dewan1->execute();
            $res1 = $dewan1->get_result();
            while ($row = $res1->fetch_assoc()) {
              $id = $row["filmID"];
              $foto = $row["image"];
              $genre = $row["genre"];
              $judul = $row["judul"];
              if (strlen($judul) > 60) {
                $judul = substr($judul, 0, 60) . "...";
              }
              $deskripsi = $row["sinopsis"];
              if (strlen($deskripsi) > 100) {
                $deskripsi = substr($deskripsi, 0, 100) . "...";
              }
          ?>
            <div class="col-sm-3 mb-3">
              <div class="card">
                <img src="{{asset('upload/'.$foto)}}"class="card-img-top" alt="gambar" width="100px" height="270px">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $judul; ?></h5>
                  <p class="card-text">Sinopsis: <?php echo $deskripsi; ?></p>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><?php echo $genre; ?></small>
                  </div>
              </div>
            </div>
          <?php } ?>

        </div>
    </div>


  </section>
@endsection