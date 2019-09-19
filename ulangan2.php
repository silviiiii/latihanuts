<html>
    <head>
    <title>Toko Buku</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    
    </head>
    <body>
    <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="index.png" width="70" height="60" class="d-inline-block align-top" alt="">
    SMK ASSALAAM
  </a>
</nav>
    <form action="ulangan3.php" method="POST">
    <center><h2>Toko Buku</h2></center>
    
    <div class="container">
        <div class="row" style="padding:10px;">
            <div class="col-md-12">
                <div class= "card">
                    <div class="card-header">keterangan Buku</div>
                     <?php
        if (isset($_GET['input'])) {
           $jlm = $_GET['jumlah'];
           for ($a=0; $a < $jlm ; $a++) { ?>
                    <div class="card-body">
    
             <div class="form-group">
                                <label for=""> judul</label>
                                <input type="text" name="judul[]" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for=""> kode buku</label>
                                <input type="text" name="kode[]" class="form-control"  required>
                                </div>
                                 <div class="form-group">
                                <label for=""> pengarang</label> 
                                <input type="text" name="ngarang[]" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for=""> jenis buku</label>
                                <select name="jb">
                                <option value="">jenis buku</option>
                                <option value="novel">novel</option>
                                <option value="fiksi">fiksi</option>
                                <option value="horor">horor</option>
                                <option value="cergam">cergam</option>
                                <option value="komik">komik</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for=""> harga buku</label>
                                <input type="number" name="harga[]" class="form-control" required>
                            </div>
           
           </div>
           
                <br>
           <?php } ?> 
            <input type="submit" name="sbm" value="Simpan">
            <input type="reset" value="Reset">
            </form>      
           <?php } ?>
        
</body>
</html>