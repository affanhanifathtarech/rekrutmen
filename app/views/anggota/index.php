<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">

<div class="row m-3">
<h1>Data Anggota</h1>
</div>
<div class="row m-3">
<table id="anggota" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>No WA</th>
                <th>Jenis Kelamin</th>
                <th>Jurusan</th>
                <th>Program Studi</th>
                <th>Kelas</th>
                <th>Angkatan</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Golongan Darah</th>
                <th>Alamat</th>
                <th>Anak Ke</th>
                <th>Ayah</th>
                <th>Ibu</th>
                <th>Pekerjaan Ayah</th>
                <th>Pekerjaan Ibu</th>
                <th>Status Tinggal</th>
                <th>Status Kelas</th>
                <th>Rohis</th>
                <th>Liqo</th>
                <th>Organisasi</th>
                <th>Hobi</th>
                <th>Email</th>
                <th>Status Pendidikan</th>
                <th>Alasan Bergabung</th>
                <th>Minat dan Bakat</th>
                <th>Divisi Pilihan 1</th>
                <th>Alasan Divisi Pilihan 1</th>
                <th>Divisi Pilihan 2</th>
                <th>Alasan Divisi Pilihan 2</th>
            </tr>
        </thead>
    </table>
</div>

<?php require_once 'app/views/parts/mainjs.php'; ?>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://siap.karismapolsri.com/lib/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>

<script>
    $(function() {
        var columns = [];
        for(let i = 0; i < $('#table thead tr th').length-1; i++){
        columns[i]= i+1;
        }

        $("#anggota").DataTable({
            "ajax": 'anggota/biodata',
            "dom": 'lBfrtip',
            "order": [[ 1, 'asc' ]],
            "scrollX": true,
            "buttons": [
                {
                    extend: 'excelHtml5',
                    text: 'Download Excel',          
                    title: 'Rekap Data Anggota',
                    sheetName: 'Rekap Data Anggota',
                    className: 'btn btn-info btn-sm mx-2'
                    // exportOptions: {
                    //     columns: columns
                    // }
                }
            ],
            "columns": [
                { "data": "nim" },
                { "data": "nama" },
                { "data": "wa" },
                { "data": "jk" },
                { "data": "jurusan" },
                { "data": "prodi" },
                { "data": "kelas" },
                { "data": "angkatan" },
                { "data": "tempat_lahir" },
                { "data": "tanggal_lahir" },
                { "data": "goldar" },
                { "data": "alamat" },
                { "data": "anak_ke" },
                { "data": "ayah" },
                { "data": "ibu" },
                { "data": "kerja_ayah" },
                { "data": "kerja_ibu" },
                { "data": "status_tinggal" },
                { "data": "status_kelas" },
                { "data": "rohis" },
                { "data": "liqo" },
                { "data": "organisasi" },
                { "data": "hobi" },
                { "data": "email" },
                { "data": "status_pendidikan" },
                { "data": "alasan_gabung" },
                { "data": "minat_bakat" },
                { "data": "div1" },
                { "data": "alasan_div1" },
                { "data": "div2" },
                { "data": "alasan_div2" }
            ],
            // "columnDefs": [ {
            //     "targets": 0,
            //     "data": "2",
            //     "render": function ( data, type, row, meta ) {
            //     return '<span class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-hapus" data-hapus="'+data+'"><i class="fa fa-trash" aria-hidden="true"></i></span>';
            //     }
            // } ]
            "columnDefs": [ 
                {"targets": 3,
                "render": function ( data, type, row, meta ) {
                    if(data==0) return 'Perempuan';
                    if(data==1) return 'Laki-Laki';
                    } 
                },
                {"targets": 17,
                "render": function ( data, type, row, meta ) {
                    if(data==0) return 'Merantau';
                    if(data==1) return 'Tidak Merantau';
                    }
                },
                {"targets": 18,
                "render": function ( data, type, row, meta ) {
                    if(data==0) return 'Pagi';
                    if(data==1) return 'Siang';
                    if(data==2) return 'Malam';
                    }
                },
                {"targets": 19,
                "render": function ( data, type, row, meta ) {
                    if(data==0) return 'Tidak Pernah';
                    if(data==1) return 'Pernah';
                    }
                },
                {"targets": 20,
                "render": function ( data, type, row, meta ) {
                    if(data==0) return 'Tidak Pernah';
                    if(data==1) return 'Pernah';
                    }
                },
                {"targets": 24,
                "render": function ( data, type, row, meta ) {
                    if(data==0) return 'Lainnya';
                    if(data==1) return 'Bidik Misi';
                    if(data==2) return 'Beasiswa KIP';
                    }
                }
            ]
        });

        $('.buttons-excel').removeClass('dt-button');
    });
</script>