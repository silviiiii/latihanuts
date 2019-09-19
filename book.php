<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>latihan 1</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
<!-- header -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="index.png" width="70" height="60" class="d-inline-block align-top" alt="">
    SMK ASSALAAM
  </a>
</nav>
<!-- end header -->

<!-- content -->
<h3><center>Assalaam Book Store</center></h3>
    <div class="container">
        <div class="row" style="padding:10px;">
            <div class="col-md-12">
                <div class= "card">
                    <div class="card-header">Pembelian Buku</div>
                    <div class="card-body">
                        <!-- isi disini -->
                        <form action="book2.php" method="POST">
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
                            <div class="form-group">
                                <button type="submit" name="simpan" class="btn btn-primary">proses</button>
                                <button type="reset"  name="hapus" class="btn btn-info">reset</button>
                            </div>
                            
                        </form>
                       <?php
    if (isset($_GET['simpan'])) {
        $jml_form = $_GET['jumlah'];
        for ($a=1; $a <= $jml_form; $a++) { 
            ?>
        <form action="book2.php" method="post">
        <label for="">judul buku</label>
        <input type="text" name="judul[]" required>
        <label for="">pengarang</label>
        <input type="text" name="pengar[]" required><br>
        <br>
        
        
        <?php
        }

    }
    ?>
       
<!-- end content -->

<!-- js -->
    <!-- jquery pertama -->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.bundle.js"></script>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>