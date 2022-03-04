<?php 
    $ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
    $ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
    $ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
    $ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
?>


<div class="container pt-5">
<h1 align="center">Daftar Nilai Siswa</h1>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <div class="row">
       
        <div class="table-responsive" id="sailorTableArea">
            <table id="sailorTable" class="table table-striped" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>UTS</th>
                        <th>UAS</th>
                        <th>Tugas</th>
                        <th>Nilai Akhir</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $nomor = 1; 
                foreach($ar_nilai as $ns){
                    echo '<tr><td>'.$nomor.'</td>';
                    echo '<td>'.$ns['nim'].'</td>';
                    echo '<td>'.$ns['uts'].'</td>';
                    echo '<td>'.$ns['uas'].'</td>';
                    echo '<td>'.$ns['tugas'].'</td>';
                    $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
                    echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                    echo '<tr/>';
                    $nomor++;
                }
                ?> 
                </tbody>
            </table>
            </div>
            </div>
    </div>
</div>
