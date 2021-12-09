<?php

class Dokumen_model {
    public function getFileRekomendasi($nim='')
    {
        ($nim=='') ? $nim = $_SESSION['nim'] : '';
        return BASEURL . 'public/dokumen/rekomendasi/' . $_SESSION["nama"] . ' - ' . $nim . '.pdf';
    }
}