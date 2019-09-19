<html>
    <head>
        <title>Tampilan awal</title>
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    </head>
    <body>
    <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="index.png" width="70" height="60" class="d-inline-block align-top" alt="">
    SMK ASSALAAM
  </a>
</nav>
    <form action="ulangan2.php" method="GET">
    <center><h2>Assalaam book store</h2></center>
    
    <div class="container">
        <div class="row" style="padding:10px;">
            <div class="col-md-12">
                <div class= "card">
                    <div class="card-header">Pembelian Buku</div>
                    <div class="card-body">
                    <form action="" method="POST">
                            <div class="form-group">
                                <label for=""> Nama</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for=""> Alamat</label>
                                <textarea name="alamat" class="form-control" rows="5" required>
                                </textarea>
                                </div>
                                 <div class="form-group">
                                <label for=""> jenis kelamin</label> <br>
                                <input type="radio" name="jenkel" value="perempuan" cheked>perempuan
                                <input type="radio" name="jenkel" value="laki-laki">laki-laki
                            </div>
                            <div class="form-group">
                                <label for=""> Tanggal pembelian</label>
                                <input type="date" name="tgl" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for=""> Jumlah buku</label>
                                <input type="number" name="jumlah" class="form-control" required>
                            </div>
    <br> 
    <input type="submit" name="input" value="Simpan">
    <input type="reset" value="Reset">
    <hr>
    </div>
</form>
    </fieldset>
    </body>
</html>