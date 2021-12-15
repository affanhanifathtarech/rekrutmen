<?php

$out['data'] = $this->model('Anggota_model')->getAllBiodata();


echo json_encode($out, JSON_PRETTY_PRINT);
