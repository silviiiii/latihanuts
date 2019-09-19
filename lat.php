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
    Formulir SMK ASSALAAM
  </a>
</nav>
<!-- end header -->

<!-- content -->
    <div class="container">
        <div class="row" style="padding:10px;">
            <div class="col-md-12">
                <div class= "card">
                    <div class="card-header">formulir PPDB SMK ASSALAAM</div>
                    <div class="card-body">
                        <!-- isi disini -->
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for=""> Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for=""> Alamat</label>
                                <textarea name="alamat" class="form-control" rows="5">
                                </textarea>
                                </div>
                                 <div class="form-group">
                                <label for=""> jenis kelamin</label>
                                <input type="radio" name="jenkel" value="perempuan" cheked>perempuan
                                <input type="radio" name="jenkel" value="laki-laki">laki-laki
                            </div>
                            <div class="form-group">
                                <label for=""> Asal sekolah</label>
                                <input type="text" name="sekolah" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for=""> Nilai B.indonesia</label>
                                <input type="number" name="indo" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for=""> Nilai Matematika</label>
                                <input type="number" name="mtk" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for=""> Nilai IPA</label>
                                <input type="number" name="ipa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for=""> Nilai b.inggris</label>
                                <input type="number" name="inggris" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="simpan" class="btn btn-primary">simpan</button>
                                <button type="reset"  name="hapus" class="btn btn-info">reset</button>
                            </div>
                            
                        </form>
                        <?php
                            if (isset($_POST['simpan'])) {
                                $a= $_POST['nama'];
                                $b= $_POST['alamat'];
                                $c= $_POST['jenkel'];
                                $d= $_POST['sekolah'];
                                $e= $_POST['indo'];
                                $f= $_POST['mtk'];
                                $g= $_POST['ipa'];
                                $h= $_POST['inggris'];

                                $rata=($e+$f+$g+$h)/4;
                                if ($rata > 65) {
                                    $ket= "diterima";
                                }
                                else {
                                    $ket= "tidak diterima";
                                }
                                        }
                        ?>
                    </div>
                </div>
            </div>
     </div>
        <div class="row ">
          <div class="col-md-12">
            <h3><center>hasil</center></h3>
        </div>
              <div class="table-responsive-md">
                <table class="table">
                    <tr>
                        <th>nama</th>
                        <th>alamat</th>
                        <th>jenis kelamin</th>
                        <th>Asal sekolah</th>
                        <th>Nilai b.indonesia</th>
                        <th>Nilai Matematika</th>
                        <th>Nilai IPA</th>
                        <th>Nilai b.inggris</th>
                        <th>rata-rata</th>
                        <th>keterangan</th>
                    </tr>
                <tr>

                    <td><?php echo $a; ?></td>
                    <td><?php echo $b; ?></td>
                    <td><?php echo $c; ?></td>
                    <td><?php echo $d; ?></td>
                    <td><?php echo $e; ?></td>
                    <td><?php echo $f; ?></td>
                    <td><?php echo $g; ?></td>
                    <td><?php echo $h; ?></td>
                    <td><?php echo $rata; ?></td>
                    <td><?php echo $ket; ?></td>
                </tr>
             </div>
        </div>
    </div>
<!-- end content -->

<!-- js -->
    <!-- jquery pertama -->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.bundle.js"></script>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>