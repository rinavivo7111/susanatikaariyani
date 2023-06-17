<?php
  $db_host = "localhost";
  $db_user = "root";
  $db_pass = "";
  $db_name ="user";

  $koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
  if ($koneksi) {
    echo "Koneksi Sukses";
  } else {
    echo "Koneksi Gagal";
  }