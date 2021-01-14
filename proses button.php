<?php

        $simpan1=$_POST['simpan1'];
        $simpan2=$_POST['simpan2'];
        $tanggal=date("h:i:s");
        $buka=fopen("hasil.html",'a');
        fwrite($buka,"button : ${simpan1} <br> ");
        fwrite($buka,"button : ${simpan2} <br> ");
        fwrite($buka,"dibuat : ${tanggal} <br> ");
        fclose($buka);
   
?>