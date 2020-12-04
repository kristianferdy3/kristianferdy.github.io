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

    <title>Tambah Data Barang</title>
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
              <a class="nav-link active" href="#">Tambah Data</a>
              <a class="nav-link" href="hitung.php">Hitung Berat Barang</a>
            </div>
          </div>
        </div>
       </nav>
       <!-- End Navbar -->

       <!-- Jumbotron -->
        <div class="jumbotron jumbotron-fluid mt-3">
          <div class="container">
            <h1 class="display-4">Rabanton</h1>
            <p class="lead">Web untuk menghitung berat barang produk</p>
          </div>
        </div>
       <!-- End Jumbotron -->

       <!-- Content -->
       <div class="container">
           <div class="row mb-4">
            <!-- Tambah Barang -->
               <div class="col-lg-6">
                    <div class="card mb-5" style="width: auto;">
                      <div class="card-body">
                        <h3 class="card-title text-center ">Tambah Data Barang</h3>
                        <div class="input-group mb-3">
                         <div class="input-group-prepend">
                            <span class="input-group-text mr-3" id="kodebarang">Kode Barang</span>
                         </div>
                        <input type="text" class="form-control" placeholder="Kode Barang" aria-label="kodebarang" aria-describedby="kodebarang" onkeypress="">
                        </div>
                        <div class="input-group mb-3">
                         <div class="input-group-prepend">
                            <span class="input-group-text mr-2" id="namabarang">Nama Barang</span>
                         </div>
                        <input type="text" class="form-control" placeholder="Nama Barang" aria-label="namabarang" aria-describedby="namabarang">
                        </div>  
                        <button type="button" class="btn btn-secondary btn-lg btn-block mt-4">Simpan</button>
                      </div>
                    </div>
                    <!-- Table Data -->
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

               </div>
               <!-- Tambah besi -->
               <div class="col-lg-6">
                   <div class="card besi mb-5" style="width: auto;">
                      <div class="card-body">
                        <h3 class="card-title text-center mb-5">Tambah Data Besi</h3>
                        <div class="input-group mb-3">
                         <div class="input-group-prepend">
                            <span class="input-group-text mr-3" id="typebesi">Type Besi</span>
                         </div>
                        <input type="text" class="form-control" placeholder="Type Besi" aria-label="typebesi" aria-describedby="typebesi">
                        </div>
                        <button type="button" class="btn btn-secondary btn-lg btn-block mt-4">Simpan</button>
                      </div>
                   </div>
                   <!-- Table Data -->
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
                    </tbody>    
                </table>
                

               </div>
           </div>
       </div>
       <!-- End Content -->

       <!-- Footer -->
       <footer class="bg-secondary text-white">
        <div>
            <p class="text-center align-middle">&#169; RABANTON 2020 <br> Support By Rabanton IT</p>
        </div>
       </footer>
       <!-- End Footer -->


    <!-- My Script  -->
    <script type="text/javascript"></script>

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