<h2>Hasil Pemeriksaan</h2>

<table border="1" width="100%" border="1">
    <tr>
        <th>Nama</th>
        <th>Umur</th>
        <th>Gender</th>
        <th>Hasil</th>
    </tr>
    <tr>
        <td><?= $nama; ?></td>
        <td><?= $usia; ?></td>
        <td><?= $gender?></td>
        <td>
            Berat Badan: <?= $berat_badan; ?> Kg<br/>
            Tekanan Darah: <?= $tekanan_darah; ?> mmHg<br/>
            <?php 
                if($tekanan_darah > 120){
                    echo "Tekanan Darah Tinggi";
                }else{
                    echo "Tekanan Darah Normal";
                }
            ?>
        </td>
    </tr>
</table>