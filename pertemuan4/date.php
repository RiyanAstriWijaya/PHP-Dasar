<?php
    echo date("l, d-M-Y");  //untuk mengelola tanggal dengan format tertentu
    echo "<br>";
    echo time(); //detik yang sudah berlalu sejak 1 januari 1970 (php ada)
    echo "<br>";
    echo date("l, d M Y", time()+60*60*24*100); //untuk mengecek seratus hari kedepan
    echo "<br>";
    echo date( "l" ,mktime(0,0,0,1,17,2002)); //membuat sendiri detik dengan format mktime (0,0,0,0,0,0) atau (jam,menit,detik,bulan,tanggal,tahun)
?>