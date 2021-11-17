<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/stylesepatu.css">
    <title>Hasil Pemesanan</title>
</head>
<body bgcolor="#5EB4AE">
<!-- Container -->
    <div class="container">
        <div class="post-container">
            <center> 
                <legend>Output Pemesanan</legend>
                <table>
                    <tr>
                        <th>Nama Pembeli</th>
                        <td> : </td>
                        <td>
                            <?= $nama; ?>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <th>Nomer HP Pembeli</th>
                        <td> : </td>
                        <td>
                            <?= $nohp; ?>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <th>Merek Sepatu</th>
                        <td> : </td>
                        <td>
                            <?= $merk; ?>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <th>Size</th>
                        <td> : </td>
                        <td>
                            <?= $ukuran; ?>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <th>Harga</th>
                        <td> : </td>
                        <td>
                            <?= $harga; ?>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td colspan="3" align="center">
                            <hr>
                            <a href="<?= base_url('Coba'); ?>" type="button">Kembali</a>
                        </td>
                    </tr>
                </table>
            </center>
        </div>
    </div>
</body>
</html>