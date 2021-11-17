<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/stylesepatu.css">
    <title>Pertemuan 7</title>
</head>
<body bgcolor="#5EB4AE">
<!-- Container -->
<div class="container">
    <div class="post-container"> 
        <center> 
            <h2>Pembelian SSepatu</h2>
            <form action="<?= base_url();?>"method="POST"> 
                <table>
                    <br>
                    <tr>
                        <th>Nama Pembeli</th>
                        <td> : </td>
                        <td> 
                            <input type="text" name="nama" id="nama" placeholder="isi nama anda">
                        </td>
                    </tr>
                    
                    <tr>
                        <th>No HP</th>
                        <td> : </td>
                        <td> 
                            <input type="text" name="nohp" id="nohp" placeholder="isi nomer anda">
                        </td>
                    </tr>

                    <tr> 
                        <th>Merk Sepatu</th>
                        <td> : </td>
                        <td>
                            <select name="merk" id="merk">
                                <option>    Pilih Sepatu    </option>
                                <?php foreach($merk as $m) : ?>
                                    <option value="<?=$m ?>"><?=$m ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th>Size Sepatu</th>
                        <td> : </td>
                        <td>
                            <select name="ukuran" id="ukuran">
                                <option>    Pilih Size  </option>
                                <?php for($i = 32; $i <=44; $i ++) : ?>
                                    <option value="<?=$i ?>"><?=$i ?></option>
                                <?php endfor; ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3" align="center">
                            <hr>
                            <button type="submit" class="btn btn-success btn-user btn-block">Submit</button>
                        </td>
                    </tr>
                
                </table>
            </form>
        </center>
    </div>
</div>   
</body>
</html>