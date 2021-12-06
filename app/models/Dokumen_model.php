<?php

class Dokumen_model {
    public function getFileRekomendasi($nim='')
    {
        ($nim=='') ? $nim = $_SESSION['nim'] : '';
        echo BASEURL . 'public/dokumen/rekomendasi/' . $nim . '.pdf';
    }
}