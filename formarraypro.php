<?php
if (isset($_POST['sbm'])) {
  $nama =$_POST['nama'];
  $kelas =$_POST['kelas'];

  foreach ($nama as $data => $val) {
      echo "nama saya :".$nama[$data] .
      "- kelas :" .$kelas[$data] ."<hr>";
  }
}
    ?>