<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <title>Tambah Jenis</title> 
        <style> 
            label { 
            display: inline-block; 
            width: 100px; 
            } 
        </style> 
    </head> 
    <body> 
        <h1>Tambah Jenis</h1> 
        <form action="<?php echo site_url('Jenis/prosesTambah'); ?>" method="post"> 
            <label>ID Jenis</label><input type="text" name="id_jenis"><br>
            <label>Nama Jenis</label><input type="text" name="nama_jenis"><br>
            <label>Deskripsi</label><input type="text" name="deskripsi"><br>
            <input type="submit" value="Tambah"> 
        </form> 
    </body> 
</html>


