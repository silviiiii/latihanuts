<html>
    <head>
        <title>CheckOut Pembelian</title>
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    </head>
    <body>
     <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="index.png" width="70" height="60" class="d-inline-block align-top" alt="">
    SMK ASSALAAM
  </a>
</nav>
<div class="table-responsive-xl">
  <table class="table">
    ...
  </table>
</div>
<center><h2>kwitansi buku</h2></center>

<div class="container">
        <div class="row" style="padding:10px;">
            <div class="col-md-12">
                <div class= "card">
                    <div class="card-header">Pembelian Buku</div>
                    <div class="card-body">
    
    
    <?php
  
    if (isset($_GET['input'])) {
        $a = $_GET['a'];
        echo $a; 
    }   
    if (isset($_POST['sbm'])) {
        $judul = $_POST['judul'];
         $pengarang = $_POST['ngarang'];
        $kode = $_POST['kode'];
        $buku = $_POST['jb'];
        $harga = $_POST['harga'];
        foreach ($judul as $data => $x) {
            echo "- Judul Buku : " .$judul[$data].
                "<br>- Kode Buku : " .$kode[$data].
                "<br>- Pengarang Buku : " .$pengarang[$data].
                "<br>- Jenis Buku : " .$buku[$data].
                "<br>- Harga Buku :Rp . " .$harga[$data].
                 "<hr>";
           
        }
    
    }
?>          
            </table>
</div>
        </fieldset>
    </body>
</html>