<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Update Jenis</title> 
    <style> 
        label { 
            display: inline-block; 
            width: 100px; 
        } 
        
    </style> 
</head> 
    <body> 
    <h1>Update Barang</h1> 

    <form action="<?php echo site_url('jenis/prosesUpdate/'.$jenis->id_jenis); ?>" method="post">
    <label>ID Jenis</label><input type="text" name="id_jenis" readonly value="<?php echo $jenis->id_jenis; ?>"><br> 
    <label>Nama Jenis</label><input type="text" name="nama_jenis" value="<?php echo $jenis->nama_jenis; ?>"><br>
    <label>Deskripsi</label><input type="text" name="deskripsi" value="<?php echo $jenis->deskripsi; ?>"><br> 
    <input type="submit" value="Update"> 
</form> 
</body>
