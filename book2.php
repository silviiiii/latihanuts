<?php
if (isset($_POST['simpan'])) {
  $jdl =$_POST['judul'];
  $grg =$_POST['pengar'];

  foreach ($jdl as $data => $val) {
      echo "Judul buku :".$jdl[$data] .
      "- pengarang :" .$grg[$data] ."<hr>";
  }
}
    ?>