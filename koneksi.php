<?php

    $conn = mysqli_connect("localhost","root","","creativora_pos");

    // check connection
    if(mysqli_connect_errno()){
        echo "Koneksi Gagal : ". mysqli_connect_errno();
    }else{
        echo "Berhasil";
    }

?>