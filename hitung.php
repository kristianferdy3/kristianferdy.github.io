<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Hitung Berat Berang</title>
  </head>
  <body>
  <!-- Navbar -->
       <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container">
          <a class="navbar-brand" href="#">Rabanton</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-5">
              <a class="nav-link" href="index.php">Tambah Data</a>
              <a class="nav-link active" href="#">Hitung Berat Barang</a>
            </div>
          </div>
        </div>
       </nav>
  <!-- End Navbar -->

  <!-- Content -->
  <div class="container">
      <div class="card mt-5 mb-5" style="width: auto;">
            <div class="card-body">
                <h3 class="card-title text-center ">Tambah Data Barang</h3>
                <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kode Barang</label>
                <select class="form-control" style="width: 250px;">
                  <option>Default select</option>
                </select>
                </div>

                 <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Volume</label>
                   <input type="text" class="form-control" id="inputPassword" style="width: 250px;" onkeypress="return hanyaAngka(event)">
                 </div>

                 <div class="form-group row">
                   <label class="col-sm-2 col-form-label">Keterangan</label>
                   <textarea class="form-control" style="width: 250px;"></textarea>

                 </div>

                 <div class="form-group row">
                   <label class="col-sm-2 col-form-label">Type Besi</label>
                   <select class="form-control" style="width: 250px;">
                     <option>Default select</option>
                    </select>
                 </div>
                 <div class="form-group row">
                  <div class="form-group col-sm-2">
                   <label class="col-form-label">Diameter</label>
                   <input type="text" class="form-control"  style="width: 150px;" onkeypress="return hanyaAngka(event)">
                  </div>
                  <div class="form-group col-sm-2">
                   <label class="col-form-label">Panjang</label>
                   <input type="text" class="form-control"  style="width: 150px;" onkeypress="return hanyaAngka(event)">
                  </div>
                  <div class="form-group col-sm-2">
                   <label class="col-form-label">Jumlah</label>
                   <input type="text" class="form-control"  style="width: 150px;" onkeypress="return hanyaAngka(event)">
                  </div>
                  <div class="form-group col-sm-2">
                   <label class="col-form-label" >.</label>
                  <button type="button" class="btn btn-secondary form-control">Add</button>
                  </div>
                </div>


                <div style="overflow: scroll; height: 200px">
                    <table class="table table-striped table-dark">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>coba 1</td>
                          <td>coba 2</td>
                          <td>coba 3</td>
                        </tr>
                        <tr>
                          <th scope="row">1</th>
                          <td>coba 1</td>
                          <td>coba 2</td>
                          <td>coba 3</td>
                        </tr>
                        <tr>
                          <th scope="row">1</th>
                          <td>coba 1</td>
                          <td>coba 2</td>
                          <td>coba 3</td>
                        </tr>
                        <tr>
                          <th scope="row">1</th>
                          <td>coba 1</td>
                          <td>coba 2</td>
                          <td>coba 3</td>
                        </tr>
                        <tr>
                          <th scope="row">1</th>
                          <td>coba 1</td>
                          <td>coba 2</td>
                          <td>coba 3</td>
                        </tr>
                    </tbody>
                </table>
                </div>
                
                <div class="form-group row berat">
                  <label class="col-sm-4 col-form-label">Total Berat Besi</label>
                   <input type="text" class="form-control" style="width: 250px;">
                </div>
                <div class="form-group row">
                  <button type="button" class="btn btn-secondary form-control btn_hitung">Hitung</button>
                </div>
                 <div class="form-group row beratbarang">
                  <label class="col-sm-5 col-form-label">Total Berat Barang</label>
                   <input type="text" class="form-control" style="width: 250px;">
                 </div>
                  <div class="form-group row">
                  <button type="button" class="btn btn-secondary form-control btn_hitung">Simpan</button>
                </div>
                </div>
            </div>
      </div>
  </div>
  <!-- End Content -->

    <!-- My Script -->
    <script type="text/javascript" src="js/script.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>