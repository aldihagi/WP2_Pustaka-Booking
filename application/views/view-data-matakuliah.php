<html>
    <head> 
        <title>Tampilan Data Matakuliah</title>
    </head>

<body>
    <center> 
        <table> 
            <tr> 
                <th colpan="3">
                    Tampilan Data Mata kuliah
                </th>
            </tr>
            <tr> 
                <td colspan="3"> 
                    <hr>
                </td>
            </tr>
            <tr> 
                <th>KODE MTK</th>
                <th>:</th>
                <td>
                    <?= $kode; ?>
                </td>
            </tr>
            <tr> 
                <th>NAMA MTK</th>
                <th>:</th>
                <td> 
                    <?= $nama; ?>
                </td>
            </tr>
            <tr> 
                <th>SKS</th>
                <th>:</th>
                <td> 
                    <?= $sks; ?>
                </td>
            </tr>
            <tr> 
                <td colspan="3" align="center">
                    <a href="<?= base_url('matakuliah')?>">kembali</a>
                </td>
            </tr>
        </teble>
    </center>
</body>

</html>